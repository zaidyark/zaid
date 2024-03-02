<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Website</title>
    <link rel="stylesheet" href="Styles.css">
</head>
<body>

    <header>
        <h1>Welcome to Faculty Of Applied Sciences</h1>
        <nav>
            <ul>
                <li><a href="department.php">Computer Science Departments</a></li>
                <li><a href="statistics.php">Statistics Department</a></li>
                <li><a href="payment.php">Payment</a></li>
                <li><a href="registration.php">Registration</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>
    <main>

    </main>
</body>
</html>
<?php
session_start();

// Check if user is already logged in, redirect to homepage
if (isset($_SESSION['username'])) {
    header("Location: index.html");
    exit;
}

// Check login credentials
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate login (e.g., compare with database)
    // Dummy example
    if ($username === 'admin' && $password === 'password') {
        $_SESSION['username'] = $username;
        header("Location: index.html");
        exit;
    } else {
        $error = "Invalid username or password";
    }
}
?>
</body>
</html>