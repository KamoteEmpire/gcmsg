<?php
header('Access-Control-Allow-Origin: *');
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected";
mysqli_select_db($conn,"db_msgboard");

$sql = "SELECT * FROM tbl_msgboard";
$result = mysqli_query($conn, $sql);
echo "<table class='table'>";
echo "<tr>";
	echo "<td>Username</td>";
	echo "<td>Message</td>";
echo "</tr>";
if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
	echo "<tr>";
        echo "<td>".$row["fld_username"]."</td>";
        echo "<td>".$row["fld_msg"]."</td>";
	echo "</tr>";		
    }
}
echo "</table>";
?>