<?php

if (!isset($_GET['id']) || empty($_GET['id'])){
    header('Location:index.php?sayfa=kategoriler');
    exit;
}

$sorgu = $db->prepare('SELECT * FROM kategoriler
WHERE id = ?');
$sorgu->execute([
    $_GET['id']
]);
$kategori = $sorgu->fetch(PDO::FETCH_ASSOC);

if (!$kategori){
    header('Location:index.php?sayfa=kategoriler');
    exit;
}

// kategoriye ait dersleri çekelim
$sorgu = $db->prepare('SELECT * FROM dersler
WHERE FIND_IN_SET(?, kategori_id)
ORDER BY id DESC');
$sorgu->execute([
    $kategori['id']
]);
$dersler = $sorgu->fetchAll(PDO::FETCH_ASSOC);

?>

<h3><?php echo $kategori['ad'] ?> Kategorisi</h3>

<?php if ($dersler): ?>

    <ul>
        <?php foreach ($dersler as $ders): ?>
            <li>
                <?php echo $ders['baslik'] ?>
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

    Bu kategoriye ait ders bulunmuyor!

<?php endif; ?>