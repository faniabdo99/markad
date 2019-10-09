//Nice Scroll Plugin in CSS
$("body").niceScroll({
  cursorcolor:"#FCBA3B",
  cursorwidth:"7px",
  background:"rgba(0,0,0,0)",
  cursorborderradius:2
});

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
  });
