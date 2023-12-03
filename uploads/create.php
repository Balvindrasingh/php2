<?php
// Include database connection
include 'db.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize input data
    $productName = mysqli_real_escape_string($conn, $_POST['productName']);
    $productDescription = mysqli_real_escape_string($conn, $_POST['productDescription']);
    $productPrice = $_POST['productPrice'];

    // Insert new product into the database
    $query = "INSERT INTO products (productName, productDescription, productPrice) VALUES ('$productName', '$productDescription', '$productPrice')";
    $result = mysqli_query($conn, $query);

    // Redirect to the homepage after adding the product
    header('Location: index.php');
    exit();
}

// Close database connection
mysqli_close($conn);
?>
