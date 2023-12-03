<?php
include 'includes/header.php';
include 'scripts/functions.php';

// Check if the user is logged in
// Redirect to login page if not

// Check if the user wants to delete their account
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['user_id'];
    
    deleteProfile($id);
    // Redirect to a logout or home page after deletion
}

// Fetch user details for confirmation
$user_id = isset($_GET['id']) ? $_GET['id'] : null;
$user_details = getUserDetails($user_id);
?>

<h2>Delete Account</h2>
<p>Are you sure you want to delete your account?</p>
<form method="post" action="delete.php">
    <input type="hidden" name="user_id" value="<?php echo $user_details['id']; ?>">
    <input type="submit" value="Delete">
</form>

<?php include 'includes/footer.php'; ?>
