<?php
session_start();
if ($_SESSION['level'] != "admin") { header("location:index.php?pesan=gagal"); }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kelola User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body{ background:#f4f6f9; }
        .content{ margin-left:240px; }
        .sidebar{
            height:100vh; background:#0d6efd; position:fixed;
            width:230px; color:white; padding-top:20px;
        }
        .sidebar a{ color:#eee; padding:12px 20px; display:block; text-decoration:none; }
        .sidebar a:hover{ background:rgba(255,255,255,0.2); }
    </style>
</head>
<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <h4 class="text-center fw-bold mb-4">Admin</h4>

    <a href="admin_dashboard.php"><i class="bi bi-speedometer2 me-2"></i> Dashboard</a>
    <a href="data_pegawai.php"><i class="bi bi-people-fill me-2"></i> Data Pegawai</a>
    <a href="kelola_user.php" class="active"><i class="bi bi-person-badge me-2"></i> Kelola User</a>
    <a href="laporan.php"><i class="bi bi-file-earmark-bar-graph me-2"></i> Laporan</a>
    <a href="logout.php"><i class="bi bi-box-arrow-right me-2"></i> Logout</a>
</div>

<div class="content p-4">
    <h2 class="fw-bold mb-4">Kelola User</h2>

    <a href="#" class="btn btn-primary mb-3"><i class="bi bi-plus-circle"></i> Tambah User</a>

    <div class="card shadow-sm border-0">
        <div class="card-body">
            <table class="table table-striped">
                <thead class="table-primary">
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Level</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>1</td>
                        <td>admin123</td>
                        <td>Admin</td>
                        <td><span class="badge bg-success">Aktif</span></td>
                        <td>
                            <button class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></button>
                            <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>rizky</td>
                        <td>Pegawai</td>
                        <td><span class="badge bg-success">Aktif</span></td>
                        <td>
                            <button class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></button>
                            <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>

                <tr>
                        <td>3</td>
                        <td>ratna</td>
                        <td>pegawai</td>
                        <td><span class="badge bg-success">Aktif</span></td>
                        <td>
                            <button class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></button>
                            <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>