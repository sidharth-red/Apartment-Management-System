<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Delivery</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="owners.css" type="text/css"/></head>
</head>
<body>
    <center>
        <div class='small_container'>
            <h4>Enter details</h4>
        </div>
        <div class='container'>
            <form action="" method="POST">
                <input type='text' name="id" placeholder="Enter ID">
                <input type='text' name="Name" placeholder="Enter Building Name">
                <input type='submit' name='submit' class='btn' value='Add'>
                </form>
       
       <?php
       $connection=mysqli_connect("localhost","root","");
       $db=mysqli_select_db($connection,'dbms');
       if(isset($_POST['submit']))
       {
               $id=$_POST['id'];
               $name=$_POST['Name'];
               $query="INSERT INTO `building_detail`(ID,Building_name) values ('$id','$name')";
               if(mysqli_query($connection,$query)){
                echo "NEW ENTRY!";
                }
                else{
                    echo "NEW ENTRY!";
                }
               
       }
       ?>
        <button type="submit" name="all_owners"class="btn" onclick="location.href='building_detail.php';">Back to Search Page!</button><br>
        <button type="submit" name="all_owners"class="btn" onclick="location.href='home.php';">Back to Home Page!</button>
        </div>   
</body>
</html>