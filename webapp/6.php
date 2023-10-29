<!DOCTYPE html>
<html>
<head>
    <title>Banking Sign-In Form</title>
</head>
<body>
    <h2>Banking Sign-In Form</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get user inputs
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Display the user inputs for verification
        echo "<h3>Details Entered:</h3>";
        echo "Username: " . $username . "<br>";
        echo "Password: " . $password . "<br>";

        // You can perform further processing and verification here, such as checking the credentials against a database.
    }
    ?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
