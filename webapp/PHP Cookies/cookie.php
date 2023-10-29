<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $sessionID = "abcdef123"; // Replace with the actual session ID
    setcookie("sessionID", $sessionID, time() + 3600, "/");
    echo "Session ID cookie has been set.";
}
?>
