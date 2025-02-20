<?php
if (isset($_POST['category_id'])) {

    $tanggal = date('Y/m/d');
    $category_id = $_POST['category_id'];
    $task = $_POST['task'];
    $priority = $_POST['priority'];


    $query = mysqli_query($koneksi, "INSERT INTO tasks (tanggal_date, task, category_id, priority) 
    VALUES ('$tanggal','$task', '$category_id', '$priority')");
    if ($query) {
        echo '<script>alert("Tambah data berhasil")
        location.href="?page=categories"
        </script>';
    } else {
        echo '<script>alert("Tambah data Gagal!")</script>';
    }
}
?>
<?php
$query_category = mysqli_query($koneksi, "SELECT * FROM categories");
$categories = [];   
while ($row = mysqli_fetch_assoc($query_category)) {
    $categories[] = $row;
}
?>
<div class="container-fluid px-4">
    <h1 class="mt-4">To do List</h1>
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
                <td>Category</td>
                <td>:</td>
                <td>
                    <select class="form-control" name="category_id">
                        <?php foreach ($categories as $pel) { ?>
                            <option value="<?php echo $pel['category_id']; ?>">
                                <?php echo $pel['category']; ?>
                            </option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Priority</td>
                <td>:</td>
                <td>
                    <select class="form-control" name="priority">
                        <option value="1">Tidak Perlu</option>
                        <option value="2">Bebas</option>
                        <option value="3">Wajib</option>
                    </select>
                </td>
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