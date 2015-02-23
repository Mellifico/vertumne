// Joyride demo
$('#start-jr').on('click', function() {
  $(document).foundation('joyride','start');
});

//slick
$('.slider-basic').slick({
	  autoplay: true,
	  autoplaySpeed: 4000,
	  arrows:false,
	  dots: false
	});

//lettering
$(".lettres").lettering();

// fittext
$("#big").fitText(1.2);

// masonry + imagesloaded

var $container = $('#msnry-gallery').masonry();
// layout Masonry again after all images have loaded
$container.imagesLoaded( function() {
  $container.masonry({
  	itemSelector: '.item'
  });
});

// magnific popup
$('.galerie').magnificPopup({
  delegate: 'a', // child items selector, by clicking on it popup will open
  type: 'image',
    gallery:{
    enabled:true
  }
  // other options
});

// SKROLLR
    var s = skrollr.init();

// ANIMSITION
$('.animsition').animsition({
  
    inClass               :   'fade-in-up-sm',
    outClass              :   'fade-out-up-lg',
    inDuration            :    1500,
    outDuration           :    1500,
    linkElement           :   '.top-bar a',
    // e.g. linkElement   :   'a:not([target="_blank"]):not([href^=#])'
    loading               :    true,
    loadingParentElement  :   'body', //animsition wrapper element
    loadingClass          :   'animsition-loading',
    unSupportCss          : [ 'animation-duration',
                              '-webkit-animation-duration',
                              '-o-animation-duration'
                            ],
    //"unSupportCss" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
    //The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
    
    overlay               :   false,
    
    overlayClass          :   'animsition-overlay-slide',
    overlayParentElement  :   'body'
  });