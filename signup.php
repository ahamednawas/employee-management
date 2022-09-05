<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>
    <link href="./css/bootstrap-5.1.3-dist/css/bootstrap.min.css"
      rel="stylesheet" />
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





<!-- nav ends   -->

          <div class="col-lg-5 offset-lg-2 mt-5">
          <div class="card-body bg-info" style="width:400px;">
          <h1 class="card-title text-center">sign in PAGE</h1>
          <form action="main2.php" method="post">
            
              <label class="form-label">USER NAME</label>
              <input
                class="form-control"
                type="text"
                name="un"
                placeholder="USERNAME"
                required
              />
              <label class="form-label">EMAIL</label>
              <input
                class="form-control"
                type="email"
                name="email"
                placeholder="email"
              />
              <label class="form-label">PASSWORD</label>
              <input
                class="form-control"
                type="password"
                name="password"
                placeholder="password"
              />
              <label class="form-label">CONFIRM PASSWORD</label>
              <input
                class="form-control"
                type="password"
                name="confirmpassword"
                placeholder="password"
              />
              <input
                class="form-control  mt-4"
                style="width: 100px; background-color:#262626; color:white; "
                type="submit"
                name="ADD1"
                value="sign up"
              />
           
          </form>
        </div>
</div>
    
</body>
</html>