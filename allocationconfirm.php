<?php
    session_start();
    $con = mysqli_connect("localhost","root","trls2003","1mv20");
if (!$con){
    die("connection failed");
    exit();
}
    $adminidnumnum = $_SESSION['admin'];
    $applicationnumnum = $_SESSION['applicationnumber01'];
    $houseidid = $_SESSION['houseid01'];
    $sqlq2121 = "SELECT * FROM APPLICATION WHERE APPLICATION_NO = $applicationnumnum";
    $sqlq2122 = "SELECT * FROM HOUSE WHERE HOUSE_ID = $houseidid";
    $sqlq2124 = "SELECT * FROM ADMIN WHERE ADMIN_NAME = '$adminidnumnum' ";
    $res22 = mysqli_query($con,$sqlq2121);
    $res33 = mysqli_query($con,$sqlq2122);
?>
<form action="" method="post">
    <h1 style="text-align: center;">THIS IS THE CONFIRMATION PAGE</h1>
<div>
      <?php
          if(mysqli_num_rows($res22)){
            $data0101 = mysqli_fetch_assoc($res22);
      ?>    <div class="application" style="background-color: antiquewhite; width:50%; padding: 10px; margin-top:30px; height:200px;" >
            <h3>Application selected</h3>
        <?php  
            echo "The application selected was ".$data0101['APPLICATION_NO']." bearing name ".$data0101['NAME']." <br> with email-id: ".$data0101['EMAIL_ID']."<br> address: ".$data0101['ADDRESS']."<br> citizenship: ".$data0101['CITIZENSHIP']."<br> having annual income ".$data0101['ANNUAL_INCOME']." <br> with the reservation category ".$data0101['RESERVATION']."<br> with already having number of houses : ".$data0101['NO_OF_HOUSE_OWNED'];
        ?>  
            </div>
      <?php    
          }
      ?>  
    </div>
    <div>
        <?php
          if(mysqli_num_rows($res33)){
            $data0102 = mysqli_fetch_assoc($res33);
            ?>
            <div class="hosue" style="background-color: antiquewhite; width:45%; padding: 10px; margin-top:-219px; margin-left:800px; height:200px; ">
            <h3>House selected</h3>
            <?php echo " You have select house with identification number: ".$data0102['HOUSE_ID']."<br> having dimension: ".$data0102['DIMENSION']." with door number".$data0102['DOOR_NO']."<br>NORTH : ".$data0102['NORTH']."<br>SOUTH : ".$data0102['SOUTH']."<br>EAST : ".$data0102['EAST']."<br>WEST : ".$data0102['WEST']."<br> with  number of floors :".$data0102['NO_OF_FLOORS']."<br> with square feet(feet^2) :".$data0102['SQ_FEET']; ?>
             </div>
            <?php
          }
        ?>
          <div class="date" style="text-align:center;background-color:bisque; padding-top:0px; margin-top:10px;">
            <?php
            echo "<br> This allocation will be dated : ";
            $date = date_create(date("Y-m-d"));
            echo date_format($date,"Y-m-d");
            ?>
          </div>  
          <button type="submit" class='confirm2' name='confirm2'> 2nd level Confirm</button>
      </div>
      <?php
            if(isset($_POST['confirm2'])){
                $res44 = mysqli_query($con,$sqlq2124);
                $data0103 = mysqli_fetch_assoc($res44);
                $houseidid = $data0102['HOUSE_ID'];
                $adminidid = $data0103['ADMIN_ID'];
                $adminnamename = $data0103['ADMIN_NAME'];
                $applinumnum = $data0101['APPLICATION_NO'];
                $ownername = $data0101['NAME'];
                $dobdob = $data0101['DOB'];
                $gen = $data0101['GENDER'];
                $fohomo = $data0101['FO_WO_HO'];
                $phonenono = $data0101['PHONE_NO'];
                echo $ownername;
                $namearray = explode(" ",$ownername,);
                echo "<br>";
                echo $fohomo;
                $namearray1 = explode(" ",$fohomo,);
                echo "<br>";
                echo $namearray[0];
                echo $namearray1[0];
                $fnamenamme = $namearray[0];
                $fowoname = $namearray1[0];
                $sqlq2125 = "INSERT INTO OWNERS(HOUSE_ID,ADMIN_ID,ADMIN_NAME,APPLIC_NO,OWNER_NAME,DOB,GENDER,FO_WO_HO,PHONE_NO,appointeddate) VALUES ($houseidid,$adminidid,'$adminnamename',$applinumnum,'$fnamenamme',$dobdob,'$gen','$fowoname',$phonenono,CURRENT_DATE())";
                $sqlq2126 = "UPDATE HOUSE SET AVAILABILITY = 'NO' WHERE HOUSE_ID = $houseidid ";
                $res66 = mysqli_query($con,$sqlq2126);
                $res55 = mysqli_query($con,$sqlq2125);
                if($res55 && $res66){
                    ?>
                    <?php
                    echo "done successfully";
                    ?>
                    <?php
                }
            }
      ?>
      </form>  
<form action="allocationsemi.php" method="post">
<button type="submit">back</button>
</form>