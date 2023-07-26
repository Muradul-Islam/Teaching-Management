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
    <title>Update Course</title>
    <link rel="stylesheet" href="update_course.css">
</head>
<body>
    <header class="head">
        <h2><strong><?php echo $userName;?></strong></h2>
        <h3>Please select the course you want to Update</h3>
    </header>

    <div class="content">
            <?php	
				while($final=mysqli_fetch_assoc($result))
				{
			?>
            <div class="course_details">
            <form action="" method="post" enctype="multipart/form-data"> 
                <figure class="image_container">
                    <img id="chosen-image"  src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($final['course_picture']); ?>" alt=""  >
                </figure>
                <input type="file" id="upload-button" name="image_file" accept="image/*">

                <label for="upload-button" class="choose-photo">
                    <i class="fa-solid fa-upload"></i> &nbsp; Choose A Photo
                </label>

                <div class="title">
                <p class="course-title"><label for="course-title" >Course Title: <?php echo $final['course_name'];?> </label></p>
                </div>

                <p class="description"><label for="course-description" >Description: </label></p>
                <textarea name="course-description" id="course-description" cols="50" rows="10" value="" placeholder="<?php echo $final['course_description'];?>" ></textarea>

                <div class="dates">
                <p><label for="start-date">Start Date: </label></p>
                <input style="margin-bottom:10px;" value="<?php echo $final['strt_dt'];?>" type="date" name="start-date" placeholder="<?php echo $final['strt_dt'];?>" id="start-date">

                <p><label for="end-date">End Date: </label></p>
                <input type="date" name="end-date" value="<?php echo $final['end_dt'];?>" placeholder="<?php echo $final['end_dt'];?>" id="end-date">
                </div>

                <div class="instructor_details">
                    <label for="instructor_name" >Instructor Name:  </label>
                    <input style="margin-bottom:10px;" type="text" name="instructor_name" id="instructor_name" placeholder=<?php echo $final['instructor_name'];?>>
                </div>
                
                <div class="instructor_input">
                    <p><label for="">Available Time </label></p>
                    <input type="text" name="available_time" id="available_time" placeholder="<?php echo $final['availability'];?>" readonly>
                   
                    <div class="buttons">
                        <input type="hidden" name="course_name" value="<?php echo $final['course_name'];?>">
                        <button type="submit" value="submit" name="update_course_details" class="btn-submit">Update</button>
                    </div>
                </form>
                
                </div>


            </div>
            
        <?php
			}
		?>
        <a href="course_management.php"><button  class="btn-back">Back</button></a>
        </div>
        <script src="create_course.js"></script>
        <script src="https://kit.fontawesome.com/092b92aa6f.js" crossorigin="anonymous"></script>
</body>
</html>