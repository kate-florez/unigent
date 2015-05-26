
$(function(){
    $(".job-row").on("click", function(){
        $(this).find(".main-cont-text").slideToggle("slow", function(){
          
        });
    });
});
/*
phone.onblur = function () {
    if (isNaN(this.value)) {
        this.className = "error";
        error.innerHTML = 'You entered is not a number. Correct yourself.'
    }
};

phone.onfocus = function () {
    if (this.className == 'error') {
        this.className = "";
        error.innerHTML = "";
    }
};
*/

$(document).ready(function() {
    $('.contact-form input').on('click', function() {
        $('.error-field').hide();
    });
});

function contactForm(form) {  
    var regex_mail = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var regex_phone = /^([0-9-+\(\)\ ]{9,20})$/;   

    if (form.name.value == "") {
         //alert( "Please fill in a name" );
         form.name.focus();
         $('.title-error').text('Please fill in a name').show();
         return false;
    }   
    if (form.email.value == "") {
         //alert( "Please fill in an email address" );
         form.email.focus();
         $('.email-error').text('Please fill in an email').show();
         return false;
    }
    if(!form.email.value.match(regex_mail)) {
          //alert( "Please fill in a valid email address" );
          form.email.focus();
          $('.email-error').text('Please fill in a valid email address').show();
          return false;
    }                    
    if (form.phone.value == "") {
         //alert( "Please fill in a phone number" );
         form.phone.focus();
         $('.phone-error').text('Please fill in a phone number').show();
         return false;
    }   
    if(!form.phone.value.match(regex_phone)) {
          //alert( "Please fill in a valid phone number" );
          form.phone.focus();
          $('.phone-error').text('Please fill in a valid phone number').show();
          return false;
    }  
    if (form.mess.value == "") {
         //alert( "Please fill in a mess" );
         form.mess.focus();
         $('.mess-error').text('Please fill in a mess').show();
         return false;
    }   
}

