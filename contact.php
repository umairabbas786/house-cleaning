<?php
$msg = '0';
if(isset($_POST['sendmail'])){
    $to = "tuanecleaning@gmail.com";
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $subject = "tuanecleaning";
    $from = $_POST['email'];
    $txt = $_POST['message'];
    $msg = "Name = $name\r\n" . "Phone Number = $phone\r\n" . "Sender = $from\r\n" . "Message = $txt\r\n";
    $headers = "From: info@tuanecleaning.com";
    
    if(mail($to,$subject,$msg,$headers)){
        $msg = "1";
    }
}
?>
<?php include "include/header.php";?>
<?php include "include/nav.php";?>
<!-- Start  Page hero-->
<section class="page-hero d-flex align-items-center" id="page-hero" style="height:60vh!important;">
    <!--Start Video background-->
    <div class="section-video-bg ">
        <!-- <video class="video" src="assets/videos/section-bg-video-1.mp4" autoplay="" muted="" loop=""> </video> -->
        <img src="assets/Images/contact.jpg" class="video" height="500" alt="">
        <div class="overlay-color "></div>
    </div>
    <!--End Video background    -->
    <div class="container">
        <div class="hero-text-area text-center ">
            <div class="row">
                <div class="col-12 col-md-10 col-xl-9 mx-auto">
                    <!--Start of .hero-text-area-->
                    <h1 class="hero-title"><span class="featured-text"> CONTACT US </span></h1>
                    <p class="hero-subtitle">Tuane`s Cleaning</p>
                </div>
                <!--End of .hero-text-area-->
            </div>
        </div>
    </div>
</section>
<!-- End  Page hero-->

<!-- Start  contact-us Section-->
<section class="contact-us  mega-section  pb-0" id="contact-us">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-5  mx-auto  mb-5 mb-lg-0">
            <div class=" contact-info-panel">
              <div class="overlay-pattern-image-bg " data-bg-img="assets/Images/sections-bg-images/pattern-bg.jpg" data-bg-opacity=".25"></div>
              <div class="overlay-color"></div>
              <div class="info-section ">
                <div class="info-panel"><i class="bi bi-geo-alt icon"></i>
                  <div class="info-content">
                    <h6 class="info-title">our locations</h6>
                    <p class="info-text">19406 66TH Avenue W.
Lynnwood, WA – 98036</p>
                  </div>
                </div>
                <div class="info-panel"><i class="bi bi-phone icon"></i>
                  <div class="info-content">
                    <h6 class="info-title">phone numbers</h6>
                    <p class="info-text"> <a class="tel link" href="tel:+12068996316">(206) 899 – 6316 Call or Text</a></p>
                  </div>
                </div>
                <div class="info-panel"><i class="bi bi-envelope icon"></i>
                  <div class="info-content">
                    <h6 class="info-title">Emails</h6>
                    <p class="info-text"> <a class="tel link" href="mailto:tuanecleaning@gmail.com">tuanecleaning@gmail.com</a></p>
                  </div>
                </div>
                <div class="info-panel"><i class="bi bi-globe icon"></i>
                  <div class="info-content">
                    <h6 class="info-title">website</h6>
                    <p class="info-text"> <a class="site link" href="http://tuanecleaning.com/"> http://tuanecleaning.com/</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-7  mx-auto ">
            <div class="contact-form-panel">
              <div class="sec-heading  ">
                <div class="content-area">
                  <h2 class=" title   ">Keep in touch</h2>
                  <p class="subtitle " >We Will answer your questions as soon as possible</p>
                  <div class=" bottom-line   "></div>
                </div>
              </div>
              <div class="custom-form-area input-boxed"> 
                <!--Form To have user messages-->
                <form class="main-form" action="" method="POST">
                    <?php if($msg == 1){?>
                    <span class="done-msg">We Recieved your message!</span>
                    <?php }?>
                  <div class="row ">
                    <div class="col-12">
                      <div class="input-wrapper">
                        <input class="text-input" required id="user-name" name="name" type="text">
                        <label class="input-label" for="user-name"> Name <span class="req">*</span></label><span class="b-border"></span><span class="error-msg"></span>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="input-wrapper">
                        <input class="text-input" required id="user-email" name="email" type="email">
                        <label class="input-label" for="user-email"> E-mail <span class="req">*</span></label><span class="b-border"></span><span class="error-msg"></span>
                      </div>
                    </div>
                    <div class="col-12 ">
                      <div class="input-wrapper">
                        <input class="text-input" required id="msg-subject" name="phone" type="number">
                        <label class="input-label" for="msg-subject"> Phone Number <span class="req">*</span></label><span class="b-border"></span><span class="error-msg"></span>
                      </div>
                    </div>
                    <div class="col-12 ">
                      <div class="   input-wrapper">
                        <textarea class=" text-input" required id="msg-text" name="message"></textarea>
                        <label class="input-label" for="msg-text"> your message <span class="req">*</span></label><span class="b-border"></span><i></i><span class="error-msg"></span>
                      </div>
                    </div>
                    <div class="col-12 submit-wrapper">
                      <button class=" btn-solid" id="submit-btn" type="submit" name="sendmail">Send your message</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End  contact-us Section-->
    <div class="modal fade" id="ignismyModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label=""><span>×</span></button>
             </div>
  
            <div class="modal-body">
               
    <div class="thank-you-pop">
      <img src="http://goactionstations.co.uk/wp-content/uploads/2017/03/Green-Round-Tick.png" alt="">
      <h1>Thank You!</h1>
      <p>Your Email is received and we will contact you soon</p>
     </div>
                 
            </div>
  
        </div>
    </div>
</div>
<?php include "include/footer.php";?>
<script>
<?php 
    if($msg == '1'){
?>
$(document).ready(function() {
 $('.modal').modal("show");
});

<?php }else{?>
$(document).ready(function() {
 $('.modal').modal("hide");
});
<?php }?>
</script>