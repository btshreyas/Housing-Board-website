<?php
    $con = mysqli_connect("localhost","root","trls2003","1mv20");

    if (!$con){
        die("connection failed");
    }
    else{
        echo"connnection successful";
        echo"<br>";
    $aadhaar = $_POST['aadhaar'];
    $password = $_POST['password'];
    $sql = "SELECT *FROM users WHERE AADHAR_ID = '$aadhaar' AND PASSWORD = '$password'";
    $result = mysqli_query($con,$sql);
    if (mysqli_num_rows($result)){
        echo " Login Successfull";
        $sql10 = "SELECT *FROM OWNERS WHERE APPLIC_NO IN ( SELECT APPLICATION_NO FROM APPLICATION WHERE AADHAR_ID = '$aadhaar' )";
        $result4 = mysqli_query($con,$sql10);
        if(mysqli_num_rows($result4)){
            $row12 = mysqli_fetch_assoc($result4);
            session_start();
            $_SESSION['name1'] = $row12['OWNER_NAME'];
            $_SESSION['aa'] = $aadhaar;
            header("location: ownerhome.php");
        }
        else{
            $row = mysqli_fetch_assoc($result);
            session_start();
            $_SESSION['name'] = $row['NAME'];
            $_SESSION['applicationnumbernumber'] = $row['APPLICATION_NO'];
            $_SESSION['aa'] = $row['AADHAR_ID'];
            header("location: userhome.php");
        }
    }
    else{
        header("location: userlogin.html?msg=wrongcredentials");
    }
}
?>