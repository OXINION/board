<?php header("content-type:text/html; charset=UTF-8");

	include '../lib/db_connect.php';
	$connect=dbconn();
	$member= member();
	
	if(!$member["name"])Error("Use it after login"); //for registered user

	
$name=$_POST["name"];   //name
	$item_subject=$_POST["item_subject"];
	$item_no=$_POST["item_no"];
	$reason=$_POST["reason"];
	$description=$_POST["description"];

$query="INSERT INTO `request`(`name`, `item_subject`, `item_no`, `reason`, `description`)
		VALUES ('$name','$item_subject','$item_no','$reason','$description')";
mysqli_query($connect,$query);
mysqli_close($connect);


?>



<script>
window.alert('Thanks for your request');
location.href='../index.php';
</script>