<?php  
    include 'database.php';
?>

<?php  
if(isset($_POST["productname"]) && isset($_POST["productdescription"]) 
&& isset($_POST["productstocks"])){

    $name = $_POST["productname"];
    $description = $_POST["productdescription"];
    $stocks = $_POST["productstocks"];

    $conn = connectDB();
    $sql = "insert into products (product_name, product_description, stocks)
    VALUES ('".$name."', '".$description."','".$stocks."')";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <h1>Create</h1>
    <a href="index.php">HOME</a>
    
    <form method="POST" action="create.php">
        <label>Product Name</label><br>
        <input type="text" name="productname"><br><br>

        <label>Description</label><br>
        <input type="text" name="productdescription"><br><br>

        <label>Stocks</label><br>
        <input type="number" name="productstocks"><br><br>

        <input type="submit" class="btn btn-primary" value="submit">
    </form>
  
    <?php
     
        if(isset($_POST["productname"])){

        }
    ?>

    
</body>
</html>