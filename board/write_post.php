<?php header("content-type:text/html; charset=UTF-8");
   
   include ("../lib/db_connect.php");
$connect= dbconn();
$member= member();
 

if(!$member["user_id"])Error("Use it after login"); //for registered user

$id=$_POST["id"];
$user_id=$_POST["user_id"]; //board user_id
$name=$_POST["name"];   //name
$subject=$_POST["subject"]; //subject
$category=$_POST["category"];//category
$story=$_POST["story"]; //post story


 if($_FILES["file01"]["name"]){
 $size= $_FILES['file01']['size'];
    if($size > 2097152) Error('File size less than: 2MB.'); 

$file01_name=strtolower($_FILES['file01']['name']); //lower letter for your file name
 $file01_split= explode(".",$file01_name);   // file name and type

  $extexplode= $file01_split[count($file01_split)-2.3]; //file name
  $file01_type= $file01_split[count($file01_split)-1]; // file type

$img_ext= array('jpg','jpeg','gif','png'); //img types into array
  if(array_search($file01_type, $img_ext) === false)Error('this is not image.');

 $tates= date("mdhis", time()); 
 $newfile01= chr(rand(97,122)).chr(rand(97,122)).$tates.rand(1,9).rand(1,9).".".$file01_type; //file name generate

 $dir="./data/";  //upload forder
 move_uploaded_file($_FILES["file01"]['tmp_name'],$dir.$newfile01); //file upload
  chmod($dir.$newfile01,0777);
 }
 


 if(!$subject) Error('Type a subject.');
 if(!$story) Error('Type your story.');

$regdate=date("YmdHis", time());  //date , time
$ip=getenv("REMOTE_ADDR"); //ip
//$level=$member["level"];   //user level 3=normal user 2=admin 1=top admin
$level=$_POST["level"];

//Bring data from DB
$query="INSERT INTO `bbs1`(id, level, user_id, name,subject,category, file01 ,story,regdate, ip)
        VALUES ('$id', '$level', '$user_id','$name','$subject','$category', '$newfile01','$story','$regdate', '$ip')";
mysqli_query($connect,$query);
mysqli_close($connect);


?>


<script>
window. alert('Your post will be updated!');
location.href='../index.php';
</script> 
