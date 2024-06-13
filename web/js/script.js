
// Banner Slider

$(document).ready(function(){
  
  $('.bannerText').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    asNavFor: '.bannerImage',
    autoplay:true,
    fade: true,
    cssEase: 'linear',
    speed: 800,

  });
  $('.bannerImage').slick({
    asNavFor: '.bannerText',
    dots: false,
    arrows: false,
    fade: true,
    cssEase: 'linear',
  });

});

// ===========what we do=====================

    $(document).ready(function(){
      $(".clientSlider").slick({
        slidesToShow:6.9,
        slidesToScroll: 1,
        dots: false,
        arrows:true,
        // autoplay:true,
        prevArrow: $('.prev'),
        nextArrow: $('.next'),
        responsive: [
          {
            breakpoint: 1199,
            settings: {
                slidesToShow:5,
            }
        },
          {
              breakpoint: 992,
              settings: {
                  slidesToShow: 4,
              }
          },
          {
            breakpoint: 575,
            settings: {
              dots:false,
              slidesToShow: 2,
            }
          }
      ]
    
    });
    });
// ===========Testimonial Slider=====================

    $(document).ready(function(){
      $(".testimonialSlider").slick({
        slidesToShow:3,
        slidesToScroll: 1,
        dots: false,
        arrows:true,
        autoplay:true,
        prevArrow: $('.prev1'),
        nextArrow: $('.next1'),
        responsive: [
          {
            breakpoint: 1199,
            settings: {
                slidesToShow:2,
            }
        },
          
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 1,
            }
          }
      ]
    
    });
    });
// ======================Testimonial Rating==========================
$(document).ready(function() {
  $(".my-rating-readonly").starRating({
      starSize: 18,
      initialRating: 5, 
      useFullStars: true ,
      readOnly: true,
  });
});






// =====================Check Out Intl Tel Input================================================	
function initializePhoneInput(selector) {	
  const shippingFormWrapper = document.querySelector(selector + ' .phone_number');	
  if (shippingFormWrapper !== null) {	
      const phoneInput = window.intlTelInput(shippingFormWrapper, {	
          preferredCountries: ["ae", "in"],	
          excludeCountries: ["ru", "cu", "sy", "ir", "sd", "ss", "kp", "ye", "KR", "UA"],	
          utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",	
      });	
      $(selector + ' .phone_number').on('blur', function () {	
          contactPhone(selector, phoneInput);	
      });	
  }	
}	
function contactPhone(selector, phoneInput) {	
  const phoneNumber = phoneInput.getNumber();	
  $(selector + ' .phone_number').val(phoneNumber);	
}	
initializePhoneInput(".contact-enquiry");	




window.addEventListener('scroll', function() {
  var header = document.getElementById('header');
  if (window.scrollY > 100) {
      header.classList.add('scrolled');
  } else {
      header.classList.remove('scrolled');
  }
});


// ================== Read more button===============================
document.addEventListener("DOMContentLoaded", function() {
  var readMoreBtn = document.getElementById('read-more-btn');
  if (readMoreBtn) {
      readMoreBtn.addEventListener('click', function(event) {
          event.preventDefault();
          var description = document.querySelector('.aboutIntroDescriptionLong');
          description.classList.toggle('expanded');
          if (description.classList.contains('expanded')) {
              this.innerHTML = 'Show Less <svg xmlns="http://www.w3.org/2000/svg" width="71" height="16" viewBox="0 0 71 16" fill="none"> <path d="M70.7071 8.70711C71.0976 8.31658 71.0976 7.68342 70.7071 7.29289L64.3431 0.928932C63.9526 0.538408 63.3195 0.538408 62.9289 0.928932C62.5384 1.31946 62.5384 1.95262 62.9289 2.34315L68.5858 8L62.9289 13.6569C62.5384 14.0474 62.5384 14.6805 62.9289 15.0711C63.3195 15.4616 63.9526 15.4616 64.3431 15.0711L70.7071 8.70711ZM0 9H70V7H0V9Z" fill="#07725B"/> </svg>';
          } else {
              this.innerHTML = 'Read More <svg xmlns="http://www.w3.org/2000/svg" width="71" height="16" viewBox="0 0 71 16" fill="none"> <path d="M70.7071 8.70711C71.0976 8.31658 71.0976 7.68342 70.7071 7.29289L64.3431 0.928932C63.9526 0.538408 63.3195 0.538408 62.9289 0.928932C62.5384 1.31946 62.5384 1.95262 62.9289 2.34315L68.5858 8L62.9289 13.6569C62.5384 14.0474 62.5384 14.6805 62.9289 15.0711C63.3195 15.4616 63.9526 15.4616 64.3431 15.0711L70.7071 8.70711ZM0 9H70V7H0V9Z" fill="#07725B"/> </svg>';
          }
      });
  }
});

// ======================Abou Tab======================
document.getElementById('missionButton').addEventListener('click', function() {
  document.querySelector('.mission').classList.add('active');
  document.querySelector('.vision').classList.remove('active');
  this.classList.add('active');
  document.getElementById('visionButton').classList.remove('active');
});

document.getElementById('visionButton').addEventListener('click', function() {
  document.querySelector('.vision').classList.add('active');
  document.querySelector('.mission').classList.remove('active');
  this.classList.add('active');
  document.getElementById('missionButton').classList.remove('active');
});

