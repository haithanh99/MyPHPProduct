<?php 
require_once './connect.php';  
if(isset($_POST["username"]) && isset($_POST["password"]))
{
	$user = $_POST["username"];
	$pass = $_POST["password"];
	$sql ="SELECT * FROM dangnhap WHERE username = '$user' AND password= '$pass'";
	$rows = pg_query($sql);
	if(pg_num_rows($rows)==1) { ?>
		<script>
            alert("Congratulations Login Successfully!!");
        </script>
    <?php
    } else { 
        ?>
            <script>
                alert(" Username Or Password Is Wrong");
                window.location.href = "/index1.php";
            </script>
        <?php }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/style.css">
    <title>Document</title>
</head>

<body>
    <div class="content1">
        <h1>Managing Product Information</h1>
        <table border="1px">
            <tr>
                <th class="tit">Product ID</th>
                <th class="tit">Product Name</th>
                <th class="tit">Price</th>
                <th class="tit">Product Description</th>
                <th class="tit">Image</th>
                <th class="tit">Brand</th>
                <th class="tit">Category</th>
                <th class="tit">Supplier</th>

                <th class="tit">Delete Product</th>
            </tr>

            <?php
            require_once './database.php';
            $sql = "SELECT * FROM product";
            $stmt = $pdo->prepare($sql);
            foreach ($pdo->query($sql) as $row) {
            ?>
                <tr>
                    <td class="info"><?php echo $row['product_id']?></td> 
                    <td class="info"><?php echo $row['product_name']?></td> 
                    <td class="info"><?php echo $row['price']?></td> 
                    <td class="info"><?php echo $row['description']?></td> 
                    <td class="info"><img src="<?php echo $row['image_link']; ?>" width="100" height="100"></td> 
                    <td class="info"><?php echo $row['brand']?></td>
                    <td class="info"><?php echo $row['category_id']?></td>
                    <td class="info"><?php echo $row['supplier_id']?></td>
                    <td class="info">
                        <form action='/delete.php' method="POST">
                            <input type='hidden' name='product_id' value='<?php echo $row['product_id']?>'>
                            <input class="edit-btn" type='submit' value='Delete'>
                        </form> <br>

                        
                    </td>
                </tr>
            <?php
            }
            ?> 
        </table>
        <br>

        <button ><a href="/add.php">Add New</a></button>
        <br><br>
    </div>
</body>

</html>