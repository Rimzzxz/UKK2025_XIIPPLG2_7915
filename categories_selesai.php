<?php
$id = intval($_GET['id']); 
$query = mysqli_query($koneksi, "UPDATE tasks SET status='1' WHERE id_task=$id");

if ($query) {
    echo '<script>alert("Tugas berhasil diselesaikan"); location.href="?page=categories"</script>';
} else {
    echo '<script>alert("Gagal menyelesaikan tugas!")</script>';
}
?>