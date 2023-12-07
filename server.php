<?php 
	

	// variable declaration
	$username = "";
	$name    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'registration');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "মোবাইল নম্বর দিন"); }
		if (empty($name)) { array_push($errors, "আপনার নাম দিন"); }
		if (empty($password_1)) { array_push($errors, "পাসওয়ার্ড দিন"); }

		if ($password_1 != $password_2) {
			array_push($errors, "পাসওয়ার্ড দুইটি মিলছে না");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO users (username, name, password) 
					  VALUES('$username', '$name', '$password')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "অভিনন্দন...! আপনি লগইন হয়েছেন। ";
			header('location: QA.php');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "সঠিক মোবাইল নম্বর দিন");
		}
		if (empty($password)) {
			array_push($errors, "সঠিক পাসওয়ার্ড দিন");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['name'] = $name;
				$_SESSION['success'] = "অভিনন্দন...! আপনি লগইন হয়েছেন। ";
				header('location: QA.php');
			}else {
				array_push($errors, "সঠিক মোবাইল নম্বর অথবা পাসওয়ার্ড দিন");
			}
		}
	}

?>