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
 $password=$_POST['password'];
 $conpassword=$_POST['conpassword'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $address=$_POST['address'];
 $com=$_POST['commentss'];
 $gender=$_POST['gender'];

    
    $sql = "INSERT INTO register_info(full_name,user_name,password,confirm_password,email,phone,address,comments,gender) VALUES('$fullname','$username','$password','$conpassword','$email','$phone','$address','$com','$gender')";

    if(mysqli_query($conn,$sql)){
        echo '<div style="margin-left:38%;border-radius: 5px;display:inline-block;padding-left:10px;padding-right:10px;margin-top:300px;text-align:center;box-shadow: 0px 0px 10px grey;"><h1 style="color: Seagreen;text-shadow: 1px 1px 2px grey">Successfully Registered</h1><p style="font-size: 18px;color:Seagreen;margin-top:-20px;text-shadow: .5px .5px 1px grey">We Will Contact you Soon</p></div>';
    }
    else{
        echo '<div style="border-radius: 5px;display:inline-block;padding-left:10px;padding-right:10px;margin-top:300px;text-align:center;box-shadow: 0px 0px 10px grey;"><h1 style="color: green;">Registration failed</h1></div>';
    }
}



?>