<?php
function dbconn(){
$host_name= "localhost"; //hostname
$db_user="has"; //DB_user_id
$db_pw="caky51kine"; //DB_pw
$db_name="has_db"; //DB name

$connect = mysqli_connect($host_name,$db_user,$db_pw,$db_name);
mysqli_set_charset($connect,"utf8"); //set utf8
if($connect-> connect_error)die("failed to connect");

return $connect;

}

//Error msg
function Error($msg){
echo "
<script>
window.alert('$msg');
history.back(1);
</script>
";
exit; //show only error msg
}

function member(){
global $connect;

if(isset($_COOKIE["COOKIES"])){
 $temps=$_COOKIE['COOKIES'];
$cookise= explode("//", $temps);

////////////member info//////////////////
$query= "select * from user where user_id='$cookise[0]' ";
mysqli_query($connect,"set names utf8");
$result= mysqli_query($connect,$query);
$member= mysqli_fetch_array($result);
return $member;
}
}
?>