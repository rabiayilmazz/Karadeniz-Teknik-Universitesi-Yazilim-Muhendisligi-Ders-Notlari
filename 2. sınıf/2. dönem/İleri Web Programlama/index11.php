<?php
echo '<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>';
touch("deneme.txt");
if(file_exists("deneme")==true)
	echo "Klasör var<br/>";
else
{
	mkdir("deneme");
	echo "Klasör yok oluşturuldu<br/>";
}

if(file_exists("deneme")==true)
{
	touch("deneme/deneme.txt"); 
	touch("deneme/selam.txt");
	echo "Dosya oluşturuldu<br/>";
}
else
echo "Klasör yok dosya oluşturulamadı.<br/>";

//dizin mi dosyamı kontrolü

if(is_file("deneme")) //true geri dönerse dosyadır
	echo "deneme dosyadır<br/>";
else
	echo "deneme dizindir<br/>";

if(is_file("deneme/deneme.txt")) //true geri dönerse dosyadır
	echo "deneme.txt dosyadır<br/>";
else
	echo "deneme.txt dizindir<br/>";

//dosya silme

if(unlink("deneme/deneme.txt")) //true geri dönerse dosya silinmiştir
  echo "dosya silindi.<br/>";
else
  echo "dosya silinemedi<br/>";


try
{
	if(@unlink("deneme/deneme.txt"))
		echo "basarılı<br/>";
	else
		throw new Exception("Dosya yok bu yüzden silinemedi<br/>");
}

catch (Exception $e)
{
  echo $e->getMessage();
}


//bir dosya okunabilirmi

if(is_readable("deneme.txt"))
	echo "deneme.txt dosyasını okuyabiliriz<br/>";
else
	echo "deneme.txt dosyasını okuyamayız<br/>";


if(is_readable("C:\bootmgr"))
	echo "bootmgr dosyasını okuyabiliriz<br/>";
else
	echo "bootmgr dosyasını okuyamayız<br/>";


if(is_writable("C:\bootmgr"))
	echo "bootmgr dosyasına yazabiliriz<br/>";
else
	echo "bootmgr dosyasına yazamayız<br/>";

