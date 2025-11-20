<?php
session_start();
if ($_SESSION['level'] == "") {
    header("location:index.php?pesan=gagal");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profil Pegawai</title>

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
        .profile-photo {
            width:120px; height:120px; border-radius:50%; object-fit:cover;
        }
    </style>
</head>

<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <h4 class="text-center fw-bold mb-4">Pegawai</h4>

    <a href="beranda.php"><i class="bi bi-house-door-fill me-2"></i> Beranda</a>
    <a href="profil.php" class="active"><i class="bi bi-person-vcard-fill me-2"></i> Profil Saya</a>
    <a href="absensi.php"><i class="bi bi-calendar-check-fill me-2"></i> Absensi</a>
    <a href="laporan_kerja.php"><i class="bi bi-clipboard-data-fill me-2"></i> Laporan Kerja</a>
    <a href="logout.php"><i class="bi bi-box-arrow-right me-2"></i> Logout</a>
</div>


<!-- CONTENT -->
<div class="content p-4">

    <h2 class="fw-bold mb-4">Profil Saya</h2>

    <div class="card shadow-sm border-0">
        <div class="card-body">

            <div class="text-center mb-4">
                <img src="https://via.placeholder.com/120" class="profile-photo shadow-sm mb-3">
                <h4 class="fw-bold"><?php echo $_SESSION['username']; ?></h4>
                <p class="text-muted">Level: <?php echo $_SESSION['level']; ?></p>
            </div>

            <hr>

            <h5>Informasi Akun</h5>
            <table class="table mt-3">
                <tr>
                    <th>Username</th>
                    <td><?php echo $_SESSION['username']; ?></td>
                </tr>
                <tr>
                    <th>Level</th>
                    <td><?php echo $_SESSION['level']; ?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>belum diisi</td>
                </tr>
                <tr>
                    <th>No. Telepon</th>
                    <td>belum diisi</td>
                </tr>
            </table>

        </div>
    </div>

</div>

</body>
</html>
