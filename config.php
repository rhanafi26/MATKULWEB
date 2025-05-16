<?php

$config = mysqli_connect("localhost","root","","db_pmb");
if(mysqli_connect_error()){
    echo "Koneksi Gagal", mysqli_connect_error();
}
?>