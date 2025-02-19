<style>
    .navbar {
        background: linear-gradient(135deg, rgb(66, 66, 66), rgb(139, 17, 17));
    }

    .breadcrumb {
        background: #f8f9fa;
        border-radius: 5px;
        padding: 10px;
    }

    .btn-primary {
        background: #117a8b;
        border-color: #117a8b;
    }

    .btn-primary:hover {
        background: #0f6a7a;
        border-color: #0d5c6a;
    }

    .table th {
        background: #17a2b8;
        color: white;
    }

    .table td,
    .table th {
        text-align: center;
    }
</style>

<div class="container-fluid px-4">
    <h1 class="mt-4">kategori</h1>

    <a href="?page=tambahkategori" class="btn btn-primary">+ Tambah kategori</a>
    <hr>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Kategori</th>
            <th>Aksi</th>
        </tr>

        <?php
        $no = 1;
        $query = mysqli_query($koneksi, "SELECT * FROM categories");
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['tanggal_tambah']; ?></td>
                <td><?php echo $data['category']; ?></td>
                <td>
                    <a href="?page=hapuskategori&id=<?php echo $data['id_category']; ?>" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</div>