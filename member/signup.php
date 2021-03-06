<!DOCTYPE html>

<html>
<style>
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn,.signupbtn {
    float: left;
    width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>

<body>

<h2>Signup Form</h2>

<form action="../member/signup_post.php" style="border:1px solid #ccc" method='post'>
  <div class="container">
    <label><b>User ID</b></label>
    <input type="text" placeholder="Enter ID" name="user_id" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pw" required>

	
	<label><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" required>
	
	<label><b>E-Mail</b></label>
    <input type="text" placeholder="Enter e-mail" name="email" required>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
	
    <div class="clearfix">
      <button type="button" class="cancelbtn"><input type="submit" value="Cancel"><a href= "../index.php"></a></button>
	  <button type="submit" class="signupbtn"><input type="submit" value="Sign Up">
      </button>
    </div>
  </div>
</form>

</body>
</html>