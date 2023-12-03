<?php
// Include database connection
include 'db.php';

// Fetch products from the database
$query = "SELECT * FROM products";
$result = mysqli_query($conn, $query);

// Display products
if (mysqli_num_rows($result) > 0) {
    echo '<ul>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<li>' . $row['productName'] . ' - $' . $row['productPrice'] . '</li>';
    }
    echo '</ul>';
} else {
    echo 'No products available.';
}

// Close database connection
mysqli_close($conn);
?>
