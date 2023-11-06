<?php
$host = 'localhost';
$db = 'CV';

$conn = mysqli_connect($host, $db); // true | false

if (!$conn) {
    die('Gagal terhubung ke database'. mysqli_connect_error());
  }
  