<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM categories WHERE id_category=$id");
if ($query) {
    echo '<script>alert("Hapus data berhasil"); location.href="?page=kategori"</script>';
} else {
    echo '<script>alert("Hapus data Gagal!")</script>';
}
