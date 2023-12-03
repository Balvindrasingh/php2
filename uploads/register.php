<?php
include 'includes/header.php';
include 'scripts/functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle form submission
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $profile_image = $_FILES['profile_image'];

    createProfile($username, $email, $password, $profile_image);
}
?>

<h2>Register</h2>
<form method="post" action="register.php" enctype="multipart/form-data">
    <!-- Include form fields for username, email, password, and profile image -->
    <input type="submit" value="Register">
</form>

<?php include 'includes/footer.php'; ?>
