<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Management</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="owners.css" type="text/css"/></head>
</head>
<body>
    <center>
        <div class='small_container'>
            <h4>Enter Manager ID</h4>
        </div>
        <div class='container'>
            <form action="" method="POST">
                <input type='text' name="id" placeholder="Enter Manager ID">
                <input type='submit' name='search' class='btn' value='SEARCH BY ID'>
            </form>
            <table>
                <tr>
                    <th style="background-color:violet"><b>ID</b></th>
                    <th style="background-color:violet"><b>Name</b></th>
                    <th style="background-color:violet"><b>Contact</b></th>
                    <th style="background-color:violet"><b>Flat Number</b></th>
                    <th style="background-color:violet"><b>Post</th>
                </tr><br>
                <?php
                    $connection=mysqli_connect("localhost","root","");
                    $db=mysqli_select_db($connection,'dbms');

                    if(isset($_POST['search']))
                    {
                        $id=$_POST['id'];
                        $query="SELECT * FROM `management` where ID='$id'";
                        $query_run=mysqli_query($connection,$query);

                        while($row=mysqli_fetch_array($query_run))
                        {
                            ?>
                            <tr>
                                <td><?php echo $row['ID']; ?></td>
                                <td><?php echo $row['Name']; ?></td>
                                <td><?php echo $row['Contact']; ?></td>
                                <td><?php echo $row['Flat_number']; ?></td>
                                <td><?php echo $row['Post']; ?></td>
                            </tr>
                            <?php
                        }

                    }
                    ?>
            </table>
        </div>
        <button type="submit" name="all_owners"class="btn" onclick="location.href='all_managers.php';">All Managers!</button><br>
        <button type="submit" name="all_owners"class="btn" onclick="location.href='management_add.php';">Add Manager</button>
        <button type="submit" name="all_owners"class="btn" onclick="location.href='management_delete.php';">Remove Manager</button><br>
        <button type="submit" name="all_owners"class="btn" onclick="location.href='home.php';">Back to Home Page!</button>
    </center>
</body>
</html>