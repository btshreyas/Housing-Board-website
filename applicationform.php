<?php
  session_start();
  $con = mysqli_connect("localhost","root","trls2003","1mv20");
  if (!$con){
    die("connection failed");
}
else{
    $sql3 = "select max(APPLICATION_NO) from APPLICATION ";
    $result12 = mysqli_query($con,$sql3);
    if($result12){
        $row = mysqli_fetch_assoc($result12);
        $lastappli = $row['max(APPLICATION_NO)'];
        $lastappli = $lastappli + 1;
    }
    else{
        echo"the table was not created successfully error--->";
    }  
}
?>
<!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<style>  
body{  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: pink;  
}
  
.container {  
    padding: 50px;  
  background-color: rgb(128, 154, 163);
  background: linear-gradient(-45deg, #eba089, #ec96b7, #98d5eb, #a7ecdc); 
  display: flex;
  flex-direction: column;
}  
input[type=date], input[type=date], textarea {  
  width: 50%;  
  padding: 15px;  
  margin: 5px 0 22px 0;    
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
input[type=text]:focus, input[type=password]:focus {  
  outline: none;  
}  
 div {  
            padding: 10px 0;  
         }  
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
}  
.registerbtn {  
  align-self: center;
  background: linear-gradient(135deg, #eba089, #ec96b7, #98d5eb, #a7ecdc);  
  color: white;  
    
  margin: 8px 0;  
  border: 3px solid whitesmoke;  
  cursor: pointer;  
  width: 40%;  
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
<form action="application.php" method="post"> 
  <div class="container">  
  <center>  <h1> House Application Form for <?php echo $_SESSION['username1']; echo "<br>";echo "Aadhar no : "; $aadh = $_SESSION['aa'];echo $_SESSION['aa']; echo "<br>";echo "Application no : "; echo $lastappli ?> </h1> </center>  
  <hr>
<label> Firstname </label>   
<input type="text" name="firstname" placeholder= "Firstname" size="15" required/>   
<label> Middlename: </label>   
<input type="text" name="middlename" placeholder="Middlename" size="15" required/>   
<label> Lastname: </label>    
<input type="text" name="lastname" placeholder="Lastname" size="15" required/>   
<div>  
<label>   
Gender :  
</label><br>  
<input type="radio" value="M" name="gender" checked > Male   
<input type="radio" value="F" name="gender"> Female   
<input type="radio" value="O" name="gender"> Other  
</div>  
<label>   
Phone :  
</label>  
<input type="text" name="country code" placeholder="Country Code"  value="+91" size="2" required/>   
<input type="text" name="phone" placeholder="phone no." size="10">   
Current Address :  
<textarea cols="80" rows="5" placeholder="Current Address" name="address" value="address" required>  

</textarea>  
<label for="pincode"><b>Pincode</b></label>  
<input type="number" placeholder="Enter Pincode" name="pincode" size="6" required/> 
 <label for="email"><b>Email</b></label>  
 <input type="text" placeholder="Enter Email" name="email" > 
 
 <label for="DOB"><b>Dateofbirth</b></label>  
 <input type="date" placeholder="Enter Date of birth(dd-mm-yyyy)" name="DOB" required/> 
 <label for="citizenship"><b>Citizenship</b></label> 
<input type="text" name="citizenship" placeholder="citizenship" required/> 
<label for="Annual_income"><b>Annual Income</b></label>  
<input type="number" placeholder="Enter Annual Income" name="Annual_income"  required/> 
<label for="reservation"><b>Reservation (G/OBC/SC/ST/EWS)</b></label> 
<input type="text" name="reservation" placeholder="Enter reservation"required/> 
<label for="religion"><b>Religion</b></label> 
<input type="text" name="religion" placeholder="Enter the Religion"/> 
<label for="fo_ho"><b>father of/ wife of/ husband of</b></label> 
<input type="text" name="fo_ho" placeholder="father of/ wife of/ husband of" required/>
<label for="no_of_house_owned"><b>Number of House Owned</b></label>  
<input type="number" placeholder="Enter the number of house owned" name="nohouse" size="1" required/>
<label for="name_of_nominee"><b>Name Of Nominee</b></label> 
<input type="text" name="nominee" placeholder="Name Of Nominee" required/>  
<label for="PAN_number"><b>PAN Number</b></label>  
<input type="number" placeholder="Enter PAN number" name="PAN" required/>
<?php
  $_SESSION['aadhaar_app'] = $aadh;
  $_SESSION['application_number'] = $lastappli;
?>
<button type="submit" class="registerbtn"><h3><b>Register</b></h3></button>    
</form>  
</body>  
</html>