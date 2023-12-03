CREATE TABLE products (
    productID INT AUTO_INCREMENT PRIMARY KEY,
    productName VARCHAR(255) NOT NULL,
    productDescription TEXT NOT NULL,
    productPrice DECIMAL(10, 2) NOT NULL
);
