
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
      $(".serviceSlider").slick({
        slidesToShow:5,
        slidesToScroll: 1,
        dots: true,
        arrows:true,
        // autoplay:true,
        prevArrow: $('.prev'),
        nextArrow: $('.next'),
        responsive: [
          {
            breakpoint: 1199,
            settings: {
                slidesToShow:3,
            }
        },
          {
              breakpoint: 992,
              settings: {
                  slidesToShow: 2,
              }
          },
          {
            breakpoint: 575,
            settings: {
              dots:false,
              slidesToShow: 1,
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
        dots: true,
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
            breakpoint: 575,
            settings: {
              dots:false,
              slidesToShow: 1,
            }
          }
      ]
    
    });
    });


    // ===========Testimonial Slider=====================

    $(document).ready(function(){
      $(".blogSlider").slick({
        slidesToShow:4,
        slidesToScroll: 1,
        dots: true,
        arrows:true,
        autoplay:true,
        prevArrow: $('.prev2'),
        nextArrow: $('.next2'),
        responsive: [
          {
            breakpoint: 1199,
            settings: {
                slidesToShow:3,
            }
        },
          {
            breakpoint: 768,
            settings: {
                slidesToShow:2,
            }
        },
          
          {
            breakpoint: 575,
            settings: {
              dots:false,
              slidesToShow: 1,
            }
          }
      ]
    
    });
    });
    // =========== Sub Services =====================

    $(document).ready(function(){
      $(".step-slider").slick({
        slidesToShow:4,
        slidesToScroll: 1,
        dots: false,
        arrows:true,
        autoplay:true,
        prevArrow: $('.prev3'),
        nextArrow: $('.next3'),
        responsive: [
          {
            breakpoint: 1199,
            settings: {
                slidesToShow:3,
            }
        },
          {
            breakpoint: 768,
            settings: {
                slidesToShow:2,
            }
        },
          
          {
            breakpoint: 575,
            settings: {
              dots:false,
              slidesToShow: 1,
            }
          }
      ]
    
    });
    });
    // =========== Focus slider About Page=====================

    $(document).ready(function(){
      $(".focus-slider-wrapper").slick({
        slidesToShow:4,
        slidesToScroll: 1,
        dots: true,
        arrows:true,
        autoplay:true,
        prevArrow: $('.prev4'),
        nextArrow: $('.next4'),
        responsive: [
          {
            breakpoint: 1199,
            settings: {
                slidesToShow:3,
            }
        },
          {
            breakpoint: 768,
            settings: {
                slidesToShow:2,
            }
        },
          
          {
            breakpoint: 575,
            settings: {
              dots:false,
              slidesToShow: 1,
            }
          }
      ]
    
    });
    });
    // =========== Team Slider About Page=====================

    $(document).ready(function(){
      $(".team-slider").slick({
        slidesToShow:4,
        slidesToScroll: 1,
        dots: false,
        arrows:true,
        autoplay:false,
        prevArrow: $('.prev5'),
        nextArrow: $('.next5'),
        responsive: [
          {
            breakpoint: 1199,
            settings: {
                slidesToShow:3,
            }
        },
          {
            breakpoint: 768,
            settings: {
                slidesToShow:2,
            }
        },
          
          {
            breakpoint: 575,
            settings: {
              dots:false,
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
// function initializePhoneInput(selector) {	
//   const shippingFormWrapper = document.querySelector(selector + ' .phone_number');	
//   if (shippingFormWrapper !== null) {	
//       const phoneInput = window.intlTelInput(shippingFormWrapper, {	
//           preferredCountries: ["ae", "in"],	
//           excludeCountries: ["ru", "cu", "sy", "ir", "sd", "ss", "kp", "ye", "KR", "UA"],	
//           utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",	
//       });	
//       $(selector + ' .phone_number').on('blur', function () {	
//           contactPhone(selector, phoneInput);	
//       });	
//   }	
// }	
// function contactPhone(selector, phoneInput) {	
//   const phoneNumber = phoneInput.getNumber();	
//   $(selector + ' .phone_number').val(phoneNumber);	
// }	
// initializePhoneInput(".careerPopupBox");	
// initializePhoneInput(".contact-enquiry");	




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
          var description = document.querySelector('.about-page .about-company-long-description');
          description.classList.toggle('expanded');
          if (description.classList.contains('expanded')) {
              this.innerHTML = 'Show Less <svg xmlns="http://www.w3.org/2000/svg" width="71" height="16" viewBox="0 0 71 16" fill="none"> <path d="M70.7071 8.70711C71.0976 8.31658 71.0976 7.68342 70.7071 7.29289L64.3431 0.928932C63.9526 0.538408 63.3195 0.538408 62.9289 0.928932C62.5384 1.31946 62.5384 1.95262 62.9289 2.34315L68.5858 8L62.9289 13.6569C62.5384 14.0474 62.5384 14.6805 62.9289 15.0711C63.3195 15.4616 63.9526 15.4616 64.3431 15.0711L70.7071 8.70711ZM0 9H70V7H0V9Z" fill="#D400F8"></path> </svg>';
          } else {
              this.innerHTML = 'Read More <svg xmlns="http://www.w3.org/2000/svg" width="71" height="16" viewBox="0 0 71 16" fill="none"> <path d="M70.7071 8.70711C71.0976 8.31658 71.0976 7.68342 70.7071 7.29289L64.3431 0.928932C63.9526 0.538408 63.3195 0.538408 62.9289 0.928932C62.5384 1.31946 62.5384 1.95262 62.9289 2.34315L68.5858 8L62.9289 13.6569C62.5384 14.0474 62.5384 14.6805 62.9289 15.0711C63.3195 15.4616 63.9526 15.4616 64.3431 15.0711L70.7071 8.70711ZM0 9H70V7H0V9Z" fill="#D400F8"></path> </svg>';
          }
      });
  }
});

// ======================validations======================
document.addEventListener("DOMContentLoaded", function() {
document.getElementById('enquiryForm').addEventListener('submit', function(event) {
  let valid = true;

  // Location validation
  const location = document.getElementById('location');
  const locationError = document.getElementById('locationError');
  if (location.value === "") {
      location.classList.add('error');
      locationError.style.display = 'block';
      valid = false;
  } else {
      location.classList.remove('error');
      locationError.style.display = 'none';
  }

  // Name validation
  const name = document.getElementById('name');
  const nameError = document.getElementById('nameError');
  if (name.value.trim() === "") {
      name.classList.add('error');
      nameError.style.display = 'block';
      valid = false;
  } else {
      name.classList.remove('error');
      nameError.style.display = 'none';
  }

  // Email validation
  const email = document.getElementById('email');
  const emailError = document.getElementById('emailError');
  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailPattern.test(email.value)) {
      email.classList.add('error');
      emailError.style.display = 'block';
      valid = false;
  } else {
      email.classList.remove('error');
      emailError.style.display = 'none';
  }

  // Phone validation
  const phone = document.getElementById('phone');
  const phoneError = document.getElementById('phoneError');
  if (phone.value.trim() === "") {
      phone.classList.add('error');
      phoneError.style.display = 'block';
      valid = false;
  } else {
      phone.classList.remove('error');
      phoneError.style.display = 'none';
  }

  // Service validation
  const service = document.getElementById('service');
  const serviceError = document.getElementById('serviceError');
  if (service.value === "") {
      service.classList.add('error');
      serviceError.style.display = 'block';
      valid = false;
  } else {
      service.classList.remove('error');
      serviceError.style.display = 'none';
  }

  // Message validation
  const message = document.getElementById('message');
  const messageError = document.getElementById('messageError');
  if (message.value.trim() === "") {
      message.classList.add('error');
      messageError.style.display = 'block';
      valid = false;
  } else {
      message.classList.remove('error');
      messageError.style.display = 'none';
  }

  if (!valid) {
      event.preventDefault();
  }
});

});

// ==========================service form validation============================================
document.addEventListener("DOMContentLoaded", function() {
document.getElementById('serviceEnquiryForm2').addEventListener('submit', function(event) {
  let valid = true;

  // Name validation
  const name = document.getElementById('name2');
  const nameError = document.getElementById('nameError2');
  if (name.value.trim() === "") {
      name.classList.add('error');
      nameError.style.display = 'block';
      valid = false;
  } else {
      name.classList.remove('error');
      nameError.style.display = 'none';
  }

  // Email validation
  const email = document.getElementById('email2');
  const emailError = document.getElementById('emailError2');
  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailPattern.test(email.value)) {
      email.classList.add('error');
      emailError.style.display = 'block';
      valid = false;
  } else {
      email.classList.remove('error');
      emailError.style.display = 'none';
  }

  // Phone validation
  const phone = document.getElementById('phone2');
  const phoneError = document.getElementById('phoneError2');
  if (phone.value.trim() === "") {
      phone.classList.add('error');
      phoneError.style.display = 'block';
      valid = false;
  } else {
      phone.classList.remove('error');
      phoneError.style.display = 'none';
  }

  // Service validation
  const service = document.getElementById('service2');
  const serviceError = document.getElementById('serviceError2');
  if (service.value === "") {
      service.classList.add('error');
      serviceError.style.display = 'block';
      valid = false;
  } else {
      service.classList.remove('error');
      serviceError.style.display = 'none';
  }

  // Message validation
  const message = document.getElementById('message2');
  const messageError = document.getElementById('messageError2');
  if (message.value.trim() === "") {
      message.classList.add('error');
      messageError.style.display = 'block';
      valid = false;
  } else {
      message.classList.remove('error');
      messageError.style.display = 'none';
  }

  if (!valid) {
      event.preventDefault();
  }
});
});








