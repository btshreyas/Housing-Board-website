<?php
session_start();
echo  "HI ".$_SESSION['admin'];
$con = mysqli_connect("localhost","root","trls2003","1mv20");
if (!$con){
    die("connection failed");
}
else{
?>
<?php
    $query33 = "SELECT * FROM APPLICATION WHERE APPLICATION_NO NOT IN(SELECT APPLIC_NO FROM OWNERS) and APPLICATION_NO IN(SELECT APPLICATION_NO FROM BANK) ORDER BY ANNUAL_INCOME DESC";
    $result23 = mysqli_query($con, $query33);
    $query333 = "SELECT * FROM HOUSE WHERE AVAILABILITY = 'YES'";
    $result323 = mysqli_query($con,$query333);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <h2>Application number to be allocated :</h2>
    <select name="applicationnumber01" style="width: 200px; height:40px; size:20px; margin-left: 400px; margin-top:0px;" >
    <?php
    if (mysqli_num_rows($result23) > 0) {
    while($data12 = mysqli_fetch_assoc($result23)) { 
    ?>
    <option value="<?php echo $data12['APPLICATION_NO']; ?>"><?php echo $data12['APPLICATION_NO']; ?></option> 
    <?php }} ?> 
    </select>
    <h2>Select the house ID to be allocated :</h2>
    <select name="houseid01" style="width: 200px; height:40px; margin-left: 400px; margin-top:0px;" >
    <?php
    if (mysqli_num_rows($result323) > 0) {
    while($data12 = mysqli_fetch_assoc($result323)) { 
    ?>
    <option value="<?php echo $data12['HOUSE_ID']; ?>"><?php echo $data12['HOUSE_ID']; ?></option> 
    <?php }} ?> 
    </select>
    <button type="submit" name="submit" style="width: 200px; height:40px; margin-left: 400px; margin-top: -50px ;">check</button>
    </form>
    <?php
    if(isset($_POST['submit'])){
        if(!empty($_POST['applicationnumber01']) && !empty($_POST['houseid01'])) {
          $apus = $_POST['applicationnumber01'];
          $sqlq01 = "SELECT * FROM APPLICATION WHERE APPLICATION_NO = $apus ";
          $result001 = mysqli_query($con,$sqlq01);
          $housi = $_POST['houseid01'];
          $sqlq02 = "SELECT * FROM house WHERE HOUSE_ID = $housi ";
          $result002 = mysqli_query($con,$sqlq02);
    ?>
    <div>
      <?php
          if(mysqli_num_rows($result001)){
            $data0101 = mysqli_fetch_assoc($result001);
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
          if(mysqli_num_rows($result002)){
            $data0102 = mysqli_fetch_assoc($result002);
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
            <?php
              $_SESSION['applicationnumber01'] = $data0101['APPLICATION_NO'];
              $_SESSION['houseid01'] = $data0102['HOUSE_ID'];
            ?>  
          </div>  
          <form action="allocationconfirm.php" method="post">
          <button type="submit" class='confirm' name='confirm'>Confirm</button>
          </form>
      </div>
      <form action="adminhome.php" method="post">
      <button type="submit">back</button>
      </form>  
    <?php      
        }
      }
    ?>
    <?php } ?>
</body>
</html>