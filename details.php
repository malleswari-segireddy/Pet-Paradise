
<?php
$connection=mysqli_connect("localhost","root","","malleswari");
if($connection)
{
	echo "<h1>Thanks for Buying</h1>";
	echo "<p>Click here to redirect to website</p><br><a href='index.html'>click</a>";
}

else
{
	echo "error to create";
}
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$Address=$_POST['add'];
$Date=$_POST['date'];

$query="create table paradise(Name varchar(20) PRIMARY KEY,mobile char(10),email varchar(20),Address varchar(40),Date date);";
if(mysqli_query($connection,$query))
{
	echo "Table created";
}
else
{
	echo "error".mysqli_error($connection);
}

$query1="INSERT INTO paradise VALUES('$name','$mobile','$email','$Address','$Date');";
if(mysqli_query($connection,$query1)){
	header('location:index.html');
} 
else{
	echo "error".mysqli_error($connection);
}
$query2="SELECT *FROM paradise;";
$check=mysqli_query($connection,$query2);
if(mysqli_num_rows($check))
{
	while ($row=mysqli_fetch_assoc($check))
	{
		echo $row['Name']." ".$row['mobile']." ".$row['email']." ".$row['Address']." ".$row['Date']."<br>";
	}
}
else
{
	echo "error".mysqli_error($connection);
}

?>
