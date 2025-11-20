<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>

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
            background: #212529;
            color: white;
            padding-top: 20px;
        }
        .sidebar a {
            color: #cfd3d6;
            text-decoration: none;
            display: block;
            padding: 12px 20px;
            transition: 0.3s;
        }
        .sidebar a:hover {
            background: #0d6efd;
            color: white;
        }
        .sidebar .active {
            background: #0d6efd;
            color: white;
        }
    </style>
</head>

<body>

<?php
session_start();
if ($_SESSION['level']=="") {
    header("location:index.php?pesan=gagal");
}
?>

<div class="container-fluid">
    <div class="row">

        <!-- SIDEBAR -->
        <div class="col-md-2 sidebar">
            <h4 class="text-center mb-4">Admin Panel</h4>

            <a href="dashboard.php" class="active"><i class="bi bi-speedometer2 me-2"></i> Dashboard</a>
            <a href="data_pegawai.php"><i class="bi bi-people-fill me-2"></i> Data Pegawai</a>
            <a href="kelola_user.php"><i class="bi bi-person-badge-fill me-2"></i> Kelola User</a>
            <a href="laporan.php"><i class="bi bi-file-earmark-bar-graph me-2"></i> Laporan</a>
            <a href="logout.php"><i class="bi bi-box-arrow-right me-2"></i> Logout</a>
        </div>

        <!-- KONTEN -->
        <div class="col-md-10 p-4">

            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3>Dashboard Admin</h3>
                <div>
                    <span class="me-2">
                        Halo, <b><?php echo $_SESSION['username']; ?></b>
                        (<?php echo $_SESSION['level']; ?>)
                    </span>
                    <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
                </div>
            </div>

            <!-- Card Statistik -->
            <div class="row">

                <div class="col-md-4">
                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-body">
                            <h5><i class="bi bi-people-fill text-primary me-2"></i> Total Pegawai</h5>
                            <h3 class="text-primary fw-bold">34</h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-body">
                            <h5><i class="bi bi-person-check-fill text-success me-2"></i> User Aktif</h5>
                            <h3 class="text-success fw-bold">12</h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-body">
                            <h5><i class="bi bi-bar-chart-fill text-warning me-2"></i> Laporan Bulan Ini</h5>
                            <h3 class="text-warning fw-bold">7</h3>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Informasi -->
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Informasi Sistem</h5>
                </div>
                <div class="card-body">
                    <p>Selamat datang di halaman Admin. Silakan gunakan menu di sidebar untuk mengelola data.</p>
                </div>
            </div>

        </div>

    </div>
</div>

</body>
</html>