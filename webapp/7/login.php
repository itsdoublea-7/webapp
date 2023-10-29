<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve the IFSC code entered by the user
        $input_ifsc = $_POST["ifsc"];

        // Database connection
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "banks";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Query the database for the bank address
        $sql = "SELECT address FROM bank WHERE ifsc = '$input_ifsc'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Display the bank address
            $row = $result->fetch_assoc();
            echo "<p>Bank Address: " . $row["address"] . "</p>";
        } else {
            echo "<p>IFSC Code not found.</p>";
        }

        $conn->close();
    }
    ?>