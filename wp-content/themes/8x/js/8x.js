//=============================
  // Responsive heading texts
  //=============================


$("h1.text-large").fitText(1.19);
$("h1.text-semi-large").fitText(1.9);


//=============================
  // Collapse menu on click (only for mobile)
  //=============================

$(".navbar-collapse a").click(function(){
$(".navbar-collapse").removeClass("in");
$(".navbar-collapse").css({'height': '0px'}); });



//=============================
  // Main Slider
  //=============================


var owl_slider = $('.slider');
      owl_slider.owlCarousel({
        margin: 0,
		items: 1,
		slideBy: 1,
		nav:false,
		dots:true,
		touchDrag:false,
		mouseDrag:false,
        loop: true,
		autoplay:true,
		autoplaySpeed:200,
	    transitionStyle : "fade"
      });




//=============================
  // Testimonial Carousel
  //=============================


var owl_testimonial = $('.testimonials');
      owl_testimonial.owlCarousel({
        margin: 0,
		items: 1,
		slideBy: 1,
		nav:false,
		touchDrag:false,
		dots:true,
        loop: false,
		autoplay:true,
		autoplaySpeed:600
      });


//=============================
  // Wow Animation
  //=============================

  
var wow = new WOW(
  {
    mobile:false       // trigger animations on mobile devices (default is true)
  }
);
wow.init();


//=============================
  // Audio, video
  //=============================



$('audio, video:not(.video-bg)').mediaelementplayer
({
        features: ['playpause', 'loop', 'progress','current','duration','tracks','volume','fullscreen'],
		alwaysShowControls: true,
		
    });


//=============================
  // Onepage Nav
  //=============================


	
$('.nav').onePageNav({
		begin: function() {
		console.log('start')
		},
		end: function() {
		console.log('stop')
		},
		scrollOffset:50,
		filter: ':not(.no-scroll)'
});


//=============================
  // Masonry / Isotope Blog
  //=============================

  
var $container = $('.isotope')
// initialize Isotope
$container.isotope({
  // options...
  resizable: false, // disable normal resizing
  // set columnWidth to a percentage of container width
  masonry: { columnWidth: $container.width() / 2 }
});

// update columnWidth on window resize
$(window).smartresize(function(){
  $container.isotope({
    // update columnWidth to a percentage of container width
    masonry: { columnWidth: $container.width() / 2 }
  });
});



$(window).load(function(){
 var $container = $('.isotope')
$container.isotope('reLayout');

});

//=============================
  // Load More Posts
  //=============================


$(".counterea").val(1);    
$("#loadmore").click(function(e){
	  e.preventDefault();
    var loader = 'Loading More'
    $(this).html(loader);
      var c = $(".counterea").val();
      if(c < 3)
      {
	 setTimeout(function(){
     $("#loadmore").html('Load More');
	 $.ajax({ type: "GET",   
     url: "./ajax.html",   
     async: false,
     success : function(data)
     { $data=$(data); $container.isotope( 'insert', $data ); }
});
     }, 500);
     
	 var nc = parseInt(c) + 1;
     $(".counterea").val(nc);}
      else
	 {
		 setTimeout(function(){
         $("#loadmore").html('No More Post To Load');
		 $("#loadmore").addClass('disabled');
		 $("#loadmore").off("click");
           }, 500);
      }        
}); 


//=============================
  // Preloader
  //=============================


$(window).load(function(){
  $('#preloader').fadeOut("slow");
});


//=============================
  // Jquery CountDown
  //=============================


$(function () {
	var endTime = "22 Jul 2016 23:59:00";
	var austDay = new Date(endTime);
	$('#countdown').countdown({until: austDay, format:'ODHMS',padZeroes: true, onExpiry: liftOff,});
	$('#year').text(austDay.getFullYear());
});

function liftOff() { 
   $('#countdown').countdown('pause');
} 

//=============================
  // Form validation, custom error message, error msg in tooltip
  //=============================

  
$(".form").validate({
			rules: {
				name: {
					required: true
				},
				email: {
				   required:true,
				   email:true
				},
				subject: {
				   required:true
				},
				message: {
				   required:true
				},
			},
			
			messages: {
				name: "Please enter your name",
				email: "Please enter a valid email address",
				subject: "Please enter a subject",
				message: "Please enter your message",
			},
          
      showErrors: function(errorMap, errorList) {

          // Clean up any tooltips for valid elements
          $.each(this.validElements(), function (index, element) {
              var $element = $(element);

              $element.data("title", "") // Clear the title - there is no error associated anymore
                  .removeClass("error")
                  .tooltip("destroy");
          });

          // Create new tooltips for invalid elements
          $.each(errorList, function (index, error) {
              var $element = $(error.element);

              $element.tooltip("destroy") // Destroy any pre-existing tooltip so we can repopulate with new tooltip content
                  .data("title", error.message)
                  .addClass("error")
                  .tooltip(); // Create a new tooltip based on the error messsage we just set in the title
          });
      },
	  
		submitHandler: function(form) {
		$('.hide-on-success').hide();
        $('.show-on-success').show("slow");
        $("form").trigger('reset');
		var data= $(form).serialize()
        $.ajax({
        type: "POST",
        url: "./sendemail.php",
        data: data,
        success: function(){
        }
        });
    return false;
},	
			
  }); 
  	

$(document).ready(function() {
	$("#boxed").click(function(e) { 
	e.preventDefault();
	$('.page_wrapper').addClass("boxed");
	return false;
	});
	$("#full").click(function(e) { 
	e.preventDefault();
	$('.page_wrapper').removeClass("boxed");
	return false;
	});

    //=============================
    // Sticky Navbar
    //=============================

    $(".navbar").sticky({topSpacing:$('#wpadminbar').length ? 32 : 0});

});


if (Modernizr.touch){
$('.nav li:has(ul) > a').one('touch', function(e){
    e.preventDefault();
}); 
	
} else {
  
}
