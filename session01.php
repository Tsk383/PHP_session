<?php
// session変数を定義して値を入れよう
session_start();

$_SESSION['keyword']='PHP';
$_SESSION['number']=1000;
//配列も定義可能

var_dump($_SESSION['keyword'],$_SESSION['number']);
exit();