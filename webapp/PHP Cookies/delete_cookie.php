<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    setcookie("sessionID", "", time() - 3600, "/");
    echo "Session ID cookie has been deleted.";
}
?>