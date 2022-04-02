<?php include "include/header.php";?>
<style>
    #fifty-fifty-slider-stack-id {
        border-radius: 10px;
        max-width: 800px;
        min-height: 450px;
        padding: 0;
        display: flex;
        margin: 50px auto;
        overflow: hidden;
        list-style: none;
        position: relative;
        align-items: stretch;
        font-family: Nunito;
        transition: all 0s ease-in-out;
    }

    #fifty-fifty-slider-stack-id .ffs-slide {
        top: 0;
        left: 0;
        z-index: 1;
        width: 100%;
        bottom: auto;
        display: flex;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        position: absolute;
        pointer-events: none;
        box-sizing: border-box;
        transform: all 0.3s ease-in-out;
    }

    #fifty-fifty-slider-stack-id .ffs-slide.active .ffs-slide-content {
        transform: translateX(0%);
    }

    #fifty-fifty-slider-stack-id .ffs-slide.active .ffs-slide-image {
        transform: translateX(0%);
    }

    #fifty-fifty-slider-stack-id .ffs-slide-content,
    #fifty-fifty-slider-stack-id .ffs-slide-image {
        width: 50%;
        flex: 0 1 auto;
        position: relative;
        pointer-events: auto;
        box-sizing: border-box;
    }

    #fifty-fifty-slider-stack-id .ffs-slide-content {
        z-index: 2;
        display: flex;
        position: relative;
        padding-bottom: 50px;
        transform: translateX(200%);
        transition: transform 0.6s 0s ease-in-out;
        flex-direction: column;
        justify-content: center;
    }

    #fifty-fifty-slider-stack-id .ffs-slide-content-inner {
        padding: 20px 25px;
        box-sizing: border-box;
    }

    #fifty-fifty-slider-stack-id .ffs-slide-content .ffs-slide-title {
        color: white;
        font-size: 30px;
        line-height: 48px;
        margin-bottom: 10px;
    }

    #fifty-fifty-slider-stack-id .ffs-slide-content .ffs-slide-text p {
        color: rgba(255, 255, 255, 0.5);
        font-size: 14px;
        line-height: 22.4px;
        margin-top: 20px;
    }

    #fifty-fifty-slider-stack-id .ffs-slide-content .ffs-slide-action {
        color: white;
        font-size: 16px;
        padding: 7px 20px;
        border: 2px solid;
        background: none;
        border-radius: 30px;
        border-color: rgba(255, 255, 255, 0.2);
        display: inline-block;
        box-sizing: border-box;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    #fifty-fifty-slider-stack-id .ffs-slide-content .ffs-slide-action:hover {
        color: white;
        background: none;
        border-color: white;
    }

    #fifty-fifty-slider-stack-id .ffs-slide-image {
        z-index: 1;
        transform: translateX(100%);
        transition: transform 0s 0.3s ease-in-out;
    }

    #fifty-fifty-slider-stack-id .ffs-nav {
        left: 0;
        bottom: 0;
        width: 50%;
        z-index: 10;
        color: white;
        display: flex;
        padding: 10px 20px;
        position: absolute;
        align-items: center;
        box-sizing: border-box;
        justify-content: flex-end;
    }

    #fifty-fifty-slider-stack-id .ffs-nav-count {
        font-size: 14px;
        margin-right: auto;
    }

    #fifty-fifty-slider-stack-id .ffs-nav a {
        width: 30px;
        height: 30px;
        border-radius: 30px;
        border: 2px solid white;
        opacity: 0.5;
        display: flex;
        color: inherit;
        line-height: 0;
        cursor: pointer;
        align-items: center;
        justify-content: center;
        transform: translateY(0%);
        transition: all 0.3s ease-in-out;
    }

    #fifty-fifty-slider-stack-id .ffs-nav a i {
        line-height: 0;
        font-size: 20px;
    }

    #fifty-fifty-slider-stack-id .ffs-nav a:hover {
        opacity: 1;
    }

    #fifty-fifty-slider-stack-id .ffs-nav a:first-of-type {
        margin-right: 10px;
    }

    #fifty-fifty-slider-stack-id.slide-end .ffs-nav a.next {
        opacity: 0;
        visibility: hidden;
        pointer-events: none;
        transform: translateY(100%);
    }

    #fifty-fifty-slider-stack-id.slide-start .ffs-nav a.prev {
        opacity: 0;
        visibility: hidden;
        pointer-events: none;
        transform: translateY(100%);
    }

    #fifty-fifty-slider-stack-id.height-set .ffs-slide {
        bottom: 0;
    }

    #fifty-fifty-slider-stack-id.hide-titles .ffs-slide-title {
        display: none;
    }

    #fifty-fifty-slider-stack-id.hide-text .ffs-slide-text {
        display: none;
    }

    #fifty-fifty-slider-stack-id.hide-actions .ffs-slide-action {
        display: none;
    }

    #fifty-fifty-slider-stack-id.content-top .ffs-slide-content {
        justify-content: flex-start;
    }

    #fifty-fifty-slider-stack-id.content-center {
        justify-content: center;
    }

    #fifty-fifty-slider-stack-id.content-bottom {
        justify-content: flex-end;
    }

    #fifty-fifty-slider-stack-id .ffs-slide:nth-of-type(1) .ffs-slide-content {
        background: #08BCE9;
    }

    #fifty-fifty-slider-stack-id .ffs-slide:nth-of-type(1) .ffs-slide-image {
        background: url("assets/Images/kitchen.png") no-repeat center center;
        background-size: cover;
    }

    #fifty-fifty-slider-stack-id .ffs-slide:nth-of-type(2) .ffs-slide-content {
        background: #08BCE9;
    }

    #fifty-fifty-slider-stack-id .ffs-slide:nth-of-type(2) .ffs-slide-image {
        background: url("assets/Images/bathroom.png") no-repeat center center;
        background-size: cover;
    }

    #fifty-fifty-slider-stack-id .ffs-slide:nth-of-type(3) .ffs-slide-content {
        background: #08BCE9;
    }

    #fifty-fifty-slider-stack-id .ffs-slide:nth-of-type(3) .ffs-slide-image {
        background: url("assets/images/livingroom.png") no-repeat center center;
        background-size: cover;
    }

    #fifty-fifty-slider-stack-id .ffs-slide:nth-of-type(4) .ffs-slide-content {
        background: #08BCE9;
    }

    #fifty-fifty-slider-stack-id .ffs-slide:nth-of-type(4) .ffs-slide-image {
        background: url("assets/Images/bedroom.png") no-repeat center center;
        background-size: cover;
    }

    @media (max-width: 500px) {
        #fifty-fifty-slider-stack-id {
            min-height: 450px;
        }

        #fifty-fifty-slider-stack-id .ffs-nav {
            width: 100%;
        }

        #fifty-fifty-slider-stack-id .ffs-slide {
            width: 100%;
            flex: 1 0 auto;
            flex-direction: column-reverse;
        }

        #fifty-fifty-slider-stack-id .ffs-slide-content {
            width: 100%;
            flex: 1 0 auto;
            transform: translateX(100%);
        }

        #fifty-fifty-slider-stack-id .ffs-slide-image {
            width: 100%;
            height: 300px;
            flex: 0 1 auto;
            transform: translateX(100%);
            transition: transform 0.6s 0s ease-in-out;
        }

        #fifty-fifty-slider-stack-id.mobile-nav-top .ffs-slide-content {
            padding-bottom: 0;
            padding-top: 50px;
        }

        #fifty-fifty-slider-stack-id.mobile-nav-top .ffs-nav {
            top: 300px;
            bottom: auto;
        }

        #fifty-fifty-slider-stack-id.mobile-nav-top.slide-start .ffs-nav a.prev {
            transform: translateY(-100%);
        }

        #fifty-fifty-slider-stack-id.mobile-nav-top.slide-end .ffs-nav a.next {
            transform: translateY(-100%);
        }
    }
