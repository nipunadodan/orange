$(document).ready(function(){
    $('body').on('submit', 'form.o1', function(event) {
        event.preventDefault();
        console.log('hi');
        var thisForm = $(this);
        var process = $(this).attr('name')+'-process';
        var redirectUrl = $(this).data('redirect');
        var reset = $(this).data('reset');
        $(thisForm).next('.message').html('<img src="'+site_url+'resources/images/waiting.gif" class="mx-auto d-block" width="80">');

        $.ajax({
            data: thisForm.serialize(),
            type: thisForm.attr('method'),
            url: site_url+'ajax.php?process='+process,
            success: function(response) {
                console.log('response: '+response);
                // Do something here
                // var res = JSON.parse(response);
                var res = JSON.parse(response);
                if(res.status === 'success'){
                    /* Reset after the response came if declared to reset */
                    if(reset == 'yes'){
                        $(thisForm)[0].reset();
                        /* add parameters to redirect URL */
                        if (typeof res.response_id !== 'undefined' && typeof redirectUrl !== 'undefined' ) {
                            redirectUrl += '&id='+res.response_id;
                        }
                    }
                }
                /* Show response message */
                $(thisForm).next('.message').show(1000).html('<span class="alert alert-'+res.status+' d-block">'+res.message+'</span>');

                /* Hide response message after a certain time. Default 10s */
                $('.message span').delay(10000).fadeOut(2000, function(){ $('.message span').remove(); });

                /* Redirect after the response came if declared to redirect */
                if(res.status === 'success') {
                    if (typeof redirectUrl !== 'undefined') {
                        //setTimeout(window.location = redirectUrl, 10000);
                        setTimeout(function (e) {
                            window.location.href = redirectUrl;
                        }, 6000)
                    }
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
