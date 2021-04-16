<?php
$fullname=$_POST['fullname'];
 $username=$_POST['username'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $interest=$_POST['interest'];
 $comment=$_POST['comment'];
 $gender=$_POST['gender'];


 if(!empty($fullname) || !empty($username) || !empty($email) || !empty($phone) && !empty($interest) || !empty($username)){
  
 
    $host="localhost";
    $uname="root";
    $pass="";
    $dbname="corporate"
   
    $con= new mysqli($host, $uname, $pass, $dbname);

    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
    }
    else{
        $SELECT="SELECT email From register_info where email = ? Limit 1";
        $INSERT="INSERT INTO register_info(full_name,username,email,phone,interests,comments,gender) VALUE(?,?,?,?,?,?,?)";

        $stmot=$con->prepare($SELECT);
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if($rnum==0){
            $stmt->close();
            $stmt->bind_param("sssisss",$fullname,$username,$email,$phone,$interest,$comment,$gender);
            $stmt->execute();
            echo "Successfully Registered";
        }
        else{
            echo "Already Registered";
        }
        $stmt->close();
        $con->close();
    }

}
else{
 echo "Please Fill Up the Form.";
 die();
}


?>