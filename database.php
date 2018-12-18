<?php
//Connect to MySql
    $con = mysqli_connect("localhost","root","TrippleAa","shoutit");

    //Test connection
    if(mysqli_connect_errno())  {
        echo 'Failed to connect to DataBase : '.mysqli_connect_error();
    }
?>