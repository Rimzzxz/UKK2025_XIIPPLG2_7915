<?php
 
include 'koneksi.php';  
$id = isset($_GET['id']) ? $_GET['id'] : null;
if ($id) {
 
    $query = mysqli_query($koneksi, "SELECT * FROM users WHERE id = '$id'");

   
    if ($query && mysqli_num_rows($query) > 0) {
        $data = mysqli_fetch_assoc($query);
    } else {
        echo "Data tidak ditemukan!";
        exit;
    }
} else {
    echo "ID tidak tersedia!";
    exit;
}
?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Profile</h1>
    <hr>
    <form method="post">
        <table class="table table-bordered">
            <tr>
                <td width="200">Nama</td>
                <td width="1">:</td>
                <td>
                    <?= htmlspecialchars($data['nama_pelanggan']) ?>
                </td>
            </tr>
            <tr>
                <td width="200">Username</td>
                <td width="1">:</td>
                <td>
                    <?= htmlspecialchars($data['username']) ?>
                </td>
            </tr>
            <tr>
                <td width="200">Email</td>
                <td width="1">:</td>
                <td>
                    <?= htmlspecialchars($data['email']) ?>
                </td>
            </tr>
        </table>
    </form>
</div>