//dosyaya bağlanma
$dosyamiz=fopen("deneme.txt","w+");
fputs($dosyamiz,"Kurmay Yüzbaşı Mustafa Kemal, mezuniyetinin ardından merkezi Şam'da bulunan 5.Ordu'ya staj amacıyla gönderildi. Bu stajında piyade, süvari ve topçu sınıflarında görev aldı. 1905-1907 yılları arasında Şam'da Lütfi Müfit Bey (Özdeş) 5. Ordu emrinde görev yaptı. İlk stajı 5. Ordu'ya bağlı 30'uncu Süvari Alayı'nda gerçekleşti.[31] Bu dönemde düşük rütbeli stajyer bir kurmay subay olarak Suriye'nin çeşitli bölgelerindeki isyanlarla ilgilenen Mustafa Kemal, 'küçük savaş' (gerilla savaşı) üzerine tecrübe kazandı. İsyanlarla uğraştığı dört aydan sonra Şam'a döndü. 1906 Ekim ayında Binbaşı Lütfi Bey, Dr. Mahmut Bey, Lüfti Müfit (Özdeş) Bey ve askerî tabip Mustafa Cantekin ile 'Vatan ve Hürriyet' adlı bir cemiyeti kurduktan sonra ordudan izinsiz Selânik'e gitti. Selânik Merkez Komutan Muavini Yüzbaşı Cemil Bey (Uybadın)'in yardımıyla karaya çıktı ve orada cemiyetinin şubesini açtı. Bir süre sonra arandığını öğrendi ve ona ağabeylik yapan Albay Hasan Bey, Yafa'ya dönüp oranın komutanı Ahmet Bey'e Mısır sınırında Bîrüssebi'ye gönderildiğini bildirmesini önerdi. Ahmet Bey de Mustafa Kemal'i Bîrüssebi'ye tayin etti ve bir süre sonra topçu staj için tekrar Şam'a gönderildi.[32] 20 Haziran 1907'de Kolağası (kıdemli yüzbaşı) oldu ve 13 Ekim 1907'de 3.Ordu'ya kurmay olarak atandı[30] ancak Selânik'e vardığında 'Vatan ve Hürriyet'in şubesinin İttihat ve Terakki Cemiyeti'ne ilhak edildiğini öğrendi. Bu yüzden kendisi de 1908 Şubat ayında İttihat ve Terakki Cemiyeti'ne üye oldu (Üye numarası: 322)[33]. 22 Haziran 1908'de Rumeli Doğu Bölgesi Demiryolları Müfettişliğine atandı.[30]

23 Temmuz 1908'de Meşrutiyet'in ilanından sonra Aralık 1908 sonlarında[34] İttihat ve Terakki Cemiyeti tarafından toplumsal ve siyasal sorunları ve güvenlik problemlerini incelemek üzere bugünkü Libya'nın bir parçası olan Trablusgarp'a gönderildi. Burada 1908 Devrimi'nin fikirlerini Libyalılara yaymaya ve buradaki nüfusun farklı kesimlerinden gelenleri Jön Türk politikasına kazanmaya çalıştı.[35] Bu siyasi görevin yanı sıra bölge halkının güvenliği ile de ilgilendi. Kentin dışında yapılan bir savaş tatbikatında Bingazi Garnizonuna önderlik ederek askerlere modern taktikler öğretti. Bu tatbikat süresince isyana meyilli Şeyh Mansur'un evini sararak bölgede sistem karşıtı başka güçlü kişilere örnek olması amacıyla onu kontrol altına aldı. Ayrıca hem kentli insanları hem de kırsal bölge insanlarını korumak için bir yedek ordu planlamaya başladı.[34][36]

13 Ocak 1909'da 3. Ordu'ya bağlı Selânik Redif Fırkasının Kurmay Başkanı oldu ve 13 Nisan 1909'da Meşrutiyet'e karşı 3. Ordu'ya bağlı Taşkışla'da konuşlanmış 2. ve 4. Avcı Taburlarının isyanıyla başlayan, diğer birliklerin katılımıyla genişleyen 31 Mart Ayaklanması'nı bastırmak üzere Selânik ve Edirne'den yola çıkarak Mirliva Mahmut Şevket Paşa komutasında 19 Nisan 1909'da İstanbul'a girecek olan Hareket Ordusu'na bağlı birinci kademe birliklerinin kurmay başkanı oldu. Daha sonra 3. Ordu Kurmaylığı, 3. Ordu Subay Talimgâhı Komutanlığı, 5. Kolordu Kurmaylığı, 38. Piyade Alayı Komutanlığı görevlerinde bulundu.[30][34]

Stuart Kline'ın Türk Havacılık Kronolojisi kitabına göre[37], Mustafa Kemal, 1910 yılında Fransa'da düzenlenen Picardie Manevraları'na katıldı. Burada yeni üretilen uçakların deneme uçuşuları yapılıyordu. Ali Rıza Paşa, bu uçuşlardan birine katılmak isteyen Mustafa Kemal'i önledi. Ve akabinde uçuş yapan o uçak dönüş esnasında yere çakıldı.[38] Bazı kaynaklar tarafından, bu hikâyeye dayanarak Atatürk'ün uçağa binmekten korktuğu iddia edilse de kitabın yazarı Kline, Atatürk'ün olaydan sonra 3 defa uçağa bindiğinden bahseder.[39]

Mustafa Kemal, dönüşünün ardından 27 Eylül 1911'de İstanbul'da Genelkurmay Karargâhı'nda görev aldı.");
fclose($dosyamiz);

echo "<br/>//Fread İle Belli Bir Sayıda Karakter<br/>";
$baglanti=fopen("deneme.txt","r");
echo fread($baglanti,1024)."<br/>";
fclose($baglanti);

echo "<br/>//Fread İle Bütün Dosya<br/>";
$baglanti=fopen("deneme.txt","r");
while(!feof($baglanti))
{
	echo fread($baglanti,1024);
	echo "<br/>";
	
}
fclose($baglanti);
echo "<br/>//Fgets İle Bütün Dosya<br/>";
$baglanti=fopen("deneme.txt","r");
while(!feof($baglanti))
{
	echo fgets($baglanti);
	echo "<br/>";
	
}
fclose($baglanti);


$yenidosya=fopen("toplam.txt","w+");
$max=rand(10,20);
$j=0;
while($j<$max)
{
$rakam=rand(0,100);
fputs($yenidosya,$rakam);
if($j+1 != $max)
fputs($yenidosya,PHP_EOL);
$j++;
}
fclose($yenidosya);

$icerik=0;
$toplama=fopen("toplam.txt","r+");
while(!feof($toplama))
{
	$icerik+=(int) fgets($toplama);
}
fclose($toplama);
echo $icerik."<br/>";
echo "<br/>fpassthru full okuma<br/>";
$topluokuma=fopen("toplam.txt","r+");
fpassthru($topluokuma);
fclose($topluokuma);
echo "<br/>readfile full okuma<br/>";
readfile("toplam.txt");
echo "<br/>";

echo "Dosya Boyutu: ".filesize("index11.php")." Byte tır";

echo "<br/>";

echo "Dosyaya En Son Erişilme Zamanı: ".date("d M Y H:i:s",fileatime("index11.php"));  //erişim
echo "<br/>";

echo "Dosyaya En Son Ne Zaman Değiştirilmiş: ".date("d M Y H:i:s",filectime("index11.php")); //son dosya düğüm değişimi
echo "<br/>";

echo "Dosyaya En Son Ne Zaman Düzenlenmiş: ".date("d M Y H:i:s",filemtime("index11.php")); //içerik
echo "<br/>";

echo "Deneme.txt: ".filetype("deneme.txt")."<br/>";
echo "Xampp: ".filetype("xampp")."<br/>";
copy("deneme.txt","deneme_kopya.txt");
copy("deneme.txt","deneme_kopya2.txt");
rename("deneme_kopya2.txt","deneme2.txt");
$liste=glob("*.php");
echo "<pre>";
print_r($liste);
echo "</pre>";
echo "<br/><br/>";
$liste2=glob("*.*");
echo "<pre>";
print_r($liste2);
echo "</pre>";
mkdir("silinecek_klasor");
//rmdir("silinecek_klasor");
echo number_format(disk_free_space("c:")/(1024*1024*1024),2,",","");
echo "<br/>";
echo round(disk_total_space("c:")/(1024*1024*1024),2);
echo "<br/><br/><br/>";
echo '</body></html>';
?>