
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMPLOYEE REGISTER</title>
    <link href="./css/bootstrap-5.1.3-dist/css/bootstrap.min.css"
      rel="stylesheet">
</head>
<body>
    <?php
    if(isset($_POST['UP'])){

        $id=$_POST['UP'];
     
    $con=mysqli_connect("localhost","root","","php");
    $sql="SELECT * FROM employee WHERE id='$id'";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
    $first=$row['name'];
    
    $fathername=$row['fathername'];
    
    $gender=$row['gender'];
    $education=$row['education'];
    $email=$row['email'];
    $mobile=$row['mobile'];
    $address=$row['address'];
    $salary=$row['salary'];
    $job=$row['job'];
    // $GLOBALS["first"];
}}
        }
        echo $fathername."ff"?>
    
            <?php
    
        echo "<div class='container mt-5 bg-info'>
            <div class='card-body'>
                <h1 class='card-title text-center'>EMPLOYEE REGISTER</h1>
            <form class=' row g-3' action='demo.php' method='post'>
                <div class='col-md-5 offset-md-0'>
                    <label class='form-label'>FIRST NAME</label>
                    <input type='text' class='form-control' name='first' value='$first'>
                </div>

                <div class='col-md-5 offset-md-2'>
                    <label class='form-label'>LAST NAME</label>
                    <input type='text' class='form-control' name='id' value='$id' >
                </div>
                <div class='col-md-5'>
                <label class='form-label'>FATHER NAME</label>
                    <input type='text' class='form-control' name='fathe' value='$fathername' >
                </div>
                <div class='col-md-5 offset-md-2'>
                    <label class='form-label'>GENDER</label><BR>
                     <select class='form-select' name='gender' > <option>$gender</option>
                     <option value='male'>MALE</option>
                     <option value='female'>FEMALE</option>
                     <option value='others'>OTHER</option>
                    </select>
                </div>
                <div class='col-md-5 offset-md-0'>
                <label class='form-label'>QUALIFICATION</label>
                    <input type='text' class='form-control' value='$education'name='education' >
                    <br>
                    <label class='form-label'>MOBILE NO</label>
                    <input type='number' class='form-control' name='mobile' value='$mobile'>
                </div>
                <div class='col-md-5 offset-md-2'>
                <label class='form-label'>EMAIL ID</label>
                    <input type='email' class='form-control' name='email' value='$email' >
                    <br>
                    <label class='form-label'>ADDRESS</label>
                    <input type='text' class='form-control' name='address' value='$address' >
                </div>
                <div class='col-md-5 offset-md-0'>
                <label class='form-label'>SALARY</label>
                    <input type='text' class='form-control' name='salary'value='$salary' >
                </div>
                <div class='col-md-5 offset-md-2'>
                <label class='form-label'>JOB</label>
                    <input type='text' class='form-control' name='job'value='$job' >
                </div>
                <div class='col-md-4 offset-md-5'>
                
                    <input type='submit' class='btn btn-dark' name='sub' value='REGISTER'>
                </div>
                


</form>
</div>
</div>
<script src='./css/bootstrap-5.1.3-dist/js/bootstrap.min.js'></script>";?>
<?php
// if(isset($_POST['sub'])){
// $name=$_POST['names'];
// $father=$_POST['fathe'];
// echo $father;

 
    
    
//     echo $fathername;
//     $gender=$_POST[$gender];
//     $qualification=$_POST[$education];
//     $email=$_POST[$email];
//     $mobile=$_POST[$mobile];
//     $address=$_POST[$address];
//     $salary=$_POST[$salary];
//     $job=$_POST[$job];
    
//     echo $name;
//     $con=mysqli_connect("localhost","root","","php");
//     $sq="UPDATE employee SET name='$name',fathername='$fathername',gender='$gender',education='$qualification',mobile='$mobile',email='$email',address='$address',salary='$salary',job='$job' WHERE id='$id'";
//    mysqli_query($con,$sq);
//     echo  "<script> alert('update successfully');</script>"; -->
   
   


// echo $fathername;


?>


<!-- // }









// ?> -->






