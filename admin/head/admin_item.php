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
<h2>Admin - User's Item Page</h2>
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


<tr> 

    <td width='100%' height='20' colspan='5' class='font_td1' bgcolor='FFFFF'>- FILO item board -

	</td>
	
	
<tr>
    <td class='font_tr2' width='5%' height='30' align='center' valign='middle'>Ref No.</td>
	<td class='font_tr2' width='5%' height='30' align='center' valign='middle'>The post writer</td>
	<td class='font_tr2' width='40%' height='30' align='center' valign='middle'>Title</td>
	<td class='font_tr2' width='15%' height='30' align='center' valign='middle'>Category</td>
	<td class='font_tr2' width='10%' height='30' align='center' valign='middle'>Pre-view</td>
	<td class='font_tr2' width='10%' height='30' align='center' valign='middle'>Date</td>
	

<?php
$query=" select * from bbs1 where id='bbs1' order by no desc"; //desc 
$result= mysqli_query($connect,$query);
while($data= mysqli_fetch_array($result)){

?>
<tr> 
    <td height='20' align='center' bgcolor='EFEEEC'><?=$data["no"]?></td>
	<td height='15' align='center' bgcolor='EFEEEC'><?=$data["name"]?></td>
	<td height='20' align='center' bgcolor='EFEEEC'><?=$data["subject"]?></td>
	<td height='20' align='center' bgcolor='EFEEEC'><a href="./board/view.php?no=<?=$data['no']?>&id=<?=$data['id']?>"> <?=$data['subject']?></td>
	<td align='center' ><img src='../../board/data/<?=$data["file01"]?>' width='50' height='50'></td>
	<td height='25' align='center' bgcolor='EFEEEC'><?=$data["regdate"]?></td>
<?php
 }?>

<tr> 	

	<tr> 
	</table>
</TD>


<TR>
<TD WIDTH='100%'  HEIGHT='100%'  ALIGN='CENTER'  VALIGN='TOP'>&nbsp;</TD>
</TR>
</TABLE>

</body>
</html>