<?php
for($i=0;$i<10;$i++)
	echo  $i."<br/>";

for($i=10;$i>0;$i--)
	echo  '<font size="'.$i.'">PHP</font><br/>';

$kitaplar=array("PHP","Web Tasarım Klavuzu","Dreamweaver","Oracle","SQL Server");
echo "<br/><br/>";

for($i=count($kitaplar);$i>0;$i--)
	echo $kitaplar[$i-1]."<br/>";

echo "<br/><br/>";

for($i=0;$i<500;$i++)
while(($i%2==0)&&($i<20))
{
	echo  $i."<br/>";
	$i++;
}
	
echo "<br/><br/>";

$filmler=array("Matrix","Gladiator","Bourne Trilogy","Wanted","Pirates of Caribbean","X Men","Seven");
foreach($filmler as $filmadi)
echo $filmadi."<br/>";

echo "<br/><br/>";

$filmler2=array("Keanu Reeves" => "Matrix","Russel Crowe" => "Gladiator","Matt Demon"=>"Bourne Trilogy","Angelina Jolie" => "Wanted","Jonny Deep" => "Pirates of Caribbean","Hugh Jackman" => "X Men","Brad Pitt" => "Seven");

foreach($filmler2 as $aktor => $filmadi)
echo $aktor." -> ".$filmadi."<br/>";

echo "<br/><br/>";
echo $filmler2[$aktor];
echo "<br/><br/>";



//dongüden çıkma
foreach($filmler2 as $aktor => $filmadi)
if($aktor=="Jonny Deep")
break;
else
echo $aktor."<br/>";

echo "<br/><br/>";


for($i=1;$i<10;$i++)
{
	for($j=1;$j<10;$j++)
	{
	if($i*$j==18)
	break 2;
	else
	echo $i*$j."<br/>";
	}
}
echo "<br/><br/>";

$cumle="PHP ilk olarak Rasmus Lerdorf tarafından programlanmıştır";
$dizi=explode(" ",$cumle);
foreach ($dizi as $index => $parcalar)
echo $index."=>".$parcalar."<br/>";


?>