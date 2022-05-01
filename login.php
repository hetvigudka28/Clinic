<?php
  
include_once('connection.php');
   
function test_input($data) {
      
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
   
if ($_SERVER["REQUEST_METHOD"]== "POST") {
      
    $fullname = test_input($_POST["fullname"]);
    $password = test_input($_POST["password"]);
    $stmt = $conn->prepare("SELECT * FROM adminlogin");
    $stmt->execute();
    $users = $stmt->fetchAll();
      
    foreach($users as $user) {
          
        if(($user['fullname'] == $fullname) && 
            ($user['password'] == $password)) {
                header("Location: index.php");
        }
        else {
            echo "<script language='javascript'>";
            echo "alert('WRONG INFORMATION')";
            echo "</script>";
            die();
        }
    }
}
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="shortcut icon" href="" type=""> 
	<title>Login</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- ---fonts S--- -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 
<!-- ---fonts E--- -->

<link rel="stylesheet" type="text/css" href="StyleSheet/login.css">
<link rel="stylesheet" type="text/css" href="StyleSheet/common.css">
</head>


<body>

	<a href="index.php"><img class="logo" src="skins/logo2.png"></a>

	<section class="container">
		
		

		<h1>Login</h1>

		<form id="login_form" action="login.php" method="POST">

			<input class="inputField" type="text" name="u_name" placeholder="Full name" required>
			<input class="inputField" type="password" name="u_pass" placeholder="Password" required>
			<input class="submit_btn" type="Submit" name="" value="Sign In">

		
		</form>
	</section>

	<div class="divReg">

		<p>Don't have an account yet ?</p>
		<a href="patient_registration.php"><button style="margin-top: 10px;" class="common_btn">Register as Patient</button></a>

	</div>

</body>
</html>