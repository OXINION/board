<?php

	include "../../lib/db_connect.php"; 
	$connect = dbconn(); 
	
?>
	
<script type="text/javascript">
function deleteConfirm(){
    var result = confirm("Are you sure to delete users?");
    if(result){
        return true;
    }else{
        return false;
    }
}

$(document).ready(function(){
    $('#select_all').on('click',function(){
        if(this.checked){
            $('.checkbox').each(function(){
                this.checked = true;
            });
        }else{
             $('.checkbox').each(function(){
                this.checked = false;
            });
        }
    });
    
    $('.checkbox').on('click',function(){
        if($('.checkbox:checked').length == $('.checkbox').length){
            $('#select_all').prop('checked',true);
        }else{
            $('#select_all').prop('checked',false);
        }
    });
});
</script>


<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
<title>FILO board</title>
</head>

<body>
<h2>Admin - User Management Page</h2>
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

<?php
	$query = mysqli_query($connect, "SELECT * FROM user ");
	$result= mysqli_query($connect,$query);
	while($data= mysqli_fetch_array($result)){
		

	}

?>

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
    <td width='100%' height='20' colspan='5' class='font_td1' bgcolor='FFFFF'>- User List -

	</td>

	
<tr>
	 
    <td class='font_tr2' width='5%' height='30' align='center' valign='middle'>List</td>
	<td class='font_tr2' width='15%' height='30' align='center' valign='middle'>Name</td>
	<td class='font_tr2' width='40%' height='30' align='center' valign='middle'>User ID</td>
	<td class='font_tr2' width='15%' height='30' align='center' valign='middle'>email</td>
</tr>
	
 
	
 

<tr> 
	<form name="bulk_action_form" action="action_admin_user.php" method="post" onsubmit="return deleteConfirm();"/>
    <table class="bordered">
     
        <?php
            if(mysqli_num_rows($query) > 0){
                while($row = mysqli_fetch_assoc($query)){
        ?>
        <tr>
            <td align="center"><input type="checkbox" name="checked_id[]" class="checkbox" value=""/></td>        
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['user_id']; ?></td>
            <td><?php echo $row['email']; ?></td>
        </tr> 
        <?php } }else{ ?>
            <tr><td colspan="5">No records found.</td></tr> 
        <?php } ?>
    </table>
    <input type="submit" class="btn btn-danger" name="bulk_delete_submit" value="Delete"/>
</form>

<tr> 
</table>
</TD>
<TR>
<TD WIDTH='100%'  HEIGHT='100%'  ALIGN='CENTER'  VALIGN='TOP'>&nbsp;</TD>
</TR>
</TABLE>
</body>
</html>