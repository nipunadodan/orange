let debug = true;

function modalTrigger(status, message){
    if(status === 'Ok' || status === 'success') {
        status = 'success';
    }else if (status === 'No'){
        status = 'danger';
    }
    $('#response-modal .modal-content').attr('class','modal-content border-0 bg-'+status);
    $('#response-modal .modal-body').html("<span class='text-capitalize'>"+message.replace(/!/g, "")+"</span>");
    $('#response-modal #response-modal-title').html(status);
    $('#response-modal #response-modal-icon').attr('class', icons[status]);
    $('#response-modal').modal('toggle');
    console.log(icons[status]);
}

function ajaxDirect(func, serialized, silent='No', method='post'){
    const process = func + '-process';
    console.log('ajax-direct~'+process);
    if(silent==='No'){
        var spinner = ' <i class="la la-circle-o-notch la-spin" id="spinner"></i>';
        $('.nav-title').after(spinner);
        $('button, input[type="submit"]').attr('disabled','true');
    }

    $.ajax({
        data: serialized,
        type: method,
        url: site_url + 'ajax.php?process=' + process,
        success: function (response) {
            if(debug === true)
                console.log(response);
            var json = JSON.parse(response);
            //console.log(json);
            after_functions[func](json);
            if(silent === 'No'){
                $('button, input[type="submit"]').prop("disabled", false);
                $('#spinner').remove();
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            //console.log('AJAX call failed.');
            //console.log(textStatus + ': ' + errorThrown);
        },
        complete: function () {
            //console.log('AJAX call completed');
        }
    });

    return false;
}

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
        const func = $(this).data('func');
        const serializedForm = $(this).serialize();
        const method = $(this).attr('method');
        ajaxDirect(func, serializedForm, 'No', method);
    });
});