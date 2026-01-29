<?php
session_start();

if (!isset($_SESSION['history'])) {
    $_SESSION['history'] = [];
}

$hasil = null;

if (isset($_POST['operator'])) {
    $angka1   = $_POST['angka1'];
    $angka2   = $_POST['angka2'];
    $operator = $_POST['operator'];

    if (!is_numeric($angka1) || !is_numeric($angka2)) {
        $error = "Input harus berupa angka";
    } elseif ($operator == '/' && $angka2 == 0) {
        $error = "Tidak dapat membagi dengan nol";
    } else {
        switch ($operator) {
            case '+': $hasil = $angka1 + $angka2; break;
            case '-': $hasil = $angka1 - $angka2; break;
            case 'x': $hasil = $angka1 * $angka2; break;
            case '/': $hasil = $angka1 / $angka2; break;
        }

        $_SESSION['history'][] = "$angka1 $operator $angka2 = $hasil";
    }
}

if (isset($_POST['clear_history'])) {
    $_SESSION['history'] = [];
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

    <style>
        body {
            background: #008080;
        }
        .btn-operator {
            width: 100%;
        }
    </style>
</head>

<body>

<div class="container mt-5">
    <h3 class="text-center mb-4">KALKULATOR</h3>

    <div class="row justify-content-center">
        <div class="col-md-4">

            <form method="POST" class="card p-3 shadow-sm">
                <div class="mb-2">
                    <label class="form-label">Angka Pertama</label>
                    <input type="number" name="angka1" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Angka Kedua</label>
                    <input type="number" name="angka2" class="form-control" required>
                </div>

                <div class="d-grid gap-2">
                    <div class="row g-2">
                        <div class="col-3">
                            <button class="btn btn-primary btn-operator" name="operator" value="+">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                        <div class="col-3">
                            <button class="btn btn-secondary btn-operator" name="operator" value="-">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                        <div class="col-3">
                            <button class="btn btn-success btn-operator" name="operator" value="x">
                                <i class="fas fa-xmark"></i>
                            </button>
                        </div>
                        <div class="col-3">
                            <button class="btn btn-info btn-operator" name="operator" value="/">
                                <i class="fas fa-divide"></i>
                            </button>
                        </div>
                    </div>

                    <button type="reset" class="btn btn-warning mt-2">
                        Clear
                    </button>
                </div>
            </form>

            <div class="card p-3 mt-3 shadow-sm text-center">
                <h5>Hasil</h5>

                <?php if (isset($error)) : ?>
                    <div class="alert alert-danger"><?= $error ?></div>
                <?php elseif ($hasil !== null) : ?>
                    <div class="alert alert-success">
                        <?= $hasil ?>
                    </div>
                <?php else : ?>
                    <p class="text-muted">Belum ada perhitungan</p>
                <?php endif; ?>
            </div>

            <div class="card p-3 mt-3 shadow-sm">
                <h5 class="text-center">History</h5>

                <?php if (empty($_SESSION['history'])) : ?>
                    <p class="text-muted text-center">Belum ada history</p>
                <?php else : ?>
                    <ul class="list-group mb-2">
                        <?php foreach (array_reverse($_SESSION['history']) as $item) : ?>
                            <li class="list-group-item"><?= $item ?></li>
                        <?php endforeach; ?>
                    </ul>

                    <form method="POST">
                        <button class="btn btn-danger w-100" name="clear_history">
                            Hapus History
                        </button>
                    </form>
                <?php endif; ?>
            </div>

        </div>
    </div>

    <p class="text-center mt-4 text-muted">
        &copy; UKK RPL 2026 |  Maulana Afgand Ja'fart  | XII RPL 2
    </p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>