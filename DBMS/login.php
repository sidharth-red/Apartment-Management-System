<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
  </head>
  <body>
  <center>  
    <div class="logincontainer">
          <h1 style = "text-align: center;"><u>Login!</u></h1>
          <form id="signup" name="myForm" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
              <input type="text" name="Name" placeholder="Name" required><br>
              <input type="Password" name="Password" placeholder="Password" required><br>
              <input type="text" name="Flat" placeholder="Flat Number"><br>
              <button type="submit" name="submit"class="btn" onclick="location.href='home.php';">Login!</button>
          </form>
          <?php
            $connection=mysqli_connect("localhost","root","");
            $db=mysqli_select_db($connection,'signup');
            if(isset($_POST['submit']))
            {
                    $name=$_POST['Name'];
                    $password=$_POST['Password'];
                    $flat=$_POST['Flat'];
                    $result = mysqli_query($connection,"SELECT * FROM `signup_details` where password='$password'");
                    $numrows=mysqli_num_rows($result);  
                    if($numrows!=0)  
                    {  
                      while($row=mysqli_fetch_assoc($result))  
                      {  
                        $dbpassword=$row['Password'];   
                      }   
                      if($password == $dbpassword)  
                      {
                        header("Location: home.php"); 
                      }
                      else
                      {
                        echo "Incorrect Info";
                      }
                    }
            }
            ?>    
    </div>
</center>
</body>
</html>