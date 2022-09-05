<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link href="./css/bootstrap-5.1.3-dist/css/bootstrap.min.css"
      rel="stylesheet">
</head>
<body>
    <div class="container">
        
        <div class="card-body bg-info col-lg-4 offset-lg-3" style="margin-top:150px;">
        <h1 class="card-title">ADMIN LOGIN</h1>
            <form  method="post">
                <label class="form-label">USER NAME</label>
                <input type="text" class="form-control" name="name" >
                <label class="form-label">PASSWORD</label>
                <input type="text" class="form-control" name="pass">
                <div class="col-lg-12 mt-3">
                <input type="submit" class="btn" style="background-color:#262626;color:white;" name="BTN">
                </div>


</form>
        </div>
    </div>
    <?php
    if(isset($_POST['BTN'])){
        if($_POST['name']=="admin" && $_POST['pass']=="admin"){
            echo  "<script> window.location.assign('http://localhost/employee%20management/employee.php');
            alert('ADMIN LOGIN SUCCESSFUL');
            </script>";

        }
        else{
            echo "no";
        }
    }
    ?>
</body>
</html>