</style>
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
                    <h1 class="hero-title"><span class="featured-text"> Our Standard Services </span></h1>
                </div>
                <div class="col-10  col-xl-8 mx-auto">
                    <p class="hero-subtitle">
                    Below is a list of our most popular cleaning services and a description of what is included in each service. We are happy to help you customize or modify a cleaning. 
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
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2">
                <h1>Standard Cleaning</h1>
                <p style="font-size:24px;">Our Standard cleaning package provides a great general cleaning of your home or office.</p>
                <ul style="font-size:20px;">
                    <li>Dust vertical and horizontal surfaces such as furniture, windowsills, and light fixtures.</li>
                    <li>Remove trash.</li>
                    <li>Straighten all areas being cleaned.</li>
                    <li>Vacuum all exposed uncarpeted and carpeted floors, and some upholstered furniture and blinds per
                        cleaning.</li>
                    <li>Clean glass and mirrors (large mirrors are spot cleaned).</li>
                    <li>Clean all counters and spot clean faces of cabinets.</li>
                    <li>Wipe exterior of large and small appliances.</li>
                    <li>Clean/sanitize sinks, tubs, showers, toilets and straighten these areas.</li>
                    <li>Mop all exposed uncarpeted floors.</li>
                    <li>Remove all visible cobwebs.</li>
                    <li>Clean the inside of the kitchen sink window.</li>
                    <li>Sweep the front porch.</li>
                </ul>
                <a class="btn-solid header-cta-btn" href="book.php">Book Now</a>
            </div>
            <!-- <div class="col-md-6 col-12">
                <table class="table plan text-white">
                    <thead style="background-color:#08BCE9;">
                        <tr>
                            <th scope="col"># of rooms</th>
                            <th scope="col">Sq. feet</th>
                            <th scope="col">Price</th>
                        </tr>
                    </thead>
                    <tbody class="row-hover">
                        <tr class="row-2 even">
                            <td class="column-1">1 bed/ 1 bath</td>
                            <td class="column-2">500-800 </td>
                            <td class="column-3">$105-$130</td>

                        </tr>
                        <tr class="row-3 odd">
                            <td class="column-1">2 bed/ 1 bath</td>
                            <td class="column-2">500-1000</td>
                            <td class="column-3">$130-$156</td>

                        </tr>
                        <tr class="row-4 even">
                            <td class="column-1">2 bed/ 2 bath</td>
                            <td class="column-2">800-1300</td>
                            <td class="column-3">$156-$182</td>

                        </tr>
                        <tr class="row-5 odd">
                            <td class="column-1">3 bed/ 2 bath</td>
                            <td class="column-2">1300-1800</td>
                            <td class="column-3">$182-$208</td>

                        </tr>
                        <tr class="row-6 even">
                            <td class="column-1">3-4 bed/ 3 bath</td>
                            <td class="column-2">2000-2500</td>
                            <td class="column-3">$234-$286</td>

                        </tr>
                        <tr class="row-7 odd">
                            <td class="column-1">4+ bed/ 4 bath</td>
                            <td class="column-2">3000-4000</td>
                            <td class="column-3">$364-$442</td>
                        </tr>
                    </tbody>
                </table>
                <p class="text-center">*ANYTHING LARGER PLEASE CALL FOR A FREE ESTIMATE.</p>
            </div> -->
        </div>
