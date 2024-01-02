<?php
 header("content-Type:application/json");
 $conn = mysqli_connect("localhost","root","","wheelie rent");
 if(mysqli_connect_errno())
 {
    die('error in connection');
 }
 $name = $_POST['name'];
 $mobilenumber = $_POST['mobile_number'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $confirmpassword = $_POST['confirm_password'];
 $query = mysqli_query($conn,"INSERT INTO register (`name`,`mobile_number`,`email`,`password`,`confirm_password`)VALUES('$name','$mobilenumber','$email','$password','$confirmpassword')");
 $log =mysqli_insert_id($conn);
$query1 =mysqli_query($conn,"INSERT INTO login (`id`,`email`,`password`)VALUES('$log', '$email','$confirmpassword');");
 if($query1)
 {
    $myarray['message']='added';
 }
 else{
    $myarray['message']='failed';
 }
 echo json_encode($myarray);
?>