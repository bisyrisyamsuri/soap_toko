<?php
error_reporting(1); // error ditampilkan
include "Database.php";

$uri = 'http://192.168.56.30';

// set uri server
$options = array('uri'=>$uri);

// buat objek baru dari class Soap Server
$server = new SoapServer(NULL,$options);

// masukkan class Database ke objek SOAP Server
$server->setClass('Database');

// jalankan menggunakan SOAP requests handler
$server->handle();
?>
