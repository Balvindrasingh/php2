<?php
include 'includes/header.php';
include 'scripts/functions.php';

// Check if the user is logged in
// Redirect to login page if not

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['user_id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $profile_image = $_FILES['profile_image'];

    updateProfile($id, $username, $email, $profile_image);
}

// Fetch user details for the form
$user_id = isset($_GET['id']) ? $_GET['id'] : null;
$user_details = getUserDetails($user_id);
?>

<h2>Update Profile</h2>
<form method="post" action="update.php" enctype="multipart/form-data">
    <input type="hidden" name="user_id" value="<?php echo $user_details['id']; ?>">
   
    <input type="submit" value="Update">
</form>

<?php include 'includes/footer.php'; ?>
