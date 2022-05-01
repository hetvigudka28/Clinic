<!DOCTYPE html>
<html>
<html lang="en">
<head>
	<link rel="shortcut icon" href="" type=""> 
	<title>Patient Registration</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- ---fonts S--- -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 
<!-- ---fonts E--- -->


<link rel="stylesheet" type="text/css" href="StyleSheet/topNav.css">
<link rel="stylesheet" type="text/css" href="StyleSheet/common.css">
<link rel="stylesheet" type="text/css" href="StyleSheet/reg.css">
</head>

<body>
    <div class="regTop">
		<img class="logo" src="skins/logo.png">
		<p class="txt">PATIENT REGISTRATION</p>
	</div>

<!-- <h2>PHP and DBMS Connection</h2> -->
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $fullname = $_POST['fullname'];
        $contact = $_POST['contact'];
        $vaccination_status = $_POST['vaccination_status'];
        $blood_group = $_POST['blood_group'];
        $mail = $_POST['mail'];
        $contact = $_POST['contact'];
        $dob = $_POST['dob'];
       
      
      // Connecting to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "polyclinic";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
            echo "Connection succesfull<br>";
      }
        $sql = "INSERT INTO `patient`(`name`, `contact`, `vaccination_status`, `blood_group`, `email`, `dob`) VALUES ('$fullname','$contact','$vaccination_status','$blood_group','$mail','$dob')";
        $result = mysqli_query($conn, $sql);
 
        if($result){
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your entry has been submitted successfully!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }
        else{
            // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }

      }


    
?>
<section class="container">
		
		<!-- <img class="logo" src="skins/logo2.png"> -->

		<!-- <h1>Login</h1> -->

		<form  id="reg_form" action="patient_reigstration.php" method="POST">

			<input class="inputField" type="text"  name="fullname" placeholder="Full Name">
			<!-- <span class="errorMsg"><?php echo $NameError; ?></span> -->

			<input class="inputField" type="numeric"  name="contact" placeholder="Contact">
			<!-- <span class="errorMsg"></span> -->

            <input class="inputField" type="text"  name="vaccination_status" placeholder="Vaccination Status">
			<!-- <span class="errorMsg"></span> -->

            <input class="inputField" type="text"  name="blood_group" placeholder="Blood Group">
			<!-- <span class="errorMsg"></span> -->

			<input class="inputField" type="email"  name="mail" placeholder="E-mail">
			<!-- <span class="errorMsg"></span> -->

			<input class="inputField" type="text" required onfocus="(this.type='date')" name="dob" placeholder="Date of Birth">
			<!-- <span class="errorMsg"></span> -->

			<input class="inputField" type="password"  name="pass" placeholder="Password">
			<!-- <span class="errorMsg"></span> -->

			<br><input id="regBtn" class="submit_btn" type="Submit" name="reg" value="Register">

			
		</form>

	</section>

</body>
</html>
