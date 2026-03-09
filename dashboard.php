<?php 
include "config/database.php";
include "includes/header.php";
include "includes/sidebar.php";

/* total products */

$query = "SELECT COUNT(*) as total FROM products";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);

$total_products = $row['total'];

?>

<h3 class="dashboard-title mb-4">Dashboard Overview</h3>

<div class="row g-4">

<!-- Total Products -->

<div class="col-md-4">

<div class="card dashboard-card card-products">

<div class="card-body">

<div class="d-flex justify-content-between align-items-center">

<div>

<h6>Total Products</h6>

<h2><?php echo $total_products; ?></h2>

</div>

<div class="icon-box">

<i class="fa-solid fa-box"></i>

</div>

</div>

</div>

</div>

</div>

<!-- Add Product -->

<div class="col-md-4">

<div class="card dashboard-card card-add">

<div class="card-body">

<div class="d-flex justify-content-between align-items-center">

<div>

<h6>Add Product</h6>

<a href="products/add-product.php" class="btn btn-light btn-sm mt-2">
Add Now
</a>

</div>

<div class="icon-box">

<i class="fa-solid fa-plus"></i>

</div>

</div>

</div>

</div>

</div>

<!-- Product List -->

<div class="col-md-4">

<div class="card dashboard-card card-list">

<div class="card-body">

<div class="d-flex justify-content-between align-items-center">

<div>

<h6>Products List</h6>

<a href="products/products-list.php" class="btn btn-dark btn-sm mt-2">
View Products
</a>

</div>

<div class="icon-box">

<i class="fa-solid fa-list"></i>

</div>

</div>

</div>

</div>

</div>

</div>

<?php include "includes/footer.php"; ?>