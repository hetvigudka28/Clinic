<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="shortcut icon" href="" type=""> 
	<title>CMS</title>
	<style>
		.footer-text{
			color: white;
			font-size: small;
			padding-top: 120px;
			text-align: center;
		}
	</style>

<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- ---fonts S--- -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 
<!-- ---fonts E--- -->

<link rel="stylesheet" type="text/css" href="StyleSheet/topNav.css">
<link rel="stylesheet" type="text/css" href="StyleSheet/footer.css">
<link rel="stylesheet" type="text/css" href="StyleSheet/home.css">
</head>


<body>

	<?php 


		if(isset($_SESSION["userid"]) && isset($_SESSION["username"]))
		{
			include 'includes/homeTopNavIfLoggedIn.php'; 
		}
		else
		{
			include 'includes/homeTopNav.php';
		}

	?>

	<section id="lander">
		<div class="cont_quote">
			<p class="main_quote">Let's Make Health Care <br> Better Together</p>

			<p class="sub_info">Newlife group is a chain of Hospitals managed and run by expert Medical Professionals with experience of more than 25 years. We exists to build a healthy human asset. <br><br>
			</p>
		</div>
	</section>

	<div class="cont_card">
			<div class="card">
				<h1 class="card_header">01 - Pathology</h1>
				<p style="font-size: 12px; margin-top: 20px">Newlife Clinic Limited
					has a fully equipped pathology lab. Clinical Pathology is responsible for tests performed from blood, urine, and other body fluids. 
					We perform close to 2 million laboratory tests per year in the sections of clinical chemistry, hematology, microbiology.
				</p>
			</div>
			<div class="card" style="background-color: #005EA8">
				<h1 class="card_header">02 - Departments</h1>
				<p style="font-size: 12px; margin-top: 20px">
					At Newlife we provide various departmental specialists. Pathology, Oncology, Dental, Orthopedic, Neurology and General Physicians 
					on-call for efficient healthcare management. We have experienced doctors working since the past 25 years in all departments.
				</p>
			</div>
			<div class="card">
				<h1 class="card_header">03 - Vaccination</h1>
				<p style="font-size: 12px; margin-top: 20px">Covid-19 vaccination available.<br>
				Newlife provides vaccination status check, vaccination certificates and booster doses for all above the age of 45. Second doses are 
				available for children between the ages of 12 and 18. Get vaccinated as soon as possible.
			</div>
		</div>

	<section id="about">
        <div class="cont_about">
            <h1 class="about_head">About Us</h1>
            <p class="para">Newlife Clinic Limited was established in 2000 by the co-activity of Medical Second Opinion Company from UK.<br><br>

            </p>
        </div>
        <img class="about_pic" src="skins/us.png">
    </section>
	<br>
	<br>
	<br>
	<br>

	<section id="query">
		
		<?php 

			if(isset($_SESSION['utype']))
			{
				echo "<h1 class="."\"query_head\"".">Thank You For Being With Us!";
			}
			else if(isset($_COOKIE['doneQuery']))
			{

				echo "<h1 class="."\"query_head\"".">Query Submitted Sucessfully</h1>";
				echo "<p align ="."\"center\"".">You Can Post Another One after 5 minutes <br> You Will Get Your Answer Via Email </p>";

			}
			else
			{
				include 'query.php';
			}


		?>



	</section>


	<div class="footer-text" id="footer">
			<small>Copyright @2022 Newlife Clinic Management System </small>
			
	</div>
	


</body>
</html>
