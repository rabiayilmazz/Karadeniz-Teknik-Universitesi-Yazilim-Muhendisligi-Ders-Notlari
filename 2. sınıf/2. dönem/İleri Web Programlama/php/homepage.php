<h3>Ders Listesi</h3>

<form action="" method="get">
    <input type="text" class="tarih" name="baslangic" value="<?php echo isset($_GET['baslangic']) ? $_GET['baslangic'] : '' ?>" placeholder="Başlangıç Tarihi">
    <input type="text" class="tarih" name="bitis" value="<?php echo isset($_GET['bitis']) ? $_GET['bitis'] : '' ?>" placeholder="Bitiş Tarihi"> <br>
    <input type="text" value="<?php echo isset($_GET['arama']) ? $_GET['arama'] : '' ?>" name="arama" placeholder="Derslerda ara..">
    <button type="submit">Arama</button>
</form>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
$('.tarih').datepicker({
    dateFormat: 'yy-mm-dd'
});
</script>

<?php

// select * from TABLO_ADİ
// INNER JOIN tablo_adi ON tablo_adi.id = tablo_adi.id
// query
// - fetch() - fetchAll()
// prepare-execute

$where = [];
$sql = 'SELECT dersler.id, dersler.baslik, GROUP_CONCAT(kategoriler.ad) as kategori_adi, GROUP_CONCAT(kategoriler.id) as kategori_id, dersler.onay FROM dersler
INNER JOIN kategoriler ON FIND_IN_SET(kategoriler.id, dersler.kategori_id)';
if (isset($_GET['arama']) && !empty($_GET['arama'])){
    $where[] = '(dersler.baslik LIKE "%' . $_GET['arama'] . '%" || dersler.icerik LIKE "%' . $_GET['arama'] . '%")';
}
if (isset($_GET['baslangic']) && !empty($_GET['baslangic']) && isset($_GET['bitis']) && !empty($_GET['bitis'])){
    $where[] = 'dersler.tarih BETWEEN "' . $_GET['baslangic'] . ' 00:00:00" AND "' . $_GET['bitis'] . ' 23:59:59"';
}
if (count($where) > 0){
    $sql .= ' WHERE ' . implode(' && ', $where);
}
$sql .= ' GROUP BY dersler.id
ORDER BY dersler.id DESC';

$dersler = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);

/*
$sorgu = $db->prepare('SELECT * FROM dersler WHERE id = ?');
$sorgu->execute([
    3
]);
$dersler = $sorgu->fetch(PDO::FETCH_ASSOC);
*/

?>

<?php if ($dersler): ?>
    <ul>
        <?php foreach ($dersler as $ders): ?>
            <li>
                <?php echo $ders['baslik'] ?>
                <?php 
                $kategoriAdlari = explode(',', $ders['kategori_adi']);
                $kategoriIdleri = explode(',', $ders['kategori_id']);
                foreach ($kategoriAdlari as $key => $val){
                    echo '<a href="index.php?sayfa=kategori&id=' . $kategoriIdleri[$key] . '">' . $val . '</a> ';
                }
                ?>
                <div>
                    <?php if ($ders['onay'] == 1): ?>
                        <a href="index.php?sayfa=oku&id=<?php echo $ders['id'] ?>">[OKU]</a>
                    <?php endif; ?>
                    <a href="index.php?sayfa=guncelle&id=<?php echo $ders['id']?>">[DÜZENLE]</a>
                    <a href="index.php?sayfa=sil&id=<?php echo $ders['id']?>">[SİL]</a>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <div>
        <?php if (isset($_GET['arama'])): ?>
            Aradığınız kriterlere uygun ders bulunamadı!
        <?php else: ?>
            Henüz eklenmiş ders bulunmuyor!
        <?php endif; ?>
    </div>
<?php endif; ?>