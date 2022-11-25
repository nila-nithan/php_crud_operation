<?php
include 'db.php';

if(isset($_POST['submit'])){

    // print_r($_POST);
    // extract($_POST);

    $fullname = $_POST['fullname'];
    $emailid = $_POST['emailid'];
    $contact = $_POST['contact'];
   

    $sql="insert into `form` (`name`,`email`,`number`) values('$fullname','$emailid','$contact')";

    $result=$conn->query($sql);

    if($result){
        echo "insert to suceed";
    } else{
        echo "error $sql." . $conn->error ;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">
            Name: <input type="text" name="fullname" placeholder="enter your name">
        </label> <br><br>
        <label for="">
            Email: <input type="email" name="emailid" placeholder="enter your email">
        </label> <br><br>
        <label for="">
            Number: <input type="number" name="contact" placeholder="enter your number">
        </label> <br><br>
        <input type="submit" name="submit" value="submit">
    </form>
    
</body>
</html>