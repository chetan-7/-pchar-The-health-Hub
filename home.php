
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>उpchar-The health Hub </title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/plugins/grid-gallery/css/grid-gallery.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

<body>
        <header class="continer-fluid ">
            <div id="menu-jk" class="header-bottom">
                <div class="container">
                    <div class="row nav-row">
                        <div class="col-md-3 logo">
                            <img src="assets/images/logo.png" height="60px">
                        </div>
                        <div class="col-md-9 nav-col">
                            <nav class="navbar navbar-expand-lg navbar-light">

                                <button
                                    class="navbar-toggler"
                                    type="button"
                                    data-toggle="collapse"
                                    data-target="#navbarNav"
                                    aria-controls="navbarNav"
                                    aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Home
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" target="_blank" href="BlogsAyurveda/blog.php">Ayurveda</a>
                                        </li>
                                       
                                        <li class="nav-item">
                                            <a class="nav-link" target="_blank" href="Exerciseandyoga/main.php">Exercises</a>
                                        </li>
                                         <li class="nav-item">
                                            <a class="nav-link" target="_blank" href="BlogsAyurveda/blog.php">Blogs</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#contact">Contact us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" onclick="logout()" href="login.html">Log Out</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        
    <!-- ################# Slider Starts Here#######################--->

    <div class="slider-detail">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block slide-img w-100" src="assets/images/slider/slide-02.png" alt="First slide" filter="blur(8px)">
                    <div class="carousel-caption vdg-cur d-none d-md-block">
                        <h5 class="bounceInDown">Donate Blood & Save a Life</h5>
                        <p class="bounceInLeft" id="b1">Stay safe Stay home </p>

                        <div class="vbh">

                            <div class="btn btn-success  bounceInUp"><a href="bloodonateform.php" target="_blank">Donate blood</a></div>
                            <div class="btn btn-success  bounceInUp"><a href="bloodavailable.php" target="_blank">Blood Availability</a></div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="d-block slide-img w-100" src="assets/images/slider/slide-03.jpg" alt="Third slide">
                    <div class="carousel-caption vdg-cur d-none d-md-block">
                        <h5 class="bounceInDown">Blogs & Doctor appointment</h5>
                        <p class="bounceInLeft">Help us to help you</p>

                        <div class="vbh">

                            <div class="btn btn-success bounceInUp"><a href="Doctor_Appointement/Doctor.php" target="_blank">Doctor Appointement</a></div>
                            <div class="btn btn-success  bounceInUp"><a href="BlogsAyurveda/blog.php" target="_blank">Blogs</a></div>
                        </div>
                    </div>
                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


    </div>
    
    <!--*************** About Us Starts Here ***************-->
   <section id="about" class="contianer-fluid about-us">
       <div class="container">
           <div class="row session-title">
               <h2>About Us</h2>
               
           </div>
            <div class="row">
                <div class="col-md-6 text">
                    <h2>About</h2>
                    <p style="font-size: 20px;font-family:'Lucida Console','Courier New', monospace; ">Welcome to the digital era of health assistance to support group of human society.UPCHAR app is initiative for people to know about our ancient AYURVEDA medical system how it helps in adding health to your life naturally,
                    ,donate blood for saving lives,check availability of blood in their region or area and assist people in healthylife style therefore this application name itself says <b style="font-weight: bold">उपचार</b></p>
                    <p style="font-size: 20px;font-family:'Lucida Console','Courier New',monospace;">
                    This is a centralized mobile and web application where users must login/register through our user interface.They can look for blood donors in their nearby areas who will be available.<b style="font-weight:bold">UPCHAR </b>application also assist user to stay fit and healthy by accessing our exercise & blog section.In order to cure from disease our and adding health to our life naturally our application contains <i>ayurvedic</i> upchar and some other ways to stay healthy. 
                    </p>
                </div>
                <div class="col-md-6 image">
                    <img src="assets/images/about.png" alt="">
                </div>
            </div>
       </div>
   </section>
     
     <!-- ################# Donation Process Start Here #######################--->
