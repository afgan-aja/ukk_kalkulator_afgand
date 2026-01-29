<?php
include "koneksi.php";
$nisn = $_GET['nisn'];

$sql = "SELECT * FROM siswa WHERE nisn='$nisn'";
$hasil = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($hasil);
?>

<html>
<h2>FORM EDIT DATA SISWA</h2>
<body>
<form action="Proses_Edit.php" method="POST">
<label for="fnisn">Nisn:</label><br>
  <input type="number" id="fnisn" name="nisn" value=""><br>

  <label for="lnama"> Nama:</label><br>
  <input type="text" id="lnama" name="nama" value=""><br>

  <label for="lkelas">Kelas:</label><br>
  <select id="kelas" name="kelas" required>
    <option value="X">X</option>
    <option value="XI">XI</option>
    <option value="XII">XII</option>  
  </select><br><br>

  <label for="ljurusan">Jurusan:</label><br>
  <select id="jurusan" name="jurusan" required>
    <option value="DESAIN KOMUNIKASI VISUAL">DESAIN KOMUNIKASI VISUAL</option>
    <option value="TEKNIK KOMPUTER DAN JARINGAN">TEKNIK KOMPUTER DAN JARINGAN</option>
    <option value="REKAYASA PERANGKAT LUNAK">REKAYASA PERANGKAT LUNAK</option>  
  </select><br><br>

  <label for="lalamat">Alamat:</label><br>
  <input type="text" id="lalamat" name="alamat" value=""><br>

  <label for="lttl">Tempat Tanggal Lahir:</label><br>
  <input type="date" id="lttl" name="ttl" value=""><br>

  <label for="ljk">Jenis Kelamin:</label><br>
  <select id="jk" name="jk" required>
    <option value="">pilih</option>
    <option value="perempuan">perempuan</option>
    <option value="laki-laki">laki-laki</option>
  </select><br><br>

  <input type="submit" value="Edit Data Siswa">
</form> 
</body>
</html>
