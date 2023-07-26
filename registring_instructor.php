<?php include('server.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registering Instructor</title>
    <link rel="stylesheet" href="registring_instructor.css">
</head>
<body>
    <div class="head">
        <h2>Register Instructor</h2>
    </div>

    <div class="content">
        <h3>Instructor Details</h3>
        <form action="" method="post">
            <p><label for="userName">User Name</label>
            <input type="text" name="userName" id="userName" autocomplete="off"></p>

            <p><label for="email">Email</label>
            <input type="email" name="email" id="email" autocomplete="off"></p>

            <p><label for="password">Password</label>
            <input type="password" name="password" id="password" autocomplete="off"></p>

            <p><label for="address">Address</label>
            <input type="text" name="address" id="address"  autocomplete="off"></p>

            <p><label for="number">Contact</label>
            <input type="number" name="number" id="number"  autocomplete="off"></p>

            <input type="hidden" name="profession" id="profession" value="Instructor">

            <a href="registring_instructor.php" style="text-decoration:none;"><button type="submit" class="btn-submit" name="register_instructor">Submit</button></a>
        </form>
        <a href="Training-Providers.php" style="text-decoration:none;"><button type="submit" class="btn-submit" name="student_submit">Back</button></a>
    </div>
    
</body>
</html>