<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="owners.css" type="text/css"/></head>
</head>
<body>
    <center>
        <div class='small_container'>
            <h4>Enter Staff Name and Staff ID to find details about the staff</h4>
        </div>
        <div class='container'>
            <form action="" method="POST">
                <input type='text' name="userName" placeholder="Enter Staff Name">
                <input type='text' name="id" placeholder="Enter Staff ID">
                <input type='submit' name='search' class='btn' value='Find!'>
            </form>
            <table>
                <tr>
                    <th style="background-color:violet"><b>ID</b></th>
                    <th style="background-color:violet"><b>Name</b></th>
                    <th style="background-color:violet"><b>Post</b></th>
                    <th style="background-color:violet"><b>Contact</b></th>
                    <th style="background-color:violet"><b>Address</b></th>
                </tr><br>
                <?php
                    $connection=mysqli_connect("localhost","root","");
                    $db=mysqli_select_db($connection,'dbms');

                    if(isset($_POST['search']))
                    {
                        $id=$_POST['id'];
                        $query="SELECT * FROM `staff` where Staff_id='$id'";
                        $query_run=mysqli_query($connection,$query);

                        while($row=mysqli_fetch_array($query_run))
                        {
                            ?>
                            <tr>
                                <td><?php echo $row['Staff_id']; ?></td>
                                <td><?php echo $row['Name']; ?></td>
                                <td><?php echo $row['post']; ?></td>
                                <td><?php echo $row['Staff_contact']; ?></td>
                                <td><?php echo $row['Address']; ?></td>
                            </tr>
                            <?php
                        }

                    }
                    ?>
            </table>
        </div>
        <button type="submit" name="all_owners"class="btn" onclick="location.href='all_staff.php';">All Staff!</button><br>
        <button type="submit" name="all_owners"class="btn" onclick="location.href='staff_add.php';">Add Record</button>
        <button type="submit" name="all_owners"class="btn" onclick="location.href='staff_delete.php';">Delete Record</button><br>
        <button type="submit" name="all_owners"class="btn" onclick="location.href='home.php';">Back to Home Page!</button>
    </center>
</body>
</html>