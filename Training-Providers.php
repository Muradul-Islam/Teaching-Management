<?php
	session_start();
	
	if (!isset($_SESSION['username'])){
		$_SESSION['msg'] = "You must log in First";
		header('location:Front-page.html');
	}

	if (isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION['username']);
		header('location:Front-page.html');
	}
?>

<!DOCTYPE html>
<html>
	<head lang=en>
		<meta charset="utf-8">
		<title>Training Provider Homepage</title>
		<link rel="stylesheet" href="Training-provider.css"/>
	</head>
	
	<body>
	
		<header>
		<?php if (isset($_SESSION['username'])) : ?>
			<h1>Welcome <strong><?php echo $_SESSION['username'];?></strong></h1>
			<?php endif ?>
			<h2>Please click on the button that you want to check</h2>	
		</header>
		<div class="buttons">
		<a href="Admin_profile.php"><button class="btn related profile">My Profile</button></a>
		<a href=""><button class="btn related notification">Notification</button></a>
		<a href="student_info.php"><button class="btn related student">Student Info</button></a>
        <a href="course_management.php"><button class="btn related course">Course Info</button></a>
        <a href="registring_instructor.php"><button class="btn related instructor">Register Instructor</button></a>
		<a href="index.php" class="logOut"><button class="btn logOut">Logout</button></a>
		</div>
	</body>

</html>