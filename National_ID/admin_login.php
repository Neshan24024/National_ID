<?php
// Start the session
session_start();

// Check if the user is already logged in
if (isset($_SESSION['admin_id'])) {
    // Redirect to the admin dashboard
    header('Location: admin_dashboard.php');
    exit();
}

// Check if the login form has been submitted
if (isset($_POST['login'])) {
    // Get the form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the username and password are correct
    if ($username == 'admin' && $password == 'password') {
        // Set the session variable
        $_SESSION['admin_id'] = 1;

        // Redirect to the admin dashboard
        header('Location: admin_dashboard.php');
        exit();
    } else {
        // Display an error message
        $error = 'Invalid username or password.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
</head>
<body>
    <h1>Admin Login</h1>

    <?php if (isset($error)): ?>
        <p><?php echo $error; ?></p>
    <?php endif; ?>

    <form method="post">
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <input type="submit" name="login" value="Login">
        </div>
    </form>
</body>
</html>
