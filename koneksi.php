<?php
function connection() {
   // membuat konekesi ke database system
   $dbServer = 'localhost';
   $dbUser = 'root';
   $dbPass = '';
   $dbName = "tabel_employee";

   $koneksi = mysqli_connect($dbServer, $dbUser, $dbPass, $dbName);

   if(!$koneksi) {
        die('Koneksi gagal: ' . mysqli_error());
   }

   // memilih database yang akan dipakai
   mysqli_select_db($koneksi, $dbName);

   return $koneksi;
}
?>