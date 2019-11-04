<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/style.css">
    <title>Add</title>
</head>

<body>
    <div class="content">
        <h1>Add Information Of Product In Here</h1>
        <?php 
        require("connect.php");   
        if(isset($_POST["submit"]))
            {
                $name = $_POST["product_name"];
                $price = $_POST["price"];
                $description = $_POST["description"];
                $image=$_FILES['image_link']['name'];
                $hinhanh_tmp=$_FILEs['image_link']['tmp_name'];
                move_uploaded_file($hinhanh_tmp,'./uploads/'.$hinhanh);
                if ($name == ""||$price == ""|| $image == ""|| $description == "") 
                    {
                        ?>
                        <script>
                            alert("Product information should not be blank!!");
                        </script>
                        <?php
                    }
                else
                    {
                        $sql = "select * from product where product_name='$name'";
                        $query = pg_query($conn, $sql);
                        if(pg_num_rows($query)>0)
                        {
                        ?> 
                            <script>
                                alert("The product is available!!");
                            </script>
                        <?php
                        }
                        else
                        {
                            $sql = "INSERT INTO product(product_name, price,image_link, description) VALUES ('$name','$price','$image','$description')";
                            pg_query($conn,$sql);
                            ?> 
                                <script>
                                    alert(" Successful!");
                                    window.location.href = "/managing.php";
                                </script>
                            <?php
                        }
                    }
            }
			?>
        <form  action="add.php" method="POST" enctype="multipart/form-data">
            <input type="text" width="120px" height="30" name="proname" placeholder="Name"> <br>
            <input type="text" width="120px" height="30" name="price" placeholder="Price"> <br>
            <input type="text" width="120px" height="30" name="descrip" placeholder="Description"> <br>
            <input type="file" name="hinhanh" placeholder="image" border = "1px"><br>
            <button type="submit" value="Add" name="submit">Add Information</button>
        </form>
        <br>
        <button><a href="/managing.php">Back</a></button>
    </div>
</body>

</html>