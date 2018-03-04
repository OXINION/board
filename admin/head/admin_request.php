<?php

	include "../../lib/db_connect.php"; 
	$connect = dbconn(); 	
	
	
	?>

<html>
<head>

<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
<title>FILO board</title>

</head>
<body>
<h2>Admin - User's Request mamangement Page</h2>
<TABLE BORDER='0' CELLSPACING='0' CELLPADDING='0' WIDTH='100%' HEIGHT='100%' ALIGN='CENTER' VALIGN='TOP'>
<TR>
<TD WIDTH='100%'  HEIGHT='70'  ALIGN='LEFT'  VALIGN='MIDDLE' BGCOLOR='#E89C05'>
	<table border='0' width='90%' height='70' bgcolor='#E89C05' align='center' cellspacing='0' cellpadding='0'>  
		<tr> 
		<td width='100%' height='70' align='left' valign='middle'>
		<a href='../../index.php'><strong>[Home]</strong></a></td>

		<tr> 
		<td width='100%' height='100%' align='left' valign='middle'>&nbsp;</td>

		</tr>
	</table>

</TD>
<TR>







<TD WIDTH='50%'  HEIGHT='50%'  ALIGN='CENTER'  VALIGN='TOP'>
<table border='0' width='75%' height='100%' bgcolor='E0DFDE' align='center' cellspacing='0' cellpadding='0'>  
<tr> 
    <td width='100%' height='10' colspan='5' bgcolor='FFFFF'>&nbsp;</td>
	

<p>Click on the buttons inside the tabbed menu:</p>
<a href="./admin_user.php";> User List</a>
&nbsp &nbsp
<a href="./admin_item.php";> Item List</a>
&nbsp &nbsp
<a href="./admin_request.php";> Request List</a>

 <td   height='20' colspan='5' class='font_td1' bgcolor='FFFFF'>- Request- </td>

<tr>
    <td class='font_tr2' width='5%' height='30' align='center' valign='middle'></td>
    <td class='font_tr2' width='5%' height='30' align='center' valign='middle'>Name</td>
	<td class='font_tr2' width='40%' height='30' align='center' valign='middle'>Item Name</td>
	<td class='font_tr2' width='15%' height='30' align='center' valign='middle'>Item No</td>
	<td class='font_tr2' width='20%' height='30' align='center' valign='middle'>Reason</td>
	<td class='font_tr2' width='20%' height='30' align='center' valign='middle'>Your Inquiry</td>
	

	
	
<form  action="./admin_request.php" method="post" name="delete_submit">
	
<?php

	
	$query= "select * from request";
	$result= mysqli_query($connect,$query);
	while($data= mysqli_fetch_array($result)){

?>	
<tr> 
	<td><input type="checkbox" name="item_no[]" value="<?php echo $data['item_no'];?>"></td>
    <td height='20' align='center' bgcolor='EFEEEC'><?php echo $data["name"] ?></td>
	<td height='20' align='center' bgcolor='EFEEEC'><?php echo $data["item_subject"]?></td>
	<td height='20' align='center' bgcolor='EFEEEC'><?php echo $data["item_no"]?></td>
	<td height='20' align='center' bgcolor='EFEEEC'><?php echo $data["reason"]?></td>
	<td height='20' align='center' bgcolor='EFEEEC'><?php echo $data["description"]?></td>
</tr>

	<?php
}?>
<input type="hidden" name="check" value="delete">
<input type="submit" name="delete_submit" value="Refuse"/>

</form>	
</table>
<?php
$item_no=$_POST["item_no"];
$check=$_POST["check"];
if($check=="delete"){  
	for($ii=0; $ii<count($item_no); $ii++){
		$query= "DELETE FROM request WHERE item_no='$item_no[$ii]'";
		$result= mysqli_query($connect,$query);

	}
}

?>

</body>
</html>