<?php
    require "../../connection.php";    
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Book Tamu SMA Al-Irsyad Kota Tegal</title>
    <link rel="icon" type="ico/x-image" href="../../resource/logo.ico">
    <link rel="stylesheet" href="../../css/main_menu.css?v=<?php echo time(); ?>">
    <link href='https://unpkg.com/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="container">
        <div class="nav-bar">
            <div class="judul">
                <a href="index.php">
                    <span class="E">
                        E
                    </span>
                    -B
                    <span class="O">
                        o
                    </span>
                    <span class="o">
                        o
                    </span>
                    <span class="k">
                        k
                    </span>
                    <span class="E">
                        T
                    </span>
                    <span class="O">
                        a
                    </span>
                    <span class="o">
                        m
                    </span>
                    <span class="k">
                        u.
                    </span>
                </a>
            </div>
            <a href="../../index.php" class="logout">
                Logout
            </a>
            <a href="..\create\index.php" class="input"> + Input Tamu</a>
        </div>
        <div class="data">
            <h2>Data Pengunjung</h2>
            <table border="1" cellpadding="10 0 10 0">
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Nama</th>
                    <th>Nomer Telepon</th>
                    <th>Asal</th>
                    <th>Keperluan</th>
                    <th colspan="2">Action</th>
                </tr>

                <?php
                    $query = $conn -> query("SELECT * FROM tamu");
                    $no = 1;
                    while($data = $query -> fetch_assoc()):
                ?>

                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $data['tanggal'] ?></td>
                    <td><?= $data['nama'] ?></td>
                    <td><?= $data['nomer_telepon'] ?></td>
                    <td><?= $data['asal'] ?></td>
                    <td><?= $data['keperluan'] ?></td>
                    <td>
                        <a href="../update/index.php?id=<?= $data['id'] ?>" title="Update">
                            <i class="bx bxs-pencil"></i>
                        </a>
                    </td>
                    <td>
                        <a style="color: red;" href="../delete/index.php?id=<?= $data['id'] ?>"
                            onclick="return confirm('Anda yakin akan menghapus data ini?')" title="Delete">
                            <i class="bx bxs-trash"></i>
                        </a>
                    </td>

                </tr>
                <?php
                    endwhile;
                ?>
            </table>
        </div>
    </div>
</body>

</html>