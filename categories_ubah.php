<?php
$id = $_GET['id'];
if (isset($_POST['nama_produk'])) {

    $id       = $_POST['id'];
    $tanggal = $_POST['category_id'];
    $username = $_POST['category_id'];
    $password = $_POST['task'];
    $status = $_POST['status'];
    


    $query = mysqli_query($koneksi, "UPDATE categories set category_id ='$username', task='$password', status='$stock' WHERE user_id=$id");
    if ($query) {
        echo '<script>alert("Ubah data berhasil")</script>';
    } else {
        echo '<script>alert("Ubah data Gagal!")</script>';
    }
}
$query = mysqli_query($koneksi, "SELECT*FROM categories WHERE user_id=$id");
$data = mysqli_fetch_array($query);
?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Tasks</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">tasks</li>
    </ol>
    <a href="?page=categories" class="btn btn-danger">kembali</a>
    <hr>
    <form method="post">
        <table class="table table-bordered">
            <tr>
                <td width="200">Category</td>
                <td width="1">:</td>
                <td><input class="form-control" value="<?php echo $data['category_id']; ?>" type="text" name="category_id"></td>
            </tr>
            <tr>
                <td>Tasks</td>
                <td>:</td>
                <td><textarea name="harga" rows="5" class="form-control"><?php echo $data['task']; ?></textarea>
                </td>
            </tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td><input class="form-control" type="number" step="0" value="<?php echo $data['status']; ?>" name="status"></td>
            </tr>
            <tr>
                <td> </td>
                <td> </td>
                <td>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="submit" class="btn btn-danger">Reset</button>
                </td>
            </tr>
        </table>
    </form>
</div>