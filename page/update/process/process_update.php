<?php
require '../../../connection.php';

if (isset($_POST['Ubah'])) {
    $id = $_POST['id'];
    $tanggal = $_POST['tanggal'];
    $nama = $_POST['nama'];
    $nomer_telepon = $_POST['nomer_telepon'];
    $asal = $_POST['asal'];
    $keperluan = $_POST['keperluan'];

    $q = $conn->query("UPDATE tamu SET tanggal = '$tanggal', nama = '$nama', nomer_telepon = '$nomer_telepon', 
                asal = '$asal', keperluan = '$keperluan' WHERE id = '$id'");
    
    if ($q) {
        echo "
            <script>
                alert('Data produk berhasil diubah'); window.location.href='../../read/index.php'
            </script>
            ";
    } else {
        echo "
        <script>
            alert('Data produk gagal diubah'); window.location.href='../index.php'
        </script>
        ";
    }
}
?>