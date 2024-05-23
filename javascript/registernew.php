<?php
include 'connect.php';


if(isset($_POST['register'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

    $checkEmail="SELECT * FROM users where email='$email'";
    $result=$conn->query($checkEmail);
    if($result->num_rows>0){
        echo "Email address already exists";
    }
    else{
        $insertquery="INSERT INTO users(fname,lname,email,password)
        VALUES ('$fname','$lname','$email','$password')";
        if($conn->query($insertquery)==TRUE){
            header("location: index.php");
        }
        else{
            echo"Error :".$conn->error;
        }
    }
}
if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

    $sql="SELECT * FROM users WHERE email='$email' and password='$password'";
    $result=$conn->query($sql);
    if($result->num_rows>0){
        session_start();
        $row=$result->fetch_assoc();
        $_SESSION['email']=$row['email'];
        $_SESSION['fname']=$row['fname'];
        $_SESSION['lname']=$row['lname'];
        header("location: main.php");
        exit();
    }
else{
    echo"your email not found";
}
}

?>