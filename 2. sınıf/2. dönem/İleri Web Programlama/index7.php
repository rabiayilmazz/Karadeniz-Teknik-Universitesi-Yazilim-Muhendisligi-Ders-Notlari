<?php
$do="Kaydet";
if(isset($do))
	echo "Do için Değişken Tanımlandı ve Değer Atandı<br/>";
$ro;
if(isset($ro))
	echo "Ro İçin Değişken Tanımlandı Değer Atanmadı<br/>";
else
	echo "Ro İçin Isset False Döndürdü, İçerik Atanmayan Değişken İçin<br/>";

if(isset($po))
	echo "Po İçin Değişken Tanımlanmadı<br/>";
else
	echo "Po İçin Isset False Döndürdü, Değişken tanımlı değil<br/>";

$bos;
if(empty($bos))
	echo "Boş Değişken İçeriği Boş<br/>";
else 
	echo "Boş Değişkenin İçeriği Dolu<br/>";

$dolu="dolu";
if(empty($dolu))
	echo "Dolu Değişken İçeriği Boş<br/>";
else 
	echo "Dolu Değişkenin İçeriği Dolu<br/>";

if(empty($po))
	echo "Po İçin Değişken Tanımlanmadı<br/>";
else
	echo "Po İçin Empty False Döndürdü, Değişken tanımlı değil<br/>";

$kitap="PHP";
echo $kitap."<br/>";
//unset($kitap);
echo $kitap;
if(empty($kitap))
	echo "Kitap Değişkeni İçeriği Boş<br/>";
else 
	echo "Kitap Değişkenin İçeriği Dolu<br/>";
if(isset($kitap))
	echo "Kitap değişkeni tanımlı ve içeriği var<br/>";
else 
	echo "Kitap Değişkeni İçeriği Boş veya Tanımlanmamış<br/>";

$makaleid=12;
$yazidi="12";

if(is_int($makaleid))
	echo "makaleid sayıdır<br/>";
else
	echo "makaleid sayı değildir<br/>";

if(is_int($yazidi))
	echo "yazidi sayıdır<br/>";
else
	echo "yazidi sayı değildir<br/>";

if(is_string($makaleid))
	echo "makaleid stringdir<br/>";
else
	echo "makaleid string değildir<br/>";

if(is_string($yazidi))
	echo "yazidi stringdir<br/>";
else
	echo "yazidi string değildir<br/>";



?>