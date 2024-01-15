<?php
include('koneksi.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Mengambil nilai dari formulir tambah.php
    $peminjamID = $_POST['PeminjamID'];
    $namaPeminjam = $_POST['NamaPeminjam'];
    $alamat = $_POST['Alamat'];
    $noTelepon = $_POST['NoTelepon'];
    // Query untuk menambahkan data ke dalam tabel buku
    $queryTambah = "INSERT INTO Peminjam (PeminjamID, NamaPeminjam, Alamat, NoTelepon) VALUES ('$peminjamID', '$namaPeminjam', '$alamat', '$noTelepon')";
    // Eksekusi query
    if (mysqli_query($koneksi, $queryTambah)) {
        // Jika berhasil, redirect ke halaman index.php
        header("Location: anggota.php");
        exit();
    } else {
        // Jika terjadi error, tampilkan pesan error
        echo "Error: " . $queryTambah . "<br>" .
            mysqli_error($koneksi);
    }
} else {
    // Jika bukan metode POST, redirect ke halaman tambah.php
    header("Locattion: tambahAnggota.php");
    exit();
}
?>