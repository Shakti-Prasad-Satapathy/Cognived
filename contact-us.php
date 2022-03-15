<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title> Contact Us | Cognived </title>
      <!-- Favicon -->
      <link rel="icon" type="image/png" href="images/favicon.png">
      <!-- Animate With CSS -->
      <link rel="stylesheet" type="text/css" href="css/animate.css">
      <!-- Country Dropdown KIT -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/css/intlTelInput.css" rel="stylesheet" media="screen">
      <!-- Font Awesome KIT -->
      <link href="fontawesome-kit-5/css/all.css" rel="stylesheet">
      <link href="fontawesome-kit-5/css/fontawesome.css" rel="stylesheet">
      <link href="fontawesome-kit-5/css/brands.css" rel="stylesheet">
      <link href="fontawesome-kit-5/css/solid.css" rel="stylesheet">
      <script defer src="fontawesome-kit-5/js/all.js"></script>
      <script defer src="fontawesome-kit-5/js/brands.js"></script>
      <script defer src="fontawesome-kit-5/js/solid.js"></script>
      <script defer src="fontawesome-kit-5/js/fontawesome.js"></script>
      <!-- Bootstrap Grids -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom Stylings -->
      <link href="css/custom.css" rel="stylesheet">
      <!-- Jquery Library -->
      <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

   </head>
   <body>
      <!-- Header Section Starts Here -->
      <header>
         <div class="container">
            <div class="logo">
               <a href="index.html"> <img src="images/logo.png"> </a>   
            </div>
            <div class="navbar-handler">
               <img src="images/hamburger.png"> 
            </div>
            <div class="navbar-custom">
               <div class="menu-item">
                  <a href="index.html"> Home </a>  
               </div>
               <div class="menu-item">
                  <a href="about-us.html"> About us </a> 
               </div>
               <div class="menu-item">
                  <a href="what-we-do.html"> What we do </a>   
               </div>
               <div class="menu-item">
                  <a href="our-team.html"> Our Team </a> 
               </div>
               <div class="menu-item">
                  <a href="careers.html"> Careers </a>   
               </div>
               <div class="menu-item">
                  <a href="contact-us.php" class="menu-active"> Contact Us </a>   
               </div>
            </div>
         </div>
      </header>
      <!-- Header Section Ends Here -->
      <!-- Sidebar Section Starts Here -->
      <section class="sidebar">
         <div class="home-icon">
            <a href="index.html"><img src="images/home-icon.png"> </a>  
         </div>
         <div class="logo-sidebar">
            <a href=""> <img src="images/sidebar-logo.png"> </a>  
         </div>
      </section>
      <!-- Sidebar Section Ends Here -->
      <!-- Banner Section Starts Here -->
      <section class="banner-sec custom-margin1">
         <div class="container">
            <div class="row equal-col">
               <div class="col-md-6 col-lg-6 col-sm-12 col-12 order-lg-2 order-md-2 order-sm-1 order-1">
                  <div class="custom-image3">
                     <img src="images/contact-banner.png" style="max-width: 440px">	
                  </div>
               </div>
               <div class="col-md-6 col-lg-6 col-sm-12 col-12 order-lg-1 order-md-1 order-sm-2 order-2">
                  <div class="textual-sec2">
                     <h3 class="col-black"> Howdy!Namaste. <br/>
                        Bonjour.Hola! 
                     </h3>
                     <p> Delighted to see you here. How can we assist you? </p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Banner Section Ends Here -->
      <!--Contact Details Section Starts Here -->
      <section class="pad-top-80 pad-bot-80 bg-sec3">
         <div class="container">
            <div class="row equal-col">
               <div class="col-md-6 col-lg-6 col-sm-12 col-12 order-lg-1 order-md-1 order-sm-1 order-1">
                  <div class="custom-image2">
                     <img src="images/contact-1.png">
                  </div>
               </div>
               <div class="col-md-6 col-lg-6 col-sm-12 col-12 order-lg-2 order-md-2 order-sm-2 order-2">
                  <div class="textual-sec8">
                     <h4 class="col-blue1"> OFFICE </h4>
                     <p class="col-grey1"> Cognived solutions LLP
                        #169, <br/>
                        12th cross Neeladri nagar Electronic  <br/>
                        city ph-1Bangalore -560100 
                     </p>
                     <h4 class="col-blue1"> Phone Number </h4>
                     <p class="col-grey1"> +91-9986761966 </p>
                     <h4 class="col-blue1"> Email </h4>
                     <p class="col-grey1"> contactus@cognived.com </p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Contact  Details Section Ends Here -->

     <?php 
        if(isset($_POST['submit'])){
            $to = "contactus@cognived.com"; // this is your Email address
            $from = $_POST['email']; // this is the sender's Email address
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $company = $_POST['company'];
            
            $subject = "Contact Form";
            $message = "Name:". $name .  "<br>"."Phone: ". $phone . "<br>"."Company: ". $company . "<br>". $_POST['describe'];
            
            
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            
            
            
                if(mail($to,$subject,$message,$headers)){
                        echo "<script> Swal.fire(
                        'Success!',
                        'Your query successfully submitted.',
                        'success'
                        ) </script>";
                }
                else{
                        echo "<script> Swal.fire(
                        'Error!',
                        'Something went wrong!',
                        'warning'
                        ) </script>";
                }
            
        }
    ?>



      <!-- Contact Form Starts Here -->
      <section class="pad-top-80 pad-bot-60 bg-sec2" id="contact-us">
         <div class="container">
            <div class="block-element m-t-30">
               <div class="tabs-trigger3 m-b-30">
                  <ul class="nav nav-tabs" role="tablist">
                     <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#project-tab" role="tab"> Start a Project </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tribute-tab" role="tab"> Join our Tribute </a>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="tab-content">
               <div class="tab-pane active" id="project-tab" role="tabpanel">
                  <div class="block-element">
                     <div class="contact-form1">
                         <form method="post">
                           <div class="row">
                              <div class="col-md-6 col-lg-6 col-sm-12 col-12">
                                 <div class="form-field1">
                                    <input type="text" placeholder="Name" class="field-style1" name="name" required>	
                                 </div>
                              </div>
                              <div class="col-md-6 col-lg-6 col-sm-12 col-12">
                                 <div class="form-field1">
                                    <input type="email" placeholder="Email" class="field-style1" name="email" required>	
                                 </div>
                              </div>
                              <div class="col-md-6 col-lg-6 col-sm-12 col-12">
                                 <div class="form-field1 number-field1">
                                    <input id="phone" type="number" name="phone" required>
                                 </div>
                              </div>
                              <div class="col-md-6 col-lg-6 col-sm-12 col-12">
                                 <div class="form-field1">
                                    <input type="text" placeholder="Company" class="field-style1" name="company" required>	
                                 </div>
                              </div>
                              <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                                 <div class="textual-sec8 m-b-20 text-left">
                                    <h3 class="col-blue1">  How Can We Help?   </h3>
                                    <p class="col-black no-margin"> Describe Your Idea In Details.the more we know,the better </p>
                                 </div>
                              </div>
                              <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                                 <div class="form-field1">
                                    <textarea class="field-style1" name="describe" required></textarea>
                                 </div>
                              </div>
                              <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                                <div class="g-recaptcha brochure__form__captcha m-b-20" data-sitekey="6Ld-R9AeAAAAAKKQBUfPb4RhfcYztZ8s8BRWzItm"></div>
                              </div> 
                              
                              
                              <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                                 <div class="form-field1">
                                    <input type="submit" class="submit-btn1 text-center"  value="Send" name="submit">
                                 </div>
                              </div>
                              <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                                 <div class="info-tag1">
                                    <span class="col-grey1">	We only use personal information to contact you.We do not share details with any other website/vendor ,nor do we use your email ids to subscribe to our newsletter.To know more about our privacy policy,  <a class="col-blue1"> Read Here </a> </span>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               
               
               
               <!--join our tribute contact us form-->
               
               
        <?php 
               
            if(isset($_POST['submit2'])) {
                
                $filenameee =  $_FILES['attachment']['name'];
                $fileName = $_FILES['attachment']['tmp_name']; 
                $name = $_POST['sender_name'];
                $email = $_POST['sender_email'];
                $LinkedinPro = $_POST['LinkedinPro'];
                $usermessage = $_POST['message'];
                
                $message ="Name = ". $name . "\r\n  Linkedin Profile = " . $LinkedinPro . "\r\n Message =" . $usermessage; 
                
                $subject ="Join Our Tribute";
                $fromname ="Cognived";
                $fromemail = 'noreply@cognived.com';  //if u dont have an email create one on your cpanel
                $mailto = 'contactus@cognived.com';  //the email which u want to recv this email
                $content = file_get_contents($fileName);
                $content = chunk_split(base64_encode($content));
                // a random hash will be necessary to send mixed content
                $separator = md5(time());
                // carriage return type (RFC)
                $eol = "\r\n";
                // main header (multipart mandatory)
                $headers = "From: ".$fromname." <".$fromemail.">" . $eol;
                $headers .= "MIME-Version: 1.0" . $eol;
                $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
                $headers .= "Content-Transfer-Encoding: 7bit" . $eol;
                $headers .= "This is a MIME encoded message." . $eol;
                // message
                $body = "--" . $separator . $eol;
                $body .= "Content-Type: text/plain; charset=\"iso-8859-1\"" . $eol;
                $body .= "Content-Transfer-Encoding: 8bit" . $eol;
                $body .= $message . $eol;
                // attachment
                $body .= "--" . $separator . $eol;
                $body .= "Content-Type: application/octet-stream; name=\"" . $filenameee . "\"" . $eol;
                $body .= "Content-Transfer-Encoding: base64" . $eol;
                $body .= "Content-Disposition: attachment" . $eol;
                $body .= $content . $eol;
                $body .= "--" . $separator . "--";
               
                //SEND Mail
                     if(mail($mailto, $subject, $body, $headers)){
                            echo "<script> Swal.fire(
                              'Success!',
                              'Your query successfully submitted.',
                              'success'
                            ) </script>";
                    }
                    else{
                            echo "<script> Swal.fire(
                              'Error!',
                              'Something went wrong!',
                              'warning'
                            ) </script>";
                    }
            
            }

        ?>
               
               <div class="tab-pane" id="tribute-tab" role="tabpanel">
                  <div class="block-element">
                    <div class="contact-form1">
                         <form method="post" enctype="multipart/form-data" >
                           <div class="row">
                              <div class="col-md-6 col-lg-4 col-sm-12 col-12">
                                 <div class="form-field1">
                                    <input type="text" placeholder="Name" class="field-style1" name="sender_name" required>	
                                 </div>
                              </div>
                              <div class="col-md-6 col-lg-4 col-sm-12 col-12">
                                 <div class="form-field1">
                                    <input type="email" placeholder="Email" class="field-style1" name="sender_email" required>	
                                 </div>
                              </div>
                              <div class="col-md-6 col-lg-4 col-sm-12 col-12">
                                 <div class="form-field1 number-field1">
                                   <input type="text" placeholder="Linkedin Profile" class="field-style1" name="LinkedinPro" required>
                                 </div>
                              </div>
                              
                              <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                                 <div class="textual-sec8 m-b-20 text-left">
                                    <h3 class="col-blue1">  Tell us about yourself  </h3>
                                    <p class="col-black no-margin"> The more we know you, the better.You can send your Website/Behance/Portfolio URL </p>
                                 </div>
                              </div>
                              <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                                 <div class="form-field1">
                                    <textarea class="field-style1" name="message" required></textarea>
                                 </div>
                              </div>
                              
                              <div class="col-md-6 col-lg-6 col-sm-12 col-12">
                                  <div class="textual-sec8 m-b-20 text-left">
                                    <h5 class="col-blue1" style="font-size: 18px; font-weight: 700;">  Upload your CV/Resume Here </h5>
                                     <p class="col-black no-margin" style="font-size: 14px;">  Upload PDF,DOC,DOCX only within 5mb size limit </p>
                                 </div>
                                 <div class="form-field1">
                                   <input class="field-style1" type="file" name="attachment" accept=".pdf,.doc,.docx" max-size="5000">
                                 </div>
                              </div>
                              <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                                   <div class="g-recaptcha brochure__form__captcha m-b-20" data-sitekey="6Ld-R9AeAAAAAKKQBUfPb4RhfcYztZ8s8BRWzItm"></div>
                              </div>
                              
                              
                              <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                                 <div class="form-field1">
                                    <input type="submit" class="submit-btn1" value="send" name="submit2">
                                 </div>
                              </div>
                              <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                                 <div class="info-tag1">
                                    <span class="col-grey1">	We only use personal information to contact you.We do not share details with any other website/vendor ,nor do we use your email ids to subscribe to our newsletter.To know more about our privacy policy,  <a class="col-blue1"> Read Here </a> </span>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Contact Form Ends Here -->
      <!-- Footer Section Starts Here -->
      <footer>
         <div class="container">
            <div class="row">
               <div class="col-md-3 col-lg-3 col-sm-12 col-12">
                  <div class="footer-about">
                     <a href="index.html"> <img src="images/logo.png"> </a>  
                     <p class="col-grey2"> We are a company filled with innovators & technologists , we help clients to adopt digital processes and innovative engagement models to transform their businesses to the next level. </p>
                  </div>
               </div>
               <div class="col-md-3 col-lg-3 col-sm-4 col-12">
                  <div class="footer-list footer-block1">
                     <h3 class="footer-heading1"> Our Services </h3>
                     <ul class="list-1">
                        <li> <a href="index.html"> Home </a> </li>
                        <li> <a href="about-us.html"> About Us </a> </li>
                        <li> <a href="what-we-do.html"> What we do </a> </li>
                        <li> <a href="our-team.html"> Our Team </a> </li>
                        <li> <a href="careers.html"> Careers </a> </li>
                        <li> <a href="contact-us.php"> Contact Us </a> </li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-3 col-lg-3 col-sm-4 col-12">
                  <div class="footer-list footer-block2">
                     <h3 class="footer-heading1"> Office in India </h3>
                     <ul class="list-1 list-2">
                        <li> <a target="_blank" href="https://www.google.com/maps/place/169,+12th+Cross+Road/@12.8408122,77.645394,17z/data=!3m1!4b1!4m5!1m2!2m1!1s%23169+,+12th+cross+Neeladri+nagar+Electronic+city+ph-1++Bangalore+-560100!3m1!1s0x3bae6b7bfbcd9061:0x8c6e2bf9f17f328f"> <img src="images/footer-icon1.png">  #169 , 12th cross Neeladri nagar Electronic city ph-1
                           Bangalore -560100 </a> 
                        </li>
                        <li> <a href="mailto:contactus@cognived.com"> <img src="images/footer-icon2.png"> contactus@cognived.com </a> </li>
                        <li> <a href="tel:+91-9986761966 "> <img src="images/footer-icon3.png"> +91-9986761966 </a> </li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-3 col-lg-3 col-sm-4 col-12">
                  <div class="footer-list footer-block3">
                     <h3 class="footer-heading1 text-right mob-text-left"> Our Locations </h3>
                     <img src="images/footer-map.png" class="map-image1">
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- Footer Section Ends Here -->
      <!-- Copyrights Section Starts Here -->
      <section class="copyrights-sec text-center">
         <span class="col-blue1"> All rights reserved | Copyright © Cognived 2022-2023 | Privacy Policy  </span>
      </section>
      <!-- Copyrights Section Ends Here -->
      <!-- Bootstrap Javascript -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"> </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/intlTelInput.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/intlTelInput.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/utils.js"></script>
      <script src="https://www.google.com/recaptcha/api.js"></script>
      <script src="js/functions.js"> </script>
      
   </body>
</html>