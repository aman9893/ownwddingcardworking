<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v4.4.1, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.4.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../assets/images/bday-255x255.png" type="image/x-icon">
  <meta name="description" content="Site Builder Description">
  <title>login.php</title>
  <link rel="stylesheet" href="../assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="../assets/tether/tether.min.css">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="../assets/socicon/css/styles.css">
  <link rel="stylesheet" href="../assets/dropdown/css/style.css">
  <link rel="stylesheet" href="../assets/theme/css/style.css">
  <link rel="stylesheet" href="../assets/mobirise/css/mbr-additional.css" type="text/css">


  
</head>
<body>
<section class="menu cid-qBYsUNZ1yZ" once="menu" id="menu2-1" data-rv-view="701">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="../index.php">
                       <h4> Event-Card </h4>
                    </a>
                </span>
                
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
        <li class="nav-item"> <a class="nav-link link text-black display-4" href="../index.php">Home</a> </li>
         <li class="nav-item"><a class="nav-link link text-black display-4" href="../Aboutus.html">Aboutus</a></li>
         <li class="nav-item"><a class="nav-link link text-black display-4" href="../contact.html">Contact us</a></li>
         <li class="nav-item"><a class="nav-link link text-black display-4" href="../term.html">Terms </a> </li>
         <li class="nav-item"> <a class="nav-link link text-black display-4" href="../login/index.php">Login&Register</a></li>
       

             <a class="btn btn-sm btn-primary display-4" href="mailto:xyz@gmail.com"><span class="mbri-letter mbr-iconfont mbr-iconfont-btn"></span>
                    xyz@gmail.com</a> <a class="btn btn-sm btn-primary display-4" href="tel:+1-234-567-8901">
                    <span class="btn-icon mbri-mobile mbr-iconfont mbr-iconfont-btn">
                    </span>
                    +1-234-567-8901
                </a></div>
        </div>
    </nav>
</section>
<?php
session_start();
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}
?>
<div class="container">
    <?php
        if(!empty($sessData['userLoggedIn']) && !empty($sessData['userID'])){
            include '../database/user.php';
            $user = new User();
            $conditions['where'] = array(
                'id' => $sessData['userID'],
            );
            $conditions['return_type'] = 'single';
            $userData = $user->getRows($conditions);
    ?>
          


    </div>

    <div class="container">
    <div class="span3 well">
        <center>
        <a href="#aboutModal" data-toggle="modal" data-target="#myModal"><img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R" name="aboutme" width="140" height="140" class="img-circle"></a>
        <h2>Welcome <?php echo $userData['first_name']; ?>!</h2>
            <p>  click on image </p>
 
<br> 

<hr>
        <b>  <h7><a href="../wedding2/cardform.php">   .Create Your wedding-Card  </a></h7></b>
        <br>
        <b>  <h7><a href="../invition/cardbirthday.php">.Create Your invition-Card  </a></h7></b>
		</center>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title" id="myModalLabel">  <?php echo $userData['first_name']; ?> Profile </h4>
                    </div>
                <div class="modal-body">
                    <center>
                    <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
                 
                  
                    <h3><b>Name: </b><?php echo $userData['first_name'].' '.$userData['last_name']; ?></h3>
                   <p><b>Email: </b><?php echo $userData['email']; ?></p>
                   <p><b>Phone: </b><?php echo $userData['phone']; ?></p>
        </center>
                    <center>
                
        <b>  <h5><a href="../wedding2/cardform.php">   Create Your wedding-Card  </a></h5></b>
        <b>  <h5><a href="../invition/cardbirthday.php">Create Your invition-Card  </a></h5></b>
                    </center>
                </div>
                <div class="modal-footer">
                    <center>
    
                      
                     <h5 class=class="text-right"> <a href="userAccount.php?logoutSubmit=1" class="logout">Logout</a> </h5>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>




    <?php }else{ ?>
    <h2>Login to Your Account</h2>
    <?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
    <div class="regisFrm">
        <form action="userAccount.php" method="post">

<div class="form-group">

  <label for="usr">Email:</label>
  <input type="text" class="form-control" id="usr"  name="email" placeholder="EMAIL" required="" >
</div>
<div class="form-group">
  <label for="pwd">Password:</label>
  <input type="password" class="form-control" id="pwd" name="password" placeholder="PASSWORD"required="" >
</div>
    

         <input type="submit" class="btn btn-primary" name="loginSubmit" value="LOGIN" >

            </div>
        </form>
        <p>Don't have an account? <a href="registration.php">Register</a></p>

     

    </div>
    <?php }  ?>
