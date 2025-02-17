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
    <h1 class="mt-4">Categories</h1>


    <a href="?page=tugas_tambah" class="btn btn-primary">+ Tambah Data</a>
    <hr>
    <table class="table table-bordered">
        <tr>
            <th>Tanggal</th>
            <th>Categories</th>
            <th>Tugas Pekerja</th>
            <th>Aksi</th>
        </tr>

        <?php
        $query = mysqli_query($koneksi, "SELECT*FROM pekerja");
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $data['tanggal_tugas']; ?></td>
                <td><?php echo $data['nama_pekerja']; ?></td>
                <td><?php echo $data['task']; ?></td>
                <td>
                    <a href="?page=tugas_detail&&id=<?php echo $data['id_pekerja']; ?>" class="btn btn-secondary">Detail</a>
                    <a href="?page=tugas_hapus&&id=<?php echo $data['id_pekerja']; ?>" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</div>