<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // If not, redirect to the login page
    header("Location: ../controller/login.php");
    exit();
}

// Database connection
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'MysticGuide';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch user data
$username = $_SESSION['username'];
$query = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);

// Update profile information
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['update_info'])) {
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $query = "UPDATE users SET email='$email', phone='$phone' WHERE username='$username'";
        mysqli_query($conn, $query);
        header("Location: profile.php"); // Refresh the page
        exit();
    }
    if (isset($_POST['update_notes'])) {
        $notes = $_POST['notes'];
        $query = "UPDATE users SET notes='$notes' WHERE username='$username'";
        mysqli_query($conn, $query);
        header("Location: profile.php"); // Refresh the page
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Profile</title>
    <style>
        body {
            background-color: #f3e5f5;
            color: #4a148c;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .header {
            text-align: center;
            width: 100%;
            margin-bottom: 20px;
        }
        .profile-picture {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin-left: 20px;
        }
        .button, button {
            background-color: #7b1fa2;
            color: white;
            border: none;
            padding: 6px 12px;
            font-size: 12px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #4a148c;
        }
        .section {
            width: 80%;
            padding: 20px;
            background-color: #e1bee7;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            margin-top: 20px;
            align-items: center;
        }
        form {
            display: flex;
            flex-direction: column;
            width: 100%;
        }
        .form-group {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        label {
            min-width: 90px;
        }
        input, textarea {
            flex: 1;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-left: 10px;
        }
        textarea {
            resize: vertical;
        }
        .hidden {
            display: none;
        }
    </style>
</head>
<body>
<div class="header">
    <h2>Welcome, <?php echo htmlspecialchars($user['username']); ?>!</h2>
    <small>Manage your profile information here.</small>

    <form method="post" action="">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($user['username']); ?>" readonly>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" readonly>
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" value="<?php echo htmlspecialchars($user['phone']); ?>" readonly>
        </div>
        <button type="button" id="editButton" onclick="enableEditing()">Edit</button>
        <button type="submit" name="update_info" id="updateButton" class="hidden">Update Info</button>
    </form>
</div>

<div class="section">
    <form method="post" action="">
        <div class="form-group">
            <label for="notes">Notes:</label>
            <textarea id="notes" name="notes"><?php echo htmlspecialchars($user['notes']); ?></textarea>
        </div>
        <button type="submit" name="update_notes">Update Notes</button>
    </form>
</div>

<button class="button" onclick="window.location.href='main.php'">Back to Main</button>

<script>
    function enableEditing() {
        // Make fields editable
        document.getElementById('email').readOnly = false;
        document.getElementById('phone').readOnly = false;
        // Show the update button
        document.getElementById('updateButton').style.display = 'block';
        // Hide the edit button
        document.getElementById('editButton').style.display = 'none';
        // Focus on the email field
        document.getElementById('email').focus();
    }
</script>
</body>
</html>
