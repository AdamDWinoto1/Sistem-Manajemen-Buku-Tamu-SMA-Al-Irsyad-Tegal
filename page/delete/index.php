<?php
require '../../connection.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  try {
    $conn -> begin_transaction();

    $statement1 = $conn->prepare("DELETE FROM tamu WHERE id = ?");
    $statement1->bind_param('i', $id);
    $statement1->execute();

    $conn -> commit();
    echo "<script>
            alert('Data berhasil dihapus'); window.location.href='../read/index.php'
          </script>";
  } catch (Exception $e) {
    $conn -> rollback();
    echo $e;
    echo "<script>
            alert('Data gagal dihapus'); window.location.href='../read/index.php'
          </script>";
  }
} else {
  header('Location:../read/index.php');
  var_dump($_SERVER['REQUEST_URI']);
}