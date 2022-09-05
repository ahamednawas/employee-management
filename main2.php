<?php
$con=mysqli_connect("localhost","root","","php");


if(isset($_POST['ADD1'])){
    $name=$_POST['un'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirm_password=$_POST['confirmpassword'];
    
    if ($password!=$confirm_password) {
        //     # code...
        
            echo  "<script> window.location.assign('http://localhost/employee%20management/index.php');
            alert('password not match');
            </script>";
            
        
        }
    if($name==NULL ){
        echo  "<script> alert('name required');</script>";
        include 'index.php';
        
    }
    if($password==NULL ){
        echo  "<script> alert('PASSWORD required');</script>";
        include 'index.php';
        
    }
        else{
        $sql="INSERT INTO register (name,password,email) VALUES('$name','$password','$email')";
        mysqli_query($con,$sql);
        echo  "<script>
         window.location.assign('http://localhost/employee%20management/index.php')
         alert('registration successful');</script>";
        
        }
    
    
}

    // $GLOBALS['$name']=$GLOBALS['$email']=$GLOBALS['$password']=$GLOBALS['confirm_password'];





?>