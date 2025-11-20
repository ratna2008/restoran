<?php
session_start();
if ($_SESSION['level']=="") {
    header("location:index.php?pesan=gagal");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Absensi Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-4">
    <h3 class="mb-4">Absensi Pegawai</h3>

    <div class="card shadow-sm">
        <div class="card-body">

            <p>Nama: <b><?php echo $_SESSION['username']; ?></b></p>

            <form method="post" action="absensi_proses.php">
                <button type="submit" name="hadir" class="btn btn-success">✔ Hadir</button>
                <button type="submit" name="sakit" class="btn btn-warning">🤒 Sakit</button>
                <button type="submit" name="izin" class="btn btn-info">📄 Izin</button>
            </form>

        </div>
    </div>
</div>

</body>
</html>