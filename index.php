<?php include "data.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trilochan Behera - Portfolio</title>
    <link rel="shortcut icon" href="assets/img/photo.jpg" type="image/x-icon" oncontextmenu="return false">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/icofont/icofont.min.css">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>
  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
       
        <h1 class="text-light"><a href="index.php">Trilochan Behera</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="https://www.linkedin.com/in/trilochan-behera-2179b41a2" class="linkedin"><i class="fa fa-linkedin"></i></a>
          <a href="https://twitter.com/Triloch46261491?s=08" class="twitter"><i class="fa fa-twitter"></i></a>
          <a href="mailto:trilochanbeherak@gmail.com" class="gmail"><i class="fa fa-envelope"></i></a>
          <a href="https://github.com/Trilochan-Behera" class="github"><i class="fa fa-github"></i></a>
          <a href="https://wa.me/+919583998665" class="whatsapp"><i class="fa fa-whatsapp"></i></a>
          <a href="tel:9583998665" class="call"><i class="fa fa-phone"></i></a> 
        </div>
      </div>

      <nav class="nav-menu">
        <ul>
          <li class="active"><a href="#Home"> <img src="assets/img/sidebar_logo/home_new.png" class="sidebarlogo"> <span>Home</span></a></li>
          <li><a href="#about"><img src="assets/img/sidebar_logo/about_new.png" class="sidebarlogo"> <span>About</span></a></li>
          <!-- <li><a href="#education"><i class="fa fa-university"></i> <span>Education</span></a></li> -->
          <li><a href="#skills"><img src="assets/img/sidebar_logo/skill_new.png" class="sidebarlogo">Skills</a></li>
          <li><a href="#Certificates"><img src="assets/img/sidebar_logo/cerificate_new.png" class="sidebarlogo">Certificates</a></li>
          <li><a href="#projects"><img src="assets/img/sidebar_logo/project_new.png" class="sidebarlogo">Projects</a></li>
          <li><a href="#contact"><img src="assets/img/sidebar_logo/contact_new.png" class="sidebarlogo"> Contact</a></li>

        </ul>
        
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>
  </header><!-- End Header -->


  <main id="main">
    <section class="banner" id="Home">
      <div class="container-fluid">
        <div class="bannerprofile">
          <img src="assets/img/photo.jpg" alt="" class="img-fluid rounded-circle" oncontextmenu="return false">
        </div>
        <p class="profileheading">Trilochan Behera</p>
         <button id="hirebtn" data-toggle="modal" data-target="#myModale"><font color="#fff"> <i class="fa fa-send"></i> Hire Me  </font></button>
         
      </div>
      
    </section>
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" >
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="text-center" id="aboutme">
                About Me
            </div>
        </div>
          <div class="col-md-4 col-sm-12" id="aboutdetails">
            <h4>My Story</h4>
            <p> I'm currently completed my Master in Computer Application from Ajay Binay Institute of Technology, Cuttack under Biju Patnaik University of Technology, Rourkela Odisha. </p> 
            <p> As a Software engineer i'm always polishing my programming skills ,data structures and algorithms.</p> 
            <p> Other than i'm always passionate to design & develop websites.</p>
            <center> <a href="assets/MyResume.pdf" download="Trilochan_Behera_Resume" target="_blank"> <button class="resumebtn"> <i class="fa fa-file"></i> Download Resume </button>  </a>  </center>
          </div>
          <div class="col-md-4 col-sm-12">
            <img src="assets/img/photo2.png" class="aboutimg" oncontextmenu="return false">
          </div>
          <div class="col-md-4 col-sm-12" id="personaldetails">
            <h4>Personal Information</h4>
            <p>Name &nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp; Trilochan Behera</p>
            <hr>
            <p>Age&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 24 Years</p>
            <hr>
            <p>Phone&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;+91 9583998665</p>
            <hr>
            <p>Email &nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp; trilochanbeherak@gmail.com </p>
            <hr>
            <p>Address&nbsp; : &nbsp;&nbsp;Jagatsinghpur, Odisha</p>
            <div class="social-links mt-4">
              <a href="https://facebook.com/" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://instagram.com/" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="https://wa.me/+919583998665" class="whatsapp"><i class="fa fa-whatsapp"></i></a>
              <a href="https://youtube.com/channel/UCBNTxyXSlsaaVHuFBm-HP5g" class="youtube"><i class="fa fa-youtube"></i></a> 
              <a href="https://telegram.org/dl" class="telegram"><i class="fa fa-send"></i></a> 
              <a href="https://goo.gl/maps/bSu4TEw8S3tYLr9W6" class="address"><i class="fa fa-map-marker"></i></a>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Education Section ======= -->
    <!-- <section id="education" class="resume">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="text-center" id="aboutme" style="margin-bottom: 5%;">
              Edulcational Qualification
            </div>
        </div>
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
              <h4>Alex Smith</h4>
              <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.</em></p>
              <ul>
                <li>Portland par 127,Orlando, FL</li>
                <li>(123) 456-7891</li>
                <li>alice.barkley@example.com</li>
              </ul>
            </div>

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>Master of Fine Arts &amp; Graphic Design</h4>
              <h5>2015 - 2016</h5>
              <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
              <p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend</p>
            </div>
            <div class="resume-item">
              <h4>Bachelor of Fine Arts &amp; Graphic Design</h4>
              <h5>2010 - 2014</h5>
              <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
              <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Professional Experience</h3>
            <div class="resume-item">
              <h4>Senior graphic design specialist</h4>
              <h5>2019 - Present</h5>
              <p><em>Experion, New York, NY </em></p>
              <ul>
                <li>Lead in the design, development, and implementation of the graphic, layout, and production communication materials</li>
                <li>Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project. </li>
                <li>Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design</li>
                <li>Oversee the efficient use of production project budgets ranging from $2,000 - $25,000</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>Graphic design specialist</h4>
              <h5>2017 - 2018</h5>
              <p><em>Stepping Stone Advertising, New York, NY</em></p>
              <ul>
                <li>Developed numerous marketing programs (logos, brochures,infographics, presentations, and advertisements).</li>
                <li>Managed up to 5 projects or tasks at a given time while under pressure</li>
                <li>Recommended and consulted with clients on the most appropriate graphic design</li>
                <li>Created 4+ design presentations and proposals a month for clients and account managers</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section> -->
    <!-- End Resume Section -->
    <!-- ======= Skills Section ======= -->
    <section id="skills" class="myskills section-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
              <div class="text-center" id="aboutme" style="margin-bottom: 5%;">
                  My Skills
              </div>
          </div>
          <div class="col-md-12 col-sm-12">
              <div class="row">
                
                  <div class="col-md-2 col-sm-6"> <img src="assets/img/skills/Python.png" class="skills"></div>
                  <div class="col-md-2 col-sm-6"> <img src="assets/img/skills/Django.png" class="skills"> </div>
                  <div class="col-md-2 col-sm-6"> <img src="assets/img/skills/CoreJava.png" class="skills"> </div>
                  <div class="col-md-2 col-sm-6"> <img src="assets/img/skills/PHP2.png" class="skills"> </div>
                  <div class="col-md-2 col-sm-6"> <img src="assets/img/skills/mysql_logo.png" class="skills"> </div>
                  <div class="col-md-2 col-sm-6"> <img src="assets/img/skills/MongoDB.png" class="skills"> </div>
                  <div class="col-md-2"></div>
                  <div class="col-md-2 col-sm-6"> <img src="assets/img/skills/Html.png" class="skills"> </div>
                  <div class="col-md-2 col-sm-6"> <img src="assets/img/skills/Css.png" class="skills"> </div>
                  <div class="col-md-2 col-sm-6"> <img src="assets/img/skills/bootstrap4.png" class="skills"> </div>
                  <div class="col-md-2 col-sm-6"> <img src="assets/img/skills/Javascript.png" class="skills"> </div>
                  <div class="col-md-2"></div>
              </div>
          </div>
      </div>
      </div>
    </section><!-- End Skills Section -->

    <!-- ======= certificates Section ======= -->
    <section id="Certificates" class="portfolio section-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="text-center" id="aboutme" style="margin-bottom: 5%;">
                Online Certificates
            </div>
        </div>
        <div class="col-md-12 col-sm-12">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                  <img src="assets/img/Certificates/Python.jpg" class="Certificates" oncontextmenu="return false">
                </div>
                <div class="col-md-4 col-sm-6">
                  <img src="assets/img/Certificates/Microsoft.jpg" class="Certificates" oncontextmenu="return false">
                </div>
                <div class="col-md-4 col-sm-6">
                    <img src="assets/img/Certificates/Java_certificate.jpg" class="Certificates" oncontextmenu="return false">
                </div>
                <div class="col-md-4 col-sm-6">
                  <img src="assets/img/Certificates/PHP_certificate.jpg" class="Certificates" oncontextmenu="return false">
                </div>
                <div class="col-md-4 col-sm-6">
                  <img src="assets/img/Certificates/JavaScript_certificate.jpg" class="Certificates" oncontextmenu="return false">
                </div>
                <div class="col-md-4 col-sm-6">
                    <img src="assets/img/Certificates/MySql.jpg" class="Certificates" oncontextmenu="return false">
                </div>
                  
            </div>
        </div>

        </div>
      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Services Section ======= -->
    <section id="projects" class="projects">
      <div class="container">


        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="text-center" id="aboutme" style="margin-bottom: 5%;">
              My Projects
            </div>
        </div>
        <div class="col-md-12 col-sm-12">
          <div class="row">      
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="project-item">
                <img src="assets/img/project/elearning.jpg" class="img-fluid" id="project" >
                <div class="project-content">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4> Educator </h4>
                    <p class="price"> May 2021 </p>
                  </div>
  
                  <h3>Educator - Study Online </h3>
                  <p style="height:175px;">* This project is based on providing Online Courses .<br>
                    * Creating Responsive website layout by using standard
                    HTML, CSS, Bootstrap and JavaScript. <br>
                    * Make Website Dynamic using Django framework of python and MySQL as
                    database.</p>
                  <hr>
                 <center> <button class="btn btn-info"><font color="#fff"> <i class="fa fa-eye"></i> View Project </font></button></center>
                  
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="project-item">
                <img src="assets/img/project/Portfolio.png" class="img-fluid" id="project" >
                <div class="project-content">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4> MyPortfolio </h4>
                    <p class="price"> Aug 2021 </p>
                  </div>
  
                  <h3>Personal Porfolio Website</h3>
                  <p style="height:175px;">
                    * This project is my Personal Porfolio website .<br>
                    * Creating Responsive website layout by using standard
                     HTML, CSS, Bootstrap and JavaScript.  <br>
                     * Also Add Mail sending features in contact Form.</p>
                  <hr>
                 <center> <button class="btn btn-info"><font color="#fff"> <i class="fa fa-eye"></i> View Project </font></button></center>
                  
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="project-item">
                <img src="assets/img/project/alumni.jpg" class="img-fluid" id="project" >
                <div class="project-content">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4> Alumni Feedback </h4>
                    <p class="price"> Sep 2020 </p>
                  </div>
  
                  <h3> Alumni Feedback System </h3>
                  <p style="height:175px;">
                    * This project is based on valuable feedback of Alumni .<br>
                    * Creating Responsive website layout by using standard
                      HTML, CSS, Bootstrap and JavaScript. <br>
                    * Make Website Dynamic using PHP and MySQL database.</p>
                  <hr>
                 <center> <button class="btn btn-info"><font color="#fff"> <i class="fa fa-eye"></i> View Project </font></button></center>
                  
                </div>
              </div>
            </div>
        </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Contact Section ======= -->
    <section class="contact">
      <div class="container">


        <div class="row">
          <div class="col-md-12 col-sm-12" id="contact">
            <div class="text-center" id="aboutme" style="margin-bottom: 5%;">
              Contact Me
            </div>
        </div>
          <div class="col-lg-5 col-md-6 mb-2 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
              <a href="https://goo.gl/maps/bSu4TEw8S3tYLr9W6">  <i class="fa fa-map-marker"></i>
                <h4>Location:</h4>
               <p> Jagatsinghpur, Odisha </p>  </a>
              </div>

              <div class="email">
             <a href="mailto:trilochanbeherak@gmail.com"> <i class="fa fa-envelope"></i>
                <h4>Email:</h4>
                <p>trilochanbeherak@gmail.com</p></a>  
              </div>

              <div class="phone">
              <a href="tel:9583998665"><i class="fa fa-phone"></i>
                <h4>Call:</h4>
                <p>+91 9583998665</p></a>  
              </div>
              <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119783.56651827859!2d86.09710436248123!3d20.249026049115457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a19822fbc87ba77%3A0xc43e8674c6ef0301!2sJagatsinghpur%2C%20Odisha!5e0!3m2!1sen!2sin!4v1629993383203!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119783.56651827859!2d86.09710436248123!3d20.249026049115457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a19822fbc87ba77%3A0xc43e8674c6ef0301!2sJagatsinghpur%2C%20Odisha!5e0!3m2!1sen!2sin!4v1629993383203!5m2!1sen!2sin" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 col-md-6  mt-lg-0 d-flex align-items-stretch">
            <form action="" method="POST" role="form" class="contactform" onsubmit="return validateContact()">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" id="name" class="form-control" />
                  <div class="error" id="nameErr"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="email">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email"  />
                  <div class="error" id="emailErr"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="mobile">Your Mobile</label>
                  <input type="text" class="form-control" name="mobile" id="mobile"  />
                  <div class="error" id="mobileErr"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" name="message" rows="10" id="message" ></textarea>
                <div class="error" id="messageErr"></div>
              </div>
              <div class="text-center"><button type="submit" value="submit" name="submit"><i class="fa fa-send"></i> Send Message </button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section --> 

      <div class="footer">
        <p> &copy; 2021 <i class="fa fa-user"></i> <font color="#faeb32"> Trilochan Behera </font> | All Rights Reserved </p>
      </div>

  </main><!-- End #main -->
  <div class="modal fade" id="myModale" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-body">
           
       
       
        <div class="modal-content"  id="modaldesign">
        <div class="modal-header" style="justify-content: center;">
          <h4 class="modal-title" style="color: rgb(255,255,255); font-style: italic;font-size:20px"><b> Thank You For Your Offer !!</b></h4>
        </div>
        <div class="modal-body">
          <form action="" method="POST" role="form" class="contactform" onsubmit="return validateHire()">

              <div class="form-group">
                <label for="org">Your Organization Name</label>
                <input type="text" class="form-control" name="org"  id="org"   />
                <div class="error" id="orgErr"></div>
              </div>
              <div class="form-group">
                <label for="post">Apply Link</label>
                <input type="text" class="form-control" name="post"    />
              </div>

            <div class="text-center"><button class="btn btn-info" type="submit" value="send" name="send"> <i class="fa fa-send"></i> Send Me</button></div>
          </form>
        </div>
      </div>
     
        </div>
            
    </div>
  </div>

  <a href="#" class="back-to-top"><img src="assets/img/home.png" width="50px" ></a>

  <!-- Vendor JS Files -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/jquery.easing.min.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/validate.js"></script>

</body>

</html>