<?php
if (isset($_POST['category_id'])) {

    $idcategory = $_POST['category_id'];
    $tanggal = date('Y/m/d');
    $category = $_POST['category'];
    $userid = $_SESSION['user_id'];


    $query = mysqli_query($koneksi, "INSERT INTO categories (category_id, category, user_id) 
    VALUES ('$tanggal','$idcategory,'$category,'$userid')");
    if ($query) {
        echo '<script>alert("Tambah Kategori berhasil")
        location.href="?page=kategori"
        </script>';
    } else {
        echo '<script>alert("Tambah Kategori Gagal!")</script>';
    }
}
?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Kategori</h1>
    <ol class="breadcrumb mb-4">

    </ol>
    <a href="?page=kategori" class="btn btn-danger">kembali</a>
    <hr>
    <form method="post">
        <table class="table table-bordered">
            <tr>
                <td width="200">Category</td>
                <td width="1">:</td>
                <td><input class="form-control" type="text" name="category"></td>
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