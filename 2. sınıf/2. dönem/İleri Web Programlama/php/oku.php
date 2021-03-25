<?php

if (!isset($_GET['id']) || empty($_GET['id'])){
    header('Location:index.php');
    exit;
}

$sorgu = $db->prepare('SELECT * FROM dersler
WHERE id = ? && onay = 1');
$sorgu->execute([
    $_GET['id']
]);
$ders = $sorgu->fetch(PDO::FETCH_ASSOC);

if (!$ders){
    header('Location:index.php');
    exit;
}

?>

<h3><?php echo $ders['baslik'] ?></h3>

<div>
    <strong>Yayın Tarihi: </strong> <?php echo $ders['tarih'] ?> <hr>
    <?php echo nl2br($ders['icerik']) ?>
</div>