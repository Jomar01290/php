<?php  
    include 'database.php';
?>

<?php 

$servername = "localhost";
    $username = "jeydiii";
    $password = "TT//y0.r)_BsB46Z";
    $db = "inventory";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//sql to delete a record
$sql = "DELETE FROM products WHERE product_id=".$_GET["id"];

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>

<a href="index.php" class='btn btn-danger'>Go back</a>