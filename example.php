<?php
$con = mysqli_connect("localhost","root","trls2003","1mv20");

if (!$con){
    die("connection failed");
}
else{
    echo"connnection successful";
}
$sql = "INSERT INTO `users` (`AADHAR_ID`, `PASSWORD`, `NAME`) VALUES ('123456789093', 'BTBT@2003', 'Lahari')";
$result = mysqli_query($con,$sql);
if($result){
    echo "the table was created successfully";
}
else{
    echo"the table was not created successfully error--->";
}
?>