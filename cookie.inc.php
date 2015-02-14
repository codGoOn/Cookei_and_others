<?php
//error_reporting(0);
$count = 0;
//$count = is_int($_COOKIE['Counter']);
if(isset($count))
    $count = $_COOKIE['Counter'];
$count++;
if(isset($_COOKIE['Visitor']))
    $lastVisit = date('d-m-y H:i:s', $_COOKIE['Visitor']);
if(date('d-m-y') != date('d-m-y', $_COOKIE['Visitor'])){
setcookie('Counter', $count, time()*60*60*24);
setcookie('Visitor', time(), time()*60*60*24);
}