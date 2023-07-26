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
		<title>Student Homepage</title>
		<link rel="stylesheet" href="Student.css"/>
	</head>
	
	<body>
		<header>
			<?php if (isset($_SESSION['username'])) : ?>
			<h1>Welcome <strong><?php echo $_SESSION['username'];?></strong></h1>
			<?php endif ?>
			<h2>Please click on the button that you want to check</h2>	
		</header>
		<div class="buttons">
		<a href="Student_profile.php"><button class="btn related profile">My Profile</button></a>
        <a href="Enroll_course.php"><button class="btn related course">Enroll Course</button></a>
		<a href="View_Enrolled_course.php"><button class="btn related course">View Enrolled Course</button></a>
		<a href="index.php" class="logOut"><button class="btn logOut">Logout</button></a>
		</div>
	</body>

</html>