</section>
<!-- End  about Section-->

<!-- Start  about Section-->
<section class="pricing mega-section  dark-cards " id="pricing">
    <div class="container">
        <div class="sec-heading  ">
            <div class="content-area"><span class=" pre-title">Standard CLEANING</span>
                <h2 class=" title">Standard CLEANING BY ROOM</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <ul class='content-center mobile-nav-top slide-start' id='fifty-fifty-slider-stack-id'>
                    <div class='ffs-nav'>
                        <div class='ffs-nav-count'>
                            <span class='ffs-current'>1</span>
                            <span>/</span>
                            <span class='ffs-total'>4</span>
                        </div>
                        <a class='prev'>
                            <i class='ion-arrow-left-c'></i>
                        </a>
                        <a class='next'>
                            <i class='ion-arrow-right-c'></i>
                        </a>
                    </div>
                    <li class='ffs-slide active the-one'>
                        <div class='ffs-slide-content'>
                            <div class='ffs-slide-content-inner'>
                                <h2 class="text-black">Kitchen</h2>
                                <div class='ffs-slide-text'>
                                    <ul>
                                        <li style="text-align: left;">Dust and wipe down all accesible surfaces</li>
                                        <li style="text-align: left;">Vacuum and mop floors</li>
                                        <li style="text-align: left;">Clean stove top</li>
                                        <li style="text-align: left;">Clean sink</li>
                                        <li style="text-align: left;">Wipe down outside of appliances</li>
                                        <li style="text-align: left;">Clean microwave inside and out</li>
                                        <li style="text-align: left;">Take out trash</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class='ffs-slide-image'></div>
                    </li>
                    <li class='ffs-slide'>
                        <div class='ffs-slide-content'>
                            <div class='ffs-slide-content-inner'>
                                <h2 class="text-black">BATHROOM</h2>
                                <div class='ffs-slide-text'>
                                    <ul>
                                        <li style="text-align: left;">clean the toilet</li>
                                        <li style="text-align: left;">Scrub shower bath and sink</li>
                                        <li style="text-align: left;">Clean mirrors and fixtures</li>
                                        <li style="text-align: left;">Empty trash</li>
                                        <li style="text-align: left;">Vacuum and mop floors</li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class='ffs-slide-image'></div>
                    </li>
                    <li class='ffs-slide'>
                        <div class='ffs-slide-content'>
                            <div class='ffs-slide-content-inner'>
                                <h2 class="text-black">LIVINGROOM / COMMON AREAS</h2>
                                <div class='ffs-slide-text'>
                                    <ul>
                                        <li style="text-align: left;">Dust and wipe all surfaces</li>
                                        <li style="text-align: left;">Vacuum and Mop all floors</li>
                                        <li style="text-align: left;">Emty trash</li>
                                        <li style="text-align: left;">Clean mirrors</li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class='ffs-slide-image'></div>
                    </li>
                    <li class='ffs-slide'>
                        <div class='ffs-slide-content'>
                            <div class='ffs-slide-content-inner'>
                                <h2 class="text-black">Bedrooms</h2>
                                <div class='ffs-slide-text'>
                                    <ul>
                                        <li style="text-align: left;">Dust and wipe all accesible surfaces</li>
                                        <li style="text-align: left;">Vacuum and mop floors</li>
                                        <li style="text-align: left;">Clean mirrors</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class='ffs-slide-image'></div>
                    </li>
                </ul>
            </div>
        </div>
