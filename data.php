<?php include("config.php"); ?>
<! DOCTYPE html>
<html>
    <head>
        <title>Pendaftaran Mahasiswa Baru</title>
    </head>
    <body>
        <header>
            <h3>Mahasiswa yang sudah mendaftar</h3>
        </header>
        <nav>
            <a href="pendaftaran.php">[+] Tambah Baru</a>
        </nav>
        <br>
        <table border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Sekolah Asal</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * from calon_mahasiswa";
                $query = mysqli_query($config,$sql);
                while($mahasiswa = mysqli_fetch_array($query)){
                    echo "<tr>";
                    echo "<td>".$mahasiswa['id']."</td>";
                    echo "<td>".$mahasiswa['nama']."</td>";
                    echo "<td>".$mahasiswa['alamat']."</td>";
                    echo "<td>".$mahasiswa['jenis_kelamin']."</td>";
                    echo "<td>".$mahasiswa['agama']."</td>";
                    echo "<td>".$mahasiswa['sekolah_asal']."</td>";
                    echo "<td>";
                    echo"<a href='form-edit.php?id=".$mahasiswa['id']."'>Edit</a> | ";
                    echo "<a href='hapus.php?id=".$mahasiswa['id']."'>Hapus</a>";
                    echo "</td>";
                    
                    echo"</tr>";
                }
                ?>
            </tbody>
        </table>
        <p>Total: <?php echo mysqli_num_rows($query) ?></p>
    </body>
</html>