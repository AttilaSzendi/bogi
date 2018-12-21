<script type="text/javascript" src="/js/main.js"></script>
<script type="text/javascript" src="/js/cookieconsent.min.js"></script>
<script type="text/javascript">
    window.addEventListener("load", function() {
        window.cookieconsent.initialise({
            "palette": {
                "popup": {
                    "background": "#000000",
                    "text": "#ffffff"
                },
                "button": {
                    "background": "#f1d600",
                    "text": "#000000"
                }
            },
            "position": "bottom-left",
            "content": {
                "message": "This website uses cookies to ensure you get the best experience on our website.",
                "dismiss": "Got it!",
                "link": "More info",
            }
        })
    });
</script>
<script type="text/javascript" src="/js/uikit.min.js"></script>
<script type="text/javascript">
    jQuery(function($){
        $('.jl-search-button').on('click', function(event) {
            setTimeout(function() { $('input[type="search"]').focus() }, 100);
        });
        $('#jl-search-1829680100 .uk-modal-dialog').on('click keyup', function(event) {
            if (event.target == this) {
                UIkit.modal("#jl-search-1829680100").hide();
            }
        })
    });
</script>
<script type="text/javascript">
    jQuery(function($) {
        var a = document.createElement('a');
        a.className += 'back-to-top';
        a.title = 'Back to top';
        a.innerHTML = '<i class="fa fa-angle-double-up"> ';

        document.getElementsByTagName('body')[0].appendChild(a);
        if ($('.back-to-top').length) {
            var scrollTrigger = 100, // px
                backToTop = function() {
                    var scrollTop = $(window).scrollTop();
                    if (scrollTop > scrollTrigger) {
                        $('.back-to-top').removeClass('backHide');
                    } else {
                        $('.back-to-top').addClass('backHide');
                    }
                };
            backToTop();
            $(window).on('scroll', function() {
                backToTop();
            });
            $('.back-to-top').on('click', function(e) {
                e.preventDefault();
                $('html,body').animate({
                    scrollTop: 0
                }, 700);
            });
        }
    });
</script>
<script type="text/javascript" src="/js/jquery.sticky.js"></script>
<script type="text/javascript">
    jQuery( document ).ready(function( $ ) {
        $("#g-navigation").sticky({ topSpacing :0,zIndex: 999  });
    });
</script>
<script type="text/javascript" src="/js/slider.min.js"></script>
<script type="text/javascript" src="/js/slideset.min.js"></script>
<script type="text/javascript" src="/js/lightbox.min.js"></script>