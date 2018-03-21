function myMap()
{
  myCenter=new google.maps.LatLng(29.732785,-95.4919343);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}

// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" red", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " pullDown red";
}

//document.getElementById("myLink").click();

function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

function openHotelMenu(element) {
    var x = document.getElementById("hideMenu");
    if (x.style.display === "none") {
        x.style.display = "block";
        jQuery('#hideMenu').addClass("slideDown");
        element.innerHTML = "Close Menu";
    } else {
        x.style.display = "none";
        jQuery('#hideMenu').removeClass('slideDown');
        element.innerHTML = "Open Menu";
    }
}

jQuery(window).scroll(function() {
    jQuery('#animate2').each(function(){
    var imagePos = jQuery(this).offset().top;

    var topOfWindow = jQuery(window).scrollTop();
      if (imagePos < topOfWindow+400) {
        jQuery(this).addClass("slideLeft");
      }
    });
  });

jQuery(window).scroll(function() {
    jQuery('#animate1').each(function(){
    var imagePos = jQuery(this).offset().top;

    var topOfWindow = jQuery(window).scrollTop();
      if (imagePos < topOfWindow+400) {
        jQuery(this).addClass("slideRight");
      }
    });
  });

/*jQuery(window).scroll(function() {
    jQuery('.animate3').each(function(){
    var imagePos = jQuery(this).offset().top;

    var topOfWindow = jQuery(window).scrollTop();
      if (imagePos < topOfWindow+400) {
        jQuery(this).addClass("slideDown");
      }
    });
  });*/

  function animate3() {
      jQuery('.animate3').addClass("slideDown");
  }

//smooth scroll
jQuery(document).ready(function(){
  // Add smooth scrolling to all links
  jQuery(".a-anchor1").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      jQuery('html, body').animate({
        scrollTop: jQuery(hash).offset().top
      }, 1200, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });

  jQuery(".smoothScroll").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      jQuery('html, body').animate({
        scrollTop: jQuery(hash).offset().top
      }, 1200, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});