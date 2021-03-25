<?php

if (isset($_POST['ad'])){

    if (empty($_POST['ad'])){
        echo 'Lütfen kategori adını belirtin.';
    } else {

        // kategori ekle
        $sorgu = $db->prepare('INSERT INTO kategoriler SET
        ad = ?');
        $ekle = $sorgu->execute([
            $_POST['ad']
        ]);

        if ($ekle){
            header('Location:index.php?sayfa=kategoriler');
        } else {
            echo 'Kategori eklenemedi!';
        }

    }

}

?>

<form action="" method="post">

    Kategori Adı: <br>
    <input type="text" name="ad"> <br><br>

    <button type="submit">Gönder</button>

</form>