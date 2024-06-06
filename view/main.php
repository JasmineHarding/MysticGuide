<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // If not, redirect to the login page
    header("Location: ../controller/login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Main Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f3e5f5; /* Light purple background */
            color: #4a148c; /* Deep purple text */
            margin: 0;
            padding: 20px;
        }
        h2 {
            color: #4a148c; /* Deep purple color */
            font-size: 35px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .btn {
            background-color: #7b1fa2; /* Medium purple button background */
            color: white;
            border: none;
            padding: 15px 30px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 10px 5px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #4a148c; /* Darker purple on hover */
        }
        .center {
            display: flex;
            justify-content: center;
        }
        .image-container {
            border: 2px solid #7b1fa2; /* Medium purple border */
            border-radius: 20px; /* Rounded edges */
            width: 250px;
            margin-top: 20px;
            margin-left: auto;
            margin-right: auto;
        }
        .image-container img {
            border-radius: 20px; /* Rounded edges */
            width: 100%;
        }
    </style>
</head>
<body>

<h2>Welcome to the Main Page, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
<p>Choose an action:</p>

<button class="btn" onclick="window.location.href='profile.php'">Profile</button><br>
<button class="btn" onclick="window.location.href='exploring_psychic_abilities.php'">Exploring Psychic Abilities</button><br>
<button class="btn" onclick="window.location.href='fundamentals_and_components.php'">Fundamentals and Components</button><br>
<button class="btn" onclick="window.location.href='basic_spells.php'">Basic Spells</button><br>
<button class="btn" onclick="window.location.href='../controller/logout.php'">Logout</button>

<div class="center image-container">
    <img src="https://i.etsystatic.com/41298176/r/il/6c3726/4887014378/il_1140xN.4887014378_ixhg.jpg" alt="MysticLearning" width="250">
</div>

</body>
</html>
