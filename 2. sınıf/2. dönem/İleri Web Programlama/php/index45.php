<?php

// veritabanı bağlantısı
$db = new PDO('mysql:host=localhost; dbname=sayfalama', 'root', 'root');

// limit (sayfa içinde kaç veri gözükecek)
$limit = 5;

// sayfa sayısı (kaçıncı sayfa)
$sayfa = isset($_GET['sayfa']) && is_numeric($_GET['sayfa']) ? $_GET['sayfa'] : 1;
if ($sayfa <= 0){
    $sayfa = 1;
}

// toplam veri
$toplamVeri = $db->query('SELECT count(id) as toplam FROM test')->fetch(PDO::FETCH_ASSOC)['toplam'];

// toplam sayfa sayısı
$toplamSayfa = ceil($toplamVeri / $limit);

// veriler kaçtan başlayacak
$baslangic = ($sayfa * $limit) - $limit;

// verileri listele
$sorgu = $db->query('SELECT * FROM test ORDER BY id DESC LIMIT ' . $baslangic . ',' . $limit)->fetchAll(PDO::FETCH_ASSOC);

foreach ($sorgu as $veri){
    echo $veri['ad'] . ' ' . $veri['id'] . '<br>';
}

$sol = $sayfa - 3;
$sag = $sayfa + 3;

if ($sayfa <= 3){
    $sag = 7;
}
if ($sag > $toplamSayfa){
    $sol = $toplamSayfa - 6;
}

// sayfaları listele
echo '<div class="sayfalama">';
echo '<a href="index.php?sayfa=' . ($sayfa > 1 ? $sayfa - 1 : 1) . '">Önceki</a>';
for ($i = $sol ; $i <= $sag; $i++){
    if ($i > 0 && $i <= $toplamSayfa){
        echo '<a ' . ($i == $sayfa ? ' class="aktif"' : '') . ' href="index.php?sayfa=' . $i . '">' . $i . '</a>';
    }
}
echo '<a href="index.php?sayfa=' . ($sayfa < $toplamSayfa ? $sayfa + 1 : $toplamSayfa) . '">Sonraki</a>';
echo '</div>';

?>

<style>
.sayfalama a {
    display: inline-block;
    padding: 10px;
    background: #eee;
    margin-right: 4px;
    color: #333;
    text-decoration: none;
}
.sayfalama a.aktif {
    background: #333;
    color: #fff;
}
</style>