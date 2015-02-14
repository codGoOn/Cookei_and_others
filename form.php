<?php
    //$length = filesize("qwe.html");
    var_dump($length);
    $myFile = fopen("qwe.html", 'r');
    $arr = array();
    
    while($str = fgetss($myFile, 9999, "<p><br>")) {
            $arr[] = $str;
    }
    foreach ($arr as $key)
        echo "$key";
    fclose($myFile);