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
        margin:10px;
    }
</style>
<body>
  <div style="width: 100%; position:fixed; position:sticky; top:5px; margin-bottom:20px; " >

<form action="" method="POST">
<select name="name01" id="">
  <option value="AADHAR_ID">AADHAR</option>
  <option value="APPLICATION_NO">APPLICATION NO</option>
  <option value="NAME">NAME</option>
  <option value="RESERVATION">RESEVATION</option>
  <option value="EMAIL_ID">EMAIL</option>
</select>
  <input name="username" id="search" type="text" style="width: 200px; height:25px; " placeholder="Type here">
  <button id="submit" type="submit" value="Search" name="search" style="width: 100px; height:30px; ">Search</button>
</form>
</div>
<?php
    if(!isset($_POST['search'])){
    $query76 = "SELECT * FROM APPLICATION WHERE APPLICATION_NO NOT IN(SELECT APPLIC_NO FROM OWNERS) and APPLICATION_NO IN(SELECT APPLICATION_NO FROM BANK) ORDER BY ANNUAL_INCOME DESC";
    $result85 = mysqli_query($con, $query76);
    }
    else{
    $name = $_POST['name01'];  
    $keyword = $_POST['username'];
    $query76 = "SELECT * FROM APPLICATION WHERE APPLICATION_NO NOT IN(SELECT APPLIC_NO FROM OWNERS) and APPLICATION_NO IN(SELECT APPLICATION_NO FROM BANK) AND $name LIKE '%$keyword%' ORDER BY $name  ";
    $result85 = mysqli_query($con,$query76);
    }
    $previous = "javascript:history.go(-1)";
    if(isset($_SERVER['HTTP_REFERER'])) {
    $previous = $_SERVER['HTTP_REFERER'];
    }
?>

<table border ="1" cellspacing="0" cellpadding="10">
  <tr>
    <th>S.N</th>
    <th>AADHAR-ID</th>
    <th>APPLICATION-NO</th>
    <th>NAME</th>
    <th>EMAIL-ID</th>
    <th>GENDER</th>
    <th>Date of Birth</th>
    <th>PAN</th>
    <th>ADDRESS</th>
    <th>PIN CODDE</th>
    <th>RELIGION</th>
    <th>CITIZENSHIP</th>
    <th>ANNUAL INCOME</th>
    <th>RESERVATION</th>
    <th>Son/husband/wife of</th>
    <th>NAME OF NOMINEE</th>
    <th>NUMBER OF HOUSES OWNED</th>
    <th>FEE</th>
    <th>PHONE NO</th>
    <th>ALLOCATE</th>
  </tr>
<?php
if (mysqli_num_rows($result85) > 0) {
  $sn=1;
  while($data1 = mysqli_fetch_assoc($result85)) {
 ?>
 <form>
 <tr>
   <td><?php echo $sn; ?> </td>
   <td><?php echo $data1['AADHAR_ID']; ?> </td>
   <td><?php echo $data1['APPLICATION_NO']; ?> </td>
   <td><?php echo $data1['NAME']; ?> </td>
   <td><?php echo $data1['EMAIL_ID']; ?> </td>
   <td><?php echo $data1['GENDER']; ?> </td>
   <td><?php echo $data1['DOB']; ?> </td>
   <td><?php echo $data1['PAN_NO']; ?> </td>
   <td><?php echo $data1['ADDRESS']; ?> </td>
   <td><?php echo $data1['PINCODE']; ?> </td>
   <td><?php echo $data1['RELIGION']; ?> </td>
   <td><?php echo $data1['CITIZENSHIP']; ?> </td>
   <td><?php echo $data1['ANNUAL_INCOME']; ?> </td>
   <td><?php echo $data1['RESERVATION']; ?> </td>
   <td><?php echo $data1['FO_WO_HO']; ?> </td>
   <td><?php echo $data1['NAME_OF_NOMINEE']; ?> </td>
   <td><?php echo $data1['NO_OF_HOUSE_OWNED']; ?> </td>
   <td><?php echo $data1['FEE']; ?> </td>
   <td><?php echo $data1['PHONE_NO']; ?> </td>
   <td><button type="submit" > <a href="allocationsemi.php">ALLOCATE</a></button></td>
 <tr>
 </form>   
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