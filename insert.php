<?php

$con = mysqli_connect('127.0.0.1','root','');

if(!$con)
{
	echo 'Not Connected To Server';
}

if(!mysqli_select_db($con,'reservation'))
{
	echo 'Database Not Selected';
}

$Name = $_POST['name'];
$Email = $_POST['email'];
$Tables = $_POST['tables']
$Dayds = $_POST['day']


$sql = "INSERT INTO person (Name,Email,Table,Day) VALUES ('$Name','$Email','$Tables','$Day')";

if(!mysqli_query($con,$sql))
{
	echo 'Not Inserted';
}
else{
	echo 'Inserted';
}

header("refresh":2; url=index.html");

?>