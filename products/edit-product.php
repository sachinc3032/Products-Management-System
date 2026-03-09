<?php
include "../config/database.php";
include "../includes/header.php";
include "../includes/sidebar.php";

$id = $_GET['id'];

$query = "SELECT * FROM products WHERE id=$id";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);

if(isset($_POST['update_product'])){

$name = $_POST['name'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$category = $_POST['category'];

$update = "UPDATE products SET
name='$name',
price='$price',
quantity='$quantity',
category='$category'
WHERE id=$id";

mysqli_query($conn,$update);

echo "<div class='alert alert-success'>Product Updated</div>";

}
?>

<h3>Edit Product</h3>

<div class="card">
<div class="card-body">

<form method="post">

<div class="mb-3">
<label>Name</label>
<input type="text" name="name" class="form-control"
value="<?php echo $row['name']; ?>">
</div>

<div class="mb-3">
<label>Price</label>
<input type="number" name="price" class="form-control"
value="<?php echo $row['price']; ?>">
</div>

<div class="mb-3">
<label>Quantity</label>
<input type="number" name="quantity" class="form-control"
value="<?php echo $row['quantity']; ?>">
</div>

<div class="mb-3">
<label>Category</label>
<input type="text" name="category" class="form-control"
value="<?php echo $row['category']; ?>">
</div>

<button name="update_product" class="btn btn-primary">
Update Product
</button>

</form>

</div>
</div>

<?php include "../includes/footer.php"; ?>