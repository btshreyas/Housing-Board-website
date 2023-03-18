<?php 
  session_start();
  echo $_SESSION['application435'];
?>
<!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<style>  
body{  
  font-family: Calibri, Helvetica, sans-serif;  
  background: linear-gradient(-45deg, #fcc8ea, #b0f3b0, #acdaeb, #f7f0b6);  
}
  
.container {  
    padding: 160px; 
    background: linear-gradient(-45deg, #fcc8ea, #b0f3b0, #acdaeb, #f7f0b6); 
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
  background: linear-gradient(-45deg, #2d3a2c, #98d198, #9dc6d4, #5f4446);  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: 4px solid whitesmoke;  
  cursor: pointer;  
  width: 30%; 
  box-shadow: #2d3a2c;
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
<form action="bank.php" method="post" style="margin-top: -200px;"> 
  <div class="container">  
  <center>  <h1><b><U> BANK DETAIL FORM</b></U></h1> </center>  
  <hr>
  <label> Name </label>   
<input type="text" name="name" placeholder= "name" size="15" required />   
<label> Bank Name </label>   
<input type="text" name="bankname" placeholder= "bank name" size="15" required />   
<label> Branch Name </label>   
<input type="text" name="branchname" placeholder= "Branch name" size="15" required />   


<label for="accountno"><b>Account Number</b></label>  
<input type="number" placeholder="Enter Bank Account number" name="accountno"/ required> 
<label for="PAN_number"><b>PAN Number</b></label>  
<input type="number" placeholder="Enter PAN number" name="PAN_number"  required/>  
 
<label for="IFSCcode"><b>IFSC Code</b></label>  
<input type="text" placeholder="Enter IFSC code" name="IFSCcode"  required/>
<button type="submit" class="registerbtn"><B>SUBMIT</B></button>    
</form>
<div class="back">
      <a href="userapplication.php">
      <button type="button" id="next" style="background: linear-gradient(-45deg, #eba089, #ec96b7, #98d5eb, #a7ecdc); width: 80px; height: 40px; box-shadow: 3px 3px #98d5eb;" >Back</button>
      </a>
    </div>  
</body>  
</html>