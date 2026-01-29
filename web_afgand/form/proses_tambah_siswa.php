<?php
$nisn=$_POST['nisn'];
$nama=$_POST['nama'];
$kelas=$_POST['kelas'];
$jurusan=$_POST['jurusan'];
$alamat=$_POST['alamat'];
$ttl=$_POST['ttl'];
$jk=$_POST['jk'];

include "koneksi.php";
$sql="INSERT INTO siswa (nisn, nama, kelas, jurusan, alamat, ttl, jk) VALUES ('$nisn','$nama','$kelas','$jurusan','$alamat','$ttl','$jk')";

if ($conn->query($sql) === TRUE) {
    header("Location: form_baru.php", true, 301);
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
?>