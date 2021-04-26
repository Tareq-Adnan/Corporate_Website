
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /*
        img{
            width:200px;
            display:inline;
            margin-left:350px;
            transform: rotate(25deg);
            z-index: 2;
            margin-bottom:3px;
           
        }
        */

        img{
            width:600px;
            display:inline;
            margin-left:400px;
          
            z-index: 2;
            margin-bottom:-90px;
           
        }
    </style>
</head>
<body>




<?php
$hostname='localhost';
$password='';
$username='root';
$db_name='corporate';

$conn= new mysqli($hostname,$username,$password,$db_name);

if($conn->connect_error){
    die("Connection failed.".$conn->connect_error);
}

if(isset($_POST['fullname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['gender'])){
$fullname=$_POST['fullname'];
 $lastname=$_POST['lastname'];
 $password=$_POST['password'];
 $conpassword=$_POST['conpassword'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $address=$_POST['address'];
 $com=$_POST['commentss'];
 $gender=$_POST['gender'];
?>


<img src="../images/thnk1.gif" alt="">
<?php
    
    $sql = "INSERT INTO register_info(full_name,user_name,password,confirm_password,email,phone,address,comments,gender) VALUES('$fullname','$lastname','$password','$conpassword','$email','$phone','$address','$com','$gender')";

    if(mysqli_query($conn,$sql)){
        
        echo '<div style="margin-left:-462px;border-radius: 5px;display:inline-block;padding-left:10px;padding-right:10px;margin-top:300px;text-align:center;box-shadow: 0px 0px 10px grey;"><h1 style="color: Seagreen;text-shadow: 1px 1px 2px grey">Successfully Registered</h1><p style="font-size: 18px;color:Seagreen;margin-top:-20px;text-shadow: .5px .5px 1px grey">We Will Contact you Soon</p></div>';
    }
    else{
        echo '<div style="border-radius: 5px;display:inline-block;padding-left:10px;padding-right:10px;margin-top:300px;text-align:center;box-shadow: 0px 0px 10px grey;"><h1 style="color: green;">Registration failed</h1></div>';
    }
}



?>

</body>
</html>