<?php

$db = new PDO('mysql:host=localhost;dbname=sayfalama','root','root');

// limit
$limit = 10;

// baslangic
$baslangic = isset($_GET['baslangic']) && is_numeric($_GET['baslangic']) && $_GET['baslangic'] > -1 ? $_GET['baslangic'] : 0;

if ($baslangic % $limit !== 0){
    header('Location:index.php');
}

$sorgu = $db->query('SELECT * FROM test ORDER BY id DESC LIMIT ' . $baslangic . ',' . $limit)->fetchAll(PDO::FETCH_ASSOC);

if (!$sorgu){
    header('Location:index.php?baslangic=' . ($baslangic - $limit) . '&son=1');
}

foreach ($sorgu as $veri){
    echo $veri['id'] . '<br>';
}

if ($baslangic > 0){
    echo '<a href="index.php?baslangic=' . ($baslangic - $limit) . '">Önceki Sayfa</a>';
}
if (!isset($_GET['son'])){
    echo '<a href="index.php?baslangic=' . ($baslangic + $limit) . '">Sonraki Sayfa</a>';
}