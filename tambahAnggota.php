<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <title>Tambah Buku</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <h1>Tambah Anggota</h1>
        <nav>
            <ul>
                <li><a href="anggota.php">Tambah Anggota</a></li>
            </ul>
        </nav>
    </header>
    <section>
        <div class="form-container">
            <!-- Formulir Tambah Data -->
            <form action="proses_tambah_anggota.php" method="POST" class="addform">
                <div class="form-group">
                    <label for="pemijamID">PeminjamID:</label>
                    <input type="text" id="peminjamID" name="peminjamID" required>
                </div>
                <div class="form-group">
                    <label for="NamaPeminjam">Nama Peminjam:</label>
                    <input type="text" id="NamaPeminjam" name="NamaPeminjam">
                </div>
                <div class="form-group">
                    <label for="Alamat">Alamat:</label>
                    <input type="text" id="Alamat" name="Alamat">
                </div>
                <div class="form-group">
                    <label for="NoTelepon">No Telepon:</label>
                    <input type="text" id="NoTelepon" name="NoTelepon">
                </div>
                <button type="submit">Tambah</button>
            </form>
        </div>
    </section>
    <script src="script.js"></script>
</body>

</html