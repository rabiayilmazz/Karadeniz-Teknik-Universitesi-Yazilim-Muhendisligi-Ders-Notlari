<?php

$rakam=8;
if($rakam==8)
	echo "Sayımız 8 'dir <br />";
if($rakam==9)
	echo "Sayımız 9 'dur <br />";
if($rakam!=9)
	echo "Sayımız 9 Değildir <br />";
$sayi=6;
if($rakam==$sayi)
	echo "Rakamlar Eşittir <br />";
else
	echo "Rakamlar Eşit Değildir <br />";

/*$doparameter=$_GET["do"];

if($doparameter=="Record")
	echo "Veritabanına Kayıt <br />";
else
	echo "Formu Göster <br />";*/

$sayimiz=4;
if($sayimiz<4)
	echo "Sayimiz 4 ten Küçüktür<br />";
else if ($sayimiz>4)
	echo "Sayimiz 4 ten Büyüktür<br />";
else
	echo "Sayimiz 4 tür<br />";

echo "Bugün: ";

if(date("l")=="Monday")
	echo "Pazartesi<br/>";
if(date("l")=="Tuesday")
	echo "Salı<br/>";
if(date("l")=="Wednesday")
	echo "Çarşamba<br/>";
if(date("l")=="Thursday")
	echo "Perşembe<br/>";
if(date("l")=="Friday")
	echo "Cuma<br/>";
if(date("l")=="Saturday")
	echo "Cumartesi<br/>";
if(date("l")=="Sunday")
	echo "Pazar<br/>";


$ay=date("m");
echo "Aylardan: ";
switch($ay)
{
	case "01":echo "Ocak";break;
	case "02":echo "Şubat";break;
	case "03":echo "Mart";break;
	case "04":echo "Nisan";break;
	default: echo "Zodyak";break;
}
?>