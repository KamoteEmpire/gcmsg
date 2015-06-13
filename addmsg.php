<?php
header('Access-Control-Allow-Origin: *');
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$username = $_POST['txtUsername'];
$msg = $_POST['txtMsg'];
mysqli_select_db($conn,"db_msgboard");
$sql = "INSERT INTO tbl_msgboard (fld_msgboardid, fld_username, fld_msg, fld_date) VALUES (NULL, '".$username."', '".$msg."', CURRENT_TIMESTAMP)";

$result = mysqli_query($conn, $sql);
if($result){
	echo "I Will Graduate";
}
else{
	echo "I Will spend 5 years in College";
}

?>