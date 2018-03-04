
<html> 
<head>
<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
<title>FLIO post</title>
 <?php
	include "../lib/db_connect.php"; 
  $connect = dbconn(); 
  $member =  member();
  
	//if(!$member["user_id"])Error('Use it after login'); //for registered user
	
	$no= $_GET["no"];
	$id= $_GET["id"];
	?>

</head>
<body>

<TABLE BORDER='0' CELLSPACING='0' CELLPADDING='0' WIDTH='100%' HEIGHT='100%' ALIGN='CENTER' VALIGN='TOP'>
<TR>
<TD WIDTH='70%'  HEIGHT='100%'  ALIGN='LEFT'  VALIGN='MIDDLE' BGCOLOR='#ffffff'>

	<table border='0' width='90%' height='100%' bgcolor='#ffffff' align='center' cellspacing='0' cellpadding='0'>  
	<tr>
	<td width='100%' height='70' align='center' valign='middle' bgcolor='D4D5D3'>
	Read the post
	</td>
	<?php
	 $query="select * from bbs1 where no='$no' and id='$id'";
	 $result= mysqli_query($connect, $query);
	 $data= mysqli_fetch_array($result);
	?>
	<tr>
	<td width='100%' height='10' align='center' valign='middle'>
	&nbsp;
	</td>

	<tr>
	<td width='100%' height='15' align='left' valign='middle'>
	<li> Name : <?=$data["name"]?>
	</td>
	
	<tr>
	<td width='100%' height='25' align='left' valign='middle'>
	<li>Reference No : <?=$data['no']?>
	</td>

	<tr>
	<td width='100%' height='25' align='left' valign='middle'>
	<li>Title : <?=$data['subject']?>
	</td>

	<tr>
	<td width='100%' height='300' align='left' valign='top' bgcolor='FFFFFF'>
	<hr size='0.1' width='98%' color='94A0FC' />
	<div align='center'>
	<?if($data[file01]){?>
	<img src='./data/<?=$data["file01"]?>' >
	<?}?>
	</div>
	<br>
	<?=$data['story']?>
	 
	</td>
	</table>

	<TR>
	<TD WIDTH='100%'  HEIGHT='100%'  ALIGN='CENTER'  VALIGN='TOP'>
	 
	  <table border='0' width='800' cellspacing='0' cellpadding='0'>
		<td width=30> <input type=submit value='O K'></td>
	  </table>

	</td>
	</tr>
</table>




</body>
</html>
