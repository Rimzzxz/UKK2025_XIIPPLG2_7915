<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM tasks WHERE category_id=$id");
if ($query) {
    echo '<script>alert("Hapus data berhasil"); location.href="?page=categories"</script>';
} else {
    echo '<script>alert("Hapus data Gagal!")</script>';
}
