   $( document ).ready(function() {
        $('form').submit(function () {
    var name = $.trim($('#countryName').val());

    if (name  === '') {
        alert('Please enter the country name');
        return false;
    }
    });


    });