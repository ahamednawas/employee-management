<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link
      href="./css/bootstrap-5.1.3-dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
</head>
<body><?php
    $con=mysqli_connect("localhost","root","","php");
    $sql="SELECT * FROM employee";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
        echo "<table class='table'>
        <thead>
          <tr>
            <th scope='col'>ID</th>
            <th scope='col'>FULL NAME</th>
            <th scope='col'>FATHER NAME</th>
            <th scope='col'>GENDER</th>
            <th scope='col'>QUALIFICATION</th>
            <th scope='col'>MOBILE</th>
            <th scope='col'>EMAIL</th>
            <th scope='col'>ADDRESS</th>
            <th scope='col'>SALARY</th>
            <th scope='col'>JOB TITLE</th>
            <th scope='col'><a href='http://localhost/employee%20management/index.php'<button class='btn btn-dark'>back</button></a></th>
            
          </tr>
        </thead>"
       
      ;
    while($row=mysqli_fetch_assoc($result)){
         
        echo "<tbody>
        <tr>
          <th scope='row'>$row[id]</th>
          <td>$row[name]</td>
          <td>$row[fathername]</td>
          <td>$row[gender]</td>
          <td>$row[education]</td>
          <td>$row[mobile]</td>
          <td>$row[email]</td>
          <td>$row[address]</td>
          <td>$row[salary]</td>
          <td>$row[job]</td>
          
        </tr>
        </tbody>";

        }
        echo "</table>";
        
    }
    

    ?>
    









    <?php
        //  $con=mysqli_connect("localhost","root","","php");
    // if(isset($_POST['ADD1'])){
    //     $uname=$_POST['uname'];
        // $email=$_POST['email'];
        // $pass=$_POST['password'];
        // $con_pass=$_POST['confirmpassword'];
        // echo $uname,$pass,$email,$con_pass;
        // echo $_POST['uname'];
    // }
        // if($pass!=$con_pass){
        //     include index.html;

        // }
        
    // $sql="INSERT INTO register (name,password,email) VALUES ('$uname','$email','$pass')";
// $sql = "INSERT INTO register (name,password) VALUES ('$A','$b')";
// if (mysqli_query($con,$sql)) {
//   echo "insert created successfully";
// } else {
//   echo "Error creating database: " . $con->error;
// }

// $sql="SELECT name,password FROM register";
// $result=mysqli_query($con,$sql);
//     while($row=mysqli_fetch_assoc($result)){
         
        
        // echo "name".$row["name"]."password".$row["password"];
        // if ($A==$row["name"]&&$b==$row['password']){
        // echo "HI";
        // }
        // else{
        //    echo "no";
           
        // }

        // if($A==)

    
    ?>
    
</body>
</html>