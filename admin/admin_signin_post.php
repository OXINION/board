<?php header("content-type:text/html; charset=UTF-8");
    include("../lib/db_connect.php");
    $connect= dbconn();
 

$user_id= $_POST["user_id"];
$pws= $_POST["password"];

 $pw=md5($pws);

//Bring data from DB
$query=" select * from user where user_id='$user_id'";
mysqli_set_charset($connect,"utf8"); //utf8 use 
$result= mysqli_query($connect,$query);
$member= mysqli_fetch_array($result);

echo $member["user_id"];

$user_id= $_POST["user_id"]; 

 if(!$user_id) Error('Type your ID.');
 if(!$member["user_id"])Error('ID isnt exitsted.');

 //if(!$pw) Error('Type your password.'); 
 //if($member['password']!=$pw)Error('Password isnt matched.');


 if($member["user_id"] and $member["password"]==$pw){ 
 $tmp=$member["user_id"]."//".$member["password"];
 setcookie("COOKIES",$tmp,time()+60*60*24,"/" );  //valid for 24hrs
 }


?>


<script>
window. alert('Welcome Admin.');
location.href='./admin_index.php';
</script> 





