<?php

//$user=$_POST['user'];
//$passwd=$_POST['old'];
//$pwd=$_POST['nw'];
$c=mysqli_connect('localhost','root','');
mysqli_query($c,"create database connection");
mysqli_select_db($c,"connection");
/*
$q=mysqli_query($c,"select *from hari where name='$user' and password='$passwd';");
$count=mysqli_num_rows($q);
if($count==1){
mysqli_query($c,"update hari set password='$pwd' where name='$user';");
}
else{
	echo "<script>alert('enter valid username and Password');</script>";
}


$q="create table if not exists hari(name varchar(30), password varchar(20));";
mysqli_query($c,$q);

mysqli_query($c,"insert into hari values('$user','$passwd')");
*/

$qry="select *from hari;";
$result=mysqli_query($c,$qry);
echo "<table>";
while($row=mysqli_fetch_assoc($result)){

	echo "<tr>";
	echo "<td>Username: ".$row['name']."</td>";
	echo "<td>Password: ".$row['password']."</td>";
	echo "</tr>";

}

echo "</table>";


$qry="select *from hari;";
$result=mysqli_query($c,$qry);
echo "<table>";
while($row=mysqli_fetch_array($result)){

	echo "<tr>";
	echo "<td>Username: ".$row[0]."</td>";
	echo "<td>Password: ".$row[1]."</td>";
	echo "</tr>";

}

echo "</table>";


mysqli_close($c);
?>