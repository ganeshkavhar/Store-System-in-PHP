<?php
include('config.php');
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$addrss=$_POST['addrss'];
// Code for execute the Store Procedure
$sql=mysqli_query($con,"CALL insertuser('$name','$email','$contact','$addrss')");
if($sql)
{
echo "<script>alert('Data Inserted');</script>";
}
else
{
echo "<script>alert('not inserted');</script>";
}
 }
?>
<html>
<title>Prepared statement</title>
<body>
<form name="stmt" method="post">
<table>
<tr>
<td>Name :</td>
<td><input type="text" name="name" required="required" /> </td>
</tr>
<tr>
<td>Email :</td>
<td><input type="email" name="email" required="required" /></td>
</tr>
<tr>
<td>Contact no. :</td>
<td><input type="text" name="contact" required="required" /></td>
</tr>
<tr>
<td>Address :</td>
<td><textarea name="addrss" cols="30" rows="4" required="required"></textarea></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="submit" value="Submit" /></td>
</tr>
</table>
</form>

</body>
</html>