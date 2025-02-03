<!-- Header -->
<?php include "../header.php" ?>

<div class="container">
<h1 class="text-center">Data untuk pemesanan</h1>
<a href="create.php" class='btn btn-outline-dark mb-2'>
<i class="bi bi-person-plus"></i> Tambah Data Baru</a>

<table class="table table-striped table-bordered table-hover">
    <thead class="table-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama</th>
            <th scope="col">Nama Makanan</th>
            <th scope="col">Jumlah Makanan</th>
            <th scope="col">Nama Minuman</th>
            <th scope="col">Jumlah Minuman</th>
            <th scope="col" colspan="3" class="text-center">CRUD Operations</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php
            $query = "SELECT * FROM makanan"; 
            // SQL query untuk mengambil semua data tabel
            $view_users = mysqli_query($conn, $query); 
            // Mengirim query ke database
            if (!$view_users) {
                die("Query gagal: " . mysqli_error($conn));
            }
            // Menampilkan semua data yang diambil dari database menggunakan while loop
            while ($row = mysqli_fetch_assoc($view_users)) {
                $id = $row['id'];
                $nama = $row['nama'];
                $namamakanan = $row['namamakanan'];
                $jumlahmakanan = $row['jumlahmakanan'];
                $namaminuman = $row['namaminuman'];
                $jumlahminuman = $row['jumlahminuman'];

                echo "<tr>";
                echo "<th scope='row'>{$id}</th>";
                echo "<td>{$nama}</td>";
                echo "<td>{$namamakanan}</td>";
                echo "<td>{$jumlahmakanan}</td>";
                echo "<td>{$namaminuman}</td>";
                echo "<td>{$jumlahminuman}</td>";
                echo "<td class='text-center'><a href='read.php?makanan_id={$id}' class='btn btn-primary'><i class='bi bi-eye'></i> Lihat</a></td>";
                echo "<td class='text-center'><a href='update.php?edit&makanan_id={$id}' class='btn btn-secondary'><i class='bi bi-pencil'></i> Edit</a></td>";
                echo "<td class='text-center'><a href='delete.php?delete={$id}' class='btn btn-danger'><i class='bi bi-trash'></i> Hapus</a></td>";
                echo "</tr>";
            }
            ?>
        </tr>
    </tbody>
</table>
</div>

<!-- Tombol Kembali ke Halaman Utama -->
<div class="container text-center mt-5">
    <a href="../index.php" class="btn btn-warning mt-5">Kembali</a>
</div>

<!-- Footer -->
<?php include "../footer.php" ?>
