<?php
$id = $_GET['id'];
if (isset($_POST['category_id'])) {


    $tanggal = date('Y/m/d');
    $category_id = $_POST['category_id'];
    $task = $_POST['task'];
    $priority = $_POST['priority'];
    $status = $_POST['status'];


    $query = mysqli_query($koneksi, "UPDATE tasks set category_id ='$category_id', task='$task', status='$status' WHERE user_id=$id");
    if ($query) {
        echo '<script>alert("Ubah data berhasil")</script>';
    } else {
        echo '<script>alert("Ubah data Gagal!")</script>';
    }
}
$query = mysqli_query($koneksi, "SELECT*FROM tasks WHERE user_id=$id");
$data = mysqli_fetch_array($query);
?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Tasks</h1>

    <a href="?page=categories" class="btn btn-danger">kembali</a>
    <hr>
    <form method="post">
        <table class="table table-bordered">
            <tr>
                <td>Tasks</td>
                <td>:</td>
                <td><textarea name="task" rows="5" class="form-control"><?php echo $data['task']; ?></textarea>
                </td>
            </tr>
            <tr>
                <td width="200">Category</td>
                <td width="1">:</td>
                <td><input class="form-control" value="<?php echo $data['category_id']; ?>" type="text" name="category_id"></td>
            </tr>
            <tr>
                <td>Priority</td>
                <td>:</td>
                <td><select class="form-control" name="priority">
                        <option value="1">Tidak Perlu</option>
                        <option value="2">Bebas</option>
                        <option value="3">Wajib</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td><select class="form-control" name="status">
                        <option value="complete">selesai</option>
                        <option value="not complete">belum selesai</option>
                    </select></td>
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