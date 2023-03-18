<?php
    $con = mysqli_connect("localhost","root","trls2003","1mv20");

    if (!$con){
        die("connection failed");
    }
    else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOMES</title>
</head>
<style>
    body{
        margin-left: 350px;
        margin-top: 50px;
    }
</style>
<body>
<?php
    $query = "SELECT * FROM HOUSE WHERE AVAILABILITY='YES'";
    $result8 = mysqli_query($con, $query);
    $previous = "javascript:history.go(-1)";
    if(isset($_SERVER['HTTP_REFERER'])) {
    $previous = $_SERVER['HTTP_REFERER'];
    }
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
<?php
if (mysqli_num_rows($result8) > 0) {
  $sn=1;
  while($data = mysqli_fetch_assoc($result8)) {
 ?>
 <tr>
   <td><?php echo $sn; ?> </td>
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
 <?php
  $sn++;}} else { ?>
    <tr>
     <td colspan="8">No data found</td>
    </tr>
 <?php } ?>
</table>
<form action="<?= $previous ?>">
<button type="submit">Back</button>
</form>
</body>
</html>
<?php }?>