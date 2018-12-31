<?php
include('connection.php');
$stmt="CREATE TABLE IF NOT EXISTS comment(
id INT AUTO_INCREMENT PRIMARY KEY,
comment VARCHAR(250) NOT NULL,
post_id tinyint(4) NOT NULL,
postdate VARCHAR(50) NOT NULL,
user_id tinyint(4) NOT NULL,
status TINYINT(1) NOT NULL
)";
$qry=mysqli_query($conn,$stmt) or die(mysqli_error());
if($qry)
{
	echo "Table Created Successfully";
}
else
{
	echo "Error Creating table or might exist";
}
?>