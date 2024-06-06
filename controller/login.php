<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            background-color: #f3e5f5; /* Light purple background */
            color: #4a148c; /* Deep purple text */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            text-align: center;
            background-color: #ffffff; /* White background for form */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Shadow effect */
        }
        h2 {
            color: #4a148c; /* Deep purple color */
            font-size: 35px;
            font-weight: bold;
            margin-bottom: 20px;
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
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .home-btn {
            font-size: 18px; /* Increased font size for the Home button */
            margin-top: 20px;
        }
        input[type="submit"]:hover, .home-btn:hover {
            background-color: #4a148c; /* Darker purple on hover */
        }
        .error-message {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="form-container">
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

        // Check if the logout parameter is set
        if(isset($_GET['logout']) && $_GET['logout'] == true) {
            // Destroy the session
            session_destroy();
            // Unset session variables
            unset($_SESSION['username']);
            // Redirect the user back to the login page
            header("Location: login.php");
            exit; // Stop further execution
        }

        // Check if the user is already logged in
        if(isset($_SESSION['username'])) {
            // Redirect to the home page
            header("Location: ../view/main.php");
            exit();
        }

        // Login
        if(isset($_POST['login'])){
            $username = $_POST['username'];
            $password = $_POST['password'];

            $query = "SELECT * FROM users WHERE username='$username'";
            $result = mysqli_query($conn, $query);

            if(mysqli_num_rows($result) == 1){
                $row = mysqli_fetch_assoc($result);
                $hashed_password = $row['hashed_password'];

                // Verify password
                if(password_verify($password, $hashed_password)) {
                    $_SESSION['username'] = $username;
                    // Redirect to the home page
                    header("Location: ../view/main.php");
                    exit();
                } else {
                    $error_message = "Invalid password!";
                }
            } else {
                $error_message = "Invalid username!";
            }
        }

        mysqli_close($conn); // Close the database connection
        ?>

        <h2>Login</h2>
        <form method="post" action="login.php">
            <label>Username</label><br>
            <input type="text" name="username" required><br><br>
            <label>Password</label><br>
            <input type="password" name="password" required><br><br>
            <input type="submit" name="login" value="Login">
        </form>
        <?php
        if(isset($error_message)) {
            echo "<p class='error-message'>$error_message</p>";
        }
        ?>
        <a class="home-btn" href="../index.php">Home</a>
    </div>
</div>

</body>
</html>
