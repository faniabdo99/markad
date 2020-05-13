$(document).ready(function() {
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
            }, 800, function() {
                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if
    });
    //Navbar Newsletter Toggler
    $('#navbar-newsletter-link').click(function() {
        $('.newsletter-navbar-form').fadeToggle('fast');
    });
    //Home Newsletter Ajax Call
    $('#newsletter-form , #home-newsletter-form').submit(function(e) {
        e.preventDefault();
        var OldButtonValue = $('#join-newsletter').val();
        $('#join-newsletter').val('...');
        $.ajax({
            url: 'newsletter-add',
            type: "POST",
            data: $('#newsletter-form').serialize(),
            success: function(response) {
                $('#join-newsletter').val(OldButtonValue);
                $('.ajax-response').html(response.msg);
                $("#newsletter-form").reset();
            }
        });
    });

    $('#home-join-newsletter').click(function(event) {
        event.preventDefault();
        var OldButtonValue = $('#home-join-newsletter').val();
        $('#home-join-newsletter').val('...');
        $.ajax({
            url: 'newsletter-add',
            type: "POST",
            data: $('#home-newsletter-form').serialize(),
            success: function(response) {
                $('#home-join-newsletter').val(OldButtonValue);
                $('.ajax-response').html(response.msg);
                $("#home-newsletter-form").reset();
            }
        });
    });

    //Contest API
    $.ajax({
      method:"POST",
      url:"https://cors-anywhere.herokuapp.com/http://54.152.164.4:3000/leaderboard/",
      headers: {
        'Access-Control-Allow-Origin': '*',
      },
      success: function(data){
        //Appened the top 5 local people
        var LocalList = $("#local-leaderboard");
        var GlobalList = $("#global-leaderboard");
        var Top5Local = data.local.slice(0,5);
        var Top5Global = data.global.slice(0,5);
        Top5Local.map(i => {
          var UpPoints = i.stats.racesWon + i.stats.tournamentsWon;
          var DownPoints = i.stats.racesLost + (i.stats.tournamentsTotal - i.stats.tournamentsWon);
          LocalList.append('<li class="single-resulte-item"><p class="player-name">'+i.name+'</p><p class="points">'+UpPoints+'/'+DownPoints+'</p></li>');
        });
        Top5Global.map(i => {
          var UpPoints = i.stats.racesWon + i.stats.tournamentsWon;
          var DownPoints = i.stats.racesLost + (i.stats.tournamentsTotal - i.stats.tournamentsWon);
          GlobalList.append('<li class="single-resulte-item"><p class="player-name">'+i.name+'</p><p class="points">'+UpPoints+'/'+DownPoints+'</p></li>');
        });
      },
      error: function(data){
        console.log("Call Failed");
      }
    });
});
