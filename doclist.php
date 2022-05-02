<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="" type=""> 
    <title>Doctors List</title>
    <link rel="stylesheet" type="text/css" href="StyleSheet/doclist.css">
    <link rel="stylesheet" type="text/css" href="StyleSheet/topNav.css">
    <link rel="stylesheet" type="text/css" href="StyleSheet/footer.css">
    <link rel="" href="includes/homeTopNav.php">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 
    <style>
		.footer-text{
			color: white;
			font-size: 40px;
			padding-top: 120px;
			text-align: center;
		}
	</style>
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
    <!--img class="bg" src="skins/us.png"-->
    <table id="doctor">
    <tr>
        <th>Name</th>
        <th>Contact</th>
        <th>Department</th>
    </tr>
    <tr>
        <td>Alfreds Futter</td>
        <td>837937429</td>
        <td>Oncology</td>
    </tr>
    <tr>
        <td>Sonnie Luned</td>
        <td>835739929</td>
        <td>Oncology</td>
    </tr>
    <tr>
        <td>Tatiana Micah</td>
        <td>956937429</td>
        <td>Oncology</td>
    </tr>
    <tr>
        <td>Grusha Zuza</td>
        <td>934937429</td>
        <td>Oncology</td>
    </tr>
    <tr>
        <td>Afrodite Paul</td>
        <td>747937429</td>
        <td>Dental</td>
    </tr>
    <tr>
        <td>Ezikiel Smith</td>
        <td>928462837</td>
        <td>Dental</td>
    </tr>
    <tr>
        <td>Edana Atieno</td>
        <td>928462837</td>
        <td>Dental</td>
    </tr>
    <tr>
        <td>Jana Rochester</td>
        <td>928462837</td>
        <td>Dental</td>
    </tr>
    <tr>
        <td>Nuha Jackson</td>
        <td>777462837</td>
        <td>Gynecology</td>
    </tr>
    <tr>
        <td>Nesim Europa</td>
        <td>925327127</td>
        <td>Gynecology</td>
    </tr>
    <tr>
        <td>Ezra Lockhart</td>
        <td>928462837</td>
        <td>Gynecology</td>
    </tr>
    <tr>
        <td>Albin Sherpsa</td>
        <td>789462837</td>
        <td>Gynecology</td>
    </tr>
    <tr>
        <td>Bulan Enyo</td>
        <td>855462837</td>
        <td>Orthopedic</td>
    </tr>
    <tr>
        <td>Deepa Namrata</td>
        <td>924729891</td>
        <td>Orthopedic</td>
    </tr>
    <tr>
        <td>Debbie Andrea</td>
        <td>922466281</td>
        <td>Orthopedic</td>
    </tr>
    <tr>
        <td>Bysshe Renzo</td>
        <td>834278122</td>
        <td>Orthopedic</td>
    </tr>
    </table>
    <img class="bg" src="skins/us.png">
    <div class="footer-text" id="footer">
			<small>Copyright @2022 Newlife Clinic Management System </small>
			
	</div>
</body>

</html>