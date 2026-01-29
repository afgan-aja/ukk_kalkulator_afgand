<!DOCTYPE html>
<html>
<head>
  <style>
    table, th, td {
      border: 2px solid black;
      border-collapse: collapse;
    }
    th, td {
      padding: 10px;
      text-align: left;
    }
  </style>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#section1">home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#section2">Data Siswa</a>
        </li>0
        <li class="nav-item">
          <a class="nav-link" href="#section3">Kalkulator</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div id="#section1">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <h2>FORM TAMBAH SISWA</h2>
                    <form action="proses_tambah_siswa.php" method="POST">
                        <label for="fnisn" class="form-label">Nisn:</label><br>
                        <input type="number" id="fnisn" name="nisn" value="" class="form-control"/>
                    
                        <label for="lnama" class="form-label">Nama:</label><br>
                        <input type="text" id="lnama" name="nama" value="" class="form-control"/>
                    
                        <label for="lkelas" class="form-label">Kelas:</label>
                        <select id="kelas" name="kelas" class="form-control" required>
                          <option value="X">X</option>
                          <option value="XI">XI</option>
                          <option value="XII">XII</option>  
                        </select>
                    
                        <label for="ljurusan" class="form-label">Jurusan:</label>
                        <select id="jurusan" name="jurusan" class="form-control" required>
                          <option value="DESAIN KOMUNIKASI VISUAL">DESAIN KOMUNIKASI VISUAL</option>
                          <option value="TEKNIK KOMPUTER DAN JARINGAN">TEKNIK KOMPUTER DAN JARINGAN</option>
                          <option value="REKAYASA PERANGKAT LUNAK">REKAYASA PERANGKAT LUNAK</option>  
                        </select>
                    
                        <label for="lalamat" class="form-label">Alamat:</label>
                        <input type="text" id="lalamat" name="alamat" value="" class="form-control"/>
                     
                        <label for="lttl" class="form-label">Tempat Tanggal Lahir:</label>
                        <input type="date" id="lttl" name="ttl" value="" class="form-control"/>
                    
                        <label for="ljk" class="form-label">Jenis Kelamin:</label>
                        <select id="jk" name="jk" class="form-control" required>
                          <option value="">pilih</option>
                          <option value="perempuan">perempuan</option>
                          <option value="laki-laki">laki-laki</option>
                        </select>
                    
                        <input type="submit" value="Tambah Data Siswa">
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>

<div id="section2">
<h2>Data Siswa</h2>

<?php
include "koneksi.php";

$sql = "SELECT nisn, nama, kelas, jurusan, alamat FROM siswa";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1' class='table table-striped'>
    <tr><th>Nama</th><th>Kelas</th><th>Jurusan</th><th>Alamat</th><th>Aksi</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>".$row["nama"]."</td>
        <td>".$row["kelas"]."</td>
        <td>".$row["jurusan"]."</td>
        <td>".$row["alamat"]."</td>
        <td>
            <a href='Edit.php?nisn=".$row['nisn']."'>edit</a>
            <a href='delete.php?nisn=".$row['nisn']."'>delete</a>
        </td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
<div id="section3">
  <iframe src="kalkulator/kalkulator_baru.php" style="height:500px;width:100%;" title="iframe Example"></iframe>
</div>
</div>
</div>
</body>
</html>
