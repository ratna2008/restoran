<?php
session_start();
if ($_SESSION['level'] == "") {
    header("location:index.php?pesan=gagal");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Beranda Pegawai</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body { background:#f4f6f9; }
        .sidebar {
            height:100vh; background:#0d6efd; color:white;
            width:230px; position:fixed; padding-top:20px;
        }
        .sidebar a {
            color:#e5e5e5; padding:12px 20px; display:block; text-decoration:none;
        }
        .sidebar a:hover { background:rgba(255,255,255,0.2); }
        .sidebar .active { background:rgba(255,255,255,0.3); }
        .content { margin-left:240px; }
    </style>
</head>

<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <h4 class="text-center fw-bold mb-4">Pegawai</h4>

    <a href="beranda.php" class="active"><i class="bi bi-house-door-fill me-2"></i> Beranda</a>
    <a href="profil.php"><i class="bi bi-person-vcard-fill me-2"></i> Profil Saya</a>
    <a href="absensi.php"><i class="bi bi-calendar-check-fill me-2"></i> Absensi</a>
    <a href="laporan_kerja.php"><i class="bi bi-clipboard-data-fill me-2"></i> Laporan Kerja</a>
    <a href="logout.php"><i class="bi bi-box-arrow-right me-2"></i> Logout</a>
</div>

<!-- CONTENT -->
<div class="content p-4">

    <h2 class="fw-bold mb-3">Beranda Pegawai</h2>

    <p class="fs-5">
        Selamat datang, <b><?php echo $_SESSION['username']; ?></b>!
    </p>

    <!-- CARD STATISTIK -->
    <div class="row">
        <div class="col-md-4">
            <div class="card shadow-sm border-0 mb-3">
                <div class="card-body">
                    <h6 class="text-muted"><i class="bi bi-calendar-check text-primary me-1"></i> Kehadiran</h6>
                    <h3 class="fw-bold text-primary">95%</h3>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm border-0 mb-3">
                <div class="card-body">
                    <h6 class="text-muted"><i class="bi bi-clipboard-data text-success me-1"></i> Laporan Bulanan</h6>
                    <h3 class="fw-bold text-success">12 Laporan</h3>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm border-0 mb-3">
                <div class="card-body">
                    <h6 class="text-muted"><i class="bi bi-trophy-fill text-warning me-1"></i> Poin Kinerja</h6>
                    <h3 class="fw-bold text-warning">76</h3>
                </div>
            </div>
        </div>
    </div>

</div>

</body>
</html>
