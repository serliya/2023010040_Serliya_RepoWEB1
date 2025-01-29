<!-- Header -->
<?php include '../header.php' ?>
<h1 class="text-center">Detail Data</h1>
<div class="container">
    <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Nama Makanan</th>
                <th scope="col">Jumlah Makanan</th>
                <th scope="col">Nama Minuman</th>
                <th scope="col">Jumlah Minuman</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php

// Memeriksa apakah variabel diset menggunakan fungsi 'isset()'
// Memproses data form saat form disubmit
if (isset($_GET['makanan_id'])) {
    $makananid = $_GET['makanan_id'];

    // Query SQL untuk mengambil data berdasarkan id=$makananid
    $query = "SELECT * FROM makanan WHERE id = {$makananid} ";
    $view_data = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($view_data)) {
        $id = $row['id'];
        $nama = $row['nama'];
        $namamakanan = $row['namamakanan'];
        $jumlahmakanan = $row['jumlahmakanan'];
        $namaminuman = $row['namaminuman'];
        $jumlahminuman = $row['jumlahminuman'];
        echo "<tr>";
        echo "<td>{$id}</td>";
        echo "<td>{$nama}</td>";
        echo "<td>{$namamakanan}</td>";
        echo "<td>{$jumlahmakanan}</td>";
        echo "<td>{$namaminuman}</td>";
        echo "<td>{$jumlahminuman}</td>";
        echo "</tr>";
    }
}
?>
</tr>
</tbody>
</table>
</div>

<!-- Tombol Kembali ke Halaman Sebelumnya -->
<div class="container text-center mt-5">
    <a href="../view/memesan.php" class="btn btn-warning mt-5">Kembali</a>
</div>

<!-- Footer -->
<?php include "../footer.php" ?>
