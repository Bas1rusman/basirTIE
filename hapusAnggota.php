<?php
include('koneksi.php');
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // Mendapatkan ID buku dari parameter URL
    $PeminjamID = $_GET['id'];
    // Query untuk memeriksa apakah buku sedang dipinjam
    $queryCekPeminjam = "SELECT COUNT(*) as count FROM Peminjam WHERE NamaPeminjam = $PeminjamID";
    $resultCekPeminjam = mysqli_query($koneksi, $queryCekPeminjam);
    $rowCekPeminjam = mysqli_fetch_assoc($resultCekPeminjam);
    $jumlahPeminjam = $rowCekPeminjam['count'];

    if ($jumlahPeminjam > 0) {
        // Jika buku sedang dipinjam, tampilkan pesan dan redirect ke halaman index.php
        echo "Buku sedang dalam peminjaman. Tidak dapat dihapus.";
        header("refresh:3;url=anggota.php"); // Redirect ke halaman index.php setelah 3 detik
        exit();
    } else {
        // Jika buku tidak sedang dipinjam, lanjutkan proses penghapusan
        $queryHapus = "DELETE FROM Peminjam WHERE PeminjamID = $PeminjamID";
        // Eksekusi query
        if (mysqli_query($koneksi, $queryHapus)) {
            // Jika berhasil, redirect ke halaman index.php
            header("Location: anggota.php");
            exit();
        } else {
            // Jika terjadi error, tampilkan pesan error
            echo "Error: " . $queryHapus . "<br>" .
                mysqli_error($koneksi);
        }
    }
} else {
    // Jika bukan metode GET, redirect ke halaman index.php
    header("Location: anggota.php");
    exit();

}
?>