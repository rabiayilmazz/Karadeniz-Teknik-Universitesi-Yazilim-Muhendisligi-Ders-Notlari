<?php
echo '
<html>
<head>
<meta http-equiv="Content-Language" content="tr" />
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<title>Ön TANIMLI DEĞİŞKENLER</title>
</head>
<body>
<table border="1" cellpadding="10" cellspacing="5" width="100%">
<tr>
<td width="50%">$_SERVER $_ENV $_COOKIE $_GET</td>
<td width="50%">$_POST $_FILES $_REQUEST $_SESSION $_GLOBAL</td>
</tr>
<tr>
<td width="50%">IP NUMARINIZ</td>
<td width="50%">'.$_SERVER["REMOTE_ADDR"].'
</td>
</tr>
<tr>
<td width="50%">Serverin IP Numarası</td>
<td width="50%">'.$_SERVER["REMOTE_HOST"].'
</td>
</tr>
<tr>
<td width="50%">Çağırma Metodu</td>
<td width="50%">'.$_SERVER["REQUEST_METHOD"].'
</td>
</tr>
<tr>
<td width="50%">Serverin İsmi</td>
<td width="50%">'.$_SERVER["SERVER_NAME"].'
</td>
</tr>
<tr>
<td width="50%">Serverin Port Numarası</td>
<td width="50%">'.$_SERVER["SERVER_PORT"].'
</td>
</tr>
<tr>
<td width="50%">Server Protokol</td>
<td width="50%">'.$_SERVER["SERVER_PROTOCOL"].'
</td>
</tr>
<tr>
<td width="50%">Server Yazılımı</td>
<td width="50%">'.$_SERVER["SERVER_SOFTWARE"].'
</td>
</tr>
<tr>
<td width="50%">Sunucunun Sahibi</td>
<td width="50%">'.$_SERVER["SERVER_ADMIN"].'
</td>
</tr>
<tr>
<td width="50%">Header</td>
<td width="50%">'.$_SERVER["HTTP_ACCEPT"].'
</td>
</tr>
<tr>
<td width="50%">Dil</td>
<td width="50%">'.$_SERVER["HTTP_ACCEPT_LANGUAGE"].'
</td>
</tr>
<tr>
<td width="50%">Bağlantı</td>
<td width="50%">'.$_SERVER["HTTP_CONNECTION"].'
</td>
</tr>
<tr>
<td width="50%">Kodlama</td>
<td width="50%">'.$_SERVER["HTTP_ACCEPT_ENCODING"].'
</td>
</tr>
<tr>
<td width="50%">Tarayıcı ve İşletim Sistemleri</td>
<td width="50%">'.$_SERVER["HTTP_USER_AGENT"].'
</td>
</tr>
<tr>
<td width="50%">Web Sayfalarının Bulunduğu Klasör</td>
<td width="50%">'.$_SERVER["DOCUMENT_ROOT"].'
</td>
</tr>
</table>
</body>
</html>
';
?>