<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();

if(!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
}  else {
    $_SESSION['count']++;
}

if (!isset($count)) {
    echo "Здравствуйте!";
}else {
echo "<p>Вы виде эту страницу {$_SESSION['count']} раз</p>";
}