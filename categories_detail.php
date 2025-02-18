<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT*FROM tasks WHERE user_id=$id");
$data = mysqli_fetch_array($query);

?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Detail tasks</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Detail categories</li>
    </ol>
    <a href="?page=categories" class="btn btn-danger">kembali</a>
    <hr>
    <form method="post">
        <table class="table table-bordered">
            <tr>
                <td width="200">Category</td>
                <td width="1">:</td>
                <td>
                    <?php
                    echo $data['category_id'];
                    ?>
                </td>
            </tr>
            <?php
            $pro = mysqli_query($koneksi, "SELECT * FROM categories 
           LEFT JOIN tasks ON user.user_id = category_id.user_id 
           WHERE category_id = $id");

            while ($pel = mysqli_fetch_array($pro)) {
            ?>
                <tr>
                    <td><?php echo $pel['category_id']; ?></td>
                    <td>:</td>
                    <td>
                        task : <?php echo $pel['task']; ?>
                        <hr>
                        Jumlah : <?php echo $pel['user_id']; ?>
                        <hr>
                    </td>
                </tr>
            <?php
            }
            ?>
            <td>Total</td>
            <td>:</td>
            <td>
                <?php echo $data['category_id']; ?>
            </td>
            </tr>
        </table>
    </form>
</div>