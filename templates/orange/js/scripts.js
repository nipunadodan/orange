$(document).ready(function(){
    var winHeight = $(window).height();
    var navHeight = $('nav.navbar').outerHeight();
    var footerHeight = $('.footer').outerHeight();

    var sectionHeight = winHeight-navHeight-footerHeight;


    $('.navbar-nav>li>a').on('click', function(){
        $('.navbar-collapse').collapse('hide');
    });


    /* Datetime picker initialisation */
    function datetimeinit(){
        var d = new Date();
        var strDate = d.getFullYear() + "-" + (d.getMonth()+1) + "-" + d.getDate();

        $(".datetime, #datetimepicker").datetimepicker({
            format: "yyyy-mm-dd hh:ii:00.000",
            autoclose: true,
            todayBtn: true,
            pickerPosition: "bottom-left",
            startDate: strDate
        });
    }

    /* Telephone number formatter initialisation */
    function telephone() {
        $("#telephone").intlTelInput({
            // options here
            preferredCountries: ["lk", "us", "gb"],
            separateDialCode: true,
            formatOnDisplay: true,
            autoFormat: true,
            nationalMode: false,
            utilsScript: "templates/orange/js/telutils.js"
        });

        $("#telephone").keyup(function () {
            if ($(this).intlTelInput("isValidNumber")) {
                $(this).css('border-color', 'green');
                $("#phone").removeClass("wrong_no");
                var code = $(this).intlTelInput("getSelectedCountryData").dialCode;

                $('input#countrycode').val(code);
            } else {
                $(this).css('border-color', 'red');
                $("#phone").addClass("wrong_no");
            }
        });
    }

    function moreinfo(){
        $('#signup-info').hide();
        /* airport info button */
        $('#signup-info-button, #signup-info-close').on('click', function () {
            $('form.signup-form').toggle();
            $('div#signup-info').toggle();
            $('#signup-info-button').toggleClass('text-muted text-warning');
            console.log('die');
        });
    }

    /* copy to clipboard */
    function copyTextToClipboard(text) {
        var textArea = document.createElement( "textarea" );
        textArea.value = text;
        document.body.appendChild( textArea );

        textArea.select();

        try {
            var successful = document.execCommand( 'copy' );
            var msg = successful ? 'successful' : 'unsuccessful';
            console.log('Copying text command was ' + msg);
        } catch (err) {
            console.log('Oops, unable to copy');
        }

        document.body.removeChild( textArea );
    }

    function copyText(){
        $('body').on('click', 'i.fa-copy', function (e) {
            e.preventDefault();
            var clipboardText = "";
            clipboardText = $( 'span#refid' ).text();

            copyTextToClipboard( clipboardText );
        });
    }

    /* paste from clipboard */
    function pasteTextFromClipboard(elem){
        var pasteText = document.querySelector(elem);
        pasteText.focus();
        navigator.clipboard.readText()
            .then(text => {
                $('#pasteID').val(text);
            })
            .catch(err => {
                console.error('Failed to read clipboard contents: ', err);
            });
        //console.log('Pasted');
    }

    $('form').on('click', 'i.fa-paste', function (e) {
        e.preventDefault();
        pasteTextFromClipboard('#pasteID'); // paste the content to some element
    });

    /*
     * Replace all SVG images with inline SVG
     */
    function imgtosvg(){
        jQuery('img.svg').each(function(){
            var $img = jQuery(this);
            var imgID = $img.attr('id');
            var imgClass = $img.attr('class');
            var imgURL = $img.attr('src');

            jQuery.get(imgURL, function(data) {
                // Get the SVG tag, ignore the rest
                var $svg = jQuery(data).find('svg');

                // Add replaced image's ID to the new SVG
                if(typeof imgID !== 'undefined') {
                    $svg = $svg.attr('id', imgID);
                }
                // Add replaced image's classes to the new SVG
                if(typeof imgClass !== 'undefined') {
                    $svg = $svg.attr('class', imgClass+' replaced-svg');
                }

                // Remove any invalid XML tags as per http://validator.w3.org
                $svg = $svg.removeAttr('xmlns:a');

                // Check if the viewport is set, if the viewport is not set the SVG wont't scale.
                if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
                    $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
                }

                // Replace image with new SVG
                $img.replaceWith($svg);

            }, 'xml');
        });
    }

    /*----------------------------------------------------------------------------------------------*/

    var mySwiper = new Swiper ('.slider1', {
        // Optional parameters
        slidesPerView: '1',
        direction: 'horizontal',
        loop: true,

        // If we need pagination
        /*pagination: {
            el: '.vtype-pagination',
            clickable: true,
        },*/

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-custom-next',
            prevEl: '.swiper-custom-prev',
        },

        slidesPerView :'auto',
        centeredSlides: true,
    });


    // Add smooth scrolling on all links inside the navbar
    $("#home-page-menu a").on('click', function(event) {
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            console.log(hash);
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function(){
                //window.location.hash = hash;
            });
        }
    });

    /* ================================================================== */

    /* main init */
    function bigInit(){
        imgtosvg();
        datetimeinit();
        telephone();
        copyTextToClipboard();
        copyText();
        moreinfo();
    }

    bigInit();

}); //final close
