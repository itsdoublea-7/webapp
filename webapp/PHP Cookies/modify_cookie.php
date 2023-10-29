<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $newSessionID = "new_session_id"; // Replace with the new session ID
    setcookie("sessionID", $newSessionID, time() + 3600, "/");
    echo "Session ID cookie has been modified to: " . $newSessionID;
}
?>

