<?php
include("connectdb.php");

$sql = "SELECT * from userdata ";
$result=$conn->query($sql);

echo "<table border='1'>
<tr>
<th>ID</th>
<th>Firstname</th>
<th>Email ID</th>
<th>Password</td>
</tr>";

while($row = $result->fetch_assoc())
{
echo "<tr>";
echo "<td>" . $row['Id'] . "</td>";
echo "<td>" . $row['username'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['password'] . "</td>";
echo "</tr>";
}
echo "</table>";

$conn->close();
?>
