<?php include('server.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front-Page</title>
    <link rel="stylesheet" href="Front-Page.css">

    <script>
        function toggleForm() {
          var form = document.getElementById("myForm");
          form.classList.toggle("signin");
        }
      </script>

</head>

<body>
    <header class="header">
        <nav class="nav-bar">
            <h2 class="nav-title"><span class="text-primary"> RMM </span> Online<span class="text-primary"> Courses</span></h2>
            <ul>
                <li><a href="SignUp.php"><button class="btn-primary">SignUp</button></a></li>
        
                <li ><button class="btn-primary login-btn">Log-in</button></li> 
            </ul>
        </nav>
        <!--Header banner-->
        
        <div class="wrapper">
            <span class="icon-close"><i class="fa-solid fa-xmark"></i></span>
            <div class="form-box Login">
                <h2>Login</h2>
               <form action="" method="post">
               <?php include('errors.php');?>
                    <div class="input-box">
                        <input type="text" name="userName" autocomplete="off">
                        <label for="userName">User Name</label>
                    </div>

                    <div class="input-box"> 
                        <input type="password" name="password" autocomplete="off">
                        <label for="password">Password</label>
                    </div>
                    <span class="designation">Designation:</span>
                    <select name="User_Selection" id="user-selection">
                        <option value="Student">Student</option>
                        <option value="Instructor">Instructor</option>
                        <option value="Trainer">Trainer</option>
                    </select><br>
                   <button type="submit" class="lgIn-btn" name="login_user">Submit</button>
               </form>
            </div>
        </div>


        <div class="banner">
            <div>
                <h3 class="banner-sub-title"> Hi I am </h3>
                <h1 class="banner-title"> Rahman Md Mojnur</h1>
                <p class="banner-description"> Hello ! welcome to Our Online Courses </p>
                <a href="courses.html"><button class="btn-primary" > View All Courses </button></a>
                
    
            </div>
            <video class="banner-video" src="Image Of Front Page/mixkit-professional-programmer-working-on-a-big-computer-41642-medium.mp4" controls width="500" height="350"></video>
        
        </div>
    </header>

    <main class="main">
        <section class="About">
            <h3 class="section-title"> About Courses</h3>
            <p class="section-description"> <h4>The Power of Programming Online Courses</h5>In today's rapidly evolving digital landscape, programming skills have become increasingly essential for career growth and personal development. Fortunately, the rise of online education has made it easier than ever to acquire these valuable skills from the comfort of your own home. Programming online courses offer a flexible and accessible way to learn the intricacies of various programming languages and frameworks.These courses provide a structured curriculum designed by industry experts, ensuring a comprehensive understanding of programming concepts. From beginner-friendly courses that introduce the fundamentals to advanced programs that dive deep into specialized topics, there's something for everyone.One of the major advantages of online programming courses is the ability to learn at your own pace. You can easily fit your studies into your busy schedule, allowing for a seamless integration of learning into your daily life.Additionally, online courses often incorporate interactive coding exercises and real-world projects, giving you hands-on experience and fostering practical skills. Many platforms offer forums and communities where you can connect with fellow learners and industry professionals, creating a supportive network to share ideas and troubleshoot problems.Whether you're looking to kickstart a career in software development or simply enhance your problem-solving abilities, programming online courses can be your gateway to success. Embrace the power of online education and unlock your coding potential today!</p><br>
                <div class="about-info-container">

                    <div class="about-info">
                        <p class="info-title">Name:</p>
                        <p class="info-description">RMM Online Courses</p>
                    </div>

                    <div class="about-info">
                        <p class="info-title">email:</p>
                        <p class="info-description">rmmonlinecourses@gmail.com</p>
                    </div>


                    <div class="about-info">
                        <p class="info-title">Address:</p>
                        <p class="info-description">Tamarind Squire Cyberjaya,Malaysia</p>
                    </div>
                    
        
                </div>

        </section>
        <!--What you Learn section-->

        <section class="What-You-Learn">
            <h3 class="section-title">What You Learn</h3>
            <div class="skill-container">
                <div class="skill">
                    <img src="Image Of Front Page/java.png" alt="" width="250px" height="230px">
                    <p class="skill-title">Java</p>
                    <p class="skill-description">Java, a versatile and robust programming language,offers developers the ability to create secure,platform-independent applications.Its vast ecosystem and strong community support make it a popular choice in the software development industry.</p>
                </div>
                <div class="skill">
                    <img src="Image Of Front Page/DB.jpg" alt="" width="250px" height="230px">
                    <p class="skill-title">DataBase</p>
                    <p class="skill-description">Databases are integral to modern computing, providing a structured and organized way to store, manage, and retrieve vast amounts of data. They are essential for applications ranging from small-scale projects to enterprise-level systems.</p>
                </div>
                <div class="skill">
                    <img src="Image Of Front Page/JS.png" alt="" width="250px" height="230px">
                    <p class="skill-title">JavaScript</p>
                    <p class="skill-description">JavaScript, often abbreviated as JS, is a popular programming language used for web development. It enables dynamic and interactive elements on websites, enhancing user experience and functionality.</p>
                </div>
                <div class="skill">
                    <img src="Image Of Front Page/python.jpg" alt="" width="250px" height="230px">
                    <p class="skill-title">Python</p>
                    <p class="skill-description">Python, a versatile and beginner-friendly programming language, is widely used for web development, data analysis, artificial intelligence, and more. Its simplicity and readability make it a popular choice among developers worldwide.</p>
                </div>
            </div>

        </section>

        <!--Summary of Instructors Section-->
        <section class="resume">
            <h3 class="section-title"> A summary of Instructors</h3>

            <div class="resume-content">

                <div >
                    <h3 class="resume-title">Lecture Instructors</h3>
                    <div class="resume-item">
                        <h4 class="title">Rahman Md Mojnur</h4>
                        <div class="sub-title">Master in Computer Engineering <br>Harvard University / 2015-2017</div>
                        <p class="Description">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe quasi dolores quibusdam error eligendi molestiae, magni distinctio libero officiis magnam! Mollitia quasi sit eveniet cupiditate?
                        </p>
                        
                    </div>
                    <hr>
                    <div class="resume-item">
                        <h4 class="title">Shoron Md Afif Rahman</h4>
                        <div class="sub-title">Master in Computer Engineering <br>Harvard University / 2015-2017</div>
                        <p class="Description">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe quasi dolores quibusdam error eligendi molestiae, magni distinctio libero officiis magnam! Mollitia quasi sit eveniet cupiditate?
                        </p>
                        
                    </div>
                    <hr>
                    <div class="resume-item">
                        <h4 class="title">Md Liad Bin Aowlad</h4>
                        <div class="sub-title">Master in Computer Engineering <br>Harvard University / 2015-2017</div>
                        <p class="Description">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe quasi dolores quibusdam error eligendi molestiae, magni distinctio libero officiis magnam! Mollitia quasi sit eveniet cupiditate?
                        </p>
                        
                    </div>
                </div>

                <div>
                    <h3 class="resume-title">Tutorial Instructors</h3>
                    <div class="resume-item">
                        <h4 class="title">Wuihong</h4>
                        <div class="sub-title">Master in Computer Engineering <br>Harvard University / 2015-2017</div>
                        <p class="Description">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe quasi dolores quibusdam error eligendi molestiae, magni distinctio libero officiis magnam! Mollitia quasi sit eveniet cupiditate?
                        </p>
                        
                    </div>
                    <hr>
                    <div class="resume-item">
                        <h4 class="title">Shoron Md Afif Rahman</h4>
                        <div class="sub-title">Master in Computer Engineering <br>Harvard University / 2015-2017</div>
                        <p class="Description">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe quasi dolores quibusdam error eligendi molestiae, magni distinctio libero officiis magnam! Mollitia quasi sit eveniet cupiditate?
                        </p>
                        
                    </div>
                    <hr>

                    <div class="resume-item">
                        <h4 class="title">Md Liad Bin Aowlad</h4>
                        <div class="sub-title">Master in Computer Engineering <br>Harvard University / 2015-2017</div>
                        <p class="Description">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe quasi dolores quibusdam error eligendi molestiae, magni distinctio libero officiis magnam! Mollitia quasi sit eveniet cupiditate?
                        </p>
                        
                    </div>
    
                </div>

            </div>
            <div class="resume-button">
               <a href="contact.html"><button class="btn-primary">Contact Us</button></a> 
            </div>
        </section>

        <!--contact section-->

        <section class="contact">
            <div>
                <h3 class="section-title">Let's Connect</h3>
                <p>In today's fast-paced world, effective communication is key. Let's Contact explores the diverse range of tools available for seamless connection, from instant messaging and video conferencing to email and contact management. Discover the power of staying connected in the digital age.</p><br>

                <a href="">
                    <img src="Image Of Front Page/phone.png" alt="" width="50px" height="30px">9865439
                </a><br>

                <a href="">
                    <img src="Image Of Front Page/whatsapp.jpg" alt="" width="50px" height="30px">(+601139325560)
                </a><br>

                <a href="">
                    <img src="Image Of Front Page/email.png" alt="" width="50px" height="30px">rmmonlinecourses@gmail.com
                </a><br>

                <a href="">
                    <img src="Image Of Front Page/IN.png" alt="" width="50px" height="30px">
                    <a href="https://www.linkedin.com/in/rahmanmdmojnur2022">linkedin</a>
                </a><br>

                <a href="">
                    <img src="Image Of Front Page/FB.jpg" alt="" width="50px" height="30px">
                    <a href="https://www.facebook.com/profile.php?id=100010724340918&mibextid=LQQJ4d">facebook</a>
    
                </a><br>
            
                <a href="">
                    <img src="Image Of Front Page/Ins.jpg" alt="" width="50px" height="30px">
                    <a href="https://instagram.com/rmm_mojnur">instagram</a>
                </a>

            </div>

            <div>
                <h3 class="section-title">Let's Message me</h3>
                <form action="">
                    <input type="text" name="id=" placeholder="Your Name"><br>
                    <input type="email" name="id=" placeholder="Your Email"><br>
                    <input type="number" name="id=" placeholder="Your phoneNumber"><br>
                    <textarea name="id="  cols="30" rows="15" placeholder="Message"></textarea>
                    <input class="btn-primary" type="submit" value="Submit">


                </form>

            </div>
        </section>

    <script src="https://kit.fontawesome.com/092b92aa6f.js" crossorigin="anonymous"></script>
    <script src="Front-page.js"></script>
    </main> 

    <footer>

    </footer>
</body>
</html>
