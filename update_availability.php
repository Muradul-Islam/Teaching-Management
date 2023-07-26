<?php include('server.php');
    $userName = $_SESSION['username'];
    $query = "SELECT course_picture,course_name,course_description,strt_dt,end_dt from course_details WHERE instructor_name = '$userName'";
    $result = mysqli_query($con,$query);
    $final = mysqli_fetch_array($result,MYSQLI_BOTH);
    $course_name = $final['course_name'];
    $course_description = $final['course_description'];
    $strt_dt = $final['strt_dt'];
    $end_dt = $final['end_dt'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assigned Course</title>
    <link rel="stylesheet" href="update_availability.css">
</head>
<body>
    <header class="head">  
			<h2><strong><?php echo $userName;?> your assigned course</strong></h2>
            <h3>Please update your available time for this course</h3>	
    </header>
    <div class="content">
            <div class="image_container">
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($final['course_picture']); ?>" alt="" >
            </div>
            <div class="title">
            <p class="course-title"><label for="course-title" >Course Title: <?php echo $course_name;?> </label></p>
            </div>

            <p class="description"><label for="course-description" >Description: </label></p>
            <textarea name="course-description" id="course-description" cols="50" rows="10" value="" placeholder="<?php echo $course_description;?>" readonly></textarea>

            <div class="dates">
            <p><label for="start-date">Start Date: <?php echo $strt_dt;?></label></p>

            <p><label for="end-date">End Date: <?php echo $end_dt;?></label></p>
            </div>
            
            <div class="instructor_input">
            <form action="" method= "post"  enctype="multipart/form-data">
                <p><label for="">Add available Time </label></p>
                <input type="text" name="available_time" id="available_time">
                <input type="hidden" name="userName" value="<?php echo $userName;?>">
                <div class="buttons">
                    <button type="submit" value="submit" name="update_course" class="btn-submit">Submit</button>
                </div>
            </form>
            </div>

            <a href="Instructors.php"><button  class="btn-back">Back</button></a>

    </div>
</body>
</html>