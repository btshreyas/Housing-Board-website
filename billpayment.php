<?php
session_start();
    $con = mysqli_connect("localhost","root","trls2003","1mv20");
if (!$con){
    die("connection failed");
    exit();
}
$name = $_SESSION['name1'];
$sqlquery2 = "SELECT * FROM OWNERS WHERE OWNER_NAME = '$name'";
$res123 = mysqli_query($con,$sqlquery2);
$data = mysqli_fetch_assoc($res123);
$houseid1 = $data['HOUSE_ID'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    <link href="billpayment.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="wrapper">
        <h2><u>Payment Details</u></h2>
        <form action="" method="post">
            
            <div class="input-group">
                <div class="input-box">
                    <input type="number" placeholder="House ID " name="house_id" required class="name">
                    <i class="fa fa-home icon"></i>
                </div>
                <div class="input-box">
                    <input type="text" placeholder="Owner Name" name="owner_name" required class="name">
                    <i class="fa fa-user icon"></i>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <input type="number" placeholder="Electricity bill Number" name="Electricitybillnum" required class="name">
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <input type="number" placeholder="Electricity bill" name="Electricity" required class="name">
                    <i class="fa fa-lightbulb-o icon"></i>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <input type="number" placeholder="LPG bill Number" name="LPGbillnum" required class="name">
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <input type="number" placeholder="LPG bill" name="LPG" required class="name">
                    <i class="fa fa-fire icon"></i>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <input type="number" placeholder="Water Bill Number" name="water" required class="name">
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <input type="number" placeholder="Water Bill" name="waterbill" required class="name">
                    <i class="fa fa-bathtub icon"></i>
                </div>
            </div>
            
            <div class="input-group">
                <div class="input-box">
                    <input type="number" placeholder="Total Bill" name="totalbill" required class="name">
                    <i class="fa fa-reddit-square icon"></i>
                </div>
            </div>
           
            <div class="input-group">
                <div class="input-box">
                    <button type="submit" class="pay" name="pay">PAY NOW</button>
                </div>
            </div>
        </form>
        <?php
        if(isset($_POST['pay'])){
            $houseid = $houseid1;
            $el = $_POST['Electricity'];
            $elb = $_POST['Electricitybillnum'];
            $wa = $_POST['water'];
            $wab = $_POST['waterbill'];
            $lp = $_POST['LPG'];
            $lpb = $_POST['LPGbillnum'];
            $tot = $el + $wab + $lp;
            $sqlquery = "INSERT INTO PAYMENT_BILL VALUES($houseid,'$name',$elb,$el,$wa,$wab,$lpb,$lp,$tot,CURRENT_DATE())";
            $res1234 = mysqli_query($con,$sqlquery);
            if($res1234){
                echo "Payment successfull";
            }
        }
        ?>
    </div>
    <form action="ownerhome.php" method="post" style="width: 125px; height:20px; margin-left:325px; margin-top: -50px;">
    <button type="submit">Back</button>
    </form>
    <form action="history.php" method="post">
        <button class="button" type="submit" style="margin-left: 70%; width: 125px; height: 30px; ;margin-top:-800px;" >history</button>
    </form>
</body>

</html>