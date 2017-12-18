
<?php session_start(); 
if(!empty($_SESSION)){?>
<input type='hidden' id='u' value='<?php echo $_SESSION['sessData']['id'];?>'> 
<?php }?>
<?php include 'header.php';?>
<section class="mbr-section content5 cid-qBYynVzSPo mbr-parallax-background" id="content5-a" data-rv-view="733">
    
        <div class="container">
            <div class="media-container-row">
                <div class="title col-12 col-md-8">
                    <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-2"><span style="font-weight: normal;">OUR Birthday CRAD THEME</span></h2>
                    <h3 class="mbr-section-subtitle align-center mbr-light mbr-white pb-3 mbr-fonts-style display-5">
                        Birthday-Card</h3>
                    
                    
                </div>
            </div>
        </div>
    </section>

<section class="features16 cid-qBYxJyKL2J" id="features16-9" data-rv-view="721">
   
    <div class="container align-center">
        
        
        <div class="row media-row">
            
        <div class="team-item col-lg-4 col-md-8">
                <div class="item-image">
                    <a href="invition/inviview.php"><img src="assets/images/merrige-sadibyah.jpg" alt="" title="" media-simple="true"></a>
                </div>
                <div class="item-caption py-3">
                    <div class="item-name px-2">
                        <p >

 <a href="invition/inviview.php">&emsp; Birthday  Theme 1</a>
 <br>
                        
 <!-- <li>   <a href="wedding2/cardform.php  ">Create your Theam </a> </li> -->

<br/>

 </div>
                    
            </div>
            </div> 
            
                   <div class="team-item col-lg-4 col-md-8">
                   <div class="item-image">
                    <a href="theme/w2/index.html"><img src="assets/images/marriage3.jpg" alt="" title="" media-simple="true"></a>
                    </div>
                   <div class="item-caption py-3">
                    <div class="item-name px-2">
                    <p >
                    
                     <a href="theme/w2/index.html">&emsp; Birthday  Theme 2</a>
                     <br>
                    </div>
                    <br>

                   </div>
                    </div>
              
               
                   <div class="team-item col-lg-4 col-md-8">
                    <div class="item-image">
                    <a href="theme/w3/index.html"><img src="assets/images/married.jpg" alt="" title="" media-simple="true"></a>
                    </div>
                    <div class="item-caption py-3">
 

                    <a href="theme/w3/index.html">&emsp; Birthday  Theme 3</a> 
                    <br/>
                    <br>



                </div>
                </div>
            
               <div class="team-item col-lg-4 col-md-8">
                <div class="item-image">
                <a href="theme/w4/index.html"><img src="assets/images/Love-Marriage-1.jpg" alt="" title="" media-simple="true"></a>
                </div>
                <div class="item-caption py-3">
                    <div class="item-name px-2">
                        <p class="mbr-fonts-style display-5"></p>

                    <a href="theme/w4/index.html">&emsp; Birthday  Theme 4</a>
                    </div><br/>
 
 

             
             
</div></div></div></div>


</section>  


<?php include 'footer.php';?>

<script type="text/javascript">
function get_val(){

    var user = $('#u').val();
   // alert(user);
    if(typeof user === "undefined"){
        window.open('login/index.php',"_self");
    }else{
        window.open('wedding2/cardform.php',"_self");
    }
}


function bday_val(){
    

    var user = $('#u').val();
   // alert(user);
    if(typeof user === "undefined"){
        window.open('login/index.php',"_self");
    }else{
        window.open('invition/cardbirthday.php',"_self");
    }

}
</script>
  