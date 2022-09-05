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
      <nav class="navbar navbar-expand-lg bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">hello</a>

        <div>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/employee%20management/index.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/employee%20management/show.php">EMPLOYEE DETAILS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/employee%20management/admin.php">ADMIN LOGOUT</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>






<!-- NAV-END------- -->
          <div class="container mt-5 bg-info">
            <div class="card-body">
                <h1 class="card-title text-center">EMPLOYEE REGISTER</h1>
            <form class=" row g-3" method="post">
                <div class="col-md-5 offset-md-0">
                    <label class="form-label">FIRST NAME</label>
                    <input type="text" class="form-control" name="firstname">
                </div>

                <div class="col-md-5 offset-md-2">
                    <label class="form-label">LAST NAME</label>
                    <input type="text" class="form-control" name="lastname" required>
                </div>
                <div class="col-md-5">
                <label class="form-label">FATHER NAME</label>
                    <input type="text" class="form-control" name="fathername" required>
                </div>
                <div class="col-md-5 offset-md-2">
                    <label class="form-label">GENDER</label><BR>
                     <select class="form-select" name="gender"> <option>CHOSEE</option>
                     <option value="male">MALE</option>
                     <option value="female">FEMALE</option>
                     <option value="others">OTHER</option>
                    </select>
                </div>
                <div class="col-md-5 offset-md-0">
                <label class="form-label">QUALIFICATION</label>
                    <input type="text" class="form-control" name="quali" required>
                    <br>
                    <label class="form-label">MOBILE NO</label>
                    <input type="number" class="form-control" name="mobile" required>
                </div>
                <div class="col-md-5 offset-md-2">
                <label class="form-label">EMAIL ID</label>
                    <input type="email" class="form-control" name="email" required>
                    <br>
                    <label class="form-label">ADDRESS</label>
                    <input type="text" class="form-control" name="address" required>
                </div>
                <div class="col-md-5 offset-md-0">
                <label class="form-label">SALARY</label>
                    <input type="text" class="form-control" name="salary" required>
                </div>
                <div class="col-md-5 offset-md-2">
                <label class="form-label">JOB</label>
                    <input type="text" class="form-control" name="job" required>
                </div>
                <div class="col-md-4 offset-md-5">
                
                    <input type="submit" class="btn btn-dark" name="sub" value="REGISTER">
                </div>
                


</form>
</div>
</div>
<script src="./css/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
<?php 
if(isset($_POST['sub'])){
    $first=$_POST['firstname'];
    $last=$_POST['lastname'];
    $fathername=$_POST['fathername'];
    $gender=$_POST['gender'];
    $qualification=$_POST['quali'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $address=$_POST['address'];
    $salary=$_POST['salary'];
    $job=$_POST['job'];
    $name=$first." ".$last;
    echo $name;
    $con=mysqli_connect("localhost","root","","php");
    $sql="INSERT INTO employee (name,fathername,gender,education,mobile,email,address,salary,job) VALUES('$name','$fathername','$gender','$qualification','$mobile','$email','$address','$salary','$job')";
   mysqli_query($con,$sql);
    echo  "<script> alert('insert successfully');</script>";
   
   



}



?>
</body>
</html>