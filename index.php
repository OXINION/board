<?php
	session_start();
	//error_reporting(E_ALL & ~E_NOTICE);

  include "./lib/db_connect.php"; 
  $connect = dbconn(); 
  $member =  member();
	?>

<html>
<head>

<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
<title>FILO board</title>
<link rel="stylesheet" type="text/css" href="../coursework/css/index.css">


</head>

<body>

<TABLE BORDER='0' CELLSPACING='0' CELLPADDING='0' WIDTH='100%' HEIGHT='100%' ALIGN='CENTER' VALIGN='TOP'>
<TR>
<TD WIDTH='100%'  HEIGHT='70'  ALIGN='LEFT'  VALIGN='MIDDLE' BGCOLOR='#E89C05'>
	<table border='0' width='90%' height='70' bgcolor='#E89C05' align='center' cellspacing='0' cellpadding='0'>  
	<tr> 
		<td width='100%' height='70' align='left' valign='middle'>
		<a href='../coursework/index.php'><strong>[Home]</strong></a></td>

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
<a href="./board/section/pet.php";> Pet Section</a>
&nbsp &nbsp
<a href="./board/section/phone.php";> Phone Section</a>
&nbsp &nbsp
<a href="./board/section/jewellery.php";> Jewellery Section</a>


<?php
	echo $category= isset($_POST["category"]);
	//Bring data from DB
	$query= "select * from bbs1 where category='$category'";
	$result= mysqli_query($connect, $query);
	$category= mysqli_fetch_array($result);

?>


<tr> 

    <td width='100%' height='20' colspan='5' class='font_td1' bgcolor='FFFFF'>- FILO board -
	<td>
		<?php  
		if($member["user_id"]){
			echo "Welcome, " .$member["user_id"];
		}else{?>
		<a href="../coursework/member/signup.php"><strong>[Sign Up]</strong></a> 
		&nbsp; &nbsp; &nbsp;
		<a href="../coursework/member/signin.php"><strong>[Sign In]</strong></a> 
		&nbsp; &nbsp; &nbsp;
		<a href="../coursework/member/adminin.php"><strong>[Admin In]</strong></a> 
		<?php  }?>
		
		&nbsp; &nbsp;
		<?php if($member["user_id"]){?>
		<a href="../coursework/member/signout.php"><strong>[Sign Out]</strong></a> 
		<?php }?>
	</td>
	</td>
	
	
<tr>
    <td class='font_tr2' width='5%' height='30' align='center' valign='middle'>Ref No.</td>
	<td class='font_tr2' width='15%' height='30' align='center' valign='middle'>Name</td>
	<td class='font_tr2' width='40%' height='30' align='center' valign='middle'>Title</td>
	<td class='font_tr2' width='15%' height='30' align='center' valign='middle'>Category</td>
	<td class='font_tr2' width='10%' height='30' align='center' valign='middle'>Updated Date</td>
<?php
$query=" select * from bbs1 where id='bbs1' order by no desc"; //desc 
$result= mysqli_query($connect,$query);
$cnt=1; //current post listing
while($data= mysqli_fetch_array($result)){

?>
<tr> 
    <td height='20' align='center' bgcolor='EFEEEC'><?=$data["no"]?></td>
	<td height='20' align='center' bgcolor='EFEEEC'><?=$data["name"]?></td>
	<td height='20' align='center' bgcolor='EFEEEC'><a href="./board/view.php?no=<?=$data['no']?>&id=<?=$data['id']?>"> <?=$data['subject']?></td>
	<td height='20' align='center' bgcolor='EFEEEC'><?=$data["category"]?></td>

	<td height='25' align='center' bgcolor='EFEEEC'><?=$data["regdate"]?></td>
<?php
	$cnt++;
 }?>

<tr> 

	

	<tr> 
    <td height='20' align='right' colspan='5' bgcolor='FFFFF'>
	<a href='../coursework/board/write.php'><strong>[Report an item]</strong></a>
	&nbsp; &nbsp;
	<a href="./member/request.php?no=" onclick="return confirm(' claim that an item is yours?');"> <strong>[Anything yours?]</strong></a>

	</td>

	</table>

</TD>


<TR>
<TD WIDTH='100%'  HEIGHT='100%'  ALIGN='CENTER'  VALIGN='TOP'>&nbsp;</TD>
</TR>
</TABLE>

</body>
</html>