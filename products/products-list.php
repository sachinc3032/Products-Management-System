<?php
include "../config/database.php";
include "../includes/header.php";
include "../includes/sidebar.php";
?>

<h3 class="mb-4">Products List</h3>

<a href="add-product.php" class="btn btn-success mb-3">
<i class="fa fa-plus"></i> Add Product
</a>

<div class="card">
<div class="card-body">

<div class="table-responsive">

<table class="table table-hover table-bordered">

<thead class="table-dark">

<tr>
<th>ID</th>
<th>Name</th>
<th>Price</th>
<th>Quantity</th>
<th>Category</th>
<th>Action</th>
</tr>

</thead>

<tbody>

<?php

$query = "SELECT * FROM products";
$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($result)){

?>

<tr>

<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td>₹ <?php echo $row['price']; ?></td>
<td><?php echo $row['quantity']; ?></td>
<td><?php echo $row['category']; ?></td>

<td>

<a href="edit-product.php?id=<?php echo $row['id']; ?>"
class="btn btn-primary btn-sm">
<i class="fa fa-edit"></i>
</a>

<a href="delete-product.php?id=<?php echo $row['id']; ?>"
class="btn btn-danger btn-sm"
onclick="return confirm('Delete this product?')">
<i class="fa fa-trash"></i>
</a>

</td>

</tr>

<?php } ?>

</tbody>

</table>

</div>

</div>
</div>

<?php include "../includes/footer.php"; ?>