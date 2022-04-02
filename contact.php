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
          <div class="col-12 col-lg-5  mx-auto  mb-5 mb-lg-0 wow fadeInUp  " data-wow-delay="0.4s">
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
                    <p class="info-text"> <a class="tel link" href="tel:+12068996316">(02) (206) 899 – 6316 Call or Text</a></p>
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
          <div class="col-12 col-lg-7  mx-auto wow fadeInUp  " data-wow-delay="0.2s">
            <div class="contact-form-panel">
              <div class="sec-heading  ">
                <div class="content-area">
                  <h2 class=" title    wow fadeInUp" data-wow-delay=".4s"><span class="hollow-text ">Keep</span> in touch</h2>
                  <p class="subtitle   wow fadeInUp " data-wow-delay=".6s">We Will answer your questions as soon as possible</p>
                  <div class=" bottom-line    wow fadeInUp" data-wow-delay=".7s"></div>
                </div>
              </div>
              <div class="custom-form-area input-boxed"> 
                <!--Form To have user messages-->
                <form class="main-form" id="contact-us-form" action="" method="post"><span class="done-msg"></span>
                  <div class="row ">
                    <div class="col-12">
                      <div class="input-wrapper">
                        <input class="text-input" id="user-name" name="UserName" type="text">
                        <label class="input-label" for="user-name"> Name <span class="req">*</span></label><span class="b-border"></span><span class="error-msg"></span>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="input-wrapper">
                        <input class="text-input" id="user-email" name="UserEmail" type="email">
                        <label class="input-label" for="user-email"> E-mail <span class="req">*</span></label><span class="b-border"></span><span class="error-msg"></span>
                      </div>
                    </div>
                    <div class="col-12 ">
                      <div class="input-wrapper">
                        <input class="text-input" id="msg-subject" name="phone" type="text">
                        <label class="input-label" for="msg-subject"> Phone Number <span class="req">*</span></label><span class="b-border"></span><span class="error-msg"></span>
                      </div>
                    </div>
                    <div class="col-12 ">
                      <div class="   input-wrapper">
                        <textarea class=" text-input" id="msg-text" name="message"></textarea>
                        <label class="input-label" for="msg-text"> your message <span class="req">*</span></label><span class="b-border"></span><i></i><span class="error-msg"></span>
                      </div>
                    </div>
                    <div class="col-12 submit-wrapper">
                      <button class=" btn-solid" id="submit-btn" type="submit" name="UserSubmit">Send your message</button>
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
<?php include "include/footer.php";?>