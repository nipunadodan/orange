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

//function ajaxDirect() has moved to the orange-core

/*========================================================================*/

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

/*===================================================================================*/
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
