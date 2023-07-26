<?php include('server.php');
    $userName = $_SESSION['username'];
    $query = "SELECT * from users WHERE username = '$userName'";
    $result = mysqli_query($con,$query);
    $res = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link rel="stylesheet" href="Admin_profile.css">
</head>
<body>
    <header class="head">
        <h2><strong><?php echo $userName;?> Profile</strong></h2>
    </header>
    <div class="content">
        <p><label for="userName">User Name</label>
        <input type="text" name="userName" id="userName" value ="<?php echo $res['userName'];?>" autocomplete="off" readonly></p>

        <p><label for="email">Email</label>
        <input type="email" name="email" id="email"  value ="<?php echo $res['email'];?>" autocomplete="off" readonly></p>

        <p><label for="password">Password</label>
        <input type="password" name="password" id="password" value ="<?php echo $res['pass'];?>" autocomplete="off" readonly></p>

        <p><label for="address">Address</label>
        <input type="text" name="address" id="address" value ="<?php echo $res['addr'];?>" autocomplete="off" readonly></p>

        <p><label for="number">Contact</label>
        <input type="number" name="number" id="number" value ="<?php echo $res['contact'];?>" autocomplete="off" readonly></p>
        <a href="Training-Providers.php" style="text-decoration:none;"><button type="submit" class="btn-submit" name="student_submit">Back</button></a>
    </div>
    
</body>
</html>