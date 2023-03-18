<?php
    session_start();
    $con = mysqli_connect("localhost","root","trls2003","1mv20");

    if (!$con){
        die("connection failed");
    }
    else{
        $application_number = $_SESSION['application_number'];
        $aadhaar_number = $_SESSION['aadhaar_app'];
        $fname = $_POST['firstname'];
        $mname = $_POST['middlename'];
        $lname = $_POST['lastname'];
        $gender = $_POST['gender'];
        $phone = $_POST['phone'];
        $adres = $_POST['address'];
        $pincode = $_POST['pincode'];
        $email = $_POST['email'];
        $dob = $_POST['DOB'];
        $citiship = $_POST['citizenship'];
        $anninco = $_POST['Annual_income'];
        $resve = $_POST['reservation'];
        $reli = $_POST['religion'];
        $foho = $_POST['fo_ho'];
        $nohouse = $_POST['nohouse'];
        $nominee = $_POST['nominee'];
        $panno = $_POST['PAN'];
        $fee1 = 0;
        if($resve == 'G'){
            $fee1 = 1300; 
        }
        else if($resve == 'OBC'){
            $fee1 = 300;
        }
        else if($resve == 'EWS'){
            $fee1 = 200;
        }
        else{
            $fee1 = 100;
        }
        $full = $fname.' '.$mname.' '.$lname;
        $sql7 = " INSERT INTO `application` (`AADHAR_ID`, `APPLICATION_NO`, `NAME`, `EMAIL_ID`, `GENDER`, `DOB`, `PAN_NO`, `ADDRESS`, `PINCODE`, `RELIGION`, `CITIZENSHIP`, `ANNUAL_INCOME`, `RESERVATION`, `FO_WO_HO`, `NAME_OF_NOMINEE`, `NO_OF_HOUSE_OWNED`, `FEE`, `PHONE_NO`.`DATE`) VALUES ('$aadhaar_number', '$application_number', '$full', '$email', '$gender', '$dob', '$panno', '$adres', '$pincode', '$reli', '$citiship', '$anninco', '$resve', '$foho', '$nominee', '$nohouse', '$fee1', '$phone',CURRENT_DATE()); ";
        $result5 = mysqli_query($con,$sql7);
        if($result5){
            echo "the table was created successfully";
            header("location:userapplication.php");
        }
        else{
            echo"the table was not created successfully error--->";
        }
    }    
?>