<?php
include ('./databaseconn.php');
$id=$_GET['id'];
$sql="DELETE from students where contact_info='$id'";
$conn->exec($sql);
echo "data deleted";