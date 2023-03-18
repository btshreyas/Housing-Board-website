<?php
    $con = mysqli_connect("localhost","root","trls2003","1mv20");

    if (!$con){
        die("connection failed");
    }
    else{
        echo"connnection successful";
    $fname = $_POST['name'];
    $lname = $_POST['email'];
    $mname = $_POST['desc'];
    
    $sql = "INSERT INTO `contacts` (`Name`, `email`, `description`, `date`) VALUES ('$fname', '$lname', '$mname', CURRENT_DATE());";
    $result = mysqli_query($con,$sql);
    if($result){ 
        header("location: contacts.php");
    }
    else{
        echo"the table was not created successfully error--->";
    }
    }
?>