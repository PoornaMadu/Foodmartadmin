<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php

// define variables and set to empty values

$nameErr =$emailErr= $passwordErr =$cpasswordErr ="";
$username =$email =$password =$confirm_password ="";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["username"])) {
	$nameErr = "Name is required";
  } else {
    $username = test_input($_POST["username"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["password"])) {
    $passwordErr = "password is requird";
  } else {
    $password= test_input($_POST["password"]);
  }

  if (empty($_POST["confirm_password"])) {
    $cpasswordErr = "Conform password reqired";
  } else {
    $confirm_password = test_input($_POST["confirm_password"]);
  }
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<div class="signup-form">

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
		
<h2>Create an Admin Account</h2>
		
	 <div class="form-group">
        	<input type="text" class="form-control input-lg" name="username" placeholder="Username" >
			<span class="error"><?php echo $nameErr;?></span>
        </div>
		<div class="form-group">
        	<input type="email" class="form-control input-lg" name="email" placeholder="Email Address" >
			<span class="error"><?php echo $emailErr;?></span>
        </div>
		<div class="form-group">
            <input type="password" class="form-control input-lg" name="password" placeholder="Password" >
			<span class="error"><?php echo $passwordErr;?></span>
        </div>
		<div class="form-group">
            <input type="password" class="form-control input-lg" name="confirm_password" placeholder="Confirm Password" >
			<span class="error"><?php echo $cpasswordErr;?></span>
        </div>  
        <div class="form-group">
            <button type="submit" name = "submit" class="btn btn-success btn-lg btn-block signup-btn" >Sign Up</button>
			</div>

        </div>
    </form>
    <div class="text-center">Already have an account? <a href="login.php">Login here</a></div>
</div>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	require 'connection.php';
	
		$username =$_POST['username'];
		$email =$_POST['email'];
		$password =$_POST['password'];
		$confirm_password =$_POST['confirm_password'];
		
		$result = mysqli_query($conn,"SELECT * FROM  admin_dash WHERE admin_email = '".$email."'");
		echo("Error description: " . mysqli_error($conn));
		$row = mysqli_fetch_array($result);
	
		if ($row>0) {
			echo "User exist";
		}else{
			$sql = "INSERT INTO admin_dash (admin_uname, admin_email, admin_password,admin_cPassword	) VALUES ('$username','$email','$password','$confirm_password')";
			if(mysqli_query($conn, $sql)){
				header('location:http://localhost/finalProject/FoodMartadmin/login.php');
			}else{
				echo "ERROR: Unable to execute $sql. " . mysqli_error($conn);
			}
		}
	}

?>

</body>
</html>