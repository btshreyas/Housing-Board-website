<?php
    session_start();
    echo $_SESSION['application435'];
    $con = mysqli_connect("localhost","root","trls2003","1mv20");

    if (!$con){
        die("connection failed");
    }
    else{
        $application_number = $_SESSION['application435'];
        $ename = $_POST['name'];
        $bankname = $_POST['bankname'];
        $branchname = $_POST['branchname'];
        $accno = $_POST['accountno'];
        $panno = $_POST['PAN_number'];
        $ifsc = $_POST['IFSCcode'];
        $passbook ='AAA';
        $sql17 = " INSERT INTO `bank` (`APPLICATION_NO`, `NAME`, `BANK_NAME`, `BRANCH_NAME`, `ACCOUNT_NO`, `PAN_NO`, `IFSC_CODE`, `PASS_BOOK`,`DATE`) VALUES ('$application_number', '$ename', '$bankname', '$branchname', '$accno', '$panno', '$ifsc', '$passbook',CURRENT_DATE());";
        $result5 = mysqli_query($con,$sql17);
        if($result5){
            echo "the table was created successfully";
            header("location:userbank.php");
            exit();
        }
        else{
            echo"the table was not created successfully error--->";
        }
    }    
?>