<!--     
     <section id="process" class="donation-care">
         <div class="container">
           <div class="row session-title">
               <h2>Donation Process</h2>
                <p># </p>
           </div>
            <div class="row">
                 <div class="col-md-3 col-sm-6 vd">
                    <div class="bkjiu">
                     <img src="assets/images/gallery/g1.jpg" alt="">
                     <h4><b>1 - </b>Registration</h4>
                     <p>For blood Donation</p>
                     <button class="btn btn-sm btn-danger"><a style="color:white" href="bloodonateform.php">Readmore</a><i class="fas fa-arrow-right"></i></button>
                     </div>
                 </div>
                 <div class="col-md-3 col-sm-6 vd">
                    <div class="bkjiu">
                     <img src="assets/images/gallery/g2.jpg" alt="">
                        <h4><b>2-</b>Availability</h4>
                     <p>For blood type </p>
                     <button class="btn btn-sm btn-danger"><a style="color:white" href="bloodavailable.php">Readmore</a> <i class="fas fa-arrow-right"></i></button>
                     </div>
                 </div>
                 <div class="col-md-3 col-sm-6 vd">
                    <div class="bkjiu">
                     <img src="assets/images/gallery/g3.jpg" alt="">
                        <h4><b>3 - </b>Donation</h4>
                     <p>#need to write here</p>
                     <button class="btn btn-sm btn-danger">Readmore <i class="fas fa-arrow-right"></i></button>
                     </div>
                 </div>
                 <div class="col-md-3 col-sm-6 vd">
                    <div class="bkjiu">
                        <img src="assets/images/gallery/g4.jpg" alt="">
                        <h4><b>4 - </b>Save Life</h4>
                         <p>#need to write here</p>
                         <button class="btn btn-sm btn-danger">Readmore <i class="fas fa-arrow-right"></i></button>
                    </div> 
                 </div>
            </div>
            
             
         </div>
     </section>
-->
      <!--*************** Footer  Starts Here *************** -->
    <footer id="contact" class="container-fluid">
        <div class="container">
            
            <div class="row content-ro">
                <div class="col-lg-4 col-md-12 footer-contact">
                    <h2>Contact Informations</h2>
                    <div class="address-row">
                        <div class="icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="detail">
                            <p>Address : Rahejas, 4th Floor, Corner of Main Avenue and V. P. Road,Kandivali,Mumbai-400101</p>
                        </div>
                    </div>
                    <div class="address-row">
                        <div class="icon">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="detail">
                            <p>info@upchar.net<br>healthsupport@upchar.net</p>
                        </div>
                    </div>
                    <div class="address-row">
                        <div class="icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="detail">
                            <p>91-22-26001306<br>91-22-25491312</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 footer-links">
                   <div class="row no-margin mt-2">
                   <h2>Quick Links</h2>
                  <div style="margin-left:-121px;"class="social-icons">
                  <a href="https://www.facebook.com/"><img src="https://cdn3.iconfinder.com/data/icons/round-pink-icons-set/256/social_media_round_icons_pink_color_set_256x256_0000_facebook.png"></a>
                  <a href="https://www.twitter.com"><img src="https://webstockreview.net/images/pink-twitter-png-7.png"></a>
                  <a href="https://www.instagram.com">
                  <img src="https://www.seekpng.com/png/detail/1010-10103813_facebook-icon-new-instagram-png-black.png"></a>
                  </div>
                  </div>
                  <!--<div class="row no-margin mt-1">-->
                  <div>
                  <h2 class="m-t-2">Site Map</h2>
                      <ul>
                        <a href="BlogsAyurveda/ay.php" target="_blank"><li style="color:white">Ayurveda</li></a><br/>
                        <a href="bloodonateform.php" target="_blank"><li style="color:white">Donate Blood</li></a><br/>
                        <a href="bloodavailable.php" target="_blank"><li style="color:white">Blood Availability</li></a><br/>
                        <a href="Exerciseandyoga/main.php" target="_blank"><li style="color:white">Exerices</li></a><br/>
                        <a href="BlogsAyurveda/blog.php" target="_blank"><li style="color:white">Blog</li></a>
                      </ul>
                  </div>
                  </div>

                <div style="margin-top: 90px;" class="col-lg-4 col-md-12 footer-form">
                    <div class="form-card">
                        <div class="form-title">
                            <h4>Quick Message</h4>
                        </div>
                        <div class="form-body">
                            <input type="text" placeholder="Enter Name" class="form-control">
                            <input type="text" placeholder="Enter Mobile no" class="form-control">
                            <input type="text" placeholder="Enter Email Address" class="form-control">
                            <input type="text" placeholder="Your Message" class="form-control">
                            <button class="btn btn-sm btn-primary w-100">Send Request</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copy">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <p>Copyright 2021 - © All right reserved.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 socila-link">
                        <ul>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    
</body>
  <script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-auth.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-database.js"></script>

  <script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-analytics.js"></script>

  <script>
    // Initialize Firebase
  var firebaseConfig = {
    apiKey: "AIzaSyBYtI-A55BouY-akI88YezmC1_XEsimI5s",
    authDomain: "fir-491cb.firebaseapp.com",
    projectId: "fir-491cb",
    storageBucket: "fir-491cb.appspot.com",
    messagingSenderId: "605853319210",
    appId: "1:605853319210:web:86ee5cb96b6572067ac353",
    measurementId: "G-2M33Q4G91T"
  };
    firebase.initializeApp(firebaseConfig);
  </script>
    <script src="assets/js/firebase.js"></script>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/plugins/grid-gallery/js/grid-gallery.min.js"></script>
    <script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
    <script src="assets/js/script.js"></script>
</html>
