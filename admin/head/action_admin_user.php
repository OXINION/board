<?php
	session_start();
	if(isset($_POST['bulk_delete_submit'])){
		$idArr = $_POST['checked_id'];
		foreach($idArr as $id){
			mysqli_query($conn, "DELETE FROM user where id=".$id);
		}
		$_SESSION['success_msg'] = 'Users have been delted successfully.';
		header("Location:index.php");
	}

?>