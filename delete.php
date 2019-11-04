<?php
require("connect.php");
$id = $_POST['product_id'];
$sql = "DELETE FROM product WHERE product_id = '$id'";
pg_query($conn,$sql); 
header("Location: /managing.php");
?>
