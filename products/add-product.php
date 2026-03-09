<?php
include "../config/database.php";
include "../includes/header.php";
include "../includes/sidebar.php";

if(isset($_POST['add_product'])){

$name = $_POST['name'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$category = $_POST['category'];

$query = "INSERT INTO products(name,price,quantity,category)
VALUES('$name','$price','$quantity','$category')";

mysqli_query($conn,$query);

echo "<div class='alert alert-success'>Product Added</div>";

}
?>

<h3>Add Product</h3>

<div class="card">

<div class="card-body">

<form method="post">

<div class="mb-3">

<label>Product Name</label>

<input type="text" name="name" class="form-control" required>

</div>

<div class="mb-3">

<label>Price</label>

<input type="number" name="price" class="form-control" required>

</div>

<div class="mb-3">

<label>Quantity</label>

<input type="number" name="quantity" class="form-control" required>

</div>

<div class="mb-3">

<label>Category</label>

<input type="text" name="category" class="form-control" required>

</div>

<button type="submit" name="add_product" class="btn btn-primary">
Add Product
</button>

</form>

</div>

</div>

<?php include "../includes/footer.php"; ?>