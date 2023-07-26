<?php include('server.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Course</title>
    <link rel="stylesheet" href="create_course.css">
</head>
<body>
    <h1>Create Course</h1>
        <div class="container">
            <form action="" method="post"  enctype="multipart/form-data">
            <figure class="image-container">
                <img id="chosen-image" >
            </figure>

            <input type="file" id="upload-button" name="image_file" accept="image/*">

            <label for="upload-button" class="choose-photo">
            <i class="fa-solid fa-upload"></i> &nbsp; Choose A Photo
            </label>

            <div class="title">
            <p class="course-title"><label for="course-title" >Course Title:</label></p>
            <input type="text" name="course-title" id="course-title">
            </div>

            <p class="description"><label for="course-description" >Description:</label></p>
            <textarea name="course-description" id="course-description" cols="50" rows="10"></textarea>

            <div class="dates">
            <label for="start-date">Start Date:</label>
            <input type="date" name="start-date" id="start-date">

            <label for="end-date">End Date:</label>
            <input type="date" name="end-date" id="end-date">
            </div>

            <div class="instructor-details">
                <p><label for="">Add Instructor Details </label></p>
                <label for="instructor-name">Instructor Name:</label>
                <input type="text" name="instructor-name" id="instructor-name">
            </div>
            <div class="buttons">
            <button type="submit" value="submit" name="upload_course" class="btn-submit">Submit</button>
            </div>
        </form>
        <a href="course_management.php"><button  class="btn-back">Back</button></a>
        </div>
       
    
    <script src="create_course.js"></script>
    <script src="https://kit.fontawesome.com/092b92aa6f.js" crossorigin="anonymous"></script>
</body>
</html>