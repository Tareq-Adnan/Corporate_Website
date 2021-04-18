<?php
$hostname='localhost';
$password='';
$username='root';
$db_name='corporate';

$conn= new mysqli($hostname,$username,$password,$db_name);

if($conn->connect_error){
    die("Connection failed.".$conn->connect_error);
}

if(isset($_POST['fullname']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['gender'])){
$fullname=$_POST['fullname'];
 $username=$_POST['username'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $address=$_POST['address'];
 $gender=$_POST['gender'];

    
    $sql = "INSERT INTO register_info(full_name,user_name,email,phone,interests,gender) VALUES('$fullname','$username','$email','$phone','$address','$gender')";

    if(mysqli_query($conn,$sql)){
        echo 'Successfully Inserted';
    }
    else{
        echo 'Failed';
    }
}



?>