</div>



<br> 
<br>

<section class="engine"><a href="#"></a></section><section class="footer4 cid-qBZ3np7VFj" id="footer4-15" data-rv-view="823">

    <div class="container">
        <div class="media-container-row content mbr-white">
            <div class="col-md-3 col-sm-4">
                <div class="mb-3 img-logo">
                    <a href="../index.php">
                        <img src="../assets/images/bday-255x255.png" alt="Mobirise" title="" media-simple="true">
                    </a>
                </div>
                <p class="mb-3 mbr-fonts-style foot-title display-7">EventCard</p>
                <p class="mbr-text mbr-fonts-style mbr-links-column display-7">
                    <a href="#" class="text-white">About Us</a>
                    <br><a href="#" class="text-white">Services</a>
                    <br><a href="#" class="text-white">Selected Work</a>
                    <br><a href="#" class="text-white">Get In Touch</a>
                </p>
            </div>
            <div class="col-md-4 col-sm-8">
                <p class="mb-4 foot-title mbr-fonts-style display-7">Address:</p>
                <p class="mbr-text mbr-fonts-style foot-text display-7">Sydney NSW 2052, Indore
<br>+61 2 9385 1000
<br> hello@brightuniversity.edu<br><br></p>
            </div>
            <div class="col-md-4 offset-md-1 col-sm-12">
                <p class="mb-4 foot-title mbr-fonts-style display-7">
                    SUBSCRIBE
                </p>
                <p class="mbr-text mbr-fonts-style form-text display-7">
                    Get monthly updates and free resources.
                </p>
                <div class="media-container-column" data-form-type="formoid">
                    <div data-form-alert="" hidden="" class="align-center">
                        Thanks for filling out the form!
                    </div>

                    <form class="form-inline" action="https://mobirise.com/" method="post" data-form-title="Mobirise Form">
                        <input type="hidden" value="RgXcGRBiQ8lxYRwS2OHHUkNFpi0N6MX/5KBcc3koVigxZV5zaCkX+e6PVqmSFCUFErVCbo9+BSBSdwAbl8miBnoYbfqUZVmwE1iFrQ4+r1uLwGNr6B152JEIQKS8IvYc" data-form-email="true">
                        <div class="form-group">
                            <input type="email" class="form-control input-sm input-inverse my-2" name="email" required="" data-form-field="Email" placeholder="Email" id="email-footer4-15">
                        </div>
                        <div class="input-group-btn m-2">
                            <button href="" class="btn btn-primary display-4" type="submit" role="button">Subscribe</button>
                        </div>
                    </form>
                </div>
                <p class="mb-4 mbr-fonts-style foot-title display-7">
                    CONNECT WITH US
                </p>
                <div class="social-list pl-0 mb-0">
                        <div class="soc-item">
                            <a href="https://twitter.com/mobirise" target="_blank">
                                <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social" media-simple="true"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                                <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social" media-simple="true"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.youtube.com/c/mobirise" target="_blank">
                                <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social" media-simple="true"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://instagram.com/mobirise" target="_blank">
                                <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social" media-simple="true"></span>
                            </a>
                        </div>
                        
                        
                </div>
            </div>
        </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-sm-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row mbr-white">
                <div class="col-sm-12 copyright">
                    <p class="mbr-text mbr-fonts-style display-7">
                        © Copyright 2017 webdeskey - All Rights Reserved
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


  <script src="../assets/web/assets/jquery/jquery.min.js"></script>
  <script src="../assets/popper/popper.min.js"></script>
  <script src="../assets/tether/tether.min.js"></script>
  <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="../assets/dropdown/js/script.min.js"></script>
  <script src="../assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="../assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="../assets/theme/js/script.js"></script>
  <script src="../assets/formoid/formoid.min.js"></script>
  
  
</body>
</html>