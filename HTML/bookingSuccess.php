<?php
// Start the session
 session_start();
// echo "username = ".$_SESSION["username"];


// //getting info from url variable or get method
// $str= $_GET['info'];
// echo $str."<br>";
// $array = explode("@@",$str);


// //separate room number and price and days separated by @@
// $roomNumber = $array[0];
// $price = $array[1];
// $day = $array[2]+1; //add 1 because include day itself
// $checkinDate=$array[3];
// $checkoutDate=$array[4];
// //echo "room = $roomNumber price = $price day = $day";

// //total payment
// $payment = $price*$day;
echo "username = ".$_SESSION["username"];
echo "<br>Booking done";
echo "<br>thanx";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>

<body class="container">
    <div style="margin-top: 10%;">
        <h1 class="text-bg-success" style="text-align:center">Successfully Booking complete</h1>

        <a class="btn btn-info" style="margin-left:45%; margin-top:5%" href="userdashboard.php">Goto Dashboard</a>
    </div>

</body>

</html>