</section>
<!-- End  about Section-->

<!-- Start  about Section-->
<section class="pricing mega-section  dark-cards " id="pricing">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 col-12">
                <h1>Deep Cleaning</h1>
                <p style="font-size:24px;">The Deep package is a more thorough detailed cleaning. All the tasks in the Standard package, plus the following:</p>
                <ul style="font-size:20px;">
                    <li>Clean the interior of the fireplace.</li>
                    <li>Tank vacuum all upholstered furniture and&nbsp; window coverings.</li>
                    <li>Remove all cobwebs.</li>
                    <li>Vacuum all baseboards and edges.</li>
                    <li>Completely wet wipe all light switches, door jams and knobs, open shelving, ledges, plastic
                        trash containers and painted woodwork including baseboards, cabinet faces, and windowsills.</li>
                    <li>Hand scrub all tile, grout, and linoleum floors.</li>
                    <li>Completely clean all large mirrors.</li>
                    <li>Walls are spot cleaned only.</li>
                    <li>Clean inside oven and refrigerator.</li>
                    <li>Clean stove hood.</li>
                    <li>Clean areas under the stove top and kitchen sink.</li>
                    <li>Remove cobwebs outside the front door and wet wipe the exterior of the front door.</li>
                </ul>
                <h2>PLEASE CONTACT US FOR DEEP CLEANING PRICING</h2>
                <a class="btn-solid header-cta-btn" href="contact.php">Contact Us</a>
            </div>
            <!-- <div class="col-md-6 col-12">
                <table class="table plan text-white">
                    <thead style="background-color:#08BCE9;">
                        <tr>
                            <th scope="col"># of rooms</th>
                            <th scope="col">Sq. feet</th>
                            <th scope="col">Price</th>
                        </tr>
                    </thead>
                    <tbody class="row-hover">
                        <tr class="row-2 even">
                            <td class="column-1">1 bed/ 1 bath</td>
                            <td class="column-2">500-800</td>
                            <td class="column-3">$312-$416</td>
                        </tr>
                        <tr class="row-3 odd">
                            <td class="column-1">2 bed/ 1 bath</td>
                            <td class="column-2">500-1000</td>
                            <td class="column-3">$416-$468</td>
                        </tr>
                        <tr class="row-4 even">
                            <td class="column-1">2 bed/ 2 bath</td>
                            <td class="column-2">800-1300</td>
                            <td class="column-3">$468-$572</td>
                        </tr>
                        <tr class="row-5 odd">
                            <td class="column-1">3 bed/ 2 bath</td>
                            <td class="column-2">1300-1800</td>
                            <td class="column-3">$546-$624</td>
                        </tr>
                        <tr class="row-6 even">
                            <td class="column-1">3-4 bed/ 3 bath</td>
                            <td class="column-2">2000-2500</td>
                            <td class="column-3">$624-$728</td>
                        </tr>
                        <tr class="row-7 odd">
                            <td class="column-1">4+ bed/ 4 bath</td>
                            <td class="column-2">3000-4000</td>
                            <td class="column-3">$780+</td>
                        </tr>
                    </tbody>
                </table>
                <p class="text-center">*ANYTHING LARGER PLEASE CALL FOR A FREE ESTIMATE.</p>
            </div> -->
        </div>
</section>
<!-- End  about Section-->

