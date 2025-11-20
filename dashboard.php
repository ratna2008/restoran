<?php
session_start();
if ($_SESSION['level'] == "") { 
    header("location:index.php?pesan=gagal"); 
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body{ background:#f4f6f9; }
        .content{ margin-left:240px; }
        .sidebar{
            height:100vh; background:#0d6efd; position:fixed;
            width:230px; color:white; padding-top:20px;
        }
        .sidebar a{
            color:#eee; padding:12px 20px; display:block;
            text-decoration:none; font-size:15px;
        }
        .sidebar a:hover{ background:rgba(255,255,255,0.2); }
        .active-menu{ background:rgba(255,255,255,0.25); font-weight:bold; }
    </style>
</head>
<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <h4 class="text-center fw-bold mb-4">ADMIN PANEL</h4>

    <a href="admin_dashboard.php" class="active-menu">
        <i class="bi bi-speedometer2 me-2"></i> Dashboard
    </a>
    <a href="data_pegawai.php"><i class="bi bi-people-fill me-2"></i> Data Pegawai</a>
    <a href="kelola_user.php"><i class="bi bi-person-badge me-2"></i> Kelola User</a>
    <a href="laporan.php"><i class="bi bi-file-earmark-bar-graph me-2"></i> Laporan</a>
    <a href="logout.php"><i class="bi bi-box-arrow-right me-2"></i> Logout</a>
</div>

<!-- CONTENT -->
<div class="content p-4">

    <h2 class="fw-bold">Dashboard Admin</h2>
    <p>Selamat datang, <b><?php echo $_SESSION['username']; ?></b> 👋</p>

    <!-- RINGKASAN -->
    <div class="row mt-4">

        <div class="col-md-3">
            <div class="card shadow-sm border-0 bg-primary text-white">
                <div class="card-body">
                    <h5><i class="bi bi-people-fill me-2"></i> Total Pegawai</h5>
                    <h2>42</h2>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm border-0 bg-success text-white">
                <div class="card-body">
                    <h5><i class="bi bi-person-badge me-2"></i> Total User</h5>
                    <h2>12</h2>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm border-0 bg-warning text-dark">
                <div class="card-body">
                    <h5><i class="bi bi-file-earmark-text me-2"></i> Laporan Masuk</h5>
                    <h2>29</h2>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm border-0 bg-danger text-white">
                <div class="card-body">
                    <h5><i class="bi bi-calendar-check me-2"></i> Absensi Hari Ini</h5>
                    <h2>36</h2>
                </div>
            </div>
        </div>

    </div>

    <!-- GRAFIK (Dummy) -->
    <div class="card shadow-sm border-0 mt-4">
        <div class="card-header bg-white">
            <h5 class="fw-bold"><i class="bi bi-graph-up me-2"></i> Grafik Aktivitas</h5>
        </div>
        <div class="card-body">
            <img src="https://dummyimage.com/900x300/ced4da/6c757d&text=Grafik+Aktivitas+Pegawai" class="img-fluid rounded">
        </div>
    </div>

</div>

</body>
</html>
