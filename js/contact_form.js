// Contact form Script
$("#contact_form").submit(function (e) {
  
var errors = 0;

var name = $("#name").val();
var email = $("#email").val();
var message = $("#message").val();


if (name =="") {

// $('.error').show();
$('.name label').css({
	'color': '#800000',
	'font-weight':'bold'
});
$("#name").attr("placeholder","Please enter your name");
$('.error').fadeIn('slow');

errors ++;

}

if (email =="") {

// $('.error').show();
$('.email label').css({
	'color': '#800000',
	'font-weight':'bold'
});
$("#email").attr("placeholder","Please enter your email");
$('.error').fadeIn('slow');

errors ++;

}

if (message =="") {

// $('.error').show();
$('.message label').css({
	'color': '#800000',
	'font-weight':'bold'
});
$("#message").attr("placeholder","Please enter your message");
$('.error').fadeIn('slow');

errors ++;

}


if (errors > 0) {
e.preventDefault();
return false
}else {
    
       jQuery('#contact_form').submit( function() {

        $.ajax({
            url     : $(this).attr('action'),
            type    : $(this).attr('method'),
            data    : $(this).serialize(),
            success : function( data ) {
                         alert('Form is successfully submitted');       
                      },
            error   : function(){
                         alert('Something wrong');
                      }
        });

        return false;
    });    
  }

});