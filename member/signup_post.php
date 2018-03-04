<?php header("content-type:text/html; charset=UTF-8");

   include '../lib/db_connect.php';
   $connect=dbconn();

$user_id=$_POST["user_id"];
$pws=$_POST["pw"];
$name=$_POST["name"];   
$email=$_POST["email"]; 

if(!$user_id)Error("Type your ID");
if(substr($user_id,"12"))Error("user id should be written less than 12");

if(!$pws)Error ("Type your ps.");

$pw=md5($pws); //password security

$query="INSERT INTO `user`( user_id, password ,name, email)
        VALUES ('$user_id','$pw','$name','$email')";
mysqli_query($connect,$query);
mysqli_close($connect);

?>

<script>
window. alert('succesfully signed up');
location.href='../index.php';
</script>

