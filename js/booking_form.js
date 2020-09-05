// booking form
console.log('booking form')

$(document).ready(function () {
    $('#next1').click(function (e) { 
        e.preventDefault();
        
        $('#step-1').hide();
        $('#step-2').show();
    });

    $('#prev1').click(function (e) { 
        e.preventDefault();
        
        $('#step-2').hide();
        $('#step-1').show();
    });

    $('#next2').click(function (e) { 
        e.preventDefault();
        
        $('#step-2').hide();
        $('#step-3').show();
    });

    $('#prev2').click(function (e) { 
        e.preventDefault();
        
        $('#step-3').hide();
        $('#step-2').show();
    });

});

// form submit
$.ajax({
    type: "post",
    url: "save.php",
    data: $('#feedback_form').serialize(),
    success: function (response) {
        console.log(response);
        console.log($('#vehicle_no').val())
        $('#res').html(response);
    }
});