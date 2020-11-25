<?php
$ID = $_GET['ID'];
$name = $_GET['name'];
$price = $_GET['price'];
$quantity = $_GET['quantity'];
$calorie = $_GET['calorie'];

//connect to database
$servername = "sql305.epizy.com";
$username = "epiz_27303836";
$password = "lMD6UTKBjl6OMY8";
$database = "epiz_27303836_food_menu";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = "INSERT INTO menu (ID, name, price, quantity, calorie)
VALUES ('$ID','$name','$price','$quantity','$calorie')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

?>