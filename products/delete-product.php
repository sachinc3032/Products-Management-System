<?php

include "../config/database.php";

$id = $_GET['id'];

$query = "DELETE FROM products WHERE id=$id";

mysqli_query($conn,$query);

header("Location: products-list.php");

?>