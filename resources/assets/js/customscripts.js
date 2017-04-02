// Social Button Pop-Up Manager

        var popupSize = {
            width: 780
            , height: 550
        };
        $(document).on('click', '.social-buttons > a', function (e) {
            var verticalPos = Math.floor(($(window).width() - popupSize.width) / 2)
                , horisontalPos = Math.floor(($(window).height() - popupSize.height) / 2);
            var popup = window.open($(this).prop('href'), 'social', 'width=' + popupSize.width + ',height=' + popupSize.height + ',left=' + verticalPos + ',top=' + horisontalPos + ',location=0,menubar=0,toolbar=0,status=0,scrollbars=1,resizable=1');
            if (popup) {
                popup.focus();
                e.preventDefault();
            }
        });


// Scrollspy-Navbar-Jquery
$(document).ready(function(){
  // Add scrollspy to <body>
  $('body').scrollspy({target: ".navbar", offset: 200});   

  // Add smooth scrolling on all links inside the navbar
  $("#sitenav a").on('click', function(event) {
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
    }  // End if
  });
});