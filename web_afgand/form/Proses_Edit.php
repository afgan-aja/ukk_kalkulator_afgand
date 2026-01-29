<?php
include 'koneksi.php';

$nisn=$_POST['nisn'];
$nama=$_POST['nama'];
$kelas=$_POST['kelas'];
$jurusan=$_POST['jurusan'];
$alamat=$_POST['alamat'];
$ttl=$_POST['ttl'];
$jk=$_POST['jk'];

$sql = "UPDATE siswa SET 
nisn='$nisn', 
nama='$nama', 
kelas='$kelas', 
jurusan='$jurusan',
alamat='$alamat', 
ttl='$ttl', 
jk='$jk' WHERE nisn='$nisn'";

if ($conn->query($sql) === TRUE) {
    header ('location:form_baru.php');
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>