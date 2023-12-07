<?php include('server.php') ?>
<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="style.css">
<html>
<head>
	<title>লগইন</title>
	<link rel = "icon" type = "image/png" href = "pics/icn.png">
	

</head>
<?php include('server.php') ?>
<body>
<style type="text/css" background="red"></style>
	<div class="header">
		<img src="pics/logo.png" alt="avatar" class="avatar" href="Home.html">
		<h2>লগইন</h2>
	</div>

	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>আপনার মোবাইল নম্বর</label>
			<input type="number" name="username" placeholder="মোবাইল নম্বর লিখুন">
		</div>
		<div class="input-group">
			<label>পাসওয়ার্ড</label>
			<input type="password" name="password" placeholder="পাসওয়ার্ড দিন">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">লগইন</button>
		</div>
		<p>
			নিবন্ধিত হননি? তবে <a href="register.php">নিবন্ধিত হোন</a>
			<p> <a href="Home.php" style="color: red;">অথবা এখানে ক্লিক করুন</a> </p>
		</p>
	</form>


</body>
</html>