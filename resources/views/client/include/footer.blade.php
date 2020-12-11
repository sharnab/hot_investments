<footer>

    <div class="bottom-line">
        <div class="container">
            <span>Copyright&copy; All Right Reserved {{date('Y')}} <a href="#" title="">HotInvestments.com</a></span>
        </div>
    </div>
    <a href="#" class="scrollToTop"><i class="ti ti-arrow-circle-up"></i></a>
</footer>
</div>

<!-- Script -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="{{asset('/assets/client/js/modernizr.js')}}" type="text/javascript"></script><!-- Modernizer -->
<script src="{{asset('/assets/client/js/jquery-1.10.2.min.js')}}" type="text/javascript"></script><!-- Jquery -->
<script src="{{asset('/assets/client/js/bootstrap.min.js')}}" type="text/javascript"></script><!-- Bootstrap -->
<script src="{{asset('/assets/client/js/owl.carousel.min.js')}}" type="text/javascript"></script><!-- Owl Carousal -->
<script src="{{asset('/assets/client/layout/scripts/jquery.star-rating-svg.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/client/js/html5lightbox.js')}}" type="text/javascript"></script><!-- HTML -->
<script src="{{asset('/assets/client/js/lightslider.min.js')}}" type="text/javascript"></script>

<script src="{{asset('/assets/client/js/scrolly.js')}}" type="text/javascript"></script><!-- Parallax -->
<script src="{{asset('/assets/client/js/price-range.js')}}" type="text/javascript"></script><!-- Parallax -->
<script src="{{asset('/assets/client/js/script.js')}}" type="text/javascript"></script><!-- Script -->

<script type="text/javascript">
$(document).ready(function () {
    "use strict";
    jQuery('.tp-banner').show().revolution({
        dottedOverlay: "none",
        delay: 16000,
        startwidth: 1170,
        startheight: 700,
        hideThumbs: 200,
        thumbWidth: 100,
        thumbHeight: 50,
        thumbAmount: 5,
        navigationType: "bullet",
        navigationArrows: "solo",
        navigationStyle: "preview1",
        touchenabled: "on",
        onHoverStop: "on",
        swipe_velocity: 0.7,
        swipe_min_touches: 1,
        swipe_max_touches: 1,
        drag_block_vertical: false,
        parallax: "mouse",
        parallaxBgFreeze: "on",
        parallaxLevels: [7, 4, 3, 2, 5, 4, 3, 2, 1, 0],
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
        spinner: "spinner4",
        stopLoop: "off",
        stopAfterLoops: -1,
        stopAtSlide: -1,
        shuffle: "off",
        autoHeight: "off",
        forceFullWidth: "off",
        hideThumbsOnMobile: "off",
        hideNavDelayOnMobile: 1500,
        hideBulletsOnMobile: "off",
        hideArrowsOnMobile: "off",
        hideThumbsUnderResolution: 0,
        hideSliderAtLimit: 0,
        hideCaptionAtLimit: 0,
        hideAllCaptionAtLilmit: 0,
        startWithSlide: 0,
        videoJsPath: "rs-plugin/videojs/",
        fullScreenOffsetContainer: ""
    });

    $(".carousel-prop").owlCarousel({
        autoplay: true,
        autoplayTimeout: 3000,
        smartSpeed: 2000,
        loop: true,
        dots: true,
        nav: false,
        items: 4,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 2,
                nav: false
            },
            1000: {
                items: 3,
                nav: true,
                loop: false
            }
        }
    });

    $(".carousel").owlCarousel({
        autoplay: true,
        autoplayTimeout: 3000,
        smartSpeed: 2000,
        loop: false,
        dots: false,
        nav: true,
        margin: 0,
        items: 3
    });

    $(".carousel-client").owlCarousel({
        autoplay: true,
        autoplayTimeout: 3000,
        smartSpeed: 2000,
        loop: false,
        dots: false,
        nav: true,
        margin: 30,
        items: 5,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 3,
                nav: true
            },
            1000: {
                items: 5,
                nav: true,
                loop: false
            }
        }
    });

});
</script>
</body>
