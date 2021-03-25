
<a href="/">Anasayfa</a> | 
<a href="/hakkimda">Hakkımda</a> | 
<a href="/iletisim">İletişim</a>

<div style="background: yellow;">
<?php

if (!isset($_GET['sayfa'])){
    $_GET['sayfa'] = 'index';
}

Switch ($_GET['sayfa']){

    case 'index':
        require_once 'anasayfa.php';
    break;

    case 'hakkimda':
        require_once 'hakkimda.php';
    break;

    case 'iletisim':
        require_once 'iletisim.php';
    break;

    case 'konu':
        require_once 'konu.php';
    break;

}

?>
</div>