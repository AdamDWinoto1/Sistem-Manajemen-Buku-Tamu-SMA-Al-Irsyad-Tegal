<?php
    require "../../connection.php";
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/input_data.css?v=<?php echo time();?>">
    <link href='https://unpkg.com/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="ico/x-image" href="../../resource/logo.ico">
    <title>Tambah Data</title>
</head>

<body>
    <div class="container">
        <div class="form">
            <a href="../read/index.php" class="back">
                <i class="bx bxs-chevron-left"></i>
            </a>
            <h1>Tambah Data Tamu</h1>
            <form method="POST" action="index.php">
                <label for="tanggal">Tanggal :</label> <br>
                <input type='date' name="tanggal" required> <br>

                <label for="nama">Nama Tamu / Pengunjung :</label> <br>
                <input type='text' name="nama" required> <br>

                <label for="nomer_telepon">Nomer Telepon(Opsional) :</label> <br>
                <input type="text" name="noTelepon"> <br>

                <label for="asal">Asal :</label> <br>
                <input type="text" name="asal" required> <br>

                <label for="keperluan">Keperluan :</label> <br>
                <input type='text' name="keperluan" required> <br>

                <input type="submit" value="SUBMIT" class="btnSubmit">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $tanggal = $_POST['tanggal'];
                    $nama = $_POST['nama'];
                    $nomer_telepon = $_POST['noTelepon'];
                    $asal = $_POST['asal'];
                    $keperluan = $_POST['keperluan'];

                    $query = "INSERT INTO tamu (tanggal, nama, nomer_telepon, asal, keperluan) VALUES ('$tanggal', '$nama','$nomer_telepon', '$asal', '$keperluan')";
                        
                    if ($conn->query($query) === TRUE) {
                        echo "<script>
                                alert('Data tamu berhasil tercatat')
                            </script>"
                        ;
                    } else {
                        echo "Error: " . $query . "<br>" . $conn->error;
                    }
                }
            ?>
            </form>
        </div>
        <img src="../../resource/bg_input.jpg" class="imgBack">
    </div>
</body>

</html>