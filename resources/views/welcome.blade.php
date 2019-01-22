@extends('layouts.main')

@section('content')
    <div id="g-offcanvas" data-g-offcanvas-swipe="0" data-g-offcanvas-css3="1">
        <div class="g-grid">
            <div class="g-block size-100">
                <div id="mobile-menu-1473-particle" class="g-content g-particle">
                    <div id="g-mobilemenu-container" data-g-menu-breakpoint="51rem"></div>
                </div>
            </div>
        </div>
    </div>
    <div id="g-page-surround">
        <div class="g-offcanvas-hide g-offcanvas-toggle" data-offcanvas-toggle aria-controls="g-offcanvas" aria-expanded="false">
            <i class="fa fa-fw fa-bars"></i>
        </div>

        @include('layouts.social')

        @include('layouts.nav')

        <section id="g-showcase" class="g-flushed">
            <div class="g-container">
                <div class="g-grid">

                    <div class="g-block size-100">
                        <div class="g-content">
                            <div class="platform-content">
                                <div class="moduletable ">
                                    <!-- START REVOLUTION SLIDER 5.0.14 fullwidth mode -->
                                    <link href="http://fonts.googleapis.com/css?family=Poppins:400,600"
                                          rel="stylesheet">
                                    <div id="rev_slider_1_1_wrapper"
                                         class="rev_slider_wrapper fullwidthbanner-container"
                                         style="margin:0px auto;background-color:#E9E9E9;padding:0px;margin-top:0px;margin-bottom:0px;max-height:650px;">
                                        <div id="rev_slider_1_1" class="rev_slider fullwidthabanner"
                                             style="display:none;max-height:650px;height:650px;">
                                            <ul>    <!-- SLIDE  1-->
                                                <li data-transition="random" data-slotamount="7" data-masterspeed="300"
                                                    data-saveperformance="off">
                                                    <!-- MAIN IMAGE -->
                                                    {{--<img src="http://demo.joomlead.com/greennature/images/joomlead/slider/slide1.jpg"--}}
                                                    <img src="/images/pexels-photo-866021.jpeg"
                                                         alt="slide1" data-bgposition="center top" data-bgfit="cover"
                                                         data-bgrepeat="no-repeat">
                                                    <!-- LAYERS -->

                                                    <!-- LAYER NR. 1 -->
                                                    <div class="tp-caption very_large_text tp-fade tp-resizeme"
                                                         data-x="5"
                                                         data-y="center" data-voffset="-70"
                                                         data-speed="1300"
                                                         data-start="500"
                                                         data-easing="Power3.easeInOut"
                                                         data-splitin="none"
                                                         data-splitout="none"
                                                         data-elementdelay="0.1"
                                                         data-endelementdelay="0.1"
                                                         data-endspeed="300"

                                                         style="z-index: 5; max-width: none; max-height: none; white-space: nowrap;">
                                                        ORGANIC BEAUTY
                                                    </div>

                                                    <!-- LAYER NR. 2 -->
                                                    <div class="tp-caption sfb tp-resizeme"
                                                         data-x="5"
                                                         data-y="center" data-voffset="100"
                                                         data-speed="1300"
                                                         data-start="500"
                                                         data-easing="Power3.easeInOut"
                                                         data-splitin="none"
                                                         data-splitout="none"
                                                         data-elementdelay="0.1"
                                                         data-endelementdelay="0.1"
                                                         data-endspeed="300"

                                                         style="z-index: 6; max-width: none; max-height: none; white-space: nowrap;">
                                                        <a href="#" target="_self" title="Read More"
                                                           class="slide-button">
                                                            <span class="span1"><span>Read More</span></span>
                                                            <span class="span2"><span>Read More</span></span>
                                                        </a>

                                                    </div>

                                                    <!-- LAYER NR. 3 -->
                                                    <div class="tp-caption large_text sfb tp-resizeme"
                                                         data-x="10"
                                                         data-y="center" data-voffset="-10"
                                                         data-speed="1300"
                                                         data-start="500"
                                                         data-easing="Power1.easeOut"
                                                         data-splitin="none"
                                                         data-splitout="none"
                                                         data-elementdelay="0.1"
                                                         data-endelementdelay="0.1"
                                                         data-endspeed="300"

                                                         style="z-index: 7; max-width: 590px; max-height: 26px; white-space: normal;">
                                                        Vivamus commodo turpis vitae ligula luctus malesuada. Quisque
                                                        non turpis ac felis molestie bibendum nec eget sem. Mauris
                                                        feugiat pretium est, at iaculis est. Integer nec eros velit.


                                                    </div>

                                                    <!-- LAYER NR. 4 -->
                                                    <div class="tp-caption small_text tp-fade tp-resizeme"
                                                         data-x="10"
                                                         data-y="center" data-voffset="-110"
                                                         data-speed="1300"
                                                         data-start="500"
                                                         data-easing="Power3.easeInOut"
                                                         data-splitin="none"
                                                         data-splitout="none"
                                                         data-elementdelay="0.1"
                                                         data-endelementdelay="0.1"
                                                         data-endspeed="300"

                                                         style="z-index: 8; max-width: none; max-height: none; white-space: nowrap;">
                                                        our latest skincare products
                                                    </div>
                                                </li>
                                                <!-- SLIDE  2-->
                                                <li data-transition="random" data-slotamount="7" data-masterspeed="300"
                                                    data-saveperformance="off">
                                                    <!-- MAIN IMAGE -->
                                                    {{--<img src="http://demo.joomlead.com/greennature/images/joomlead/slider/slider2.jpg"--}}
                                                    <img src="/images/pexels-photo-903171.jpeg"
                                                         alt="slider2" data-bgposition="center top" data-bgfit="cover"
                                                         data-bgrepeat="no-repeat">
                                                    <!-- LAYERS -->

                                                    <!-- LAYER NR. 1 -->
                                                    <div class="tp-caption very_large_text tp-fade tp-resizeme"
                                                         data-x="5"
                                                         data-y="center" data-voffset="-70"
                                                         data-speed="1300"
                                                         data-start="500"
                                                         data-easing="Power3.easeInOut"
                                                         data-splitin="none"
                                                         data-splitout="none"
                                                         data-elementdelay="0.1"
                                                         data-endelementdelay="0.1"
                                                         data-endspeed="300"

                                                         style="z-index: 5; max-width: none; max-height: none; white-space: nowrap;">
                                                        ORGANIC BEAUTY
                                                    </div>

                                                    <!-- LAYER NR. 2 -->
                                                    <div class="tp-caption sfb tp-resizeme"
                                                         data-x="5"
                                                         data-y="center" data-voffset="100"
                                                         data-speed="1300"
                                                         data-start="500"
                                                         data-easing="Power3.easeInOut"
                                                         data-splitin="none"
                                                         data-splitout="none"
                                                         data-elementdelay="0.1"
                                                         data-endelementdelay="0.1"
                                                         data-endspeed="300"

                                                         style="z-index: 6; max-width: none; max-height: none; white-space: nowrap;">
                                                        <a href="#" target="_self" title="Read More"
                                                           class="slide-button">
                                                            <span class="span1"><span>Read More</span></span>
                                                            <span class="span2"><span>Read More</span></span>
                                                        </a>

                                                    </div>

                                                    <!-- LAYER NR. 3 -->
                                                    <div class="tp-caption large_text sfb tp-resizeme"
                                                         data-x="10"
                                                         data-y="center" data-voffset="-10"
                                                         data-speed="1300"
                                                         data-start="500"
                                                         data-easing="Power1.easeOut"
                                                         data-splitin="none"
                                                         data-splitout="none"
                                                         data-elementdelay="0.1"
                                                         data-endelementdelay="0.1"
                                                         data-endspeed="300"

                                                         style="z-index: 7; max-width: 590px; max-height: 26px; white-space: normal;">
                                                        Vivamus commodo turpis vitae ligula luctus malesuada. Quisque
                                                        non turpis ac felis molestie bibendum nec eget sem. Mauris
                                                        feugiat pretium est, at iaculis est. Integer nec eros velit.


                                                    </div>

                                                    <!-- LAYER NR. 4 -->
                                                    <div class="tp-caption small_text tp-fade tp-resizeme"
                                                         data-x="10"
                                                         data-y="center" data-voffset="-110"
                                                         data-speed="1300"
                                                         data-start="500"
                                                         data-easing="Power3.easeInOut"
                                                         data-splitin="none"
                                                         data-splitout="none"
                                                         data-elementdelay="0.1"
                                                         data-endelementdelay="0.1"
                                                         data-endspeed="300"

                                                         style="z-index: 8; max-width: none; max-height: none; white-space: nowrap;">
                                                        our latest skincare products
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="tp-bannertimer tp-bottom"
                                                 style="display:none; visibility: hidden !important;"></div>
                                        </div>

                                        <script type="text/javascript">


                                            /******************************************
                                             -    PREPARE PLACEHOLDER FOR SLIDER    -
                                             ******************************************/


                                            var setREVStartSize = function () {
                                                var tpopt = {};
                                                tpopt.startwidth = 1200;
                                                tpopt.startheight = 650;
                                                tpopt.container = jQuery('#rev_slider_1_1');
                                                tpopt.fullScreen = "off";
                                                tpopt.forceFullWidth = "off";

                                                tpopt.container.closest(".rev_slider_wrapper").css({height: tpopt.container.height()});
                                                tpopt.width = parseInt(tpopt.container.width(), 0);
                                                tpopt.height = parseInt(tpopt.container.height(), 0);
                                                tpopt.bw = tpopt.width / tpopt.startwidth;
                                                tpopt.bh = tpopt.height / tpopt.startheight;
                                                if (tpopt.bh > tpopt.bw) tpopt.bh = tpopt.bw;
                                                if (tpopt.bh < tpopt.bw) tpopt.bw = tpopt.bh;
                                                if (tpopt.bw < tpopt.bh) tpopt.bh = tpopt.bw;
                                                if (tpopt.bh > 1) {
                                                    tpopt.bw = 1;
                                                    tpopt.bh = 1
                                                }
                                                if (tpopt.bw > 1) {
                                                    tpopt.bw = 1;
                                                    tpopt.bh = 1
                                                }
                                                tpopt.height = Math.round(tpopt.startheight * (tpopt.width / tpopt.startwidth));
                                                if (tpopt.height > tpopt.startheight && tpopt.autoHeight != "on") tpopt.height = tpopt.startheight;
                                                if (tpopt.fullScreen == "on") {
                                                    tpopt.height = tpopt.bw * tpopt.startheight;
                                                    var cow = tpopt.container.parent().width();
                                                    var coh = jQuery(window).height();
                                                    if (tpopt.fullScreenOffsetContainer != undefined) {
                                                        try {
                                                            var offcontainers = tpopt.fullScreenOffsetContainer.split(",");
                                                            jQuery.each(offcontainers, function (e, t) {
                                                                coh = coh - jQuery(t).outerHeight(true);
                                                                if (coh < tpopt.minFullScreenHeight) coh = tpopt.minFullScreenHeight
                                                            })
                                                        } catch (e) {
                                                        }
                                                    }
                                                    tpopt.container.parent().height(coh);
                                                    tpopt.container.height(coh);
                                                    tpopt.container.closest(".rev_slider_wrapper").height(coh);
                                                    tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(coh);
                                                    tpopt.container.css({height: "100%"});
                                                    tpopt.height = coh;
                                                } else {
                                                    tpopt.container.height(tpopt.height);
                                                    tpopt.container.closest(".rev_slider_wrapper").height(tpopt.height);
                                                    tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(tpopt.height);
                                                }
                                            };

                                            /* CALL PLACEHOLDER */
                                            setREVStartSize();


                                            var tpj = jQuery;
                                            tpj.noConflict();
                                            var revapi1;


                                            tpj(document).ready(function () {


                                                if (tpj('#rev_slider_1_1').revolution == undefined) {
                                                    revslider_showDoubleJqueryError('#rev_slider_1_1');
                                                } else {
                                                    revapi1 = tpj('#rev_slider_1_1').show().revolution(
                                                        {

                                                            dottedOverlay: "twoxtwo",
                                                            delay: 9000,
                                                            startwidth: 1200,
                                                            startheight: 650,
                                                            hideThumbs: 200,

                                                            thumbWidth: 100,
                                                            thumbHeight: 50,
                                                            thumbAmount: 2,

                                                            simplifyAll: "off",
                                                            navigationType: "bullet",
                                                            navigationArrows: "solo",
                                                            navigationStyle: "round",
                                                            touchenabled: "on",
                                                            onHoverStop: "on",
                                                            nextSlideOnWindowFocus: "off",

                                                            swipe_threshold: 75,
                                                            swipe_min_touches: 1,
                                                            drag_block_vertical: false,


                                                            keyboardNavigation: "off",

                                                            navigationHAlign: "center",
                                                            navigationVAlign: "bottom",
                                                            navigationHOffset: 0,
                                                            navigationVOffset: 20,

                                                            soloArrowLeftHalign: "left",
                                                            soloArrowLeftValign: "center",
                                                            soloArrowLeftHOffset: 20,
                                                            soloArrowLeftVOffset: 0,

                                                            soloArrowRightHalign: "right",
                                                            soloArrowRightValign: "center",
                                                            soloArrowRightHOffset: 20,
                                                            soloArrowRightVOffset: 0,

                                                            shadow: 0,
                                                            fullWidth: "on",
                                                            fullScreen: "off",

                                                            spinner: "spinner0",

                                                            stopLoop: "off",
                                                            stopAfterLoops: -1,
                                                            stopAtSlide: -1,

                                                            shuffle: "off",

                                                            autoHeight: "off",
                                                            forceFullWidth: "off",


                                                            hideTimerBar: "on",
                                                            hideThumbsOnMobile: "off",
                                                            hideNavDelayOnMobile: 1500,
                                                            hideBulletsOnMobile: "off",
                                                            hideArrowsOnMobile: "off",
                                                            hideThumbsUnderResolution: 0,

                                                            hideSliderAtLimit: 0,
                                                            hideCaptionAtLimit: 0,
                                                            hideAllCaptionAtLilmit: 0,
                                                            startWithSlide: 0,
                                                            isJoomla: true
                                                        });


                                                }
                                            });	/*ready*/

                                        </script>
                                    </div>
                                    <!-- END REVOLUTION SLIDER -->            </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section id="g-feature">
            <div class="g-container">
                <div class="g-grid">

                    <div class="g-block size-100 circle-icon-box">
                        <div id="featurebox-1736-particle" class="g-content g-particle">
                            <div class="jl-featurebox ">
                                <div data-uk-width-margin
                                     class="uk-grid-medium uk-grid uk-grid-width-small-1-1 uk-grid-width-medium-1-3 uk-grid-width-large-1-3">

                                    <div class="jl-featurebox-item uk-grid-margin ">
                                        <div class="jl-featurebox-item-content top">
                                            <div class="uk-width-1-1 jl-featurebox-item-images">
                                                <div class="jl-icon-box"><span
                                                            class="featurebox-icon icon-48_store"> </span></div>
                                            </div>
                                            <div class="uk-width-1-1 jl-featurebox-item-intro">
                                                <div class="jl-featurebox-item-title"><h5>Availability</h5></div>
                                                <div class="jl-featurebox-item-subtitle"><p>Curabitur ullamcorper
                                                        ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus,
                                                        tellus eget condimentum.</p></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="jl-featurebox-item uk-grid-margin ">
                                        <div class="jl-featurebox-item-content top">
                                            <div class="uk-width-1-1 jl-featurebox-item-images">
                                                <div class="jl-icon-box"><span
                                                            class="featurebox-icon icon-19_flask"> </span></div>
                                            </div>
                                            <div class="uk-width-1-1 jl-featurebox-item-intro">
                                                <div class="jl-featurebox-item-title"><h5>Natural Process</h5></div>
                                                <div class="jl-featurebox-item-subtitle"><p>Curabitur ullamcorper
                                                        ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus,
                                                        tellus eget condimentum.</p></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="jl-featurebox-item uk-grid-margin ">
                                        <div class="jl-featurebox-item-content top">
                                            <div class="uk-width-1-1 jl-featurebox-item-images">
                                                <div class="jl-icon-box"><span
                                                            class="featurebox-icon icon-33_fruit_seedling"> </span>
                                                </div>
                                            </div>
                                            <div class="uk-width-1-1 jl-featurebox-item-intro">
                                                <div class="jl-featurebox-item-title"><h5>Organic Products</h5></div>
                                                <div class="jl-featurebox-item-subtitle"><p>Curabitur ullamcorper
                                                        ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus,
                                                        tellus eget condimentum.</p></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section id="g-products">
            <div class="g-container">
                <div class="g-grid">

                    <div class="g-block size-5">
                        <div id="custom-3418-particle" class="g-content g-particle">
                            <div class="ct-heading">
                                <span>NEW PRODUCTS</span>
                            </div>
                        </div>
                    </div>


                    <div class="g-block size-60">
                        <div id="heading-2682-particle" class="g-content g-particle">
                            <div class="jl-heading-1346140665 uk-grid default">
                                <div class="uk-width-1-1  uk-text-left ">
                                    <div class="jl-heading-content">
                                        <div class="jl-heading-title">
                                            <span>naturalife is good for your health</span>
                                            <h3>How NarturaLife Helps You Feel Better After Ten Days of Usage?
                                            </h3>
                                            <svg width="95" height="10" viewBox="0 0 95 10"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 8l11.54-6 11.538 6 11.54-6 11.538 6 11.538-6 11.54 6L81.77 2 94 8"
                                                      stroke-width="3" stroke="#6CC139" fill="none"
                                                      fill-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <div class="jl-heading-subtitle">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin porttitor
                                                nisl nec ex consectetur, quis ornare sem molestie. Sed suscipit
                                                sollicitudin nulla tempor congue. Integer sed elementum odio.
                                            </p>
                                            <a href="#" target="_self" title="read more"
                                               class="read_more  text small"><span>read more</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="g-block size-35">
                        <div id="image-2527-particle" class="g-content g-particle">
                            <div id="jl-imgage-429698425" class="jl-image  uk-text-left ">
                                <a href="/nyújtás" data-lightbox-type="image"
                                   data-uk-lightbox="">
                                    <img class="jl-image-reponsive"
                                         src="/images/featured-product.png" alt="products"
                                         title="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section id="g-testimonials">
            <div class="g-container">
                <div class="g-grid">

                    <div class="g-block size-5">
                        <div id="custom-6214-particle" class="g-content g-particle">
                            <div class="ct-heading">
                                <span>TESTIMONIALS</span>
                            </div>
                        </div>
                    </div>


                    <div class="g-block size-95">
                        <div id="testimonial-6155-particle" class="g-content g-particle">
                            <div class="jl-testimonial ">
                                <div data-uk-slideset="{
                  small:1,
                  medium:1,
                  large:2,
                  xlarge:2,
                  animation: 'slide-horizontal',
                  duration:200,
                  autoplay:true,
                  pauseOnHover:true,
                  autoplayInterval:7000
               }">
                                    <div class="uk-slidenav-position">
                                        <div class="uk-grid uk-grid-medium uk-slideset">
                                            <div class="jl-testimonial-item bottom  ">
                                                <div class="style5">
                                                    <div class="jl-testimonial-item-content ">
                                                        <div class="jl-testimonial-desc uk-card uk-card-default ">
                                                            </i>
                                                            <div class="text"><span class="quote">“</span><h6>100%
                                                                    Recommended</h6>
                                                                <p>Donec quam felis, ultricies nec, pellentesque eu,
                                                                    pretium quis, sem. Nulla consequat massa quis enim.
                                                                    Donec pede justo, fringilla vel, aliquet nec,
                                                                    vulputate eget, arcu.</p></div>
                                                        </div>
                                                        <div class="jl-testimonial-info uk-flex uk-flex-middle">
                                                          <span class="jl-testimonial-image">
                                <img class="jl-testimonial-avatar"
                                     src="/images/team1.png">
                              </span>
                                                            <span class="jl-testimonial-name">Larry Wilson
                                <div class="jl-testimonial-stars">

                                </div>
                                                                  <div class="jl-testimonial-title">CEO</div>
                                                              </span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jl-testimonial-item bottom  ">
                                                <div class="style5">
                                                    <div class="jl-testimonial-item-content ">
                                                        <div class="jl-testimonial-desc uk-card uk-card-default ">
                                                            </i>
                                                            <div class="text"><span class="quote">“</span><h6>NaturaLife
                                                                    is the Best!</h6>
                                                                <p>Donec quam felis, ultricies nec, pellentesque eu,
                                                                    pretium quis, sem. Nulla consequat massa quis enim.
                                                                    Donec pede justo, fringilla vel, aliquet nec,
                                                                    vulputate eget, arcu.</p></div>
                                                        </div>
                                                        <div class="jl-testimonial-info uk-flex uk-flex-middle">
                                                          <span class="jl-testimonial-image">
                                <img class="jl-testimonial-avatar"
                                     src="/images/team3.png">
                              </span>
                                                            <span class="jl-testimonial-name">Jane Travis
                                <div class="jl-testimonial-stars">

                                </div>
                                                                  <div class="jl-testimonial-title">Developer</div>
                                                              </span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jl-testimonial-item bottom  ">
                                                <div class="style5">
                                                    <div class="jl-testimonial-item-content ">
                                                        <div class="jl-testimonial-desc uk-card uk-card-default ">
                                                            </i>
                                                            <div class="text"><span class="quote">“</span><h6>I Feel
                                                                    Healthy, Vital and Energetic Once Again!</h6>
                                                                <p>Donec quam felis, ultricies nec, pellentesque eu,
                                                                    pretium quis, sem. Nulla consequat massa quis enim.
                                                                    Donec pede justo, fringilla vel, aliquet nec,
                                                                    vulputate eget, arcu.</p></div>
                                                        </div>
                                                        <div class="jl-testimonial-info uk-flex uk-flex-middle">
                                                          <span class="jl-testimonial-image">
                                <img class="jl-testimonial-avatar"
                                     src="/images/team2.png">
                              </span>
                                                            <span class="jl-testimonial-name">Amanda Richards
                                <div class="jl-testimonial-stars">

                                </div>
                                                                  <div class="jl-testimonial-title">Teacher</div>
                                                              </span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jl-testimonial-item bottom  ">
                                                <div class="style5">
                                                    <div class="jl-testimonial-item-content ">
                                                        <div class="jl-testimonial-desc uk-card uk-card-default ">
                                                            </i>
                                                            <div class="text"><span class="quote">“</span><h6>100%
                                                                    Recommended</h6>
                                                                <p>Donec quam felis, ultricies nec, pellentesque eu,
                                                                    pretium quis, sem. Nulla consequat massa quis enim.
                                                                    Donec pede justo, fringilla vel, aliquet nec,
                                                                    vulputate eget, arcu.</p></div>
                                                        </div>
                                                        <div class="jl-testimonial-info uk-flex uk-flex-middle">
                                                          <span class="jl-testimonial-image">
                                <img class="jl-testimonial-avatar"
                                     src="/images/team1.png">
                              </span>
                                                            <span class="jl-testimonial-name">John Doe
                                <div class="jl-testimonial-stars">

                                </div>
                                                                  <div class="jl-testimonial-title">Maketing</div>
                                                              </span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="/greennature/" class="uk-slidenav uk-slidenav-previous"
                                           data-uk-slideset-item="previous"></a><a href="/greennature/"
                                                                                   class="uk-slidenav uk-slidenav-next"
                                                                                   data-uk-slideset-item="next"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section id="g-clients">
            <div class="g-container">
                <div class="g-grid">

                    <div class="g-block size-5">
                        <div id="custom-8692-particle" class="g-content g-particle">
                            <div class="ct-heading">
                                <span>OUR CLIENTS</span>
                            </div>
                        </div>
                    </div>


                    <div class="g-block size-45">
                        <div id="heading-6978-particle" class="g-content g-particle">
                            <div class="jl-heading-1752749816 uk-grid default">
                                <div class="uk-width-1-1  uk-text-left ">
                                    <div class="jl-heading-content">
                                        <div class="jl-heading-title">
                                            <h3>Trusted by World’s Biggest Brands
                                            </h3>
                                            <svg width="95" height="10" viewBox="0 0 95 10"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 8l11.54-6 11.538 6 11.54-6 11.538 6 11.538-6 11.54 6L81.77 2 94 8"
                                                      stroke-width="3" stroke="#6CC139" fill="none"
                                                      fill-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <div class="jl-heading-subtitle">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin porttitor
                                                nisl nec ex consectetur, quis ornare sem molestie. Sed suscipit
                                                sollicitudin nulla tempor congue. Integer sed elementum odio.
                                            </p>
                                            <a href="#" target="_self" title="read more"
                                               class="read_more  text small"><span>read more</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="g-block size-50">
                        <div id="carousel-8160-particle" class="g-content g-particle">
                            <div class="jl-carousel ">
                                <div class=" uk-grid-medium uk-grid uk-grid-width-small-1-1 uk-grid-width-medium-1-2 uk-grid-width-large-1-3"
                                     data-uk-grid-margin>
                                    <div class="jl-carousel-item ">
                                        <div class="jl-carousel-image">
                                            <img src="/images/logo1.png">
                                        </div>
                                    </div>
                                    <div class="jl-carousel-item ">
                                        <div class="jl-carousel-image">
                                            <img src="/images/logo2.png">
                                        </div>
                                    </div>
                                    <div class="jl-carousel-item ">
                                        <div class="jl-carousel-image">
                                            <img src="/images/logo3.png">
                                        </div>
                                    </div>
                                    <div class="jl-carousel-item ">
                                        <div class="jl-carousel-image">
                                            <img src="/images/logo4.png">
                                        </div>
                                    </div>
                                    <div class="jl-carousel-item ">
                                        <div class="jl-carousel-image">
                                            <img src="/images/logo5.png">
                                        </div>
                                    </div>
                                    <div class="jl-carousel-item ">
                                        <div class="jl-carousel-image">
                                            <img src="/images/logo6.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section id="g-subfeature">
            <div class="g-container">
                <div class="g-grid">

                    <div class="g-block size-100">
                        <div id="custom-4760-particle" class="g-content g-particle">
                            <div class="sub-content">
                                <span>35</span>
                                <h3>Free shipping to every corner of the world</h3>
                                <p>Vivamus commodo turpis vitae ligula luctus malesuada. Quisque non turpis ac felis
                                    molestie bibendum nec eget sem. Mauris feugiat pretium est, at iaculis est. Integer
                                    nec eros velit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section id="g-calltoaction">
            <div class="g-container">
                <div class="g-grid">

                    <div class="g-block size-100">
                        <div id="calltoaction-4545-particle" class="g-content g-particle">
                            <div class="uk-grid jl-calltoaction uk-flex uk-flex-middle">
                                <div class="uk-width-large-7-10 uk-width-medium-1-1">
                                    <div class="jl-cta-title"
                                         style="line-height: initial; color:#ffffff ; font-size :20px">LOREM IPSUM DOLOR
                                        SIT AMET, CONSECTETUR ADIPISCING ELIT. PROIN PORTTITOR NISL NEC EX CONSECTETUR,
                                        QUIS ORNARE SEM MOLESTIE.
                                    </div>
                                </div>
                                <div class="uk-width-large-3-10 uk-width-medium-1-1 uk-container-center "
                                     style="float:left">
                                    <a target="_blank" href="#" title="SHOP NOW" class="jl-cta-button ">SHOP NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <footer id="g-footer">
            <div class="g-container">
                <div class="g-grid">

                    <div class="g-block size-40">
                        <div class="g-content">
                            <div class="platform-content">
                                <div class="moduletable ">
                                    <h3 class="g-title">Newsletter</h3>
                                    <div class="acymailing_module" id="acymailing_module_formAcymailing88181">
                                        <div class="acymailing_fulldiv" id="acymailing_fulldiv_formAcymailing88181">
                                            <form id="formAcymailing88181" action="/greennature/index.php"
                                                  onsubmit="return submitacymailingform('optin','formAcymailing88181')"
                                                  method="post" name="formAcymailing88181">
                                                <div class="acymailing_module_form">
                                                    <div class="acymailing_introtext"><p>Aliquam lorem ante, dapibus in,
                                                            viverra quis, feugiat a, tellus. Phasellus viverra nulla ut
                                                            metus varius laoreet.</p></div>
                                                    <div class="acymailing_form">
                                                        <p class="onefield fieldacyemail"
                                                           id="field_email_formAcymailing88181"><span
                                                                    class="acyfield_email acy_requiredField"><input
                                                                        id="user_email_formAcymailing88181"
                                                                        onfocus="if(this.value == 'E-mail') this.value = '';"
                                                                        onblur="if(this.value=='') this.value='E-mail';"
                                                                        class="inputbox" type="text" name="user[email]"
                                                                        style="width:100%" value="E-mail"
                                                                        title="E-mail"/></span>
                                                        </p>

                                                        <p class="acysubbuttons">
                                                            <input class="button subbutton btn btn-primary"
                                                                   type="submit" value="Subscribe" name="Submit"
                                                                   onclick="try{ return submitacymailingform('optin','formAcymailing88181'); }catch(err){alert('The form could not be submitted '+err);return false;}"/>
                                                        </p>
                                                    </div>
                                                    <input type="hidden" name="ajax" value="0"/>
                                                    <input type="hidden" name="acy_source" value="module_104"/>
                                                    <input type="hidden" name="ctrl" value="sub"/>
                                                    <input type="hidden" name="task" value="notask"/>
                                                    <input type="hidden" name="redirect"
                                                           value="http%3A%2F%2Fdemo.joomlead.com%2Fgreennature%2F"/>
                                                    <input type="hidden" name="redirectunsub"
                                                           value="http%3A%2F%2Fdemo.joomlead.com%2Fgreennature%2F"/>
                                                    <input type="hidden" name="option" value="com_acymailing"/>
                                                    <input type="hidden" name="hiddenlists" value="1"/>
                                                    <input type="hidden" name="acyformname"
                                                           value="formAcymailing88181"/>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="g-block size-20">
                        <div class="g-content">
                            <div class="platform-content">
                                <div class="moduletable ">
                                    <h3 class="g-title">Contact</h3>


                                    <div class="custom">
                                        <div class="footer-contact">
                                            <div><span class="fa fa-home"></span>
                                                <div class="ct-info">63739 Street B:9<br>City, Country</div>
                                            </div>
                                            <div><span class="fa fa-mobile"></span>
                                                <div class="ct-info"> +1 123 312 32 23</div>
                                            </div>
                                            <div><span class="fa fa-phone"></span>
                                                <div class="ct-info"> +1 123 312 32 24</div>
                                            </div>
                                            <div><span class="fa fa-envelope-o"></span>
                                                <div class="ct-info"><a href="mailto:demo@joomlead.com">demo@joomlead.com</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="g-block size-20">
                        <div class="g-content">
                            <div class="platform-content">
                                <div class="moduletable ">
                                    <h3 class="g-title">Categories</h3>


                                    <div class="custom">
                                        <ul class="foooter-categories">
                                            <li class="cat-item">
                                                <a href="#">Chocolate Cookies</a>
                                            </li>
                                            <li class="cat-item">
                                                <a href="#">Diet Muesli</a>
                                            </li>
                                            <li class="cat-item">
                                                <a href="#">Jams &amp; Honeys</a>
                                            </li>
                                            <li class="cat-item">
                                                <a href="#">Organic Foods</a>
                                            </li>
                                            <li class="cat-item">
                                                <a href="#">SPA Products</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="g-block size-20">
                        <div class="g-content">
                            <div class="platform-content">
                                <div class="moduletable ">
                                    <h3 class="g-title">Latestnews</h3>
                                    <ul class="latestnews">
                                        <li itemscope itemtype="https://schema.org/Article">
                                            <a href="/greennature/index.php/blog/how-marching-for-science-risks-politicizing-it"
                                               itemprop="url">
			<span itemprop="name">
				How Marching for Science Risks Politicizing It			</span>
                                            </a>
                                        </li>
                                        <li itemscope itemtype="https://schema.org/Article">
                                            <a href="/greennature/index.php/blog/after-setbacks-and-suits-miami-to-open-science-museum"
                                               itemprop="url">
			<span itemprop="name">
				After Setbacks and Suits, Miami to Open Science Museum			</span>
                                            </a>
                                        </li>
                                        <li itemscope itemtype="https://schema.org/Article">
                                            <a href="/greennature/index.php/blog/the-new-threat-to-wolves-in-and-around-yellowstone"
                                               itemprop="url">
			<span itemprop="name">
				The New Threat to Wolves in and Around Yellowstone			</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="g-grid">

                    <div class="g-block  size-33-3 copyright">
                        <div id="copyright-3841-particle" class="g-content g-particle">
                            <div class="jl-copyright">
                                &copy;
                                2018
                                Designed by <a href="https://joomlead.com/" title="JoomLead" class="g-powered-by">JoomLead.com</a>
                            </div>
                        </div>
                    </div>


                    <div class="g-block  size-33-3">
                        <div id="custom-6872-particle" class="g-content g-particle">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="#">Terms</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="g-block  size-33-3">
                        <div id="social-4761-particle" class="g-content g-particle">
                            <div class="g-social social">
                                <a target="_blank" href="#" title="" aria-label="">
                                    <span class="fa fa-facebook"></span> <span class="g-social-text"></span> </a>
                                <a target="_blank" href="#" title="" aria-label="">
                                    <span class="fa fa-instagram"></span> <span class="g-social-text"></span> </a>
                                <a target="_blank" href="#" title="" aria-label="">
                                    <span class="fa fa-linkedin"></span> <span class="g-social-text"></span> </a>
                                <a target="_blank" href="#" title="" aria-label="">
                                    <span class="fa fa-twitter"></span> <span class="g-social-text"></span> </a>
                                <a target="_blank" href="#" title="" aria-label="">
                                    <span class="fa fa-youtube-play"></span> <span class="g-social-text"></span> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </footer>


    </div>

@endsection