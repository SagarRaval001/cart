<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Admin Dashboard</title>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Admin Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <button style="margin-left: 90%;" class="btn btn-danger" type="button" aria-expanded="false" aria-label="Toggle navigation">
          Logout
        </button>
        </div>
      </div>
    </nav>

    <!-- Admin Sidebar -->
    <div class="container-fluid">
      <div class="row mt-5">
        <div class="col-2">
          <!-- Sidebar -->
          <h3>Menu</h3>
          <ul class="nav flex-column" id="admin-sidebar">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="dashboard.php">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="customer.php">Customers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="product.php">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="category.php">Category</a>
            </li>
          </ul>
        </div>
        <div class="col-10">
      