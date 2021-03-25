<?php

function form_filtrele($post)
{
    return is_array($post) ? array_map('form_filtrele', $post) : htmlspecialchars(trim($post));
}

$_POST = array_map('form_filtrele', $_POST);

function post($name)
{
    if (isset($_POST[$name]))
        return $_POST[$name];
}

if (post('submit')){

    print_r($_POST);

}

?>

<form action="" method="post" enctype="multipart/form-data">

<!--
    input
    textarea
    file
    select
    radio
    checkbox
    multiple select
    button
-->

Ad: <br>
<input type="text" readonly value="tayfun erbilen" name="ad">
<hr>
Hakkımda: <br>
<textarea name="hakkimda" cols="50" placeholder="hakkında bir şeyler yaz.." rows="5"><?php echo post('hakkimda'); ?></textarea>
<hr>
Meslek: <br>
<select name="meslek">
    <option>-- seç --</option>
    <option <?php echo post('meslek') == 'web-developer' ? ' selected' : null ?> value="web-developer">Web Developer</option>
    <option <?php echo post('meslek') == 'front-end-developer' ? ' selected' : null ?> value="front-end-developer">Front-end Developer</option>
    <option <?php echo post('meslek') == 'back-end-developer' ? ' selected' : null ?> value="back-end-developer">Back-end Developer</option>
</select>
<hr>
Cinsiyet: <br>
<label>
<input type="radio" checked name="cinsiyet" value="erkek">
erkek
</label>
<label>
<input type="radio" name="cinsiyet" value="kadın">
kadın
</label>
<hr>
İlgi Alanları: <br>
<label>
<input type="checkbox" <?php echo post('ilgi_alani') && in_array('php', post('ilgi_alani')) ? ' checked' : null ?> name="ilgi_alani[]" value="php"> PHP
</label>
<label>
<input type="checkbox" <?php echo post('ilgi_alani') && in_array('html', post('ilgi_alani')) ? ' checked' : null ?> name="ilgi_alani[]" value="html"> HTML
</label>
<label>
<input type="checkbox" <?php echo post('ilgi_alani') && in_array('css', post('ilgi_alani')) ? ' checked' : null ?> name="ilgi_alani[]" value="css"> CSS
</label>
<hr>
Fotoğraf: <br>
<input type="file" name="fotograf">
<hr>
Meslek: <br>
<select name="meslek2[]" multiple size="5">
    <option>-- seç --</option>
    <option selected value="web-developer">Web Developer</option>
    <option selected value="front-end-developer">Front-end Developer</option>
    <option value="back-end-developer">Back-end Developer</option>
</select>
<hr>
<input type="hidden" name="submit" value="1">
<button type="submit">Gönder</button>

</form>