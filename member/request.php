<!DOCTYPE html>
<html>
<head>

<?php
include ("../lib/db_connect.php");
$connect= dbconn();
$member= member();

?>

<style>
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}


</style>
</head>
<body>

<h3>Contact Form</h3>

<form action="../member/request_post.php" style="border:1px solid #ccc" method='post'>
    <label><b>Name</b></label>
    <input type="text" placeholder="Your name.." name="name" value='<?= $member["name"]?>' >
	
	<label><b>Your Item </b></label>
    <input type="text" placeholder="Which item you want to report.." name="item_subject" >
	
	<label><b>Your Item's reference number </b></label>
    <input type="text" placeholder="put your reference number.." name="item_no" >

   <label>Reason for contact</label>
    <select id="reason" name="reason">
      <option value="found">FOUND</option>
      <option value="lost">LOST</option>
      <option value="return">RETURN TO OWNER</option>
    </select>

	
	<label><b>Description for your item</b></label>
    <input type="text" placeholder="Describe your item.." name="description" >
	
 <input type="submit" value="submit your inquiry">
</form>
 
</body>
</html>
