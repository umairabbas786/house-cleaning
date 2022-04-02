/*===================================================
Project: Cleanso - Cleaning Services Company HTML5 Landing Page Template
Auther: aminThemes
Version: 1.0
Last change: 23 Feb 2022
Template Description: Cleaning Services Company HTML5 Landing Page Template
====================================================*/




//GLOBAL VARIBALES

//selector constants
var root = $('html, body');
const main_window = $(window),
    bdyOnePage = $('body.landing-page-demo'),
    pageHeader = $('#page-header'),
    navMain = $('nav.menu-navbar'),
    navMainLanding = $('#main-nav'),
    toTopBtn = $('.back-to-top'),
    heroVegasSlider = $(".page-hero.hero-vegas-slider"),
    textInput = $("form.main-form .text-input"),
    tabLink = $(".ma-tabs .tabs-links .tab-link"),
    portfolioGroup = $('.portfolio .portfolio-group');



$(function () {
    "use strict"


    // function to fire the conter plugin 
    let counterShowsUp = false;

    function fireCounter() {
        if ($('.stats-counter').length) {
            if (jQuery().countTo && counterShowsUp === false) {
                let pos = $('.stats-counter').offset().top;
                if (((main_window.scrollTop() + main_window.innerHeight() - 50) >= pos)) {
                    $('.counter').countTo();
                    counterShowsUp = true;
                }
            }
        }
    }

    /*  START #page-header js rules */

    // Start open/close navbar search box
    $(".header-search-box form").on("click", function (e) {
        e.stopPropagation()
    });

    $('.header-search-btn').on("click", function () {
        $(".header-search-box").addClass('show');

        setTimeout(function () {
            $(".search-input").focus()
        }, 1000);
    });



    $("body").addClass("dark-theme");
    $(".mode-switcher ").addClass("dark-mode").find(".go-light").addClass("active")

    $(".mode-switcher ").on("click", function () {
        if ($(this).is(".dark-mode")) {
            $("body").removeClass("dark-theme");
            $(this)
                .removeClass("dark-mode")
                .addClass("light-mode")
                .find(".go-light")
                .removeClass("active")
                .siblings(".go-dark")
                .addClass("active");

        } else if ($(this).is(".light-mode")) {
            $("body").addClass("dark-theme");
            $(this)
                .removeClass("light-mode")
                .addClass("dark-mode")
                .find(".go-dark")
                .removeClass("active")
                .siblings(".go-light")
                .addClass("active");
        }

    });

    const bg_Image = $("*");
    bg_Image.each(function () {
        if ($(this).attr("data-bg-img")) {
            $(this).css("background-image", `url(${$(this).attr("data-bg-img")}`);
        }
        if ($(this).attr("data-bg-opacity")) {
            $(this).css("opacity", `${$(this).attr("data-bg-opacity")}`);
        }
    });



    $('.header-search-box .close-search , .header-search-box').on("click", function () {
        $(".header-search-box").removeClass('show');
    });


    // End open/close navbar search box


    /* Start bootstrap Scrollspy Options  */
    //on one page demos only
    if (bdyOnePage) {
        $(bdyOnePage).scrollspy({
            target: "#main-nav",
            offset: $("#main-nav").innerHeight() + 1

        });
    }



    if ($(this).scrollTop() > 50) {
        if (!$(pageHeader).hasClass("is-sticky")) {
            pageHeader.addClass("is-sticky");
        }
    }

    main_window.on("scroll", function () {
        if ($(this).scrollTop() > 50) {
            if (!$(pageHeader).hasClass("is-sticky")) {
                pageHeader.addClass("is-sticky");
            }
        } else {
            if ($(pageHeader).hasClass("is-sticky")) {
                pageHeader.removeClass("is-sticky");
            }
        }
    });

    // show/hide navbar links menu
    $(".menu-toggler").on("click", function () {
        pageHeader.find(".show:not(.bar-bottom .links) ").removeClass("show");
        pageHeader.find(".bar-bottom .links").toggleClass("show");
        $('.menu-toggler').toggleClass('close-menu')
    });

    // show/hide navbar info menu
    $(".info-toggler, .close-icon").on("click", function () {
        pageHeader.find(".show:not(.bar-top .info-panel)").removeClass("show");
        pageHeader.find(".bar-top .info-panel").toggleClass("show");
        if ($('.menu-toggler').hasClass('close-menu')) {
            $('.menu-toggler').removeClass('close-menu')
        }

    });



    $(".list-js").on("click", function (e) {
        e.stopPropagation()
    });

    // close the currnt opend menu when click on its wrapper
    $(".menu-wrapper").on("click", function () {
        $(this).removeClass("show");
        if ($('.menu-toggler').hasClass('close-menu')) {
            $('.menu-toggler').removeClass('close-menu')
        }
    });

    //showing navbar sub-menus on mobile
    $(".has-sub-menu").on("click", function (e) {
        if (!(main_window.innerWidth() > 991)) {
            $(this).children('.sub-menu').slideToggle();
        }
    });


    // Checkout page
    $(".coupon-toggle").on("click", function (e) {
        $(".apply-coupon-form").slideToggle();
    });




    //  Start Smooth Scrolling To page Sections
    $('.landing-page-demo .menu-navbar .menu-link').on('click', function (e) {


        const link = $(this).attr('href');
        let currentMainNavHeight = navMain.innerHeight();
        if (link.charAt(0) === '#') {
            e.preventDefault();
            $(this).addClass("active")
            const target = this.hash;
            $(root).animate({
                scrollTop: $(target).offset().top - currentMainNavHeight + 1
            }, 500);
            if (!$(this).parent(".menu-item").hasClass("has-sub-menu")) {

                // to close the menu after going to crossponding section
                if ($('.menu-wrapper').hasClass('show')) {
                    $('.menu-wrapper').removeClass('show')
                }

                // to change the menu toggler buttn icon 
                if ($('.menu-toggler').hasClass('close-menu')) {
                    $('.menu-toggler').removeClass('close-menu')
                }
            }
        }

    });

    // Smooth Scrolling To Demos section on index page
    $('.goto-demos-link').on('click', function (e) {
        const link = $(this).attr('href');
        if (link.charAt(0) === '#') {
            e.preventDefault();
            const target = this.hash;
            $(root).animate({
                scrollTop: $(target).offset().top + 1
            }, 500);
        }
    });

    // =========== END #page-header js rules


    if ($(textInput).length) {
        let inputHasText = "has-text";

        if ($(textInput).val().trim() !== '')
            $(textInput).parent().addClass(inputHasText);
        else
            $(textInput).parent().removeClass(inputHasText);


        /*
        check if the form input has data or not while focusing out
        from the input to set the label
        in the right place by the css rules.
        */
        $(textInput).on('focusout', function () {

            if ($(this).val().trim() !== '') {
                $(this).parent().addClass(inputHasText);
            } else {
                $(this).parent().removeClass(inputHasText);
            }
        });
    }


    // Start Smooth Scrolling To Window Top When Clicking on Back To Top Button
    $(toTopBtn).on('click', function () {
        root.css("scroll-behavior", "smooth").scrollTop(0);
    });
    // End Smooth Scrolling To Window Top When Clicking on Back To Top Button


    // Start tabs navigation 
    // function to place a line under the active link on the tabs components
    function adjust_tabLink_B_line() {
        // to Move the tab-link bottom line  
        if ($(".ma-tabs .tabs-links-list").length) {
            const pageDir = $("body").css("direction");

            const $line = tabLink.parent('.tabs-links-list').find(".b-line");
            const activTabLink = tabLink.parent('.tabs-links-list').children(".active");

            let eleParentWidth = activTabLink.parent('.tabs-links-list').innerWidth();
            let eleWidth = activTabLink.innerWidth();
            // get the css left value of the active tabLink
            let eleLeft = activTabLink.position().left;

            // the true value to include the margin in the total element width 
            let netElewidth = activTabLink.outerWidth(true);
            // get the css right value of the active tabLink
            let eleRight = eleParentWidth - (eleLeft + netElewidth);


            if (pageDir === "ltr") {
                $line.css({
                    "width": eleWidth,
                    "left": eleLeft + 'px',
                    "width": eleWidth + 'px',
                });
            } else {
                $line.css({
                    "width": eleWidth,
                    "right": eleRight + 'px',
                    "width": eleWidth + 'px',
                });
            }
        }

    };

    // Start .ma-tabs functionality
    adjust_tabLink_B_line();

    $(tabLink).on('click', function () {
        const target = $(this).attr('data-link-target');
        $(this).addClass('active').siblings().removeClass('active');
        $(target).addClass('visibale-tab').siblings('.tab-content').removeClass("visibale-tab");
        adjust_tabLink_B_line();
    });
    // End .ma-tabs functionality

    /* ----------------- Start onScroll Actions ----------------- */

    main_window.on('scroll', function () {

        if ($(this).scrollTop() > 50) {
            //show back to top btn
            toTopBtn.addClass("show");
        } else {
            //hide back to top btn
            toTopBtn.removeClass("show");
        }


        // to make sure the counter will start counting while its section apear on the screen  
        fireCounter();
    });
    /* ----------------- End onScroll Actions ----------------- */



    /*************Start Contact Form Functionality************/

    const contactForm = $("#contact-us-form"),
        userName = $("#user-name"),
        userEmail = $("#user-email"),
        msgSubject = $("#msg-subject"),
        msgText = $("#msg-text"),
        submitBtn = $("#submit-btn");

    let isValidInput = false,
        isValidEmail = false;

    function ValidateNotEmptyInput(input, errMsg) {
        if (input.length) {
            if (input.val().trim() === "") {
                $(input).siblings(".error-msg").text(errMsg).css("display", "block");
                isValidInput = false;
            } else {
                $(input).siblings(".error-msg").text("").css("display", "none");
                isValidInput = true;
            }
        }

    }


    function validateEmailInput(emailInput) {
        let pattern = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

        if (pattern.test(emailInput.val()) === false) {
            $(emailInput).siblings(".error-msg").text("Please Enter a valid Email").css("display", "block");
            isValidEmail = false;
        } else {
            $(emailInput).siblings(".error-msg").text("").css("display", "none");
            isValidEmail = true;
        }
    }



    submitBtn.on("click", function (e) {
        e.preventDefault();

        ValidateNotEmptyInput(userName, "Please Enter Your Name");
        ValidateNotEmptyInput(userEmail, "Please Enter Your Email");
        ValidateNotEmptyInput(msgSubject, "Please Enter Your Phone Number");
        ValidateNotEmptyInput(msgText, "Please Enter Your Message");
        validateEmailInput(userEmail);


        if (isValidInput && isValidEmail) {
            // Please unComment the next block of code when uploading your theme to your host

            ///////////////////////////////////////////////////////////////////////////////////////////////

            // $.ajax({
            //     type: "POST",
            //     url: contactForm.attr('action'),
            //     data: contactForm.serialize(),

            //     success: function (data) {


            //         // $(".done-msg").text("We Recevied you message!").toggleClass("show");
            //         // setTimeout(function () {
            //         //     $(".done-msg").text("").toggleClass("show");
            //         // }, 7500)
            //         // contactForm[0].reset();
            //         
            //     }

            // });
            // ///////////////////////////////////////////////////////////////////////////////////////////


            // Please delete this block of code when you upload your template to your host
            // /////////////////////////////////
            $(".done-msg").text("Thank you, We are Recevied you message!").toggleClass("show");
            setTimeout(function () {
                $(".done-msg").text("").toggleClass("show");
            }, 7500)
            contactForm[0].reset();
            // //////////////////////////////////

            return false;
        }
    })

    /*************End Contact Form Functionality************/



    /* --------------------------
    Start Vendors plugins options  
    ----------------------------*/


    // Start jQuery-ui Slider 
    if (jQuery().slider) {
        $("#slider-range").slider({
            range: true,
            min: 0,
            max: 500,
            values: [20, 400],
            slide: function (event, ui) {
                $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
            }
        });
        $("#amount").val("$" + $("#slider-range").slider("values", 0) +
            " - $" + $("#slider-range").slider("values", 1));
    }


    // End jQuery-ui Slider 



    // Start Nice select 
    if (jQuery().niceSelect) {
        $('.nice-select-control').niceSelect();
    }
    // End Nice select 

    /* Start Swiper Options */



    // set the swiper slides & hero sections bg image
    const slideBg = $(".hero-swiper-slider .swiper-container .swiper-slide .slide-bg-img, .page-hero .overlay-photo-image-bg");
    slideBg.each(function () {
        if ($(this).attr("data-background")) {
            $(this).css("background-image", "url(" + $(this).data("background") + ")");
        }
    });




    //initialize swiper [Hero Section]  //parallax slider
    if ($('.hero-swiper-slider.slider-parallax .swiper-container').length) {
        const heroSlider = new Swiper('.hero-swiper-slider.slider-parallax .swiper-container', {
            speed: 1000,
            parallax: true,
            loop: true,
            reverseDirection: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: true,
            },
            pagination: {
                el: '.hero-swiper-slider.slider-parallax .swiper-pagination',
                type: 'bullets',
                clickable: true,
            },

            navigation: {
                nextEl: '.hero-swiper-slider.slider-parallax .swiper-button-next',
                prevEl: '.hero-swiper-slider.slider-parallax .swiper-button-prev',
            },
            on: {
                init: function () {
                    const thisSlider = this;
                    for (let i = 0; i < thisSlider.slides.length; i++) {
                        $(thisSlider.slides[i])
                            .find('.slide-bg-img')
                            .attr({
                                'data-swiper-parallax': .7 * thisSlider.width,
                            });
                    }
                    $(".slides-count").html("0" + (this.slides.length - 2));
                    $(".curent-slide").html("0" + (this.realIndex + 1));
                },
                slideChange: function () {
                    $(".curent-slide").html("0" + (this.realIndex + 1));
                },
                resize: function () {
                    this.update();
                },

            },

        });

    };

    //initialize swiper [Hero Section] //fade slider
    if ($('.hero-swiper-slider.slider-fade .swiper-container').length) {
        const heroSlider = new Swiper('.hero-swiper-slider.slider-fade .swiper-container', {
            speed: 1000,
            loop: true,
            reverseDirection: true,
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
            on: {
                init: function () {
                    let thisSlider = this;
                    $(".slides-count").html("0" + (this.slides.length - 2));
                    $(".curent-slide").html("0" + (this.realIndex + 1));
                },
                slideChange: function () {
                    $(".curent-slide").html("0" + (this.realIndex + 1));
                },
            },
            autoplay: {
                delay: 5000,
                disableOnInteraction: true,
            },
            pagination: {
                el: '.hero-swiper-slider.slider-fade .swiper-pagination',
                type: 'bullets',
                clickable: true,
            },
            navigation: {
                nextEl: '.hero-swiper-slider.slider-fade .swiper-button-next',
                prevEl: '.hero-swiper-slider.slider-fade .swiper-button-prev',
            },
        });
    };


    // initialize swiper [Testimonials with ONE Column]
    if ($('.testimonials-3d  .swiper-container').length) {
        const testimonialsSlider_1 = new Swiper('.testimonials-3d  .swiper-container', {
            // Optional parameters
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            loop: true,
            slideShadows: false,
            coverflowEffect: {
                rotate: 5,
                stretch: 0,
                depth: 100,
                modifier: 2,
            },
            on: {
                resize: function () {
                    this.update();
                }
            },
        });
    }

    // initialize swiper [Testimonials with 1 Column]
    if ($('.testimonials-1-col  .swiper-container').length) {
        const testimonialsSlider_1 = new Swiper('.testimonials-1-col  .swiper-container', {
            // Optional parameters
            speed: 500,
            loop: true,
            grabCursor: true,
            slidesPerView: 1,
            spaceBetween: 50,
            delay: 5000,
            autoplay: {
                delay: 5000,
            },
            navigation: {
                nextEl: '.testimonials-1-col .swiper-button-next',
                prevEl: '.testimonials-1-col .swiper-button-prev',
            },
            on: {
                resize: function () {
                    this.update();
                }
            },
        });
    }

    // initialize swiper [Testimonials with 2 Columns]
    if ($('.testimonials-2-col .swiper-container').length) {
        const testimonialsSlider_2 = new Swiper('.testimonials-2-col .swiper-container', {
            // Optional parameters
            speed: 500,
            loop: true,
            grabCursor: true,
            slidesPerView: 1,
            spaceBetween: 20,
            delay: 5000,
            autoplay: {
                delay: 5000,
            },
            breakpoints: {
                1200: {
                    slidesPerView: 2,
                },
            },
            navigation: {
                nextEl: '.testimonials-2-col .swiper-button-next',
                prevEl: '.testimonials-2-col .swiper-button-prev',
            }
        });
    }

    // initialize swiper [Testimonials with 3 Column]
    if ($('.testimonials-3-col .swiper-container').length) {
        const testimonialsSlider_3 = new Swiper('.testimonials-3-col .swiper-container', {
            // Optional parameters
            speed: 600,
            loop: true,
            grabCursor: true,
            slidesPerView: 1,
            spaceBetween: 15,
            delay: 5000,
            autoplay: {
                delay: 5000,
            },
            breakpoints: {

                1200: {
                    slidesPerView: 3
                }
            },
            navigation: {
                nextEl: '.testimonials-3-col .swiper-button-next',
                prevEl: '.testimonials-3-col .swiper-button-prev',
            },
        });
    }

    //initialize swiper [clients Section]
    if ($('.our-clients .swiper-container').length) {
        const partenersSlider = new Swiper('.our-clients .swiper-container', {
            // Optional parameters
            speed: 600,
            loop: true,
            spaceBetween: 20,
            grabCursor: true,
            delay: 5000,
            autoplay: {
                delay: 5000,
            },
            slidesPerView: 3,
            breakpoints: {
                991: {
                    slidesPerView: 6,
                    spaceBetween: 30
                }
            },
        });
    }

    //initialize swiper [single-post page]
    if ($('.post-main-area .post-featured-area .swiper-container').length) {
        const partenersSlider = new Swiper('.post-main-area .post-featured-area .swiper-container', {
            // Optional parameters
            slidesPerView: 1,
            grabCursor: true,
            spaceBetween: 0,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.post-main-area .post-featured-area .swiper-button-next',
                prevEl: '.post-main-area .post-featured-area .swiper-button-prev',
            }
        });
    }

    //initialize swiper [portfolio-slider]
    if ($('.portfolio-slider .swiper-container').length) {
        const swiperPortfolioSlider = new Swiper('.portfolio-slider .swiper-container', {
            speed: 600,
            loop: true,
            centeredSlides: true,
            slidesPerView: 1,
            spaceBetween: 10,
            autoplay: {
                delay: 5000,
            },
            breakpoints: {

                991: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },

            },
            navigation: {
                nextEl: '.portfolio-slider .swiper-button-next',
                prevEl: '.portfolio-slider .swiper-button-prev'
            },
        });
    }




    //initialize swiper [portfolio-single]
    if ($('.portfolio-single .portfolio-single-slider .swiper-container').length) {
        const swiperPortfolioSingleSlider = new Swiper('.portfolio-single .portfolio-single-slider .swiper-container', {
            spaceBetween: 10,
            grabCursor: true,
            reverseDirection: true,
            loop: true,
            slidesPerView: 1,
            autoplay: {
                delay: 5000,
                disableOnInteraction: true,
            },

            navigation: {
                nextEl: '.portfolio-single-slider .swiper-button-next',
                prevEl: '.portfolio-single-slider .swiper-button-prev'
            },
        });
    }


    if ($('.shop-single  .swiper-container.thumbs , .shop-single  .swiper-container.main-img').length) {
        let swiperThumbs = new Swiper('.shop-single  .swiper-container.thumbs', {
            loop: true,
            spaceBetween: 10,
            slidesPerView: 4,
            freeMode: false,
            grabCursor: true,
            watchSlidesVisibility: true,
            watchSlidesProgress: true,

        });

        let swiperMainImg = new Swiper('.shop-single  .swiper-container.main-img', {
            loop: true,
            freeMode: false,
            spaceBetween: 10,
            navigation: {
                nextEl: '.shop-single .main-img .swiper-button-next',
                prevEl: '.shop-single .main-img .swiper-button-prev'
            },
            thumbs: {
                swiper: swiperThumbs,
            }
        });
    }
    // if ($('.shop-single  .swiper-container.main-img').length) {



    // }


    // Start add to cart counter

    $('.qty-counter  .qty-btn').on("click", function () {
        let qtyInput = $(this).parent('.qty-counter').find('.qty-input')
        let inputValue = parseInt(qtyInput.val()) || 0


        if ($(this).hasClass('plus')) {
            inputValue = (inputValue < 1) ? 1 : (inputValue + 1)
        } else if ($(this).hasClass('minus')) {
            inputValue = (inputValue > 1) ? (inputValue - 1) : 1
        }
        qtyInput.val(inputValue)
    })

    // End   add to cart counter

    /* initialize  wow.js  Options */
    const wow = new WOW({
        animateClass: 'animated',
        offset: 100
    });
    wow.init();

    /** initialize Counter plugin */
    fireCounter();

    /* initialize fancybox  */
    if ($('*').fancybox) {
        $().fancybox({
            selector: '[data-fancybox=".filter"]:visible',
            loop: true,
            buttons: ['zoom', 'close'],
        });

    }

    // tilt plugin Options
    if (jQuery().tilt) {
        $("[data-tilt]").tilt({
            perspective: 1000,
        })
    }

    // tilt plugin Options
    if (jQuery().stickySidebar) {
        $(".sticky-sidebar").stickySidebar({
            // topSpacing: 60,
            // bottomSpacing: 60
            resizeSensor: false,
        })
    }




    /* Start Vegas  Options */
    if (jQuery().vegas) {

        // grab the slides imgs from [data attr in html file]
        const slides = $('.hero-vegas-slider .vegas-slider-content'),
            img_1 = slides.attr('data-vegas-slide-1'),
            img_2 = slides.attr('data-vegas-slide-2'),
            img_3 = slides.attr('data-vegas-slide-3');

        // init vegas slider
        heroVegasSlider.vegas({
            delay: 8000,
            shuffle: false,
            timer: false,
            // overlay: '../assets/Images/hero/slider/overlays/04.png',
            animation: 'random',
            slides: [{
                src: img_1
            }, {
                src: img_2
            }, {
                src: img_3
            }]
        })

    }
    /* End Vegas Slider Options */


    /* Start Portfolio btns  */
    if ($('.portfolio .portfolio-btn').length) {
        $('.portfolio .portfolio-btn').on('click', function () {

            $(this).addClass('active').siblings().removeClass('active');

            const $filterValue = $(this).attr('data-filter');
            portfolioGroup.isotope({
                filter: $filterValue
            });
        });
    }

    /* start mail chimp  */
    if (jQuery().ajaxChimp) {

        const subscribeUrl = $(".mc-form").attr('action');

        // alert vars
        const alerts = $('.mailchimp-alerts'),
            msgAll = $('.mc-msg'),
            msgSubmitting = $('.mc-submitting'),
            msgSuccess = $('.mc-success'),
            msgError = $('.mc-error');

        $('.mc-form').ajaxChimp({
            language: 'en',
            url: subscribeUrl,
            callback: mailChimpResponse
        });

        function mailChimpResponse(resp) {
            if (resp.result === 'success') {
                alerts.addClass("show-message")
                msgSuccess.html('' + resp.msg).fadeIn().addClass('active');
                msgError.hide();
                $(".mc-form").trigger('reset');

                // to remove the all messages text after 5 seconds from response is success
                setTimeout(function () {
                    alerts.removeClass("show-message");
                    msgAll.html('').removeClass('active');
                }, 5000);
            } else if (resp.msg.indexOf('is already subscribed') >= 0) {
                //if the e-mail already subscribed
                alerts.addClass("show-message")
                msgError.html('This E-mail is already subscribed, Please try another one').fadeIn(0).addClass('active');
                // remove the all messages but the error message so the user can notice the error
                msgSuccess.html('').removeClass('active');
                msgSubmitting.html('').removeClass('active');

            } else if (resp.result === 'error') {
                // any other errors 
                alerts.addClass("show-message");
                msgError.html('' + resp.msg).fadeIn(0).addClass('active');
                // remove the all messages but the error message so the user can notice the error
                msgSuccess.html('').removeClass('active');
                msgSubmitting.html('').removeClass('active');
            }
        }

    }

    /* End mail chimp  */


    /*-----------------  Start particles.js -----------------  */
    /* particlesJS.load(@dom-id, @path-json, @callback (optional));
     ** NOTE: @path-json path is relative to the html file
     */
    // Particles Polygon shapes
    if ($(".particles-js.polygons").length) {
        particlesJS.load('particles-js', 'js/vendors/particles-json-files/particles-polygons.json')
    }
    // Particles circles shapes
    if ($(".particles-js.circles").length) {
        particlesJS.load('particles-js', 'js/vendors/particles-json-files/particles-circles.json')
    }

    // Particles squares shapes
    if ($(".particles-js.squares").length) {
        particlesJS.load('particles-js', 'js/vendors/particles-json-files/particles-squares.json')
    }
    // Particles Dots shapes
    if ($(".particles-js.dots").length) {
        particlesJS.load('particles-js', 'js/vendors/particles-json-files/particles-dots.json')
    }
    /*-----------------  End particles.js -----------------  */
    /*----------------- 
    End Vendors plugins options
     ----------------- */

    /*-----------------  Start skills Bars-----------------  */

    $(window).on('scroll', function () {
        $('.skills .skill .skill-bar .bar').each(function () {
            let barOriginalPosition = $(this).offset().top + $(this).outerHeight();
            let barCurrPosition = $(window).scrollTop() + $(window).height();
            let widthValue = $(this).attr('data-skill-val');
            if (barCurrPosition > barOriginalPosition) {
                $(this).css({
                    width: widthValue + '%',
                });
            }
        });
    });

    /*-----------------  End skills Bars -----------------  */

    /*----------------- Start Percentage loading screen interactions -----------------  */
    let percentage = 0;
    let LoadingCounter = setInterval(function () {
        if (percentage <= 100) {
            // $('#loading-screen ').css('opacity', (100 - percentage));
            $('#loading-screen .loading-counter').text(percentage + '%');
            $('#loading-screen .bar').css('width', (100 - percentage) / 2 + '%');
            $('#loading-screen .progress-line').css('transform', 'scale(' + percentage / 100 + ')');
            percentage++;
        } else {
            $("#loading-screen").fadeOut(500);
            setTimeout(() => {
                $("#loading-screen").remove();
            }, 1500);
            clearInterval(LoadingCounter);
        }
    }, 10)



    //Fire the isotope plugin
    if (jQuery().isotope) {

        portfolioGroup.isotope({
            // options
            itemSelector: '.portfolio-item',
            layoutMode: 'fitRows',
            percentPosition: true,
            filter: '*',
            stagger: 30,
            containerStyle: null,
        });
    }

    // check if the loaded page have [dat-splitting] attr so the let the page fire splitting.js plugin  ;
    if (!(typeof window.Splitting === "undefined")) {
        if ($("[data-splitting]").length) {
            Splitting();
        }
    }

    /* *******  loading simpleParallax library ********/

    //    Check if the simpleParallax library is loaded
    if (!(typeof window.simpleParallax === "undefined")) {

        let parallaxblock = document.querySelectorAll(".parallax-img ");
        if (parallaxblock.length) {
            new simpleParallax(parallaxblock, {
                delay: 1,

            });
        }
    }





});
/*-----------------  End Percentage loading screen interactions -----------------  */