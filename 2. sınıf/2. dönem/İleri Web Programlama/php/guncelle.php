<?php

// UPDATE tablo_adi SET kol1 = değer1 WHERE kol = değ

if (!isset($_GET['id']) || empty($_GET['id'])){
    header('Location:index.php');
    exit;
}

$sorgu = $db->prepare('SELECT * FROM dersler
WHERE id = ?');
$sorgu->execute([
    $_GET['id']
]);
$ders = $sorgu->fetch(PDO::FETCH_ASSOC);

if (!$ders){
    header('Location:index.php');
    exit;
}
$dersKategoriler = explode(',', $ders['kategori_id']);

$kategoriler = $db->query('SELECT * FROM kategoriler ORDER BY ad ASC')->fetchAll(PDO::FETCH_ASSOC);

if (isset($_POST['submit'])){

    $baslik = isset($_POST['baslik']) ? $_POST['baslik'] : $ders['baslik'];
    $icerik = isset($_POST['icerik']) ? $_POST['icerik'] : $ders['icerik'];
    $onay = isset($_POST['onay']) ? $_POST['onay'] : 0;
    $kategori_id = isset($_POST['kategori_id']) && is_array($_POST['kategori_id']) ? implode(',', $_POST['kategori_id']) : null;

    if (!$baslik){
        echo 'Başlık ekleyin!';
    } elseif (!$icerik){
        echo 'İçeriği belirleyin!';
    } elseif (!$kategori_id){
        echo 'Kategori seçin!';
    } else {

        $sorgu = $db->prepare('UPDATE dersler SET
        baslik = ?,
        icerik = ?,
        onay = ?,
        kategori_id = ?
        WHERE id = ?');
        $guncelle = $sorgu->execute([
            $baslik, $icerik, $onay, $kategori_id, $ders['id']
        ]);
        
        if ($guncelle){
            header('Location:index.php?sayfa=oku&id=' . $ders['id']);
        } else {
            echo 'Güncelleme işlemi başarısız!';
        }

    }

}

/*
$sorgu = $db->prepare('UPDATE dersler SET
baslik = ?,
icerik = ?,
onay = ?
WHERE id = ?');
$guncelle = $sorgu->execute([
    'yeni başlık', 'yeni içerik', 1, 3
]);

if ($guncelle){
    echo 'Güncelleme işlemi başarılı!';
} else {
    echo 'Güncelleme işlemi başarısız!';
}
*/

?>

<form action="" method="post">

    Başlık: <br>
    <input type="text" value="<?php echo isset($_POST['baslik']) ? $_POST['baslik'] : $ders['baslik'] ?>" name="baslik"> <br> <br>

    İçerik: <br>
    <textarea name="icerik" cols="30" rows="10"><?php echo isset($_POST['icerik']) ? $_POST['icerik'] : $ders['icerik'] ?></textarea> <br> <br>

    Kategori: <br>
    <select name="kategori_id[]" multiple size="5">
        <?php foreach($kategoriler as $kategori): ?>
            <option <?php echo in_array($kategori['id'], $dersKategoriler) ? ' selected' : '' ?> value="<?php echo $kategori['id'] ?>"><?php echo $kategori['ad'] ?></option>        
        <?php endforeach; ?>
    </select> <br> <br>

    Onay: <br>
    <select name="onay">
        <option <?php echo $ders['onay'] == 1 ? ' selected' : '' ?> value="1">Onaylı</option>
        <option <?php echo $ders['onay'] == 0 ? ' selected' : '' ?> value="0">Onaylı Değil</option>
    </select> <br> <br>

    <input type="hidden" name="submit" value="1">   
    <button type="submit">Güncelle</button>

</form>