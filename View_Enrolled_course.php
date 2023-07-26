<?php include('server.php');
    $userName = $_SESSION['username'];
    $query = "SELECT * from enrolled_course WHERE student_name = '$userName'";
    $result = mysqli_query($con,$query);
    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enroll Course</title>
    <link rel="stylesheet" href="Enroll_course.css">
</head>
<body>
    <header class="head">
        <h2><strong><?php echo $userName;?></strong></h2>
        <h3>Your Enrolled Courses</h3>
    </header>
    <body>
        <div class="content">
            <?php	
				while($final=mysqli_fetch_assoc($result))
				{
			?>
            <div class="course_details">

                <div class="image_container">
                <img src="data:image/jpg;charset=utf8;base64,<?php echo $final['course_picture']; ?>" alt=""  >
                </div>
                <div class="title">
                <p class="course-title"><label for="course-title" >Course Title: <?php echo $final['course_name'];?> </label></p>
                </div>

                <p class="description"><label for="course-description" >Description: </label></p>
                <textarea name="course-description" id="course-description" cols="50" rows="10" value="" placeholder="<?php echo $final['course_description'];?>" readonly></textarea>

                <div class="dates">
                <p><label for="start-date">Start Date: <?php echo $final['strt_dt'];?></label></p>

                <p><label for="end-date">End Date: <?php echo $final['end_dt'];?></label></p>
                </div>

                <div class="instructor_details">
                <p class="instructor_name"><label for="instructor_name" >Instructor Name: <?php echo $final['instructor_name'];?> </label></p>
                </div>
                
                <div class="instructor_input">
                    <p><label for="">Available Time:<?php echo $final['available'];?> </label></p>
                
                </div>


            </div>
            
        <?php
			}
		?>
        <a href="Student.php"><button  class="btn-back">Back</button></a>
        </div>
        
    </body>
    
</body>
</html>