$(document).ready(function(){
    $('form.o1').submit(function(event) {
        event.preventDefault();
        console.log('hi');
        var thisForm = $(this);
        var process = $(this).attr('name')+'-process';
        var process = $(this).attr('name')+'-process';
        var redirectUrl = $(this).data('redirect');
        var reset = $(this).data('reset');
        $(thisForm).next('.message').html('<img src="'+site_url+'templates/big/images/waiting.gif" class="mx-auto d-block" width="80">');

        $.ajax({
            data: thisForm.serialize(),
            type: thisForm.attr('method'),
            url: site_url+'ajax.php?process='+process,
            success: function(response) {
                console.log('response: '+response);
                var res = JSON.parse(response);
                if(res.status == 'success'){
                    if(reset == 'yes'){
                        $(thisForm)[0].reset();
                    }
                }
                $(thisForm).next('.message').show(1000).html('<span class="alert alert-'+res.status+' d-block">'+res.message+'</span>');
                $('.message span').delay(10000).fadeOut(2000, function(){ $('.message span').remove(); });
                if (typeof redirectUrl !== 'undefined') {
                    window.location = redirectUrl;
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                //console.log('AJAX call failed.');
                //console.log(textStatus + ': ' + errorThrown);
            },
            complete: function() {
                //console.log('AJAX call completed');
            }
        });

        return false;
    });
});