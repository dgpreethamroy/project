<?php
$db=new mysqli("localhost","root","","placements");
$hh=$_POST['xyz'];
$hh=stripcslashes($hh);
$hh = mysqli_real_escape_string($db,$hh);
$qq="select * from data where compname='$hh'";
$result = mysqli_query($db,$qq ) or die ("failed to query database".mysql_error());
echo"<table border='1'>";
echo"<tr><td>compname</td><td>details</td><tr>";
while ($row = mysqli_fetch_assoc($result))
{
echo "<tr><td>{$row['compname']}</td><td>{$row['details']}</td><tr>";
}

echo"</table>";
?>
