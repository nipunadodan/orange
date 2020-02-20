var icons = {
    'success' : 'la la-check-circle',
    'danger' : 'la la-times-circle',
    'info' : 'la la-info-circle',
    'warning' : 'la la-exclamation-triangle'
};

function responseModal(status, message){
    $('#response-modal .modal-content').attr('class','modal-content border-0 bg-'+status);
    $('#response-modal #response-modal-title').html(status);
    $('#response-modal #response-modal-icon').attr('class', icons[status]);
    $('#response-modal .modal-body').html("<span class=''>"+message.replace(/!/g, "")+"</span>");
    $('#response-modal').modal('toggle');
    if(debug === true)
        console.log(icons[status]);
}

function ajaxDirect(process, serialized, silent='No', callback=null, method='post'){
    if(debug === true)
        console.log('ajax-init~'+process);
    if(silent==='No'){
        var spinner = ' <i class="la la-circle-o-notch la-spin" id="spinner"></i>';
        $('.loading').html(spinner);
        $('input, select, button, input[type="submit').prop('disabled', true);
    }

    $.ajax({
        data: serialized,
        type: method,
        url: site_url + 'ajax.php?process=' + process+'-process',
        success: function (response) {
            if(debug === true)
                console.log(response);
            var json = JSON.parse(response);
            dyn_functions[func](json);
            if(silent === 'No'){
                $('input, select, button, input[type="submit"]').prop("disabled", false);
                $('#spinner').remove();
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            if(debug === true) {
                console.log('AJAX call failed.');
                console.log(textStatus + ': ' + errorThrown);
            }
        },
        complete: function () {
            if(debug === true)
                console.log('AJAX call completed');
        }
    });

    return false;
}

/*============================================================================*/

$(document).ready(function () {
    $('#action-menu-wrap').on('click', 'a', function (event) {
        event.preventDefault();

        var thisMenucElem = $(this);
        var menuFunc = thisMenucElem.data('menu-button');
        console.log('menu-action-'+menuFunc+'-triggered');
        before_functions[menuFunc](menuFunc);
    });

    $('form.ajax').on('submit', function (event) {
        event.preventDefault();
        const process = $(this).data('process'); //php process to run
        const callback = $(this).data('callback'); //function to run after the process
        const serializedForm = $(this).serialize();
        const method = $(this).attr('method');
        ajaxDirect(process, serializedForm, 'No', callback, method);
    });
});

/*====================================================================================================================*/
var validate = [];
var after_functions = [];
var before_functions = [];

validate['functionNameHere'] = function () {

};

before_functions['functionNameHere'] = function (){

};

after_functions['functionNameHere'] = function (){

};
/*====================================================================================================================*/
