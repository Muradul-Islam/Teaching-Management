<?php


session_start();
$username = "";
$errors = array();
$con = mysqli_connect('localhost', 'root', '', 't_p_m_s'); // Establishing Connection with Server // Selecting Database from Server

//Registering Student
if(isset($_POST['student_submit'])|| isset($_POST['register_instructor'])){
    //Reciving all input value from form submission

    $userName = mysqli_real_escape_string($con,$_POST['userName']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    $address = mysqli_real_escape_string($con,$_POST['address']);
    $number = $_POST['number'];
    $profession = $_POST['profession'];

    //Form validation to ensure that the form is correctly filled....

    if(empty($userName)){array_push($errors,'First Name is required');}
    if(empty($email)){array_push($errors,'Email is required');}
    if(empty($password)){array_push($errors,'Password is required');}
    if(empty($address)){array_push($errors,'Address is required');}
    if(empty($number)){array_push($errors,'Number is required');}


    //Checking the database to make sure a user does not already exists with same name and email
    
    $user_check_query = "SELECT * FROM users WHERE userName = '$userName' OR email = '$email' LIMIT 1 ";
    $result = mysqli_query($con,$user_check_query);
    $user = mysqli_fetch_assoc($result);

    //if users exists
    if($user){
        if($user['userName'] === $userName){
            array_push($errors,'User Name already exists');
        }
        if($user['email'] === $email){
            array_push($errors,'Email already exists');
        }
    }

    //Finally register user if there are no errors in the form
    if(count($errors)==0){

        $query = "INSERT INTO users (userName,email,pass,addr,contact,profession)VALUES
        ('$userName','$email','$password','$address','$number','$profession')";

        $final_query = mysqli_query($con,$query);
        if($profession == "Student"){
            header('location:Student.php');
            $_SESSION['username'] = $userName;
        }
        elseif($profession == "Instructor"){
            header('location:registring_instructor.php');
            $statusMsg = 'Details uploaded.';
            
        }

    }
}

//Login User
if(isset($_POST['login_user'])){
    $userName = mysqli_real_escape_string($con,$_POST['userName']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    $profession = mysqli_real_escape_string($con,$_POST['User_Selection']);

    if(empty($userName)){array_push($errors,'User Name is required');}
    if(empty($password)){array_push($errors,'Password is required');}

    

    if(count($errors)==0){
    
            if($profession == "Student"){
                $user_check_query = "SELECT * FROM users WHERE pass = '$password' AND userName = '$userName' AND profession = '$profession'";
                $result = mysqli_query($con,$user_check_query);
                if(mysqli_num_rows($result)==1){
                    header('location:Student.php');
                    $_SESSION['username'] = $userName;
                }
                else{
                    array_push($errors,'Wrong username/password combination');
                }
            }
            elseif($profession == "Instructor"){
                $user_check_query = "SELECT * FROM users WHERE pass = '$password' AND userName = '$userName' AND profession = '$profession'";
                $result = mysqli_query($con,$user_check_query);
                
                if(mysqli_num_rows($result)==1){
                    header('location:Instructors.php');
                    $_SESSION['username'] = $userName;
                }
                else{
                    array_push($errors,'Wrong username/password combination');
                }
            }
            elseif($profession == "Trainer"){
                $user_check_query = "SELECT * FROM users WHERE pass = '$password' AND userName = '$userName' AND profession ='$profession'";
                $result = mysqli_query($con,$user_check_query);
                
                if(mysqli_num_rows($result)==1){
                    header('location:Training-Providers.php');
                    $_SESSION['username'] = $userName;
                }
                else{
                    array_push($errors,'Wrong username/password combination');
                }

            }
        
}
    
}

//Entering Course Details into database
if(isset($_POST['upload_course'])){
    $status = 'error'; 
    if(!empty($_FILES["image_file"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image_file"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image_file']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
        }
        else{ 
            $statusMsg = 'Please select an image file to upload.'; 
        }
        $course_title = mysqli_real_escape_string($con,$_POST['course-title']);
        $course_description = mysqli_real_escape_string($con,$_POST['course-description']);
        $start_date = mysqli_real_escape_string($con,$_POST['start-date']);
        $end_date = mysqli_real_escape_string($con,$_POST['end-date']);
        $instructor_name = mysqli_real_escape_string($con,$_POST['instructor-name']);

                // Insert image content into database 
            $insert = "INSERT INTO course_details (course_picture,course_name,course_description,strt_dt,end_dt,instructor_name)VALUES
            ('$imgContent','$course_title','$course_description','$start_date','$end_date','$instructor_name')";

            $final_query = mysqli_query($con,$insert);

            if($final_query){ 
                $status = 'success'; 
                $statusMsg = "File uploaded successfully."; 
            }else{ 
                $statusMsg = "File upload failed, please try again."; 
            } 
   
}
else{ 
    $statusMsg = 'Please select an image file to upload.'; 
}  
 
// Display status message 
echo $statusMsg; 

}

//Update Available time for course
if(isset($_POST['update_course'])){
    
    $available_time = mysqli_real_escape_string($con,$_POST['available_time']);
    $userName = mysqli_real_escape_string($con,$_POST['userName']);

    $update = "UPDATE course_details SET availability ='$available_time' WHERE instructor_name = '$userName'";
    $sql = mysqli_query($con,$update);

    if($sql){ 
        $status = 'success'; 
        $statusMsg = "File uploaded successfully."; 
    }else{ 
        $statusMsg = "File upload failed, please try again."; 
    } 
// Display status message 
echo $statusMsg; 
}

//Enroll Course by Student
if(isset($_POST['enroll_course'])){
    $instructor_name = mysqli_real_escape_string($con,$_POST['instructor_name']);
    $studentName = mysqli_real_escape_string($con,$_POST['studentName']);

   
    $query = "SELECT * FROM course_details WHERE instructor_name = '$instructor_name'";
    $qu = mysqli_query($con,$query);
    $q = mysqli_fetch_array($qu,MYSQLI_BOTH);
    $course_picture = base64_encode($q['course_picture']);
    $course_name = $q['course_name'];
    $course_description = $q['course_description'];
    $strt_dt = $q['strt_dt'];
    $end_dt = $q['end_dt'];
    $availability = $q['availability'];

    $result = "INSERT INTO enrolled_course (course_picture,course_name,course_description,strt_dt,end_dt,instructor_name,available,student_name) 
    VALUES ('$course_picture','$course_name', '$course_description', '$strt_dt', '$end_dt', '$instructor_name','$availability','$studentName')";

    $res = mysqli_query($con, $result);
    if($res){ 
        $status = 'success'; 
        $statusMsg = "Enrolled successfully."; 
    }else{ 
        $statusMsg = "Enrolled failed, please try again."; 
    } 

    // Display status message 
    echo $statusMsg;
}

//delete Course
if(isset($_POST['delete_course'])){
    $instructor_name = mysqli_real_escape_string($con,$_POST['instructor_name']);
    $course_name = mysqli_real_escape_string($con,$_POST['course_name']);

    $query = "DELETE FROM course_details WHERE course_name ='$course_name' AND instructor_name='$instructor_name'";
    $res = mysqli_query($con,$query);

    if($res){
        $status = 'success';
        $statusMsg = "Enrolled successfully."; 
    }else{ 
        $statusMsg = "Enrolled failed, please try again."; 
    }
    // Display status message
    echo $statusMsg;
}

//update course information
if(isset($_POST['update_course_details'])){
    $status = 'error'; 
    if(!empty($_FILES["image_file"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image_file"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image_file']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
        }
        else{ 
            $statusMsg = 'Please select an image file to upload.'; 
        }
        $course_description = mysqli_real_escape_string($con,$_POST['course-description']);
        $start_date = mysqli_real_escape_string($con,$_POST['start-date']);
        $end_date = mysqli_real_escape_string($con,$_POST['end-date']);
        $instructor_name = mysqli_real_escape_string($con,$_POST['instructor_name']);
        $course_name = mysqli_real_escape_string($con,$_POST['course_name']);

        $query = "UPDATE course_details SET course_picture='$imgContent',course_description='$course_description',strt_dt='$start_date',
        end_dt='$end_date',instructor_name='$instructor_name' WHERE course_name='$course_name'";

        $qu = mysqli_query($con,$query);

        if($qu){ 
            $status = 'success'; 
            $statusMsg = "File uploaded successfully."; 
        }else{ 
            $statusMsg = "File upload failed, please try again."; 
        }
    
    }
    else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    }

        // Display status message 
        echo $statusMsg;
}


?>