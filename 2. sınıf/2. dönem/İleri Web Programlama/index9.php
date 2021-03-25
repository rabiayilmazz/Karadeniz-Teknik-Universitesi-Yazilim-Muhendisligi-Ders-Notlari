<?php
//strstr fonksiyonu

$ifade="Bu sene 2.sınıflar cok cazgir ornek beyza";
echo $ifade."<br/>";
$sonuc=strstr($ifade,"sınıflar");
echo "strstr1:".$sonuc."<br/>";

$sonuc=strstr($ifade,"sınıflar",true);
echo "strstr2:".$sonuc."<br/>";

//substr
$parca=substr($ifade,0,13);
echo "substr1:".$parca."<br/>";

$parca=substr($ifade,-11,5);
echo "substr2:".$parca."<br/>";


//mb_subtr
$ifade="Bu sene 2.sınıflar çok cazgır örnek beyza";
$parca=mb_substr($ifade,0,13,"UTF-8");
echo "mb_substr3:".$parca."<br/>";

//string pozisyonu
$kitap="Web Tasarım Kılavuzu";
if(($index=mb_strpos($kitap,"ıl",0,"UTF-8"))===false)
	echo "Aranan Eleman Bulunamadı"."<br>";
else
echo  $index."<br>";

//string ters pozisyonu
$kitap="Web Tasarım Kılavuzu";
if(($index=mb_strrpos($kitap,"a","UTF-8"))===false)
	echo "Aranan Eleman Bulunamadı"."<br>";
else
echo  $index."<br>";

//substr count bir string parçasının bir ifadenin içinde kaç defa geçtiğini bulur

$yazar="Erkan Balaban";
	echo "a ifadesi $yazar içinde kaç defa geçiyor:  ".substr_count($yazar,"a")."<br/>";
	
	
echo "a ifadesi 5. karakterden sonra $yazar içinde kaç defa geçiyor:  ".substr_count($yazar,"a",5)."<br/>";

echo "a ifadesi $yazar ifadesinde 5. karakterden itibaren 6 karakter içinde kaç defa geçiyor:  ".substr_count($yazar,"a",5,6)."<br/>";

//bir stringin uzunluğu bulma

echo "'$yazar' ifadesininin uzunluğu: ".strlen($yazar)."<br/>";
//stringin bir karakterden sonra geri kalan kısmını alma
$isim="Serkan Tasıncak";
echo strpbrk($isim,'a')."<br/>"; //upper case duyarlı
echo strpbrk($isim,'s')."<br/>";
echo strpbrk($isim,'as')."<br/>";

//wordwrap

$meyveler="armut kiraz vişne kavun";
echo wordwrap($meyveler,5,", ")."<br/>";


//str_replace
$film="The Fast and The Furious";
$ikinci_film=str_replace("The","Two",$film);
echo $ikinci_film."<br/>";

//hepsi büyük
echo mb_strtoupper($yazar)."<br/>";

//hepsi küçük
echo mb_strtolower($yazar)."<br/>";


//boşlukları atma

$ders=" PHP ";

echo "sol boşluğu sil_".ltrim($ders)."_geri kalan"."<br/>";
echo "sağ boşluğu sil_".rtrim($ders)."_geri kalan"."<br/>";
echo "her iki boşluğu sil_".trim($ders)."_<br/>";


//sadece stringin ilk harfini büyüt

$kitap="web tasarım kılavuzu";
echo ucfirst($kitap)."<br/>";


// bütün kelimeleri ilk harfini buyut
echo ucwords($kitap)."<br/>";


//sayı formatı
$toplamtutar=2567.35752145656322;
echo number_format($toplamtutar,2,","," ");
?>