<style>
    .card {
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    .navbar {
        background: linear-gradient(135deg, rgb(66, 66, 66), rgb(139, 17, 17));
    }

    .sb-sidenav {
        background: linear-gradient(135deg, rgb(60, 61, 61), rgb(139, 17, 17));
    }

    .sb-sidenav a {
        color: white !important;
    }

    .sb-sidenav-footer {
        background: rgb(124, 11, 11) !important;
        color: white;
    }

    .breadcrumb {
        background: #f8f9fa;
        border-radius: 5px;
        padding: 10px;
    }
</style>

<div class="container-fluid px-4 text-center">
    <h1 class="mt-4 text-info">Dashboard</h1>

    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-dark mb-4">
                <div class="card-body">
                    <?php echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM tasks")) ?> Total tugas
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-dark stretched-link" href="categories.php">View Details</a>
                    <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-dark mb-4">
                <div class="card-body">
                    <?php echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM categories")) ?> Total Kategori
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-dark stretched-link" href="categories.php">View Details</a>
                    <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
</div>