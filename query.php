<h1 class="query_head">Submit a Query</h1>

		<form action="#" method="POST">
			<!-- <input style="margin-top: 50px;" class="inputField" type="text" name="fullName" value="<?php echo $fullName; ?>" placeholder="Full Name" required> -->
			<input style="margin-top: 50px;" class="inputField" type="text" name="fullName"  placeholder="Full Name" required>

			<!-- <p class="errorMsg"> <?php echo $iptNameErr; ?></p> -->

			<!-- <input style="margin-top: 50px;" class="inputField" type="email" name="email" value="<?php echo $email; ?>" placeholder="E-mail" required> -->
			<input style="margin-top: 50px;" class="inputField" type="email" name="email" placeholder="E-mail" required>

			<!-- <p class="errorMsg"> <?php echo $iptEmailErr; ?></p> -->

			<!-- <input style="margin-top: 50px; padding-bottom: 100px;" class="inputField" type="text" name="query" value="<?php echo $query; ?>" placeholder="Your Query: Minimum 20 Characters" minlength = "20" required > -->
			<input style="margin-top: 50px; padding-bottom: 100px;" class="inputField" type="text" name="query" placeholder="Your Query: Minimum 20 Characters" minlength = "20" required >

			<!-- <p class="errorMsg"> <?php echo $iptQueryErr; ?></p> -->

			<input class="submit_btn" type="Submit" name="" value="Submit" >

		</form>
		<h3><?php include "email.php" ?></h3>