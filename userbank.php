<?php
session_start();
?>
<?php
            $con = mysqli_connect("localhost","root","trls2003","1mv20");
            if (!$con){
              die("connection failed");
            }
            else{
            $aadha = $_SESSION['aa'];
            $sql11 = "SELECT * FROM BANK WHERE APPLICATION_NO IN(SELECT APPLICATION_NO FROM application WHERE AADHAR_ID = '$aadha')";
            $result22 = mysqli_query($con,$sql11);
            if (mysqli_num_rows($result22)){
              $row6 = mysqli_fetch_assoc($result22);
              $previous1 = "javascript:history.go(-1)";
              if(isset($_SERVER['HTTP_REFERER'])) {
              $previous1 = $_SERVER['HTTP_REFERER'];
              }
            ?>  
            <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        background-image: url("linesblue.jpg");
        background-repeat: no-repeat;
        background-size: cover;
      }
    .full{
      margin-left: 400px;
      margin-top: 50px;
      border: 6px solid black;
      padding: 6px;
      padding-left: 20px;
      padding-bottom: 6px;
      width : 50%;
      background: linear-gradient(-45deg, #eba089, #ec96b7, #98d5eb, #a7ecdc);
      background-size: 200% 200%;
      box-shadow: 10px 10px #98d5eb;
    }
    .back{
      margin-left: 400px;
      width: 80px;
      height: 20px;
      margin-top: 30px;
      box-shadow: 20px;
    }
    .next{
      margin-left: 1115px;
      width: 80px;
      height: 20px;
      margin-top: -20px;
      box-shadow: 20px;
    }
    h1 {
      margin-top: 100px;
    }
    .home {
        margin-top: -450px;
        margin-left: 1400px;
    }
    </style>
</head>
<body>
    <center>  <h1>Application Form under review</h1> </center>
    <form action="userapplication.php" >
      <div class="full">
        <h2 class="bn">Addhar: <?php echo  $aadha; ?> &emsp; &emsp; &emsp; &emsp; &emsp;&emsp;Application no: <?php echo  $row6['APPLICATION_NO']; ?></h4>
        <h2 class="bn">Name: <?php echo  $row6['NAME']; ?> &emsp; &emsp; &emsp; &emsp;&emsp;BANK NAME : <?php echo  $row6['BANK_NAME']; ?></h2>
        <h2 class="fn">BRANCH NAME <?php echo  $row6['BRANCH_NAME']; ?>&emsp;&emsp;&emsp;&emsp; ACCOUNT NO : <?php echo  $row6['ACCOUNT_NO']; ?> </h2>
        <h2 class="fn">PAN number : <?php echo  $row6['PAN_NO']; ?>&emsp;&emsp;&emsp; &emsp;IFSC CODE : <?php echo  $row6['PASS_BOOK']; ?></h2>
      </div>
      <div class="back">
      <button type="submit" id="next" style="background: linear-gradient(-45deg, #eba089, #ec96b7, #98d5eb, #a7ecdc); width: 80px; height: 40px; box-shadow: 3px 3px #98d5eb;" >Back</button>
      </div>
    </form>
      <div class="next">
      <form action="Payment.php">
      <button type="submit" id="next" style="background: linear-gradient(-45deg, #eba089, #ec96b7, #98d5eb, #a7ecdc); width: 80px; height: 40px; box-shadow: 3px 3px #98d5eb;" >Next</button>
      </form>
      </div>
      <div class="home">
      <form action="userhome.php">
      <button type="submit" id="next" style="background: linear-gradient(-45deg, #eba089, #ec96b7, #98d5eb, #a7ecdc); width: 80px; height: 40px; box-shadow: 3px 3px #98d5eb;" >home</button>
      </form>
      </div>
</body>
</html>
<?php
            }
            else{
              session_start();
              $_SESSION['username1']= $user_name;
              $_SESSION['addhar_id']= $aadha;
              header("location: bankform.php");
              }
            }
?>