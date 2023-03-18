<?php
    echo "welcom to housing board";
    echo " <br> ";
    echo "hi hello this is shreyas";
    $con = mysqli_connect("localhost","root","trls2003","1mv20");

    if (!$con){
        die("connection failed");
    }
    else{
        echo"connnection successful";
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mname = $_POST['mname'];
    $aadhaar = $_POST['aadhaar'];
    $password = $_POST['password'];
    $full = $fname.' '.$mname.' '.$lname;
    
    $sql = "INSERT INTO `users` (`AADHAR_ID`, `PASSWORD`, `NAME`,`DATE`) VALUES ('$aadhaar', '$password', '$full',CURRENT_DATE())";
    $result = mysqli_query($con,$sql);
    if($result){
        header("location:userlogin.html");
    }
    else{
        echo"the table was not created successfully error--->";
    }
    }
?>