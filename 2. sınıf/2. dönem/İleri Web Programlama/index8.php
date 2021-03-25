<?php
$kitaplar[]="PHP";
$kitaplar[]="Web Tasarım";
$kitaplar[]="Dreamweaver";

print_r($kitaplar);

echo "<pre>";
print_r($kitaplar);
echo "</pre>";

$meyveler[1]="Elma";
$meyveler[2]="Portakal";
$meyveler[3]="Muz";

echo "<pre>";
print_r($meyveler);
echo "</pre>";

$sebzeler["sebze1"]="havuç";
$sebzeler["sebze2"]="ıspanak";
$sebzeler["sebze3"]="pırasa";

echo "<pre>";
print_r($sebzeler);
echo "</pre>";

$hayvanlar=array("at","köpek","fil");

echo "<pre>";
print_r($hayvanlar);
echo "</pre>";

$hayvanlar=array(1=>"at",2=>"köpek",3=>"fil");
$hayvanlar[]="kedi";
$hayvanlar[]="atmaca";

print_r($hayvanlar);
echo "<pre>";
print_r($hayvanlar);
echo "</pre>";

echo "Dizinin Birinci Elemanı ".$hayvanlar[1]."<br/>";
echo "Dizinin İkinci Elemanı ".$hayvanlar[2]."<br/>";
echo "Dizinin Üçüncü Elemanı ".$hayvanlar[3]."<br/>";
echo "Dizinin Dördüncü Elemanı ".$hayvanlar[4]."<br/>";
echo "Dizinin Beşinci Elemanı ".$hayvanlar[5]."<br/>";
echo "Dizinin Altıncı Elemanı ".$hayvanlar[6]."<br/>"; //bu eleman yok

echo "<pre>";
print_r(array_keys($hayvanlar));
echo "</pre>";
echo "<pre>";
print_r(array_keys($sebzeler));
echo "</pre>";
echo "<pre>";
print_r(array_keys($kitaplar));
echo "</pre>";

echo "<pre>";
print_r(array_values($hayvanlar));
echo "</pre>";
echo "<pre>";
print_r(array_values($sebzeler));
echo "</pre>";
echo "<pre>";
print_r(array_values($kitaplar));
echo "</pre>";

$bilgisayar=array(1=>"HP",2=>"Lenovo",3=>"Casper");
$firma="IBM";

echo  "$bilgisayar[1]";
echo "<br/>";

if(is_array($bilgisayar))
	echo "\$bilgisayar değişkeni dizidir<br/>";
else
	echo "\$bilgisayar değişkeni dizi değildir<br/>";


if(is_array($firma))
	echo '$firma değişkeni dizidir<br/>';
else
	echo '$firma değişkeni dizi değildir<br/>';


//dizideki değer sayısı

echo '$kitaplar Dizisindeki Değer Sayısı '.count($kitaplar).'<br/>';
echo '$hayvanlar Dizisindeki Değer Sayısı '.count($hayvanlar).'<br/>';

//dizide anahtar olarak tanımlımı

if(array_key_exists('0',$hayvanlar))
	echo '0 dizide key olarak vardır<br/>';
else
	echo '1 dizide key olarak yoktur<br/>';

if(array_key_exists('4',$bilgisayar))
	echo '4 dizide key olarak vardır<br/>';
else
	echo '4 dizide key olarak yoktur<br/>';

//diziden değer silme

echo '<pre>';
print_r($hayvanlar);
echo '</pre>';
unset($hayvanlar[3]);
echo '<pre>';
print_r($hayvanlar);
echo '</pre>';

echo "<pre>";
print_r(array_keys($hayvanlar));
echo "</pre>";
// değer ile anahtarların yer değiştirmesi

echo '<pre>';
print_r($bilgisayar);
echo '</pre>';
$yenidizi=array_flip($bilgisayar);
echo '<pre>';
print_r($yenidizi); //print_r(array_flip($bilgisayar));
echo '</pre>';


//diziyi tersten sıralama
echo '<pre>';
print_r($meyveler);
echo '</pre>';
$meyveler1=array_reverse($meyveler);
echo '<pre>';
print_r($meyveler1); 
echo '</pre>';


//dizi birleştirme

$dizibirlesimi1=array_merge($meyveler,$kitaplar,$hayvanlar,$sebzeler);
echo '<pre>';
print_r($dizibirlesimi1);
echo '</pre>';

$eklenecekdizi[25]="Merhaba";

$dizibirlesimi2=array_merge($meyveler,$sebzeler,$kitaplar,$hayvanlar,$eklenecekdizi);
echo '<pre>';
print_r($dizibirlesimi2);
echo '</pre>';

echo '<pre>';
print_r(array_keys($dizibirlesimi2));
echo '</pre>';



//diziyi doldurmak
$isim=array(1=>"Fatma",2=>"Ali",3=>"Hasan",4=>"Zehra");
$isim=array_pad($isim,50,"Mehmet");
echo '<pre>';
print_r($isim);
echo '</pre>';

$kusisimleri=array(1=>"Çaylak",2=>"Kerkenez",3=>"Kartal",4=>"Doğan");
$kusisimleri=array_pad($kusisimleri,-8,"Şahin");
echo '<pre>';
print_r($kusisimleri);
echo '</pre>';


