<?php 
$con = mysqli_connect("localhost","root","trls2003","1mv20");
if (!$con){
    die("connection failed");
}
session_start();
?>
<h2><?php echo "HELLO, ".$_SESSION['name1']; ?></h2>
<?php
$paymentname = $_SESSION['name1'];
$sql1112 = "SELECT * FROM PAYMENTDETAILS WHERE APPLICA_NO IN(SELECT APPLIC_NO FROM OWNERS WHERE OWNER_NAME = '$paymentname')";
$res1112 = mysqli_query($con,$sql1112);
if(mysqli_num_rows($res1112)){
$data = mysqli_fetch_assoc($res1112);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <style>
   body{  
  font-family: Calibri, Helvetica, sans-serif;  
  background: linear-gradient(-45deg, #d354a7, #b0f3b0, #acdaeb, #f7f0b6);  
  }
</style>
<h2 style="text-align: center;" >PAYMENT DETAILS</h2>
<div class="display" style=" margin-left:460px; background-color:#98d5eb ;border: 10px solid white; width:fit-content; padding: 7px;" >
<form action="ownerhome.php" method="post" >
      <div class="full">
        <h2 class="bn">ADMIN-ID:<?php echo  $data['ADM_ID']; ?> &emsp; &emsp; &emsp; &emsp; &emsp;&emsp;ADMIN NAME: <?php echo  $data['APPLICA_NO']; ?></h4>
        <h2 class="bn">Name: <?php echo  $data['NAME']."   "; ?> &emsp; &emsp; &emsp; &emsp;&emsp;&emsp;&emsp; PAYMENT PLAN: <?php echo  $data['PAYMENT_PLANS']; ?></h2>
        <h2 class="fn">STATUS: <?php echo  $data['STATUS']." "; ?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; PAYMENT DOCUMENT : <?php echo  $data['PAYMENT_DOCUMENTS']; ?> </h2>
        <h2 class="fn">HOUSE ID : <?php echo  $data['HOUS_ID']; ?></h2>
      </div>
      <div class="back" style="margin-top: 0px;" >
      <button type="submit" id="next" style="background: linear-gradient(-45deg, #eba089, #ec96b7, #98d5eb, #a7ecdc); width: 80px; height: 40px; box-shadow: 3px 3px #98d5eb;" >Back</button>
      </div>
</form>
</div>
      <div class="next" style="margin-left: 477px; margin-top:15px;">
      <form action="ownerhome.php">
      <button type="submit" id="home" style="background: linear-gradient(-45deg, #eba089, #ec96b7, #98d5eb, #a7ecdc); width: 80px; height: 40px; box-shadow: 3px 3px #98d5eb;" >Home</button>
      </form>
      </div>
      <div class="home" style="margin-left: 1000px; margin-top: -55px;">
      <form action="paymentformnew.php">
      <button type="submit" id="next" style="background: linear-gradient(-45deg, #eba089, #ec96b7, #98d5eb, #a7ecdc); width: 80px; height: 40px; box-shadow: 3px 3px #98d5eb;" >Next</button>
      </form>
      </div>
</body>
</html>
<?php
}
else{
  ?>
  <!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<style>  
body{  
  font-family: Calibri, Helvetica, sans-serif;  
  background: linear-gradient(-45deg, #d354a7, #b0f3b0, #acdaeb, #f7f0b6);  
}
  
.container {  
    padding: 160px; 
    background: linear-gradient(-45deg, #b0dacc, #91e491, #acdaeb, #a7eeb2); 
    
}  
input[type=date], input[type=date], textarea {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
input[type=number], input[type=number], textarea {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
  
input[type=text], input[type=password], textarea {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  

 div {  
            padding: 10px 0;  
         }  
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
}  
.registerbtn {  
  background-color: #315532;  
  background: linear-gradient(135deg, #526950, #98d198, #9dc6d4, #9b6c6f);  
  padding: 16px 20px;    
  border: 4px;  
  cursor: pointer;  
  width: 220px; 
  margin-top: -200px;
  opacity: 0.9;  
}  
.registerbtn:hover {  
  opacity: 1;  
}  
</style>  
</head>  
<body> 
    <div class="wrap">
        <div class="bg_area">
          <div class="bg01 clearfix"></div>
        </div>
      </div> 
<form action="paymentformnew.php" method="post" style="margin-top: -150px;"> 
  <div class="container">  
  <center>  <h1><b><U> PAYMENT DETAILS FORM</b></U></h1> </center>  
  <hr>  
  <label for="admin_id"><b>Admin ID</b></label>  
<input type="number" placeholder="Admin ID" name="admin_id" / required>
<label> ADMIN Name </label>   
<input type="text" name="adminname" placeholder= "Admin name" size="15" required /> 
  <label for="application_no"><b>Application Number</b></label>  
<input type="number" placeholder="application_no" name="application_no" / required>
  
  <label> Name </label>   
<input type="text" name="name" placeholder= "name" size="15" required />   

<label for="paymentplans"><b>IFSC Code</b></label>  
<input type="text" placeholder="Enter Payment paymentplans" name="paymentplans" / required> 
<label for="status"><b>status</b></label>  
<input type="text" placeholder="complete/incomplete" name="status" / required>
<label for="house_id"><b>House ID</b></label>  
<input type="number" placeholder="House ID" name="house_id" / required>
<button type="submit" class="registerbtn" style="margin-left: 960px;margin-top: 10px; "><B>SUBMIT</B></button>    
</form>
<form action="ownerhome.php" method="post" style="width:auto; ">
<button type="submit" style="background-color: #315532;  
  background: linear-gradient(135deg, #526950, #98d198, #9dc6d4, #9b6c6f);  
  padding: 16px 20px;  
  border: 4px;  
  cursor: pointer;  
  width: 220px; 
  opacity: 0.9; margin-top: -50px;"><B>BACK</B></button>
</form>  
</body>  
</html>
  <?php
}
?>