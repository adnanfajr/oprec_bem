<?php
$con=mysqli_connect("localhost","pp_portalbem","takoknohelmy","portalbem");

    // Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>