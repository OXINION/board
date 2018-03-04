

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/signin.css">

</head>

<body>

<h2>Login Form</h2>

<form action="../member/adminin_post.php" method='post'>
  

  <div class="container">
    <label><b>User Name</b></label>
    <input type="text" placeholder="Enter Username" name="user_id" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
	
        
    <button type="submit"><p><input type="submit" name="submit" value="Submit" /></p>
</button>
	<p><input type="hidden" name="submit" value="TRUE" /></p>
    <input type="checkbox" checked="checked"> Remember me
  </div>

  <div class="container" style="background-color:#f1f1f1">

  </div>
</form>

</body>
</html>


	
	
	




