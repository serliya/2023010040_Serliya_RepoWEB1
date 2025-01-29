<!-- Header -->
<?php include '../header.php' ?>
<h1 class="text-center">Tambah Data Makanan</h1>
<div class="container">
    <?php
    if (isset($_POST['create'])) {
        $nama = $_POST['nama'];
        $namamakanan = $_POST['namamakanan'];
        $jumlahmakanan = $_POST['jumlahmakanan'];
        $namaminuman = $_POST['namaminuman'];
        $jumlahminuman = $_POST['jumlahminuman'];
        

        // Query SQL untuk menambahkan data ke tabel makanan
        $query = "INSERT INTO makanan (nama, namamakanan, jumlahmakanan, namaminuman, jumlahminuman) VALUES ('{$nama}', '{$namamakanan}', '{$jumlahmakanan}', '{$namaminuman}', '{$jumlahminuman}')";
        $add_data = mysqli_query($conn, $query);

        // Menampilkan pesan apakah query berhasil atau tidak
        if (!$add_data) {
            echo "<script type='text/javascript'>alert('Terjadi kesalahan: " . mysqli_error($conn) . "')</script>";
        } else {
            echo "<script type='text/javascript'>alert('Data berhasil ditambahkan!')</script>";
        }
    }
    ?>

    <form action="" method="post">
        <div class="form-group">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="namamakanan" class="form-label">Nama Makanan</label>
            <input type="text" name="namamakanan" class="form-control" required>    
        </div>
        <div class="form-group">
            <label for="jumlahmakanan" class="form-label">Jumlah Makanan</label>
            <input type="number" name="jumlahmakanan" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="namaminuman" class="form-label">Nama Minuman</label>
            <input type="text" name="namaminuman" class="form-control" required>    
        </div>
        <div class="form-group">
            <label for="jumlahminuman" class="form-label">Jumlah Minuman</label>
            <input type="number" name="jumlahminuman" class="form-control" required>
        </div>
        <div class="form-group">
            <input type="submit" name="create" class="btn btn-primary mt-2" value="Tambah">
        </div>
    </form>
</div>

<!-- Tombol Kembali ke Halaman Sebelumnya -->
<div class="container text-center mt-5">
    <a href="../view/memesan.php" class="btn btn-warning mt-5">Kembali</a>
</div>

<!-- Footer -->
<?php include "../footer.php" ?>
