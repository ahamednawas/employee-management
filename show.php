<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMPLOYEE</title>
    <link
      href="./css/bootstrap-5.1.3-dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
   
</head>
<body>
<?php
    $con=mysqli_connect("localhost","root","","php");
    $sql="SELECT * FROM employee";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
        echo "<table class='table table-dark '>
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
            <th scope='col'>UPDATE</th>
            <th scope='col'>DELETE</th>
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
          
          <td><form method='post' action='update.php'><button type='submit'value='$row[id]' name='UP' '>UPDATE</button></form></td>
          <td><form method='post'><button value='$row[id]' name='ad' type='submit'>delete</button></form></td>
        </tr>
        </tbody>";

        }
        echo "</table>";
        
    }
    if(isset($_POST['ad'])){
    $del="DELETE FROM employee WHERE id='$A'";
    mysqli_query($con,$del);
    }

    ?>
    
</body>
</html>