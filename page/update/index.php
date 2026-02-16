<!DOCTYPE html>
<?php
require '../../connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $q = $conn->query("SELECT * FROM tamu WHERE id = '$id'");
    
    foreach ($q as $data) :
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/update_form.css?v=<?php echo time(); ?>">
    <link href='https://unpkg.com/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="ico/x-image" href="../../resource/logo.ico">
    <title></title>
</head>

<body>
    <div class="container">
        <div class="form">
            <a href="../read/index.php" class="back">
                <i class="bx bxs-chevron-left"></i>
            </a>
            <h2>Halaman Ubah Data</h2>
            <form action="process/process_update.php" method="POST">
                <input type="hidden" name="id" value="<?= $data['id'] ?>"> <br>
                <label for="tanggal">Tanggal :</label> <br>
                <input type="date" name="tanggal" value="<?= $data['tanggal'] ?>"> <br>
                <label for="nama">Nama :</label> </br>
                <input type="text" name="nama" value="<?= $data['nama'] ?>"> <br>
                <label for="nomer_telepon">Nomer Telepon :</label> <br>
                <input type="text" name="nomer_telepon" value="<?= $data['nomer_telepon'] ?>"> <br>
                <label for="asal">Asal :</label> <br>
                <input type="text" name="asal" value="<?= $data['asal'] ?>"> <br>
                <label for="keperluan">Keperluan :</label> <br>
                <input type="text" name="keperluan" value="<?= $data['keperluan'] ?>"> <br>
                <input type="submit" name="Ubah" value="Ubah Data" class="btnSubmit">
            </form>
        </div>
        <?php
        endforeach;
        }
    ?>
    </div>
</body>

</html>