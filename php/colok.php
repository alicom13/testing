<?php
$colok = mysqli_connect("localhost","userdb","sandidb","namadb");
// Cek sambungan
  if (mysqli_connect_errno()){
    // Jika error
  	echo "Mboten nyambung : " . mysqli_connect_error();
  }
?>
