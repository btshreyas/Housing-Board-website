<?php
    $con = mysqli_connect("localhost","root","trls2003","1mv20");

    if (!$con){
        die("connection failed");
    }
    else{
        echo"connnection successful";
        echo"<br>";
    $admin = $_POST['admin_id'];
    $pass = $_POST['password'];
    $sql = "SELECT *FROM admin WHERE ADMIN_ID = '$admin' AND PASSWORD = '$pass'";
    $result = mysqli_query($con,$sql);

    if (mysqli_num_rows($result)){
        echo " Login Successfull";
        session_start();
        $row = mysqli_fetch_assoc($result);
        $_SESSION['admin'] = $row['ADMIN_NAME'];
        header("Location: adminhome.php");
        exit();
    }
    else{
        header("Location: adminlogin.html?error=wrong password or id");
    }
    }
?>