<!-- Start  about Section-->
<!-- <section class="pricing mega-section  dark-cards " id="pricing">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12">
                <h3>Quick Klean</h3>
                <p>Karen’s QUICK KLEAN is our quickest and most affordable package. Perfect as a gift for someone during a particularly busy or stressful time!</p>
                <ul>
<li>Clean/sanitize all bathrooms</li>
<li>Tank Vacuum and Mop all exposed uncarpeted floors</li>
<li>&nbsp;Vacuum all rugs</li>
<li>&nbsp;Clean the kitchen sink</li>
</ul>
                <p>All of the above are included if reachable standing on the <b>floor</b>.</p>
                <a class="btn-solid header-cta-btn" href="book.php">Book Now</a>
            </div>
            <div class="col-md-6 col-12">
                <table class="table plan text-white">
                    <thead style="background-color:#08BCE9;">
                        <tr>
                            <th scope="col"># of rooms</th>
                            <th scope="col">Sq. feet</th>
                            <th scope="col">Price</th>
                        </tr>
                    </thead>
                    <tbody class="row-hover">
<tr class="row-2 even">
	<td class="column-1">1 bed/ 1 bath</td><td class="column-2">500-800</td><td class="column-3">$105</td>
</tr><tr class="row-3 odd">
	<td class="column-1">2 bed/ 1 bath</td><td class="column-2">500-1000</td><td class="column-3">$105</td>
</tr><tr class="row-4 even">
	<td class="column-1">2 bed/ 2 bath</td><td class="column-2">800-1300</td><td class="column-3">$105-$130</td>
</tr><tr class="row-5 odd">
	<td class="column-1">3 bed/ 2 bath</td><td class="column-2">1300-1800</td><td class="column-3">$130</td>
</tr><tr class="row-6 even">
	<td class="column-1">3-4 bed/ 3 bath</td><td class="column-2">2000-2500</td><td class="column-3">$156</td>
</tr><tr class="row-7 odd">
	<td class="column-1">4+ bed/ 4 bath</td><td class="column-2">3000-4000</td><td class="column-3">$182-$208</td>
</tr></tbody>
                </table>
                <p class="text-center">*ANYTHING LARGER PLEASE CALL FOR A FREE ESTIMATE.</p>
            </div>
        </div>
</section> -->
<!-- End  about Section-->


<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script>
    $(function () {

        var fiftySlider = {
            active: 0,
            $el: $('#fifty-fifty-slider-stack-id'),
            $slides: $('#fifty-fifty-slider-stack-id .ffs-slide'),
            $navCount: $('#fifty-fifty-slider-stack-id .ffs-nav-count'),
            numSlides: $('#fifty-fifty-slider-stack-id .ffs-slide').length,
            initialize: function () {
                this.setHeight();
                this.updateCount();
                this.$navCount.find('.ffs-total').
                html(this.numSlides);
            },
            updateCount: function () {
                this.$navCount.find('.ffs-current').
                html(this.active + 1);
            },
            setHeight: function () {
                var elementHeights = this.$slides.map(function () {
                    return $(this).height();
                }).get();

                var maxHeight = Math.max.apply(null, elementHeights);

                this.$el.css('height', maxHeight).addClass('height-set');
                this.$slides.css('bottom', '');
            },
            nextSlide: function () {
                this.$el.removeClass('slide-start');
                if (this.active + 1 < this.numSlides) {
                    $(this.$slides[this.active + 1]).addClass('active');
                    if (this.active + 1 == this.numSlides - 1) {
                        this.$el.addClass('slide-end');
                    }
                    this.active++;
                }
                this.updateCount();
                this.setHeight();
            },
            prevSlide: function () {
                this.$el.removeClass('slide-end');
                if (this.active - 1 >= 0) {
                    $(this.$slides[this.active]).removeClass('active the-one');
                    $(this.$slides[this.active - 1]).addClass('the-one');
                    if (this.active - 1 == 0) {
                        this.$el.addClass('slide-start');
                    }
                    this.active--;
                }
                this.updateCount();
                this.setHeight();
            }
        };


        $(window).resize(function () {
            fiftySlider.$slides.css('bottom', 'auto');
            fiftySlider.setHeight();
        });

        fiftySlider.initialize();

        $('#fifty-fifty-slider-stack-id a.next').click(function () {
            fiftySlider.nextSlide();
        });

        $('#fifty-fifty-slider-stack-id a.prev').click(function () {
            fiftySlider.prevSlide();
        });

    });
</script>

<?php include "include/footer.php";?>