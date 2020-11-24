<?php


$conn = mysqli_connect("localhost","root","","buddydev");
if ($conn-> connect_error) {
    die("Connection Failed:".$conn-> connect_error);
}

?>