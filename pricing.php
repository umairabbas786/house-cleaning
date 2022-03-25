<?php include "include/header.php";?>
<?php include "include/nav.php";?>
<!-- Start  Page hero-->
<section class="page-hero d-flex align-items-center" id="page-hero" style="height:70vh!important;">
    <!--Start Video background-->
    <div class="section-video-bg ">
        <!-- <video class="video" src="assets/videos/section-bg-video-1.mp4" autoplay="" muted="" loop=""> </video> -->
        <img src="assets/Images/pricing.jpg" class="video" height="500" alt="">
        <div class="overlay-color "></div>
    </div>
    <!--End Video background    -->
    <div class="container">
        <div class="hero-text-area text-center ">
            <div class="row">
                <div class="col-12 col-md-10 col-xl-9 mx-auto">
                    <!--Start of .hero-text-area-->
                    <h1 class="hero-title"><span class="featured-text"> Pricing
                            Plans </span></h1>
                </div>
                <div class="col-10  col-xl-8 mx-auto">
                    <p class="hero-subtitle">
                        Service pricing for our most popular services. Either book now or send us an estimate request
                        form if you’re not quite sure. Any other services or a la carte items will require a
                        personalized estimate.
                    </p>
                </div>
                <!--End of .hero-text-area-->
            </div>
        </div>
    </div>
</section>
<!-- End  Page hero-->

<!-- Start  about Section-->
<section class="pricing mega-section  dark-cards " id="pricing">
    <div class="container">
        <div class="sec-heading  ">
            <div class="content-area"><span class=" pre-title">pricing
                    plans</span>
                <h2 class=" title"><span class='hollow-text'>affordable</span>
                    pricing plans</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table plan text-white">
                    <thead style="background-color:#08BCE9;">
                        <tr>
                            <th scope="col"># of rooms</th>
                            <th scope="col">Sq. feet</th>
                            <th scope="col">Basic</th>
                            <th scope="col">Deluxe</th>
                            <th scope="col">Special</th>
                        </tr>
                    </thead>
                    <tbody class="row-hover">
                        <tr class="row-2 even">
                            <td class="column-1">1 bed/ 1 bath</td>
                            <td class="column-2">500-800 </td>
                            <td class="column-3">$105-$130</td>
                            <td class="column-4">$312-$416</td>
                            <td class="column-5">$105</td>
                        </tr>
                        <tr class="row-3 odd">
                            <td class="column-1">2 bed/ 1 bath</td>
                            <td class="column-2">500-1000</td>
                            <td class="column-3">$130-$156</td>
                            <td class="column-4">$416-$468</td>
                            <td class="column-5">$105</td>
                        </tr>
                        <tr class="row-4 even">
                            <td class="column-1">2 bed/ 2 bath</td>
                            <td class="column-2">800-1300</td>
                            <td class="column-3">$156-$182</td>
                            <td class="column-4">$468-$572</td>
                            <td class="column-5">$105-$130</td>
                        </tr>
                        <tr class="row-5 odd">
                            <td class="column-1">3 bed/ 2 bath</td>
                            <td class="column-2">1300-1800</td>
                            <td class="column-3">$182-$208</td>
                            <td class="column-4">$546-$624</td>
                            <td class="column-5">$130</td>
                        </tr>
                        <tr class="row-6 even">
                            <td class="column-1">3-4 bed/ 3 bath</td>
                            <td class="column-2">2000-2500</td>
                            <td class="column-3">$234-$286</td>
                            <td class="column-4">$624-$728</td>
                            <td class="column-5">$156</td>
                        </tr>
                        <tr class="row-7 odd">
                            <td class="column-1">4+ bed/ 4 bath</td>
                            <td class="column-2">3000-4000</td>
                            <td class="column-3">$364-$442</td>
                            <td class="column-4">$780+</td>
                            <td class="column-5">$182-$208</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="text-center col-12 mt-5">
                <h3>*ANYTHING LARGER PLEASE CALL FOR A FREE ESTIMATE.</h3>
            </div>
            <div class="col-6 text-center mt-3">
                <a class="btn-solid header-cta-btn" href="estimate.php">Get Estimate</a>
            </div>
            <div class="col-6 text-center mt-3">
                <a class="btn-solid header-cta-btn" href="book.php">Book Now</a>
            </div>
        </div>
    </div>
</section>
<!-- End  about Section-->
<?php include "include/footer.php";?>