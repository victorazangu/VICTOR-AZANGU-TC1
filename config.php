<?php
$link = mysqli_connect("localhost", "root", "", "test1");

if ($link == true) {
    echo "<h3 style =\"color:green;\">CONNECTED</h3> ";
    echo "<br>";
} else {
    echo "ERROR SERVER HAS PROBLEM " . mysqli_connect_error($link);
}
