<!DOCTYPE html>
<html>
<head>
    <title>Jasmine - Mystic Guide</title>
    <style>
        body {
            background-color: #f3e5f5; /* Light purple background */
            color: #4a148c; /* Deep purple text */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        h2 {
            color: #4a148c; /* Deep purple color */
            text-align: center;
            font-size: 35px;
            font-weight: bold;
            margin-top: 50px;
        }
        .message {
            color: #4a148c; /* Deep purple color */
            text-align: center;
            font-size: 18px;
            margin-bottom: 20px;
        }
        .button-container {
            text-align: center;
        }
        .button-container button {
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
        .button-container button:hover {
            background-color: #4a148c; /* Darker purple on hover */
        }
    </style>
</head>
<body>
    <h2>Welcome to Mystic Guide!</h2>

    <?php
    session_start();
    // Check if the user is logged in
    if (isset($_SESSION['username'])) {
        // Redirect to main.php if already logged in
        header("Location: view/main.php");
        exit();
    } else {
        // Show login and signup options
        echo '<p class="message">Please login or create an account to join the Mystics!</p>';
        echo '<div class="button-container">';
        echo '<button onclick="window.location.href=\'controller/login.php\'">Login</button>';
        echo '<br>'; // Separate buttons with a break
        echo '<button onclick="window.location.href=\'controller/signup.php\'">Create Account</button>';
        echo '</div>';
    }
    ?>
</body>
</html>
