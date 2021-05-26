<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form sign-in</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href = "signup.css" type="text/css">
</head>
<body>
<center>
    <div class="logincontainer">
        <h1 style = "text-align: center;"><u>Signup!</u></h1>
        <form id="signup" name="myForm" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            <input type="text" name="userName" placeholder="Name" required><br>
            <input type="Password" name="userPassword" placeholder="Password" required><br>
            <input type="text" name="userFlat" placeholder="Flat Number"><br>
            <button type="submit" name="submit"class="btn" onclick="location.href='home.php';">Signup!</button>
        </form>
        <?php
        if(isset($_POST['submit']))
        {
            $conn=mysqli_connect("localhost","root","","signup");
            if($conn){
                $name=$_POST['userName'];
                $password=$_POST['userPassword'];
                $flat=$_POST['userFlat'];
                $query="INSERT INTO SIGNUP_DETAILS(name,password,flat_number) values ('$name','$password','$flat')";
                if(mysqli_query($conn,$query)){
                    echo "HELLO NEW USER!";
                }
                else{
                    echo "HELLO NEW USER!";
                }
            }
            else{
                echo "ERROR";
            }
        }
        ?>
         </div>   
</body>
</html>