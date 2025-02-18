<?php
if (isset($_POST['category_id'])) {

    $tanggal = date('Y/m/d');
    $category_id = $_POST['category_id'];
    $task = $_POST['task'];
    $priority = $_POST['priority'];
    $status = $_POST['status'];

    $query = mysqli_query($koneksi, "INSERT INTO tasks (task, category_id, priority, status) 
    VALUES ('$task', '$category_id', '$priority', '$status')");
    if ($query) {
        echo '<script>alert("Tambah data berhasil")</script>';
    } else {
        echo '<script>alert("Tambah data Gagal!")</script>';
    }
}
?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Tugas</h1>
    <ol class="breadcrumb mb-4">

    </ol>
    <a href="?page=categories" class="btn btn-danger">kembali</a>
    <hr>
    <form method="post">
        <table class="table table-bordered">
            <tr>
                <td>Task</td>
                <td>:</td>
                <td><input class="form-control" type="text" name="task"></td>
            </tr>
            <tr>
                <td width="200">Category</td>
                <td width="1">:</td>
                <td><input class="form-control" type="text" name="category_id"></td>
            </tr>
            <tr>
                <td>Priority</td>
                <td><label class="form-label">:</label></td>
                <td><input for="priority" class="form-control" list="priorty" name="priority" id="priority">
                    <datalist id="tidak wajib">
                </td>
                <option value="bebas">
                <option value="kerjakan jika diperlukan">
                <option value="wajib">
                    </datalist></textarea>
                    </td>
            </tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td><input class="form-control" type="text" name="status"></td>
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