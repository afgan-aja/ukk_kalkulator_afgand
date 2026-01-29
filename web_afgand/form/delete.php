<?php
include 'koneksi.php';
$nisn=$_GET['nisn'];

$sql = "DELETE FROM siswa WHERE nisn='$nisn'";

if ($conn->query($sql) === TRUE) {
    header("Location: form_baru.php", true, 301);
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>