<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_FILES['user_file']['name'];
        $tmp_name = $_FILES['user_file']['tmp_name'];
        $uploaddir = "upload/";
        $uploadfile = $uploaddir . basename($_FILES['user_file']['name']);
        
        move_uploaded_file($tmp_name, $uploadfile);
        
    }
?>
<h2>Форма отправки файла</h2>
<form enctype="multipart/form-data" action="<?= $_SERVER['PHP_SELF']?>" method="post">
    <input type="hidden" name="MAX_FILE_SIZE" value="512000" />
    <input type="file" name="user_file" />
    <input value="Отправить Файл" type="submit"/>
</form>