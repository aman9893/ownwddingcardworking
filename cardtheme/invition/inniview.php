
<?php
session_start();
include('../../database/config.php');
	?>
<?php 

	if(isset($_GET['delete_id']))
	{
	
		// it will delete an actual record from db
        $stmt_delete = $DB_con->prepare('DELETE FROM tbl_users WHERE user_id =:user_id');
		$stmt_delete->bindParam(':user_id',$_GET['delete_id']);
		$stmt_delete->execute();
		
		header("Location: index.php");
	}

?>

<?php
	
  

	//$stmt = $DB_con->prepare('SELECT * FROM tbl_users ORDER BY userID DESC limit 0,1');
    // echo 'SELECT * FROM tbl_users INNER JOIN users ON tbl_users.userID=users.id';
     



  $stmt = $DB_con->prepare("SELECT * FROM tbl_users  order by tbl_users.id DESC limit 1") ;




	$stmt->execute();
	
	if($stmt->rowCount() > 0)
	{
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
			?>


<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v4.4.1, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.4.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/download-3-225x225.png" type="image/x-icon">
  <meta name="description" content="">
  <title>Home</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise-gallery/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
<section class="menu cid-qCUXoZFzq3" once="menu" id="menu1-0" data-rv-view="200">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                    <a href="index.html">
                         <img src="assets/images/download-3-225x225.png" alt="Mobirise" title="" media-simple="true" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="index.html">
                        INVITATION
                    </a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-white display-4" href="view.php">
                        
                        Home
                    </a>
                </li><li class="nav-item"><a class="nav-link link text-white display-4" href="#test1">
                        
                        Invitation
                    </a></li><li class="nav-item"><a class="nav-link link text-white display-4" href="#test2">
                        
                        Family </a></li><li class="nav-item"><a class="nav-link link text-white display-4" href="#test3">
                        
                        Card
                    </a></li><li class="nav-item"><a class="nav-link link text-white display-4" href="#test4">
                        
                        Contact Info
                    </a></li>
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="#test5">
                        
                        Rsvp</a>
                </li></ul>
            
        </div>
    </nav>
</section>

<section class="engine"><a href="#">make a website for free</a></section><section class="cid-qCUYb1lprp" id="header2-3" data-rv-view="202">

    

    <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(118, 118, 118);"></div>

    <div class="container align-center">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1"><?php echo $groom_name ?></h1>

                <h3> <?php echo $banner_message ?> </h3>
                
                <p class="mbr-text pb-3 mbr-fonts-style display-5">We inviting you and your family on  <?php echo $time ?>
                </p>
                
            </div>
        </div>
    </div>
    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
</section>

<section class="mbr-section content4 cid-qCVkP7Oi2N" id="content4-k" data-rv-view="205">

    

    <div class="container"  id="test1" >
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-2"><strong>Invitation
                </strong></h2>
                
                
            </div>
        </div>
    </div>
</section>

<section class="testimonials2 cid-qCUYmUis7z" id="testimonials2-5" data-rv-view="207">

    

    

    <div class="container"  >
        <div class="media-container-row">
            <div class="mbr-figure pr-lg-5" style="width: 65%;">
            <img src="<?php echo '../wedding1/images/'.$groom_photo; ?>" width="100%" height="100%"  title="" media-simple="true"/>
            </div>
            <div class="media-content px-3 align-self-center mbr-white py-2">
                    <p class="mbr-text testimonial-text mbr-fonts-style display-7">
                       We request the honor of your presence at the  <?php echo $invitation_message ?> 
                    </p>
                    <p class="mbr-author-name pt-4 mb-2 mbr-fonts-style display-7">
                       Sincerely,	
                    </p>
                    <p class="mbr-author-desc mbr-fonts-style display-7">Smt.<?php echo $groommother_name ?>
                     &nbsp;&amp;&nbsp;<?php echo $groomfather_name ?> &nbsp; &nbsp;<br></p>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section info2 cid-qCVfrz9ZXm" id="info2-j" data-rv-view="210">

    

    

    <div class="container">
        <div class="row main justify-content-center">
            <div class="media-container-column col-12 col-lg-3 col-md-4">
                
            </div>
            <div class="media-container-column title col-12 col-lg-7 col-md-6">
                <h2 class="align-right mbr-bold mbr-white pb-3 mbr-fonts-style display-2"><span style="font-weight: normal;">&nbsp;Function and Place details</span></h2>
                <h3 class="mbr-section-subtitle align-right mbr-light mbr-white mbr-fonts-style display-5">
<div><?php echo $marriage_placeaddress ?>
<br>
<?php echo $marriage_place ?>
</div><div><?php echo $phone_one?> <?php echo $phone_two ?></div></h3>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section content4 cid-qCUYBgc9Ck" id="content4-6" data-rv-view="213">

    

    <div class="container"  id="test3">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-2"><strong>
                    Card Images
                </strong></h2>
                
                
            </div>
        </div>
    </div>
</section>

<section class="mbr-gallery mbr-slider-carousel cid-qCUYJsIJcA" id="gallery3-7" data-rv-view="215"  >

    

    <div>
        <div><!-- Filter --><!-- Gallery --><div class="mbr-gallery-row">
            <div class="mbr-gallery-layout-default"><div><div><div class="mbr-gallery-item mbr-gallery-item--p3" data-video-url="false" data-tags="Awesome">
                <div href="#lb-gallery3-7" data-slide-to="0" data-toggle="modal">
                    
                <img src="<?php echo '../wedding1/images/'.$card_upload ; ?>" width="100%" height="216px"  title="">


                <span class="icon-focus"></span></div></div>
                
                <div class="mbr-gallery-item mbr-gallery-item--p3" data-video-url="false" data-tags="Responsive">
                    
                
                <div href="#lb-gallery3-7" data-slide-to="1" data-toggle="modal">

                <img src="<?php echo '../wedding1/images/'.$card_img2 ; ?>" width="100%" height="216px%"  title="" media-simple="true">
                
                
                <span class="icon-focus"></span></div></div><div class="mbr-gallery-item mbr-gallery-item--p3" data-video-url="false" data-tags="Creative"><div href="#lb-gallery3-7" data-slide-to="2" data-toggle="modal">
                    
                <img src="<?php echo '../wedding1/images/'.$card_img3 ; ?>" width="100%" height="216px%"  title="" media-simple="true">
                
                
                <span class="icon-focus"></span></div></div><div class="mbr-gallery-item mbr-gallery-item--p3" data-video-url="false" data-tags="Animated"><div href="#lb-gallery3-7" data-slide-to="3" data-toggle="modal">
                    
                <img src="<?php echo '../wedding1/images/'.$card_img4 ; ?>" width="100%" height="216px%"  title="" media-simple="true">
                
                
                <span class="icon-focus"></span></div></div></div></div><div class="clearfix"></div></div></div><!-- Lightbox --><div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery3-7"><div class="modal-dialog"><div class="modal-content"><div class="modal-body"><div class="carousel-inner"><div class="carousel-item"><img src="assets/images/mbr-1692x1080.jpg" alt=""></div><div class="carousel-item"><img src="assets/images/mbr-1631x1080.jpg" alt=""></div><div class="carousel-item active"><img src="assets/images/mbr-1620x1080.jpg" alt=""></div><div class="carousel-item"><img src="assets/images/mbr-1-1618x1080.jpg" alt=""></div></div><a class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#lb-gallery3-7"><span class="mbri-left mbr-iconfont" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control carousel-control-next" role="button" data-slide="next" href="#lb-gallery3-7"><span class="mbri-right mbr-iconfont" aria-hidden="true"></span><span class="sr-only">Next</span></a><a class="close" href="#" role="button" data-dismiss="modal"><span class="sr-only">Close</span></a></div></div></div></div></div>
    </div>

</section>

<section class="mbr-section content4 cid-qCV2KBawXa" id="content4-h" data-rv-view="234">

    

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-2"><strong>Family Members&nbsp;</strong></h2>
                
                
            </div>
        </div>
    </div>
</section>

<section class="features4 cid-qCV2qBueKt" id="features4-f" data-rv-view="236">
    
         

    
    <div class="container" id="test2" >
        <div class="media-container-row">
            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper media-container-row media-container-row">
                    <div class="card-box">
                        <h4 class="card-title pb-3 mbr-fonts-style display-7">Family Member1</h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                        <?php echo $familymember_title ?>
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper media-container-row">
                    <div class="card-box">
                        <h4 class="card-title pb-3 mbr-fonts-style display-7">Family Member2&nbsp;</h4>
                        <p class="mbr-text mbr-fonts-style display-7">   <?php echo $family_members2 ?>-<br></p>
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper media-container-row">
                    <div class="card-box">
                        <h4 class="card-title pb-3 mbr-fonts-style display-7">Family Member3&nbsp;</h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                        <?php echo $family_members3 ?></p>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
</section>

<section class="features4 cid-qCV2Bgv2x2" id="features4-g" data-rv-view="239">
    
         

    
    <div class="container">
        <div class="media-container-row">
            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper media-container-row media-container-row">
                    <div class="card-box">
                        <h4 class="card-title pb-3 mbr-fonts-style display-7">Family Member4&nbsp;</h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                        <?php echo $family_members4 ?>&nbsp;</p>
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper media-container-row">
                    <div class="card-box">
                        <h4 class="card-title pb-3 mbr-fonts-style display-7">Family Member5&nbsp;</h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                        <?php echo $family_members5 ?>&nbsp;</p>
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper media-container-row">
                    <div class="card-box">
                        <h4 class="card-title pb-3 mbr-fonts-style display-7">Family Member6&nbsp;</h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                        <?php echo $familymember6 ?>&nbsp;</p>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
</section>

<section class="mbr-section form1 cid-qCUZIMuR7G" id="form1-9" data-rv-view="242">

    

    
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2"><strong>RSVP</strong></h2>
                
            </div>
        </div>
    </div>
    <div class="container" id="test5">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" data-form-type="formoid">
                    <div data-form-alert="" hidden="">Thanks for filling out the form!</div>
            
                    <form class="mbr-form" action="index.php" method="post" data-form-title="Mobirise Form"><input type="hidden" data-form-email="true" value="sJf+VFSRgVHBMOR4g2iYZ66iuJwBbY1owzxw6QeQjVnH/Z9X4yeERvXBpFQU/oRSK1p7eSVMHkQaYR6CJgNUOxUgAuTMev7yoTXv7hxXRiFSFdS5Ug1TiZvXK1IWexGL">
                        <div class="row row-sm-offset">
                            <div class="col-md-4 multi-horizontal" data-for="name">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="name-form1-9">Name</label>
                                    <input type="text" class="form-control" name="name" data-form-field="Name" required="" id="name-form1-9">
                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" data-for="email">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="email-form1-9">Email</label>
                                    <input type="email" class="form-control" name="email" data-form-field="Email" required="" id="email-form1-9">
                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" data-for="phone">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="phone-form1-9">Phone</label>
                                    <input type="tel" class="form-control" name="phone" data-form-field="Phone" id="phone-form1-9">
                                </div>
                            </div>
                        </div>
                        
            
                        <span class="input-group-btn">
                            <button href="" type="submit" class="btn btn-primary btn-form display-4">SEND FORM</button>
                        </span>
                    </form>
            </div>
        </div>
    </div>
</section>

<section class="cid-qCV0vPepW0" id="footer2-b" data-rv-view="245">

    

    

    <div class="container" id="test4">
        <div class="media-container-row content mbr-white">
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <p class="mbr-text">
                    <strong><?php echo $marriage_place ?></strong>
                    <br>
                 
                    <br>
                    <br><strong>Contacts</strong>
                    <br>
                    <br>Email: <?php echo $email ?>
                    <br>Phone: <?php echo $phone_one ?>
                    <br>Fax:  <?php echo $phone_two ?>
                </p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <p class="mbr-text"><br><br></p>
            </div>
            <div class="col-12 col-md-6">
                <div class="google-map"><iframe frameborder="0" style="border:0"
                 src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0Dx_boXQiwvdz8sJHoYeZNVTdoWONYkU&amp;q=place_id:ChIJn6wOs6lZwokRLKy1iqRcoKw" allowfullscreen=""></iframe></div>
            </div>
        </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-sm-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row mbr-white">
                <div class="col-sm-6 copyright">
                    <p class="mbr-text mbr-fonts-style display-7">@domain.com Copyright ©2017. All rights reserved
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="social-list align-right">
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
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/jquery-mb-vimeo_player/jquery.mb.vimeo_player.js"></script>
  <script src="assets/masonry/masonry.pkgd.min.js"></script>
  <script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/mobirise-gallery/player.min.js"></script>
  <script src="assets/mobirise-gallery/script.js"></script>
  <script src="assets/mobirise-slider-video/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>
  
  
</body>
</html>


			<?php
		}
	}
	else
	{
		?>
        <div class="col-xs-12">
        	<div class="alert alert-warning">
                <span class="glyphicon glyphicon-info-sign"></span> &nbsp; 
                

<div class="jumbotron">

<h1> Plzz Create theme </h1>
    </div>

            </div>
        </div>
        <?php
	}
	
?>
</div>	

