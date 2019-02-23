$(document).ready(function(){
    var winHeight = $(window).height();
    var navHeight = $('div.navbar_main').outerHeight();
    var footerHeight = $('.footer').outerHeight();

    var sectionHeight = winHeight-navHeight-footerHeight;

    console.log(winHeight+' '+navHeight+' '+footerHeight);

    $('#content, nav, #height-const').css('min-height',sectionHeight+'px');
    $('#menu-img').css('max-height', sectionHeight+'px');

    winHeight  = 0;
    footerHeight = 0;
    $(window).resize(function() {
        winHeight = $(window).height();
        footerHeight = $('.footer').outerHeight();
    	sectionHeight = winHeight-navHeight-footerHeight;
        console.log(winHeight+' '+navHeight+' '+footerHeight);
        $('#content, nav, #height-const').css('min-height',sectionHeight+'px');

        $('#menu-img').css('max-height', sectionHeight+'px');

        //return sectionHeight;
    });


    //$('#main_nav').hide();
    $('#menu_icon').css('cursor', 'pointer');

    /*$('#menu_icon').click(function(){
        $('#content').toggle();
        //$('#main_nav').toggle();
        $('#main_nav').toggleClass('hidden');
        $('#menu_icon').toggleClass('pe-7s-menu pe-7s-close');
    });*/

    $('#main_nav').hide();

    var i=0;
    $( "#menu_icon" ).click(function() {
        if(i%2==0) {
            $("#content").hide("slide",{direction:"left"}, 100, function () {
                $("#main_nav").toggle("slide", {direction: "right"},100);
                $('body').css('overflow','hidden');
            });
        }else{
            $('body').css('overflow','hidden');
            $("#main_nav").toggle("slide",{direction:"right"}, 100, function () {
                $("#content").show("slide", {direction:"left"},100);
            });
        }
        $('body').css('overflow','auto');
        $('#menu_icon').toggleClass('pe-7s-menu pe-7s-close');
        i++;
    });



    $('#nb-same').on('click touchend', function (e) {
        var name = $('#name').val();
        if($('#nb-same').is(':checked')){
            $('#nb-name').val(name);
        }else{
        	$('#nb-name').val('');
		}
    });
	$('#name').on('keyup touchend', function (e){
        var name = $('#name').val();
        if($('#nb-same').is(':checked')){
            $('#nb-name').val(name);
        }
	});

    $("#telephone").intlTelInput({
        // options here
        preferredCountries: [ "us", "gb","lk" ],
        separateDialCode: false,
        formatOnDisplay: true,
        autoFormat: true,
        nationalMode: false,
        utilsScript: "templates/default/js/telutils.js"
    });

    $("#telephone").keyup(function(){
        if($(this).intlTelInput("isValidNumber")){
            $(this).css('border-color', 'green');
            $("#phone").removeClass("wrong_no");
        }
        else{
            $(this).css('border-color', 'red');
            $("#phone").addClass("wrong_no");
        }
    });

    $('#datetimepicker').datetimepicker({
        'autoclose': true
    });
});