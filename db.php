<?php

$conn = new mysqli('localhost','root','','crud');

if ($conn->connect_error) {

    echo "error to MYSQL(".$conn->error.")".($conn->error);


}



