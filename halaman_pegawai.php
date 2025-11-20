<!DOCTYPE html>
<html>
<head>
    <title>Halaman Pegawai</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background-color: #f4f6f9;
        }
        .sidebar {
            height: 100vh;
            background: #0d6efd;
            color: white;
            padding-top: 20px;
            position: fixed;
            width: 230px;
        }
        .sidebar a {
            color: #e5e5e5;
            text-decoration: none;
            display: block;
            padding: 12px 20px;
            font-size: 15px;
        }
        .sidebar a:hover {
            background: rgba(255,255,255,0.2);
        }
        .sidebar .active {
            background: rgba(255,255,255,0.3);
            font-weight: bold;
        }
        .content {
            margin-left: 240px;
        }
    </style>
</head>

<body>

<?php
session_start();

// cek login
if ($_SESSION['level']==""){
    header("location:index.php?pesan=gagal");
}
?>

<!-- SIDEBAR -->
<div class="sidebar">
    <h4 class="text-center mb-4 fw-bold">Pegawai</h4>

    <a href="beranda.php" class="active"><i class="bi bi-house-door-fill me-2"></i> Beranda</a>
    <a href="profil.php"><i class="bi bi-person-vcard-fill me-2"></i> Profil Saya</a>
	<a href="absensi.php" class="active"><i class="bi bi-house-door-fill me-2"></i> Absensi</a>
    <a href="laporan_kerja.php"><i class="bi bi-person-vcard-fill me-2"></i> Laporan kerja</a>
    <a href="logout.php"><i class="bi bi-box-arrow-right me-2"></i> Logout</a>
</div>

<!-- KONTEN -->
<div class="content p-4">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Dashboard Pegawai</h2>

        <div>
            <span class="me-3">
                <b><?php echo $_SESSION['username']; ?></b>
                (<?php echo $_SESSION['level']; ?>)
            </span>

            <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
        </div>
    </div>

    <!-- Card Statistik -->
    <div class="row mb-4">

        <div class="col-md-4">
            <div class="card shadow-sm border-0 mb-3">
                <div class="card-body">
                    <h6 class="text-muted"><i class="bi bi-calendar2-check me-1 text-primary"></i> Kehadiran</h6>
                    <h3 class="fw-bold text-primary">95%</h3>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm border-0 mb-3">
                <div class="card-body">
                    <h6 class="text-muted"><i class="bi bi-clipboard-data me-1 text-success"></i> Laporan Bulan Ini</h6>
                    <h3 class="fw-bold text-success">12</h3>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm border-0 mb-3">
                <div class="card-body">
                    <h6 class="text-muted"><i class="bi bi-trophy-fill me-1 text-warning"></i> Poin Kinerja</h6>
                    <h3 class="fw-bold text-warning">76</h3>
                </div>
            </div>
        </div>

    </div>

    <!-- Card Informasi -->
    <div class="card shadow-sm border-0">
        <div class="card-header bg-secondary text-white">
            <h5 class="mb-0">Informasi Pegawai</h5>
        </div>
        <div class="card-body">
            <p class="fs-5">
                Halo <b><?php echo $_SESSION['username']; ?></b>, 
                Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.
            </p>
            <p>Anda dapat melihat data absensi, laporan kerja, atau memperbarui profil Anda menggunakan menu di sebelah kiri.</p>
        </div>
    </div>

</div>

</body>
</html>