$balıkisimleri=array(1=>"Balina",2=>"Yunus",3=>"Hamsi",4=>"İstavrit");
$balıkisimleri=array_pad($balıkisimleri,3,"Palamut");
echo '<pre>';
print_r($balıkisimleri);
echo '</pre>';

//parça çıkarma
$derskitap=array(1=>"PHP",2=>"Web Tasarım",3=>"Dreamveawer",4=>"Oracle",5=>"SQL Server");
$derskitap1=array_slice($derskitap,2);
echo '<pre>';
print_r($derskitap1);
echo '</pre>';

$derskitap2=array_slice($derskitap,2,2);
echo '<pre>';
print_r($derskitap2);
echo '</pre>';


//hangi değerden kaç tane var
$adlar=array(1=>"Ahmet",2=>"Hasan",3=>"Ahmet",4=>"Hasan",5=>"Ahmet Hasan");
echo '<pre>';
print_r(array_count_values($adlar));
echo '</pre>';

//dizi indisi karakter büyüt
echo '<pre>';
print_r($adlar);
echo '</pre>';
$adlar=array_flip($adlar);
echo '<pre>';
print_r($adlar);
echo '</pre>';
$adlar1=array_change_key_case($adlar,CASE_UPPER);
echo '<pre>';
print_r(array_keys($adlar1));
echo '</pre>';

//diziye değer ekleme
array_push($derskitap,"C++","Java","C#","Fortran");
echo '<pre>';
print_r($derskitap);
echo '</pre>';

array_push($adlar,"Cemal","Ziya");
echo '<pre>';
print_r($adlar);
echo '</pre>';

// dizinin son değerini silme
array_pop($adlar);
echo '<pre>';
print_r($adlar);
echo '</pre>';

//dizinin ilk değerini silme
array_shift($adlar);
echo '<pre>';
print_r($adlar);
echo '</pre>';

//dizinin başına değer ekleme
array_unshift($adlar,"Deniz","Şeyma","Kadir","Veysel");
echo '<pre>';
print_r($adlar);
echo '</pre>';

//A 'dan Z'ye sıralama
asort($adlar);
echo '<pre>';
print_r($adlar);
echo '</pre>';

//A 'dan Z'ye sıralama
asort($adlar,SORT_STRING);
echo '<pre> STRING PARAMETRESİYLE<br/>';
print_r($adlar);
echo '</pre>';

//Z'den A'ya sıralama
arsort($adlar);
echo '<pre>';
print_r($adlar);
echo '</pre>';

//Anahtara Göre A'dan Z'ye sıralama

$diziornegi=array(15=>"Merhaba",2=>"Selam",87=>"Saygılar");
ksort($diziornegi);
echo '<pre>';
print_r($diziornegi);
echo '</pre>';

krsort($diziornegi);
echo '<pre>';
print_r($diziornegi);
echo '</pre>';

//dizi birleştirme (indis atamalı)
$dizibirlestirme=array_combine($sebzeler,$meyveler);
echo '<pre>';
print_r($dizibirlestirme);
echo '</pre>';

//diziler arasındaki farkı bulma
$kitaplar1=array(1=>"PHP",2=>"C++",3=>"Java",4=>"Web Tasarım");
$sonuc=array_diff($kitaplar,$kitaplar1);
echo '<pre>';
print_r($sonuc);
echo '</pre>';

//anahtarları ve değerleri esas alarak farkı bulma

$kitaplar2=array(1=>"PHP",2=>"C++",3=>"Java",4=>"Web Tasarım");
$sonuc=array_diff_assoc($kitaplar,$kitaplar2);
echo '<pre>';
print_r($sonuc);
echo '</pre>';

$kitaplar3=array(0=>"PHP",1=>"C++",2=>"Java",3=>"Web Tasarım");
$sonuc=array_diff_assoc($kitaplar,$kitaplar3);
echo '<pre>';
print_r($sonuc);
echo '</pre>';

//diziye otomatik değer atama
$kitaplar=array_fill(3,5,"Android");
echo '<pre>';
print_r($kitaplar);
echo '</pre>';

$kitaplar=array_merge($kitaplar,array_fill(3,5,"Android"));
echo '<pre>';
print_r($kitaplar);
echo '</pre>';

//dizi elemanları çarpımı
$sayisaldizi=array(1,4,8,3); //string dönüştürmesi de yapabilir
echo array_product($sayisaldizi)."<br/>";

//dizi değerleri toplamı
$sayisaldizi=array(1,4,8,3); //string dönüştürmesi de yapabilir
echo array_sum($sayisaldizi)."<br/>";

//diziden rastgele değer seçme
echo $sayisaldizi[array_rand($sayisaldizi,1)]."<br/>";

$rand_keys = array_rand($sayisaldizi, 2);
echo $sayisaldizi[$rand_keys[0]]."<br/>";
echo $sayisaldizi[$rand_keys[1]]."<br/>";
//list komutu
list($kitap1,$kitap2,$kitap3,$kitap4)=$kitaplar3;
echo $kitap1."|".$kitap2."|".$kitap3."|".$kitap4;

?>

