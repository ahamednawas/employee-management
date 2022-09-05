<!DOCTYPE html>
<html lang="en">
  <head>
   
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EMPLOYEE MANAGEMENT</title>
    <link
      href="./css/bootstrap-5.1.3-dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
      <div class="container">
        <a class="navbar-brand" href="#">WELCOME</a>
        <div > <h4>EMPLOYEE DETAILS</h6></div>

        <div>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/employee%20management/admin.php">admin</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- navbar end-- -->


    <div class="container-fluid">
      <div class="row col-lg-6 offset-lg-3" style="width:500px;">
        <div class=" card-body mt-5 bg-light border  border-primary" id="login" >
          <h1 class="card-title text-center">LOGIN PAGE</h1>
          <form  method="post" >
            
              <label class="form-label">USER NAME</label>
              <input
                class="form-control"
                type="text"
                name="uname"
                placeholder="USERNAME"
                required
              />
              <label class="form-label">PASSWORD</label>
              <input
                class="form-control"
                type="password"
                name="password"
                placeholder="password"
              />
              <input
                class="form-control mt-5  " 
                style="width: 100px; margin-left:160px; background-color:#262626;color:white; margin: top 10px;"
                type="submit"
                name="ADD"
                value="LOGIN"
              />
              
              
            
          </form>
          <a href="signup.php"><button class="btn-dark "style="margin-top:-50px;">SIGN UP</button></a>
        </div>

        
      </div>
    </div>

    <script src="./css/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <?php 
    $con=mysqli_connect("localhost","root","","php");
    if(isset($_POST['ADD'])){
      $Name=$_POST['uname'];
      $Password=$_POST['password'];
      $sql=" SELECT * FROM register WHERE name='$Name' AND password='$Password'";
    $result=mysqli_query($con,$sql);
    if($row=mysqli_num_rows($result)>0){
      echo  "<script> 
      window.location.assign('http://localhost/employee%20management/main.php');
      
      alert('login successful');</script>";
      
    }
    else{
      echo  "<script> alert('username and password wrong');</script>";
    }
    
   
     
      
    }
    
    // if(mysql_num_)

     
    ?>
  </body>
</html>
