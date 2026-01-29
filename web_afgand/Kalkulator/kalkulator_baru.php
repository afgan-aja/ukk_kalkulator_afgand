<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <script src="../js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <h2 class="text-light bg-primary text-center card-header">Kalkulator Sederhana</h2>
                <form action="kalkulator_baru.php" method="POST" class="card-body">
                    <div class="mb-3 text-center">
                        <label for="b1">Bilangan Pertama:</label>
                        <input type="number" class="form-control" id="b1" placeholder="Masukkan bilangan" name="bilangan1" required>
                    </div>
                    <div class="mb-3 text-center">
                        <select class="form-select" id="operator" name="operator">
                            <option value="+">Tambah</option>
                            <option value="-">Kurang</option>
                            <option value="*">Kali</option>
                            <option value="/">Bagi</option>
                        </select>
                    </div>
                    <div class="mb-3 text-center">
                        <label for="b2">Bilangan Kedua:</label>
                        <input type="number" class="form-control" id="b2" placeholder="Masukkan bilangan" name="bilangan2" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary" name="hasil">Hasil</button>
                    </div>
                </form>
                <div class="card-footer text-center">
                    <?php
                    if(isset($_POST['hasil'])){
                        $bilangan1 = $_POST['bilangan1'];
                        $bilangan2 = $_POST['bilangan2'];
                        $operasi = $_POST['operator'];
                        $hasil = '';

                        switch ($operasi) {
                            case '+':
                                $hasil = $bilangan1 + $bilangan2;
                                break;
                            case '-':
                                $hasil = $bilangan1 - $bilangan2;
                                break;
                            case '*':
                                $hasil = $bilangan1 * $bilangan2;
                                break;
                            case '/':
                                if($bilangan2 != 0){
                                    $hasil = $bilangan1 / $bilangan2;
                                } else {
                                    echo "<h2>Tidak Dapat Melakukan Pembagian dengan 0!</h2>";
                                    exit;
                                }
                                break;
                        }
                        echo "<h2>Hasil: " . $bilangan1 . " " . $operasi . " " . $bilangan2 . " = " . $hasil . "</h2>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
