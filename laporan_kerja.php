<?php
session_start();
if ($_SESSION['level']=="") {
    header("location:index.php?pesan=gagal");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Laporan Kerja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-4">

    <h3 class="mb-4">Laporan Kerja</h3>

    <div class="card shadow-sm">
        <div class="card-body">
            <form method="post" action="laporan_proses.php">
                <label>Judul Laporan</label>
                <input type="text" name="judul" class="form-control mb-2" required>

                <label>Deskripsi Laporan</label>
                <textarea name="deskripsi" rows="5" class="form-control mb-3" required></textarea>

                <button class="btn btn-primary">Kirim Laporan</button>
            </form>
        </div>
    </div>

</div>

</body>
</html>