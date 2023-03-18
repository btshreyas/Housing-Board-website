<?php
    session_start();
    echo $_SESSION['name1'];
    $ownername = $_SESSION['name1'];
    $con = mysqli_connect("localhost","root","trls2003","1mv20");
    if (!$con){
        die("connection failed");
    }
    $sql1111 = "SELECT *FROM HOUSE WHERE HOUSE_ID IN (SELECT HOUSE_ID FROM OWNERS WHERE OWNER_NAME = '$ownername')";
    $result1111 = mysqli_query($con,$sql1111);
    $data = mysqli_fetch_assoc($result1111);
    ?>
<table border ="1" cellspacing="0" cellpadding="10">
  <tr>
    <th>S.N</th>
    <th>House_ID</th>
    <th>Door_no</th>
    <th>North</th>
    <th>South</th>
    <th>East</th>
    <th>West</th>
    <th>Dimesnsion</th>
    <th>Square feet</th>
    <th>Number of floor</th>
  </tr>
 <tr>
   <td><?php echo '1'; ?> </td>
   <td><?php echo $data['HOUSE_ID']; ?> </td>
   <td><?php echo $data['DOOR_NO']; ?> </td>
   <td><?php echo $data['NORTH']; ?> </td>
   <td><?php echo $data['SOUTH']; ?> </td>
   <td><?php echo $data['EAST']; ?> </td>
   <td><?php echo $data['WEST']; ?> </td>
   <td><?php echo $data['DIMENSION']; ?> </td>
   <td><?php echo $data['SQ_FEET']; ?> </td>
   <td><?php echo $data['NO_OF_FLOORS']; ?> </td>
 <tr>
</table>
<form action="ownerhome.php" method="post">
    <button type="submit" >Back</button>
</form>