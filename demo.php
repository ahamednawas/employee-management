<?php
if(isset($_POST['sub'])){
    $name=$_POST['first'];
    $father=$_POST['fathe'];
    $gender=$_POST['gender'];
    $education=$_POST['education'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $address=$_POST['address'];
    $salary=$_POST['salary'];
    $job=$_POST['job'];
    $id=$_POST['id'];

    $con=mysqli_connect("localhost","root","","php");
    $sq="UPDATE employee SET name='$name',fathername='$father',gender='$gender',education='$education',mobile='$mobile',email='$email',address='$address',salary='$salary',job='$job' WHERE id='$id'";
   mysqli_query($con,$sq);
    echo  "<script> alert('update successfully');</script>";
    include 'show.php';
}
    ?>