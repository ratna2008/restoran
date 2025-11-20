<?php
// Mengaktifkan session
session_start();

// Menghubungkan ke database
$host = "localhost";
$user = "root";         // username database (default XAMPP: root)
$pass = "";             // password database (default XAMPP kosong)
$db   = "multii_userr"; // nama database

$koneksi = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if(!$koneksi){
    die("Koneksi gagal: ".mysqli_connect_error());
}

// Menangkap data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// Query login
$sql = "SELECT * FROM userr WHERE username='$username' AND password='$password'";
$login = mysqli_query($koneksi, $sql);

// Cek apakah query berhasil
if(!$login){
    die("Query Error: ".mysqli_error($koneksi));
}

// Menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

if($cek > 0){
    $data = mysqli_fetch_assoc($login);

    // Login berdasarkan level
    if($data['level'] == "admin"){
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";
        header("location:halaman_admin.php");
        exit();
    } else if($data['level'] == "pegawai"){
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "pegawai";
        header("location:halaman_pegawai.php");
        exit();
    } else if($data['level'] == "pengurus"){
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "pengurus";
        header("location:halaman_pengurus.php");
        exit();
    } else {
        header("location:index.php?pesan=gagal");
        exit();
    }

} else {
    // Username/password tidak ditemukan
    header("location:index.php?pesan=gagal");
    exit();
}
?>
