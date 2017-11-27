<?php
function insertdata($data)
{
	$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO mytable (name)
VALUES ('".$data."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}




}
if(isset($_GET['name1']))	
echo "Name is ".$_GET['name1'];
if(isset($_GET['name2']))	
{
	//echo $_GET['name2'];
	$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO mytable (name)
VALUES ('".$_GET['name2']."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}

if(isset($_POST['name2']))	
{

	
}
if(isset($_POST['name5']))	
insertdata($_POST['name5']);
?>
