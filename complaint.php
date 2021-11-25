</form>
<html>
<body>
         <title>COMPLAINT INVOICE</title> <?php
$host="Complaint invoice"; $username="root";
$password="";
$db_name="panchayat";
$table="epanchayat";
$con=mysqli_connect("$host", "$username", "$password", $db_name);
if(!$con)
{
die("cannot connect");
}
$name=$_POST['name'];
$aadhar=$_POST['aadhar'];
$address=$_POST['address'];
$phno=$_POST['phno'];
$email=$_POST['email'];
$complaints=$_POST['complaint'];
$sql="INSERT INTO $table(name, aadhar, address, phno, email, complaints) VALUES('$name',
'$aadhar', '$address', '$phno', '$email', '$complaints')"; $result=mysqli_query($con,$sql);
mysqli_close($con);
   
         ?>
