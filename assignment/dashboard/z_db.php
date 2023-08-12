<?php
$con = new mysqli("127.0.0.1", "Vinnie200547583", "rieqMag-x1", "Vinnie200547583");
if ($con->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?>