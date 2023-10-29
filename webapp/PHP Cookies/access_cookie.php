<?php
if (isset($_COOKIE["sessionID"])) {
    $sessionID = $_COOKIE["sessionID"];
    echo "Session ID: " . $sessionID;
} else {
    echo "Session ID cookie not found.";
}
?>

