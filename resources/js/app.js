//Navbar Color on Scroll
$(window).scroll(function() {
    var nav = $('#navbar');
    var top = 60;
    if ($(window).scrollTop() >= top) {
        nav.addClass('scrolled');
    } else {
        nav.removeClass('scrolled');
    }
});

$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    // Add smooth scrolling to all links
    $("a").on('click', function(event) {
  
      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();
  
        // Store hash
        var hash = this.hash;
  
        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 800, function(){
  
          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      } // End if
    });
    //Navbar Newsletter Toggler
    $('#navbar-newsletter-link').click(function(){
      $('.newsletter-navbar-form').fadeToggle('fast');
    });
    //Home Newsletter Ajax Call
    $('#newsletter-form').submit(function(e){
      e.preventDefault();
        var OldButtonValue = $('#join-newsletter').val();
        $('#join-newsletter').val('...');
        $.ajax({
          url: 'newsletter-add' ,
          type: "POST",
          data: $('#newsletter-form').serialize(),
          success: function( response ) {
              $('#newsletter-form').val('Submit');
              $('#join-newsletter').val(OldButtonValue);
              $('.ajax-response').html(response.msg);
              document.getElementById("newsletter-form").reset(); 
          }
        });
      });
  });
