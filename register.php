<?php include('server.php') ?>
<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="style.css">
<html>
<head>
	<title>নিবন্ধন</title>
	<link rel = "icon" type = "image/png" href = "pics/icn.png">
</head>
<body>
	<div class="header">
		<img src="pics/logo.png" alt="avatar" class="avatar" href="Home.html"></a>
		<h2>নিবন্ধন</h2>
	</div>
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>আপনার মোবাইল নম্বর</label>
			<input type="number" name="username" value="<?php echo $username; ?>" placeholder="মোবাইল নম্বর লিখুন">
		</div>
		<div class="input-group">
			<label>আপনার নাম</label>
			<input type="name" name="name" value="<?php echo $name; ?>" placeholder="আপনার নাম লিখুন">
		</div>
		<div class="input-group">
			<label>পাসওয়ার্ড দিন</label>
			<input type="password" name="password_1" placeholder="পাসওয়ার্ড">
		</div>
		<div class="input-group">
			<label>পুনরায় পাসওয়ার্ডটি দিন</label>
			<input type="password" name="password_2" placeholder="পাসওয়ার্ড দিন">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">নিবন্ধিত হোন</button>
		</div>
		<p>
			নিবন্ধিত হয়েছেন? তবে <a href="login.php">লগইন হোন</a>
			<p> <a href="Home.php" style="color: red;">অথবা এখানে ক্লিক করুন</a> </p>
		</p>
	</form>
</body>
</html>





