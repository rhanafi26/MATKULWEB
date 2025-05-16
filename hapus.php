<?php
include("config.php");

if( isset($_GET['id']) ) {
    // ambil id dari query string
    $id = $_GET['id'];
    
    // buat query hapus
    $sql = "DELETE FROM calon_mahasiswa WHERE id=$id";
    $query = mysqli_query($config, $sql);
    
    // apakah query hapus berhasil?
    if( $query ){
        header('Location: list_mahasiswa.php');
    } else {
        die("gagal menghapus...");
    }
} else {
    die("akses dilarang...");
}
?>