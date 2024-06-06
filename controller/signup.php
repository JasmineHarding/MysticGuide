<?php
session_start();

// Database connection
$dbhost = 'localhost';  // Your database host
$dbuser = 'root';       // Your database username
$dbpass = '';           // Your database password
$dbname = 'MysticGuide'; // Your database name

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$signupSuccess = false;  // Flag to check signup status

// Sign Up
if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO users (username, hashed_password) VALUES ('$username', '$hashed_password')";
    if (mysqli_query($conn, $query)) {
        $signupSuccess = true;
        echo "<div class='success-message'>Signup successful!</div>";
        // Redirect to the login page after 3 seconds
        header("Refresh:3; url=login.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <style>
        body {
            background-color: #f3e5f5; /* Light purple background */
            color: #4a148c; /* Deep purple text */
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            text-align: center;
            background-color: #ffffff; /* White background for the form */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #4a148c; /* Deep purple color */
            font-size: 35px;
            font-weight: bold;
        }
        input[type="submit"], .home-btn {
            background-color: #7b1fa2; /* Medium purple button background */
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 10px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover, .home-btn:hover {
            background-color: #4a148c; /* Darker purple on hover */
        }
        .home-btn {
            font-size: 18px; /* Increased font size for the Home button */
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        label {
            font-size: 18px;
        }
        input[type="text"], input[type="password"] {
            padding: 10px;
            margin: 10px 0;
            width: 100%;
            max-width: 300px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .success-message {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: red;
            color: white;
            text-align: center;
            font-size: 24px;
            padding: 10px;
        }
    </style>
</head>
<body>

<?php if ($signupSuccess): ?>
    <div class="success-message">Sign Up Successful!</div>
<?php endif; ?>

<div class="form-container">
    <h2>Sign Up</h2>
    <form method="post" action="signup.php">
        <label>Username</label><br>
        <input type="text" name="username" required><br><br>
        <label>Password</label><br>
        <input type="password" name="password" required><br><br>
        <input type="submit" name="signup" value="Sign Up">
    </form>
    <br>
    <a class="home-btn" href="../index.php">Home</a>
</div>

</body>
</html>
