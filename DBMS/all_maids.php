<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Maids</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="owners.css" type="text/css"/></head>
</head>
<body>
    <center>
        <div class='small_container'>
            <h4>All Maids</h4>
        </div>
        <div class='container'>
            <form action="" method="POST">
            </form>
            <table>
                <tr>
                    <th style="background-color:violet"><b>ID</b></th>
                    <th style="background-color:violet"><b>Name</b></th>
                    <th style="background-color:violet"><b>Contact</b></th>
                    <th style="background-color:violet"><b>Address</b></th>
                </tr><br>
                <?php
                    $connection=mysqli_connect("localhost","root","");
                    $db=mysqli_select_db($connection,'dbms');
                        $query="SELECT * FROM `maid`";
                        $query_run=mysqli_query($connection,$query);

                        while($row=mysqli_fetch_array($query_run))
                        {
                            ?>
                            <tr>
                                <td><?php echo $row['ID']; ?></td>
                                <td><?php echo $row['Name']; ?></td>
                                <td><?php echo $row['Maid_Contact']; ?></td>
                                <td><?php echo $row['Maid_Address']; ?></td>
                            </tr>
                            <?php
                        }
                    ?>
            </table>
        </div> 
            <button type="submit" name="all_owners"class="btn" onclick="location.href='maid.php';">Back to Search Page!</button><br>
            <button type="submit" name="all_owners"class="btn" onclick="location.href='home.php';">Back to Home Page!</button>
    </center>
</body>
</html>