<?php include('server.php');
    $userName = $_SESSION['username'];
    $query = "SELECT * from course_details";
    $result = mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Course</title>
    <link rel="stylesheet" href="delete_course.css">
</head>
<body>
    <header class="head">
        <h2><strong><?php echo $userName;?></strong></h2>
        <h3>Please select the course you want to remove</h3>
    </header>

    <div class="content">
            <?php	
				while($final=mysqli_fetch_assoc($result))
				{
			?>
            <div class="course_details">

                <div class="image_container">
                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($final['course_picture']); ?>" alt=""  >
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
                    <p><label for="">Available Time </label></p>
                    <input type="text" name="available_time" id="available_time" placeholder="<?php echo $final['availability'];?>" readonly>
                <form action="" method="post">    
                    <div class="buttons">
                        <input type="hidden" name="course_name" value="<?php echo $final['course_name'];?>">
                        <input type="hidden" name="instructor_name" value="<?php echo $final['instructor_name'];?>">
                        <button type="submit" value="submit" name="delete_course" class="btn-submit">Delete</button>
                    </div>
                </form>
                
                </div>


            </div>
            
        <?php
			}
		?>
        <a href="course_management.php"><button  class="btn-back">Back</button></a>
        </div>
        
    </body>
</html>