<?php

ob_start();
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
include '../cekirdek/fonksiyon.php';
include '../cekirdek/veritabani.class.php';
include 'mayin.class.php';
$oyun = new mayin();
$oyun->hamle_yap($_GET['data']);


echo $oyun->ajax_json();