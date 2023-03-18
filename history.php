<?php
session_start();
echo $_SESSION['name1'];
$con = mysqli_connect("localhost","root","trls2003","1mv20");
if (!$con){
    die("connection failed");
}
$name = $_SESSION['name1'];
$sqlquery26 = "SELECT * FROM PAYMENT_BILL WHERE OWNER_NAME = '$name'";
$res173 = mysqli_query($con,$sqlquery26);
    ?>
    <table border ="1" cellspacing="0" cellpadding="10">
  <tr>
    <th>S.N</th>
    <th>HOUSE-ID</th>
    <th>OWNER NAME</th>
    <th>ELECTRICITY BILL-ID</th>
    <th>ELECTRICITY BILL AMOUNT</th>
    <th>WATER BILL-ID</th>
    <th>WATER BILL AMOUNT</th>
    <th>LPG BILL-ID</th>
    <th>LPG BILL AMOUNT</th>
    <th>TOTAL AMOUNT</th>
    <th>PAYMENT DATE</th>
  </tr>
<?php
if (mysqli_num_rows($res173) > 0) {
  $sn=1;
  echo mysqli_num_rows($res173);
  while($data1 = mysqli_fetch_assoc($res173)) {
 ?>
 <form>
 <tr>
   <td><?php echo $sn; ?> </td>
   <td><?php echo $data1['HOUSE_ID']; ?> </td>
   <td><?php echo $data1['OWNER_NAME']; ?> </td>
   <td><?php echo $data1['EL_ID']; ?> </td>
   <td><?php echo $data1['ELECTRICITY_BILL']; ?> </td>
   <td><?php echo $data1['WA_ID']; ?> </td>
   <td><?php echo $data1['WATER_BILL']; ?> </td>
   <td><?php echo $data1['LPG_ID']; ?> </td>
   <td><?php echo $data1['LPG_BILL']; ?> </td>
   <td><?php echo $data1['TOT']; ?> </td>
   <td><?php echo $data1['DATE']; ?> </td>
 <tr>
 </form>   
 <?php
  $sn++;}} 
  else { ?>
    <tr>
     <td colspan="8">No data found</td>
    </tr>
 <?php } ?>
</table>

<form action="ownerhome.php" method="post" style="width: 125px; height:20px; margin-left:50px; margin-top: 10px;">
<button type="submit">Back</button>
</form>