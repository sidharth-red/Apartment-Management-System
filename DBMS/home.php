<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <center>
        <div class='small_container'>
            <h4>Welcome to the official Tower 2000 Website!</h4><br><h4>Please select a category!</h4>
        </div>
        <div class='container'>
            <button type="submit" name="owners"class="btn" style="float: center;" onclick="location.href='owner.php';">Owners</button>
            <button type="submit" name="maids"class="btn" style="float: center;" onclick="location.href='maid.php';">Maids</button>            <button type="submit" name="staff"class="btn" style="float: center;" onclick="location.href='staff.php';">Staff</button><br>
            <button type="submit" name="couriers"class="btn"style="float: center;" onclick="location.href='courier.php';">Couriers</button>
            <button type="submit" name="building_details"class="btn" style="float: center;" onclick="location.href='building_detail.php';">Building Details</button>
            <button type="submit" name="visitors"class="btn" style="float: center;" onclick="location.href='visitor.php';">Visitors</button><br>
            <button type="submit" name="tenants"class="btn" style="float: center;" onclick="location.href='tenants.php';">Tenants</button>
            <button type="submit" name="payment"class="btn" style="float: center;" onclick="location.href='payment.php';">Payment</button>
            <button type="submit" name="management"class="btn" style="float: center;" onclick="location.href='management.php';">Management</button>
        </div>
    </center>
    <button type="submit" name="logout"class="btn2" style="float: right;" onclick="location.href='index.php';">Logout!</button>
</body>
</html>