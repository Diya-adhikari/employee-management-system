<? php
$conn mysqli connect(
"localhost",
"root",
"",
"company");

$result-mysqli_query(
$conn,
"SELECT * FROM employee");
?>

<html>
<body>
<table border="1">

<tr>
<th>Sl No</th>
<th>Name</th>
<th>Salary</th>
</tr>

<? php

while($row=mysqli_fetch_assoc($result))
{
?>

<tr>

<td> <? php echo $row['slno']; ?></td>

<td> <? php echo $row['name']; ?></td>

<td> <? php echo $row['sal']; ?></td>

</tr>

<? php
}
?>

</table>

<br>

<a href-"menu.php">Back to Menu</a>

</body>
</html>