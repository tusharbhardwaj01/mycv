<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/w3.css">
        <link rel="stylesheet" href="css/cyanlib.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-cyan.css">
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Tushar Bhardwaj</title>
    </head>
    <style>
           html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
    </style>
    <body class="w3-light-grey">
        
        <!-- Navigation bar -->
        <div class="w3-top">
          <div class="w3-bar w3-container w3-black" id="myNavbar">
            <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
              <i class="fa fa-bars w3-xlarge"></i>
            </a>
              <a href="#home" class="w3-bar-item w3-button w3-large w3-hover-white" style="width:25%">HOME</a>
            <a href="#about" class="w3-bar-item w3-button w3-hide-small w3-large w3-hover-white" style="width:25%"><i class="fa fa-user"></i> ABOUT</a>
            <a href="#portfolio" class="w3-bar-item w3-button w3-hide-small w3-large w3-hover-white" style="width:25%"><i class="fa fa-th"></i> PORTFOLIO</a>
            <a href="#contact" class="w3-bar-item w3-button w3-hide-small w3-large w3-hover-white" style="width:25%"><i class="fa fa-envelope"></i> CONTACT</a>
            <!--<a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-red">
              <i class="fa fa-search"></i>
            </a>-->
          </div>
            
            <!-- Navbar on small screens -->
            <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
              <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
              <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">PORTFOLIO</a>
              <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
              <!--<a href="#" class="w3-bar-item w3-button">SEARCH</a>-->
            </div>
            
        </div>  
        
        
        
        <header class="w3-container w3-cyan w3-center"" style="margin-top: 43px" id="home">
          <h1 class="w3-xxxlarge w3-text-white">My Resume</h1>  
        </header>    
        
        <!-- Start page container-->
        <div class="w3-container w3-margin-top" style="max-width:1400px;">
            
             <!-- The Grid -->
             <div class="w3-row-padding">
                 
                 <!-- Left Column -->
                 <div class="w3-third">
                     <div class="w3-white w3-text-grey w3-card-4">
                         <div class="w3-display-container">
                             <img src="images/mypic.jpg" style="width:100%" alt="Mypic">
                             <div class="w3-display-bottomleft w3-container w3-text-white">
                                 <h2>Tushar Bhardwaj,&nbsp;21</h2>
                             </div>
                         </div>
                         
                         
                         <div class="w3-container">
                            <h1 class="w3-text-grey w3-padding-16" id="about"><i class="fa fa-user fa-fw w3-margin-right w3-xxlarge w3-text-cyan"></i>Personal Info</h1><hr>
                            <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-xlarge w3-text-cyan"></i>Student</p>
                            <p><i class="fa fa-home fa-fw w3-margin-right w3-xlarge w3-text-cyan"></i>New Delhi, India</p>
                            <p><i class="fa fa-envelope fa-fw w3-margin-right w3-xlarge w3-text-cyan"></i>kvishalbhardwaj@gmail.com</p>
                            <p><i class="fa fa-phone fa-fw w3-margin-right w3-xlarge w3-text-cyan"></i>9871358315</p>
                            <hr>
                            
                            
                            <p class="w3-xlarge"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-cyan"></i>Interests</b></p>
                            <p>Calesthenics, Workout</p>
                            <div class="w3-light-grey w3-round-xlarge w3-small">
                              <div class="w3-container w3-center w3-round-xlarge w3-cyan" style="width:95%">95%</div>
                            </div>
                            <p>Taekwondo, Athletics</p>
                            <div class="w3-light-grey w3-round-xlarge w3-small">
                              <div class="w3-container w3-center w3-round-xlarge w3-cyan" style="width:90%">90%</div>
                            </div>
                            <p>Travelling</p>
                            <div class="w3-light-grey w3-round-xlarge w3-small">
                              <div class="w3-container w3-center w3-round-xlarge w3-cyan" style="width:85%">85%</div>
                            </div>
                            <p>Listening Music</p>
                            <div class="w3-light-grey w3-round-xlarge w3-small">
                              <div class="w3-container w3-center w3-round-xlarge w3-cyan" style="width:75%">75%</div>
                            </div>
                            <hr>
                            
                            
                            <p class="w3-xlarge"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-cyan"></i>Languages</b></p>
                            <p>Hindi</p>
                            <div class="w3-light-grey w3-round-xlarge">
                              <div class="w3-round-xlarge w3-cyan" style="height:20px;width:100%"></div>
                            </div>
                            <p>English</p>
                            <div class="w3-light-grey w3-round-xlarge">
                              <div class="w3-round-xlarge w3-cyan" style="height:20px;width:85%"></div>
                            </div>
                            <p>Hinglish</p>
                            <div class="w3-light-grey w3-round-xlarge">
                              <div class="w3-round-xlarge w3-cyan" style="height:20px;width:80%"></div>
                            </div>
                            <br>
                         </div>
                     </div>
                     <br>
                 </div>    
                     
                 <!-- Right Column -->
                 <div class="w3-twothird">
                         
                    <div class="w3-container w3-card-2 w3-white w3-margin-bottom" id="portfolio">
                        <h1 class="w3-text-grey w3-padding-32"><i class="fa fa-pencil fa-fw w3-margin-right w3-xxlarge w3-text-cyan"></i>Education</h1>
                        <div class="w3-container">
                            <h4 class="w3-opacity"><b>Bachelor of Technology(B.tech),&nbsp; Information Technology(2014 - 2018)</b></h4>
                        <h6 class="w3-text-cyan"><i class="fa fa-calendar fa-fw w3-margin-right"></i>july 2015 - June 2018</h6>
                        <p>Ajay Kumar Garg Engineering College<br>APJ Abdul Kalam Technical University<br>Uttar Pradesh<br>201005<br><br>CGPA : 7.4/10</p>
                         <hr>
                        </div>
                    
                        <div class="w3-container">
                            <h4 class="w3-opacity"><b>XII (Senior Secondary),&nbsp; Science</b></h4>
                        <h6 class="w3-text-cyan"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Year of Completion: 2014</h6>
                        <p>Central Board of Secondary Education (CBSE Board)<br>Everest Public School,Shalimar Garden<br>Sahibabad,Ghaziabad<br>Uttar Pradesh<br><br>Percentage : 86%</p>
                        <hr>
                        </div>
                    
                        <div class="w3-container">
                         <h4 class="w3-opacity"><b>X(Secondary)</b></h4>
                         <h6 class="w3-text-cyan"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Year of Completion: 2012</h6>
                         <p>Central Board of Secondary Education (CBSE Board)<br>Everest Public School,Shalimar Garden<br>Sahibabad,Ghaziabad<br>Uttar Pradesh<br><br>CGPA : 10.0/10.0</p><br>
                        </div>
                    </div>
                    
                         
                    
                     <div class="w3-container w3-card-2 w3-white w3-margin-bottom">
                        <h1 class="w3-text-grey w3-padding-32"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-cyan"></i>Work Experience</h1>
                        <div class="w3-container">
                          <h4 class="w3-opacity"><b>Web Developer - Defence Scientific Information & Documentation Centre(DESIDOC) </b></h4>
                          <h6 class="w3-text-cyan"><i class="fa fa-calendar fa-fw w3-margin-right"></i>June 2017 - <span class="w3-tag w3-cyan w3-round"><i>Current</i></span></h6>
                          <p>Working as a web developer during summer internship for desidoc publications.</p>
                          <br>
                        </div>
                     </div>
                         
                    
                     <div class="w3-container w3-card-2 w3-white w3-margin-bottom">
                        <h1 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-cyan"></i>My Expertise</h1>
                        <div class="w3-container">
                          <h4 class="w3-text-grey"><i class="fa fa-desktop fa-fw w3-margin-right w3-text-cyan"></i><b>Web Design</b></h4>
                          <p>Responsive and creative web designs using latest technologies.</p>
                          <hr>
                        </div>
                        <div class="w3-container">
                          <h4 class="w3-text-grey"><i class="fa fa-codepen fa-fw w3-margin-right w3-text-cyan"></i><b>Web Development</b></h4>
                          <p>Back end development using PHP & Javascript through latest technologies.</p>
                          <br>
                        </div>
                        
                     </div>
                 
                 </div>
             </div>     
                         
                        
             
                <div class="w3-container">

                       <div class="w3-row w3-margin-top w3-card-4 ">

                           <div class="w3-quarter w3-theme-l3 w3-padding-48 w3-container w3-cyan w3-mobile">
                            <h3 class=" w3-text-white w3-xlarge w3-center "><i class="fa fa-trophy fa-fw w3-margin-right"></i>Diligence</h3>  
                           </div>

                           <div class="w3-quarter w3-theme-l2 w3-padding-48 w3-container w3-cyan w3-mobile">
                            <h3 class="w3-text-white w3-xlarge w3-center"><i class="fa fa-lightbulb-o fa-fw w3-margin-right"></i>Creative</h3>  
                           </div>

                           <div class="w3-quarter w3-theme-l1 w3-padding-48 w3-container w3-cyan w3-mobile">
                            <h3 class="w3-text-white w3-xlarge w3-center"><i class="fa fa-handshake-o fa-fw w3-margin-right"></i>Friendly</h3>  
                           </div>

                           <div class="w3-quarter w3-theme w3-padding-48 w3-container w3-cyan w3-mobile">
                            <h3 class=" w3-text-white  w3-xlarge w3-center"><i class="fa fa-heart fa-fw w3-margin-right"></i>Humorist</h3>  
                           </div>

                       </div>

                       <div class="w3-row w3-card-4 w3-theme ">

                           <div class="w3-quarter w3-theme-d1 w3-padding-48 w3-container w3-cyan w3-mobile">
                            <h3 class="w3-text-white w3-xlarge w3-center"><i class="fa fa-book fa-fw w3-margin-right"></i>Quick Learner</h3>  
                           </div>

                           <div class="w3-quarter w3-theme-d2 w3-padding-48 w3-container w3-cyan w3-mobile">
                            <h3 class="w3-text-white w3-xlarge w3-center"><i class="fa fa-hourglass-2 fa-fw w3-margin-right"></i>Responsible</h3>  
                           </div>

                           <div class="w3-quarter w3-theme-d3 w3-padding-48 w3-container w3-cyan w3-mobile">
                            <h3 class="w3-text-white  w3-xlarge w3-center"><i class="fa fa-thumbs-o-up fa-fw w3-margin-right"></i>Self Confident</h3>  
                           </div>

                           <div class="w3-quarter w3-theme-d4 w3-padding-48 w3-container w3-cyan w3-mobile">
                            <h3 class=" w3-text-white w3-xlarge w3-center"><i class="fa fa-asterisk fa-fw w3-margin-right"></i>Self Motivating</h3>  
                           </div>

                       </div>
                </div>
        
                 
             
             
            
             
             
             <div class="w3-row-padding"> 
                 <!-- Left Column -->
                 <div class="w3-third ">
                         
                    <div class="w3-container w3-card-2 w3-white w3-margin-top w3-margin-bottom">
                        <h1 class="w3-text-grey w3-padding-16"><i class="fa fa-code fa-fw w3-margin-right w3-xxlarge w3-text-cyan"></i>Languages</h1>
                        <hr>
                        <div class="w3-container">
                            <div class="w3-panel w3-leftbar w3-rightbar w3-bottombar w3-border-theme  w3-text-grey">
                                <h3>C&nbsp;/&nbsp;C++</h3>
                            </div>   
                            
                             <div class="w3-panel w3-leftbar w3-rightbar w3-bottombar w3-border-theme  w3-text-grey">
                                <h3>PHP</h3>
                            </div>
                            
                            <div class="w3-panel w3-leftbar w3-rightbar w3-bottombar w3-border-theme  w3-text-grey">
                                <h3>Javascript</h3>
                            </div>
                            
                            <div class="w3-panel w3-leftbar w3-rightbar w3-bottombar w3-border-theme  w3-text-grey">
                                <h3>Java</h3>
                            </div>
                            
                        </div>
                    </div>
                 </div>    
                        
                 <!-- Middle Column -->
                 <div class="w3-third">
                     <div class="w3-white w3-text-grey w3-card-4 w3-margin-top">
                        <img src="images/programmers.jpg" style="width:100%" alt="pic1">
                        <div class="w3-container">
                            <img src="images/img.png" style="width:100%" alt="pic2">
                        </div>
                     </div>   
                 </div> 
                 
                 <!-- Right Column -->
                 <div class="w3-third">
                   
                    <div class="w3-container w3-card-2 w3-white w3-margin-top w3-margin-bottom">
                        <h1 class="w3-text-grey w3-padding-16"><i class="fa fa-asterisk fa-fw w3-margin-right w3-xxlarge w3-text-cyan"></i>Skills</h1>
                        <hr>
                        <div class="w3-container">
                            <div class="w3-panel w3-leftbar w3-rightbar w3-bottombar w3-border-theme  w3-text-grey">
                                <h3>HTML,&nbsp;CSS,&nbsp;Bootstrap</h3>
                            </div>   
                            
                             <div class="w3-panel w3-leftbar w3-rightbar w3-bottombar w3-border-theme  w3-text-grey">
                                <h3>MySql</h3>
                            </div>
                            
                            <div class="w3-panel w3-leftbar w3-rightbar w3-bottombar w3-border-theme  w3-text-grey">
                                <h3>Javascript</h3>
                            </div>
                            
                            <div class="w3-panel w3-leftbar w3-rightbar w3-bottombar w3-border-theme  w3-text-grey">
                                <h3>Data Structures, Algorithms</h3>
                            </div>
                            
                        </div>
                    </div>
                 </div> 
                 
             </div> 
             
             
             <!--Contact section-->
             <div class="w3-container" id="contact">
                 <div class="w3-container w3-padding-32 w3-black w3-card-2">
                     <h1 class="w3-xxxlarge w3-padding-large"><i class="fa fa-connectdevelop fa-fw w3-margin-right"></i>Contact</h1>
                     <hr>
                     <div class="w3-section w3-padding-large">
                        <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> New Delhi, India</p>
                        <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Phone: +91 9871358315</p>
                        <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: kvishalbhardwaj@gmail.com</p>
                     </div>
                     <br>
                     <p class="w3-padding-large w3-large">Lets get in touch. Send me a message:</p>
                     
                        <form action="/action_page.php" target="_blank">
                            <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
                            <p><input class="w3-input w3-padding-16" type="email" placeholder="Email" required name="Email"></p>
                            <p><input class="w3-input w3-padding-16" type="text" placeholder="Subject" required name="Subject"></p>
                            <p><input class="w3-input w3-padding-16" type="text" placeholder="Message" required name="Message"></p>
                            <p>
                              <button class="w3-button w3-light-grey w3-padding-large" type="submit">
                                <i class="fa fa-paper-plane"></i> SEND MESSAGE
                              </button>
                              <button class="w3-button w3-light-grey w3-padding-large w3-right" type="reset">RESET
                              </button>
                            </p>
                        </form>
                 </div>
             </div>
             
        <!--End page container-->     
        </div>   
        
             
        
        <footer class="w3-container w3-cyan w3-center w3-margin-top">
            <a href="#home" class="w3-button w3-margin-top w3-black"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
            <h6>Find me on social media.</h6>
            <a href="https://www.facebook.com/tushartkd123" target="_blank"><i class="fa fa-facebook-official w3-xlarge w3-hover-opacity"></i><a>&nbsp;
            <a href="https://www.instagram.com/tushar_bhardwaj01" target="_blank"><i class="fa fa-instagram w3-xlarge w3-hover-opacity"></i></a>&nbsp;
            <a href="#"><i class="fa fa-snapchat w3-xlarge w3-hover-opacity"></i></a>&nbsp;
            <a href="#"><i class="fa fa-pinterest-p w3-xlarge w3-hover-opacity"></i></a>&nbsp;
            <a href="#"><i class="fa fa-twitter w3-xlarge w3-hover-opacity"></i></a>&nbsp;
            <a href="#"><i class="fa fa-linkedin w3-xlarge w3-hover-opacity"></i></a>&nbsp;
            <br>
            <br>
        </footer>
        
        
        
        <script>
        // Change style of navbar on scroll
                window.onscroll = function() {myFunction();};
                function myFunction() {
                    var navbar = document.getElementById("myNavbar");
                    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                        navbar.className = "w3-bar" + " w3-card-2" + " w3-animate-top" + " w3-black";
                    } else {
                        navbar.className = navbar.className.replace(" w3-card-2 w3-animate-top w3-white", "");
                    }
                }

                // Used to toggle the menu on small screens when clicking on the menu button
                function toggleFunction() {
                    var x = document.getElementById("navDemo");
                    if (x.className.indexOf("w3-show") === -1) {
                        x.className += " w3-show";
                    } else {
                        x.className = x.className.replace(" w3-show", "");
                    }
                }
        </script>

        
        <?php
        // put your code here
        ?>
    </body>
</html>
