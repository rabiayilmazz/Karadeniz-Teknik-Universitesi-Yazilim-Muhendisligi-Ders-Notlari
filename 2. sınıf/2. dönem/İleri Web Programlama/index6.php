<?php
try
{
if(@mysqli_connect("localhost","root",""))
	echo "Veritabanına Bağlanıldı";
else
	throw new Exception("Veritabanı Sunucusuna Bağlanılamadı");
}
catch (Exception $e)
{
	echo $e->getMessage();
}

echo "<br/><br/>";

class BaglantiHatasi extends Exception {}
class VeritabaniHatasi extends Exception {}
try
{
	$baglanti=@mysqli_connect("localhost","root","");
	if($baglanti)
		echo "Veritabanı Sunucusuna Bağlanıldı<br/>";
	else
	throw new BaglantiHatasi("Link Down");
    if(mysqli_select_db($baglanti,"okul"))
		echo "Veritabanı Seçildi<br/>";
	else
		throw new VeritabaniHatasi("Vt down");
}
catch(BaglantiHatasi $e)
{
	echo $e->getMessage();
//	echo "Veritabanı Sunucusuna Bağlanılamadı<br/>";
}
catch(VeritabaniHatasi $e)
{
	echo $e->getMessage();
	// echo "Veritabanı Seçilemedi<br/>";
}

?>