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
            $user_name = $_SESSION['name'];
            $sql1 = "SELECT *FROM application WHERE AADHAR_ID = '$aadha'";
            $result2 = mysqli_query($con,$sql1);
            if (mysqli_num_rows($result2)){
              $row3 = mysqli_fetch_assoc($result2);
              $previous = "javascript:history.go(-1)";
              if(isset($_SERVER['HTTP_REFERER'])) {
              $previous = $_SERVER['HTTP_REFERER'];
}
              }
            else{
              session_start();
              $_SESSION['username1']= $user_name;
              $_SESSION['addhar_id']= $aadha;
              header("location: applicationform.php");
              }
            }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application</title>
    <style>
      body {
        background-image: url("linesblue.jpg");
        background-repeat: no-repeat;
        background-size: cover;
      }
    .full{
      margin-left: 300px;
      margin-top: 50px;
      border: 6px solid black;
      padding: 6px;
      padding-left: 20px;
      padding-bottom: 6px;
      width : 60%;
      background: linear-gradient(-45deg, #eba089, #ec96b7, #98d5eb, #a7ecdc);
      background-size: 200% 200%;
      box-shadow: 10px 10px #98d5eb;
    }
    .back{
      margin-left: 300px;
      width: 80px;
      height: 20px;
      margin-top: 30px;
      box-shadow: 20px;
    }
    .next{
      margin-left: 1170px;
      width: 80px;
      height: 20px;
      margin-top: -20px;
      box-shadow: 20px;
    }
    h1 {
      margin-top: 100px;
    }
    .home {
        margin-top: -637px;
        margin-left: 1400px;
    }
    </style>
</head>
<body>
    <center>  <h1>Application Form under review</h1> </center>
    <form action="userhome.php" >
      <div class="full">
        <h2 class="bn">Application: <?php echo  $row3['APPLICATION_NO']; ?> &emsp; &emsp; &emsp; &emsp; &emsp;&emsp;Aadhar: <?php echo  $row3['AADHAR_ID']; ?></h4>
        <h2 class="bn">Name: <?php echo  $row3['NAME']; ?> &emsp; &emsp; &emsp; &emsp;&emsp;Email-ID : <?php echo  $row3['EMAIL_ID']; ?></h2>
        <h2 class="fn">Gender <?php echo  $row3['GENDER']; ?>&emsp;&emsp;&emsp;&emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;Date of Birth : <?php echo  $row3['DOB']; ?> </h2>
        <h2 class="fn">Phone number : <?php echo  $row3['PHONE_NO']; ?>&emsp;&emsp;&emsp; &emsp;PAN no : <?php echo  $row3['PAN_NO']; ?></h2>
        <h2 class="fn">Religion : <?php echo  $row3['RELIGION']; ?> &emsp;&emsp;&emsp;&emsp; &emsp; &emsp;&emsp;&emsp;&ensp;Citizenship : <?php echo  $row3['CITIZENSHIP']; ?></h2> 
        <h2 class="fn">Annual Income : <?php echo  $row3['ANNUAL_INCOME']; ?>&emsp;&emsp;&emsp;&emsp; &emsp; Reservation : <?php echo  $row3['RESERVATION']; ?></h2>  
        <h2 class="fn">Son/Wife/Husband of : <?php echo  $row3['FO_WO_HO']; ?>&emsp;&emsp; &ensp;Name of nominee : <?php echo  $row3['NAME_OF_NOMINEE']; ?></h2> 
        <h2 class="fn">No of house owned : <?php echo  $row3['NO_OF_HOUSE_OWNED']; ?> &emsp;&emsp;&emsp;&emsp; &emsp; &emsp;&nbsp;Fee : <?php echo  $row3['FEE']; ?></h2>
      </div>
      <div class="back">
      <button type="submit" id="next" style="background: linear-gradient(-45deg, #eba089, #ec96b7, #98d5eb, #a7ecdc); width: 80px; height: 40px; box-shadow: 3px 3px #98d5eb;" >Back</button>
      </div>
      </form>
      <div class="next">
      <form action="userbank.php">
      <?php  $_SESSION['application435'] = $row3['APPLICATION_NO']; ?>
        <button type="submit" id="next" style="background: linear-gradient(-45deg, #eba089, #ec96b7, #98d5eb, #a7ecdc); width: 80px; height: 40px; box-shadow: 3px 3px #98d5eb;">Next</button>
      </form>
      </div>
      <div class="home">
      <form action="userhome.php">
      <button type="submit" id="next" style="background: linear-gradient(-45deg, #eba089, #ec96b7, #98d5eb, #a7ecdc); width: 80px; height: 40px; box-shadow: 3px 3px #98d5eb;" >home</button>
      </form>
      </div>
      
</body>
</html>