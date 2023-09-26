<?php  
    include 'database.php';
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Php Practice</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
    .btn{
        margin: 2px;
    }
</style>
</head>
<body>
    <div class="container">
    <h1>Inventory System</h1>
    <p>Create, Read, Update and Delete</p>
    <a href="create.php" class='btn btn-success' class='glyphicon-plus'>Add Item</a> <br><br>

    <ul class="list-group">
        <?php
            
            $conn = connectDB();
            $result = $conn->query("SELECT * FROM products");
             
            
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<li class='list-group-item'>"
                .$row["product_name"]
                ."<a href='update.php?id=".$row["product_id"]."'  class='btn btn-primary btn-xs pull-right' >Edit</a>"
                ."<a href='delete.php?id=".$row['product_id']."'  class='btn btn-danger btn-xs pull-right' >Delete</a>"
                ."</li>";
            }
            } else {
            echo "0 results";
            }
            $conn->close();
            
        ?>
    </ul>

    
</body>
</html>