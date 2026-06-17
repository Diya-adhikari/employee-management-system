<? php
$conn=mysqli connect(
"localhost",
"root",
"",
"company");

if(isset($_POST['save']))

$slno=$_POST['slno'];
$name=$_POST['name'];
$sal=$_POST['sal'];

$sql="INSERT INTO employee
VALUES('$slno','$name','$sal')";

if(mysqli_query($conn,$sql))
{	
echo "Record Inserted";
}
}
?>
<html>
<body>

<form method="post">

Sl No:
<input type="number"
name="slno" required>
<br><br>

Name:
<input type="text"
name="name" required>
<br><br>

Salary:
<input type="number"
name="sal" required>
<br><br>

<input type="submit"
name="save"
value="Save">

</form>

<br>

<a href="menu.php">Back to Menu</a>

</body>
</html>




