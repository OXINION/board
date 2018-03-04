<?php
	session_start();
	//error_reporting(E_ALL & ~E_NOTICE);

  include "../../lib/db_connect.php"; 
  $connect = dbconn(); 
  $member =  member();
	?>

<html>
<head>

<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
<title>FILO board</title>

<script> 
	function submits(){ 
	document.form1.submit();
	}
	</script>
</head>

<body>

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
<a href="../section/pet.php";> Pet Section</a>
&nbsp &nbsp
<a href="../section/phone.php";> Phone Section</a>
&nbsp &nbsp
<a href="../section/jewellery.php";> Jewellery Section</a>



<tr> 

    <td width='100%' height='20' colspan='5' class='font_td1' bgcolor='FFFFF'>- FILO board -
 
	</td>

	<?echo =$PHP_SELF?>
	
	
<tr>
    <td class='font_tr2' width='5%' height='30' align='center' valign='middle'>No</td>
	<td class='font_tr2' width='15%' height='30' align='center' valign='middle'>Name</td>
	<td class='font_tr2' width='40%' height='30' align='center' valign='middle'>Title</td>
	<td class='font_tr2' width='15%' height='30' align='center' valign='middle'>Category</td>
	<td class='font_tr2' width='10%' height='30' align='center' valign='middle'>Updated Date</td>
<?php
$query=" select * from bbs1 where category='pet'"; //desc 
$result= mysqli_query($connect,$query);
$cnt=1; //current post listing
while($data= mysqli_fetch_array($result)){

?>
<tr> 
    <td height='20' align='center' bgcolor='EFEEEC'><?=$cnt?></td>
	<td height='20' align='center' bgcolor='EFEEEC'><?=$data["name"]?></td>
	<td height='20' align='center' bgcolor='EFEEEC'><a href="../view.php?no=<?=$data['no']?>&id=<?=$data['id']?>"> <?=$data['subject']?></td>
	<td height='20' align='center' bgcolor='EFEEEC'><?=$data["category"]?></td>

	<td height='25' align='center' bgcolor='EFEEEC'><?=$data["regdate"]?></td>
<?php
	$cnt++;
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