// ===============feedback
document.addEventListener("DOMContentLoaded", function() {
  document.getElementById('complaintForm').addEventListener('submit', function(event) {
      let valid = true;

      // Name validation (Optional)
      const name = document.getElementById('name');
      const nameError = document.getElementById('nameError');
      if (name.value.trim() === "") {
          name.classList.remove('error');
          nameError.style.display = 'block';
      } else {
          name.classList.remove('error');
          nameError.style.display = 'none';
      }

      // NDIS number validation
      const number = document.getElementById('number');
      const numberError = document.getElementById('numberError');
      if (number.value.trim() === "") {
          number.classList.add('error');
          numberError.style.display = 'block';
          valid = false;
      } else {
          number.classList.remove('error');
          numberError.style.display = 'none';
      }

      // Message validation
      const message = document.getElementById('message');
      const messageError = document.getElementById('messageError');
      if (message.value.trim() === "") {
          message.classList.add('error');
          messageError.style.display = 'block';
          valid = false;
      } else {
          message.classList.remove('error');
          messageError.style.display = 'none';
      }

      // Complaint validation
      const complaint = document.getElementById('complaint');
      const complaintError = document.getElementById('complaintError');
      if (complaint.value.trim() === "") {
          complaint.classList.add('error');
          complaintError.style.display = 'block';
          valid = false;
      } else {
          complaint.classList.remove('error');
          complaintError.style.display = 'none';
      }

      // Work validation
      const work = document.getElementById('work');
      const workError = document.getElementById('workError');
      if (work.value.trim() === "") {
          work.classList.add('error');
          workError.style.display = 'block';
          valid = false;
      } else {
          work.classList.remove('error');
          workError.style.display = 'none';
      }

      // Documents validation
      const documents = document.getElementById('documents');
      const documentsError = document.getElementById('documentsError');
      if (documents.value === "") {
          documents.classList.add('error');
          documentsError.style.display = 'block';
          valid = false;
      } else {
          documents.classList.remove('error');
          documentsError.style.display = 'none';
      }

      // Organisation validation
      const organisation = document.getElementById('organisation');
      const organisationError = document.getElementById('organisationError');
      if (organisation.value === "") {
          organisation.classList.add('error');
          organisationError.style.display = 'block';
          valid = false;
      } else {
          organisation.classList.remove('error');
          organisationError.style.display = 'none';
      }

      // Support validation
      const support = document.getElementById('support');
      const supportError = document.getElementById('supportError');
      if (support.value === "") {
          support.classList.add('error');
          supportError.style.display = 'block';
          valid = false;
      } else {
          support.classList.remove('error');
          supportError.style.display = 'none';
      }

      if (!valid) {
          event.preventDefault();
      }
  });
});