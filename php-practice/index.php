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
</head>
<body>
    <div class="container">
    <h1>Inventory System</h1>
    <p>Create, Read, Update and Delete</p>
    <a href="create.php">CREATE</a>
    
    <ul class="list-group">
        <?php
            $sql = "SELECT * FROM products";
            $conn = connectDB();
            $result = $conn->query($sql);
            
            
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<li class='list-group-item'>".$row["product_name"]."</li>";
            }
            } else {
            echo "0 results";
            }
            $conn->close();
            
        ?>

    </ul>

    
</body>
</html>