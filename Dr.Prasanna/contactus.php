<?php 

if(isset($_POST['contact_btn'])){
    $num=$_POST['num'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $massage=$_POST['massage'];
    $to="prasannamanna992@gmail.com";
    $subject="MA_DURGA DENTALCLINIC";
    $header="from:$email";

if( mail($to,$subject,$massage,$header)){
    $msg="Message Submitted successfully";
}
}


?>
<!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>MD-Dental clinic</title>
        <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="assets/images/fav.jpg">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.juid.sdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <link rel="stylesheet" href="assets/css/all.min.css">
        <link rel="stylesheet" href="assets/plugins/testimonial/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/plugins/testimonial/css/owl.theme.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    </head>

    <body>
       <header>
           <div class="container-fluid head-container">
               <div class="container">
                   <div class="row">
                       <div class="col-md-3 logocol">
                           <img src="assets/images/logo.png" alt="">
                            <a class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                     <i class="fas fa-bars"></i>
                            </a>
                       </div>
                       <div id="navbarNavDropdown" class="col-md-9 d-none d-md-block navcol">
                           <ul>
                               <li><a href="index.html">Home</a></li>
                               <li><a href="aboutus.html">About Us</a></li>
                               <li><a href="service.html">Service</a></li>
                               <li><a href="contactus.php">Contact Us</a></li>
                           </ul>
                       </div>
                   </div>
               </div>
           </div>
       </header>


          <!--  ************************* Page Title Starts Here ************************** -->
    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>Contact US</h2>
                <ul>
                    <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Contact Us</li>
                </ul>
            </div>
        </div>
    </div>

     
   <!--  ************************* Contact Us Starts Here ************************** -->


    <div style="margin-top:0px;" class="row no-margin">

        <iframe style="width:100%" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d249759.19784092825!2d79.10145254589841!3d12.009924873581818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1448883859107"  height="450" frameborder="0" style="border:0" allowfullscreen></iframe>


    </div>

    <div class="row contact-rooo no-margin">
        <div class="container">
            <div class="row">


                <div style="padding:20px" class="col-sm-7">
                    <?php if(!empty( mail($msg)){
                        echo $msg;
                    }?>
                    <h2 >Contact Form</h2> <br>
                    <form method="POST">
                    <div class="row cont-row">
                        <div  class="col-sm-3"><label>Enter Name </label><span>:</span></div>
                        <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="name" class="form-control input-sm" required ></div>
                    </div>
                    <div  class="row cont-row">
                        <div  class="col-sm-3"><label>Email Address </label><span>:</span></div>
                        <div class="col-sm-8"><input type="text" name="email" placeholder="Enter Email Address" class="form-control input-sm"  ></div>
                    </div>
                    <div  class="row cont-row">
                        <div  class="col-sm-3"><label>Mobile Number</label><span>:</span></div>
                        <div class="col-sm-8"><input type="text" name="number" placeholder="Enter Mobile Number" class="form-control input-sm" required ></div>
                    </div>
                    <div  class="row cont-row">
                        <div  class="col-sm-3"><label>Enter Message</label><span>:</span></div>
                        <div class="col-sm-8">
                            <textarea rows="5" placeholder="Enter Your Message" name="Message" class="form-control input-sm"></textarea>
                        </div>
                    </div>
                    <div style="margin-top:10px;" class="row">
                        <div style="padding-top:10px;" class="col-sm-3"><label></label></div>
                        <div class="col-sm-8">
                            <button class="btn btn-danger btn-sm" name="contact_btn">Send Message</button>
                        </div>
                    </div>
                </div>
            </form>
                <div class="col-sm-5">

                    <div style="margin:50px" class="serv">





                        <h2 style="margin-top:10px;">Address</h2>

                       Antonya Street, <br>
                        23/H-2, Building<br>
                        TA, AUS District<br>
                        Phone:+91 9159669599<br>
                        Email:support@smarteyeapps.com<br>
                        Website:www.smarteyeapps.com.com<br>







                    </div>


                </div>

            </div>
        </div>

    </div>


        
        <!--  ************************* Footer Start Here ************************** -->
        
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <h2>About Us</h2>
                        <p>
                            Smart Eye is a leading provider of information technology, consulting, and business process services. Our dedicated employees offer strategic insights, technological expertise and industry experience.
                        </p>
                        <p>We focus on technologies that promise to reduce costs, streamline processes and speed time-to-market, Backed by our strong quality processes and rich experience managing global... </p>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <h2>Useful Links</h2>
                        <ul class="list-unstyled link-list">
                            <li><a ui-sref="about" href="#/about">About us</a><i class="fa fa-angle-right"></i></li>
                            <li><a ui-sref="portfolio" href="#/portfolio">Portfolio</a><i class="fa fa-angle-right"></i></li>
                            <li><a ui-sref="products" href="#/products">Latest jobs</a><i class="fa fa-angle-right"></i></li>
                            <li><a ui-sref="gallery" href="#/gallery">Pricing</a><i class="fa fa-angle-right"></i></li>
                            <li><a ui-sref="contact" href="#/contact">Contact us</a><i class="fa fa-angle-right"></i></li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-12 map-img">
                        <h2>Contact Us</h2>
                       <address class="md-margin-bottom-40">
                         CASthana-Hruday Market<br>
                          next to Purna Das Shop<br>
                            Phone:6297686593 <br>
                            Email: <a href="#" class="">prasannamanna992@gmail.com</a><br>
                            Web: <a href="#" class="">www.MD.COM</a>
                        </address>
                    </div>
                </div>
            </div>
            
        </footer>
        <div class="copy">
            <div class="container">
                <a href="https://www.smarteyeapps.com/">2023 &copy; All Rights Reserved | Designed and Developed by SUMAN DAS</a>
                
                <span>
                    <a><i class="fab fa-github"></i></a>
                    <a><i class="fab fa-google-plus-g"></i></a>
                    <a><i class="fab fa-pinterest-p"></i></a>
                    <a><i class="fab fa-twitter"></i></a>
                    <a><i class="fab fa-facebook-f"></i></a>
                </span>
            </div>
        </div>
    
     
    </body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/plugins/testimonial/js/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>

</html>