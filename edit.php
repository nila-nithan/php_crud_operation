<?php
include 'db.php';

$id= $_GET['id'];

$sql="select * from form where id=$id";
$result = $conn->query($sql);
$data = $result->fetch_assoc();
// print_r($data);

?>

<form action="" method="post">
    <input type="text" value="<?php echo $data['name']; ?>" name="fullname" placeholder="Name">
    <input type="text" value="<?php echo $data['email']; ?>" name="emailid" placeholder="Email">
    <input type="number" value="<?php echo $data['number']; ?>" name="contact" placeholder="password">
    <input type="submit" name="submit" value="Submit">
</form>

<?php

if(isset($_POST['submit'])){
    $fullname = $_POST['fullname'];
    $emailid = $_POST['emailid'];
    $contact = $_POST['contact'];
   
    $sql = "update form set name='$fullname', email='$emailid', number='$contact' where id=$id";


if($conn->query($sql)){
    $msg = "Record updated successfully";
} else{
    $msg = "ERROR: Could not able to execute $sql. " . $conn->error;
}
header("Location: read.php?msg=$msg");

}
?>