// Banner Slider

$(document).ready(function () {
  $(".bannerText").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    asNavFor: ".bannerImage",
    autoplay: true,
    fade: true,
    cssEase: "linear",
    speed: 800,
  });
  $(".bannerImage").slick({
    asNavFor: ".bannerText",
    dots: false,
    arrows: false,
    fade: true,
    cssEase: "linear",
  });
});

// ===========what we do=====================

$(document).ready(function () {
  $(".clientSlider").slick({
    slidesToShow: 7,
    slidesToScroll: 1,
    dots: false,
    arrows: true,
    infinite: !0,
    autoplay: !0,
    autoplaySpeed: 0,
    speed: 3000,
    variableWidth: !0,
    cssEase: "linear",
    prevArrow: $(".prev"),
    nextArrow: $(".next"),
    responsive: [
      {
        breakpoint: 1199,
        settings: {
          slidesToShow: 5,
        },
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 4,
        },
      },
      {
        breakpoint: 575,
        settings: {
          dots: false,
          slidesToShow: 2,
        },
      },
    ],
  });
});
// ===========Testimonial Slider=====================

$(document).ready(function () {
  $(".testimonialSlider").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: false,
    arrows: true,
    cssEase: "linear",
    autoplay: true,
    prevArrow: $(".prev1"),
    nextArrow: $(".next1"),
    responsive: [
      {
        breakpoint: 1199,
        settings: {
          slidesToShow: 2,
        },
      },

      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });
});
// ======================Testimonial Rating==========================
$(document).ready(function () {
  $(".my-rating-readonly").starRating({
    starSize: 18,
    initialRating: 5,
    useFullStars: true,
    readOnly: true,
  });
});

// =====================Check Out Intl Tel Input================================================
function initializePhoneInput(selector) {
  const shippingFormWrapper = document.querySelector(
    selector + " .phone_number"
  );
  if (shippingFormWrapper !== null) {
    const phoneInput = window.intlTelInput(shippingFormWrapper, {
      preferredCountries: ["ae", "in"],
      excludeCountries: [
        "ru",
        "cu",
        "sy",
        "ir",
        "sd",
        "ss",
        "kp",
        "ye",
        "KR",
        "UA",
      ],
      utilsScript:
        "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });
    $(selector + " .phone_number").on("blur", function () {
      contactPhone(selector, phoneInput);
    });
  }
}
function contactPhone(selector, phoneInput) {
  const phoneNumber = phoneInput.getNumber();
  $(selector + " .phone_number").val(phoneNumber);
}
initializePhoneInput(".contact-form");
initializePhoneInput(".careerPopupBox");
initializePhoneInput(".shipping-cta");

window.addEventListener("scroll", function () {
  var header = document.getElementById("header");
  if (window.scrollY > 100) {
    header.classList.add("scrolled");
  } else {
    header.classList.remove("scrolled");
  }
});

// ================== Read more button===============================
document.addEventListener("DOMContentLoaded", function () {
  var readMoreBtn = document.getElementById("read-more-btn");
  if (readMoreBtn) {
    readMoreBtn.addEventListener("click", function (event) {
      event.preventDefault();
      var description = document.querySelector(".aboutIntroDescriptionLong");
      description.classList.toggle("expanded");
      if (description.classList.contains("expanded")) {
        this.innerHTML =
          'Show Less <svg xmlns="http://www.w3.org/2000/svg" width="71" height="16" viewBox="0 0 71 16" fill="none"> <path d="M70.7071 8.70711C71.0976 8.31658 71.0976 7.68342 70.7071 7.29289L64.3431 0.928932C63.9526 0.538408 63.3195 0.538408 62.9289 0.928932C62.5384 1.31946 62.5384 1.95262 62.9289 2.34315L68.5858 8L62.9289 13.6569C62.5384 14.0474 62.5384 14.6805 62.9289 15.0711C63.3195 15.4616 63.9526 15.4616 64.3431 15.0711L70.7071 8.70711ZM0 9H70V7H0V9Z" fill="#07725B"/> </svg>';
      } else {
        this.innerHTML =
          'Read More <svg xmlns="http://www.w3.org/2000/svg" width="71" height="16" viewBox="0 0 71 16" fill="none"> <path d="M70.7071 8.70711C71.0976 8.31658 71.0976 7.68342 70.7071 7.29289L64.3431 0.928932C63.9526 0.538408 63.3195 0.538408 62.9289 0.928932C62.5384 1.31946 62.5384 1.95262 62.9289 2.34315L68.5858 8L62.9289 13.6569C62.5384 14.0474 62.5384 14.6805 62.9289 15.0711C63.3195 15.4616 63.9526 15.4616 64.3431 15.0711L70.7071 8.70711ZM0 9H70V7H0V9Z" fill="#07725B"/> </svg>';
      }
    });
  }
});

// ======================About Tab======================
$(document).ready(function () {
  var missionButton = document.getElementById("missionButton");
  var visionButton = document.getElementById("visionButton");

  if (missionButton) {
    missionButton.addEventListener("click", function () {
      document.querySelector(".mission").classList.add("active");
      document.querySelector(".vision").classList.remove("active");
      this.classList.add("active");
      visionButton.classList.remove("active");
    });
  }

  if (visionButton) {
    visionButton.addEventListener("click", function () {
      document.querySelector(".vision").classList.add("active");
      document.querySelector(".mission").classList.remove("active");
      this.classList.add("active");
      missionButton.classList.remove("active");
    });
  }
});

// ========================== Calculator ====================================
document.addEventListener("DOMContentLoaded", function () {
  const countries = [
    { name: "Afghanistan", code: "AF" },
    { name: "Albania", code: "AL" },
    { name: "Algeria", code: "DZ" },
    { name: "Andorra", code: "AD" },
    { name: "Angola", code: "AO" },
    { name: "Argentina", code: "AR" },
    { name: "Armenia", code: "AM" },
    { name: "Australia", code: "AU" },
    { name: "Austria", code: "AT" },
    { name: "Azerbaijan", code: "AZ" },
    { name: "Bahamas", code: "BS" },
    { name: "Bahrain", code: "BH" },
    { name: "Bangladesh", code: "BD" },
    { name: "Barbados", code: "BB" },
    { name: "Belarus", code: "BY" },
    { name: "Belgium", code: "BE" },
    { name: "Belize", code: "BZ" },
    { name: "Benin", code: "BJ" },
    { name: "Bhutan", code: "BT" },
    { name: "Bolivia", code: "BO" },
    { name: "Bosnia and Herzegovina", code: "BA" },
    { name: "Botswana", code: "BW" },
    { name: "Brazil", code: "BR" },
    { name: "Brunei", code: "BN" },
    { name: "Bulgaria", code: "BG" },
    { name: "Burkina Faso", code: "BF" },
    { name: "Burundi", code: "BI" },
    { name: "Cambodia", code: "KH" },
    { name: "Cameroon", code: "CM" },
    { name: "Canada", code: "CA" },
    { name: "Cape Verde", code: "CV" },
    { name: "Central African Republic", code: "CF" },
    { name: "Chad", code: "TD" },
    { name: "Chile", code: "CL" },
    { name: "China", code: "CN" },
    { name: "Colombia", code: "CO" },
    { name: "Comoros", code: "KM" },
    { name: "Congo", code: "CG" },
    { name: "Costa Rica", code: "CR" },
    { name: "Croatia", code: "HR" },
    { name: "Cuba", code: "CU" },
    { name: "Cyprus", code: "CY" },
    { name: "Czech Republic", code: "CZ" },
    { name: "Denmark", code: "DK" },
    { name: "Djibouti", code: "DJ" },
    { name: "Dominica", code: "DM" },
    { name: "Dominican Republic", code: "DO" },
    { name: "Ecuador", code: "EC" },
    { name: "Egypt", code: "EG" },
    { name: "El Salvador", code: "SV" },
    { name: "Equatorial Guinea", code: "GQ" },
    { name: "Eritrea", code: "ER" },
    { name: "Estonia", code: "EE" },
    { name: "Eswatini", code: "SZ" },
    { name: "Ethiopia", code: "ET" },
    { name: "Fiji", code: "FJ" },
    { name: "Finland", code: "FI" },
    { name: "France", code: "FR" },
    { name: "Gabon", code: "GA" },
    { name: "Gambia", code: "GM" },
    { name: "Georgia", code: "GE" },
    { name: "Germany", code: "DE" },
    { name: "Ghana", code: "GH" },
    { name: "Greece", code: "GR" },
    { name: "Grenada", code: "GD" },
    { name: "Guatemala", code: "GT" },
    { name: "Guinea", code: "GN" },
    { name: "Guinea-Bissau", code: "GW" },
    { name: "Guyana", code: "GY" },
    { name: "Haiti", code: "HT" },
    { name: "Honduras", code: "HN" },
    { name: "Hungary", code: "HU" },
    { name: "Iceland", code: "IS" },
    { name: "India", code: "IN" },
    { name: "Indonesia", code: "ID" },
    { name: "Iran", code: "IR" },
    { name: "Iraq", code: "IQ" },
    { name: "Ireland", code: "IE" },
    { name: "Israel", code: "IL" },
    { name: "Italy", code: "IT" },
    { name: "Jamaica", code: "JM" },
    { name: "Japan", code: "JP" },
    { name: "Jordan", code: "JO" },
    { name: "Kazakhstan", code: "KZ" },
    { name: "Kenya", code: "KE" },
    { name: "Kiribati", code: "KI" },
    { name: "North Korea", code: "KP" },
    { name: "South Korea", code: "KR" },
    { name: "Kuwait", code: "KW" },
    { name: "Kyrgyzstan", code: "KG" },
    { name: "Laos", code: "LA" },
    { name: "Latvia", code: "LV" },
    { name: "Lebanon", code: "LB" },
    { name: "Lesotho", code: "LS" },
    { name: "Liberia", code: "LR" },
    { name: "Libya", code: "LY" },
    { name: "Liechtenstein", code: "LI" },
    { name: "Lithuania", code: "LT" },
    { name: "Luxembourg", code: "LU" },
    { name: "Madagascar", code: "MG" },
    { name: "Malawi", code: "MW" },
    { name: "Malaysia", code: "MY" },
    { name: "Maldives", code: "MV" },
    { name: "Mali", code: "ML" },
    { name: "Malta", code: "MT" },
    { name: "Marshall Islands", code: "MH" },
    { name: "Mauritania", code: "MR" },
    { name: "Mauritius", code: "MU" },
    { name: "Mexico", code: "MX" },
    { name: "Micronesia", code: "FM" },
    { name: "Moldova", code: "MD" },
    { name: "Monaco", code: "MC" },
    { name: "Mongolia", code: "MN" },
    { name: "Montenegro", code: "ME" },
    { name: "Morocco", code: "MA" },
    { name: "Mozambique", code: "MZ" },
    { name: "Myanmar", code: "MM" },
    { name: "Namibia", code: "NA" },
    { name: "Nauru", code: "NR" },
    { name: "Nepal", code: "NP" },
    { name: "Netherlands", code: "NL" },
    { name: "New Zealand", code: "NZ" },
    { name: "Nicaragua", code: "NI" },
    { name: "Niger", code: "NE" },
    { name: "Nigeria", code: "NG" },
    { name: "North Macedonia", code: "MK" },
    { name: "Norway", code: "NO" },
    { name: "Oman", code: "OM" },
    { name: "Pakistan", code: "PK" },
    { name: "Palau", code: "PW" },
    { name: "Palestine", code: "PS" },
    { name: "Panama", code: "PA" },
    { name: "Papua New Guinea", code: "PG" },
    { name: "Paraguay", code: "PY" },
    { name: "Peru", code: "PE" },
    { name: "Philippines", code: "PH" },
    { name: "Poland", code: "PL" },
    { name: "Portugal", code: "PT" },
    { name: "Qatar", code: "QA" },
    { name: "Romania", code: "RO" },
    { name: "Russia", code: "RU" },
    { name: "Rwanda", code: "RW" },
    { name: "Saint Kitts and Nevis", code: "KN" },
    { name: "Saint Lucia", code: "LC" },
    { name: "Saint Vincent and the Grenadines", code: "VC" },
    { name: "Samoa", code: "WS" },
    { name: "San Marino", code: "SM" },
    { name: "Sao Tome and Principe", code: "ST" },
    { name: "Saudi Arabia", code: "SA" },
    { name: "Senegal", code: "SN" },
    { name: "Serbia", code: "RS" },
    { name: "Seychelles", code: "SC" },
    { name: "Sierra Leone", code: "SL" },
    { name: "Singapore", code: "SG" },
    { name: "Slovakia", code: "SK" },
    { name: "Slovenia", code: "SI" },
    { name: "Solomon Islands", code: "SB" },
    { name: "Somalia", code: "SO" },
    { name: "South Africa", code: "ZA" },
    { name: "South Sudan", code: "SS" },
    { name: "Spain", code: "ES" },
    { name: "Sri Lanka", code: "LK" },
    { name: "Sudan", code: "SD" },
    { name: "Suriname", code: "SR" },
    { name: "Sweden", code: "SE" },
    { name: "Switzerland", code: "CH" },
    { name: "Syria", code: "SY" },
    { name: "Taiwan", code: "TW" },
    { name: "Tajikistan", code: "TJ" },
    { name: "Tanzania", code: "TZ" },
    { name: "Thailand", code: "TH" },
    { name: "Timor-Leste", code: "TL" },
    { name: "Togo", code: "TG" },
    { name: "Tonga", code: "TO" },
    { name: "Trinidad and Tobago", code: "TT" },
    { name: "Tunisia", code: "TN" },
    { name: "Turkey", code: "TR" },
    { name: "Turkmenistan", code: "TM" },
    { name: "Tuvalu", code: "TV" },
    { name: "Uganda", code: "UG" },
    { name: "Ukraine", code: "UA" },
    { name: "United Arab Emirates", code: "AE" },
    { name: "United Kingdom", code: "GB" },
    { name: "United States", code: "US" },
    { name: "Uruguay", code: "UY" },
    { name: "Uzbekistan", code: "UZ" },
    { name: "Vanuatu", code: "VU" },
    { name: "Vatican City", code: "VA" },
    { name: "Venezuela", code: "VE" },
    { name: "Vietnam", code: "VN" },
    { name: "Yemen", code: "YE" },
    { name: "Zambia", code: "ZM" },
    { name: "Zimbabwe", code: "ZW" },
  ];

  const select = document.querySelector("#location");

  countries.forEach(function (country) {
    const option = document.createElement("option");
    option.value = country.code;
    option.textContent = country.name;
    select.appendChild(option);
  });
});
document.addEventListener("DOMContentLoaded", function () {
  const incrementButtons = document.querySelectorAll(".increment");
  const decrementButtons = document.querySelectorAll(".decrement");
  const numberInputs = document.querySelectorAll('input[type="number"]');

  incrementButtons.forEach((button) => {
    button.addEventListener("click", function () {
      adjustValue(this.dataset.field, 0.5);
    });
  });

  decrementButtons.forEach((button) => {
    button.addEventListener("click", function () {
      adjustValue(this.dataset.field, -0.5);
    });
  });

  numberInputs.forEach((input) => {
    input.addEventListener("input", function () {
      updateValueAttribute(this);
    });
  });
});

function adjustValue(field, increment) {
  const input = document.getElementById(field);
  let value = parseFloat(input.value);
  value = isNaN(value) ? 0 : value + increment;
  input.value = value > 0 ? value.toFixed(2) : "0.00";
  input.setAttribute("value", input.value);
  console.log(input.value);
}
function updateValueAttribute(input) {
  let value = parseFloat(input.value);
  input.value = value > 0 ? value.toFixed(2) : "0.00";
  input.setAttribute("value", input.value);
}

// ========================== Form Validation Calculator page and Contact============================
document.addEventListener("DOMContentLoaded", function () {
  const toggleDiv = document.getElementById("volumetricWeightToggle");
  const checkbox = document.getElementById("volumetricWeightCheckbox");
  const fieldsDiv = document.getElementById("volumetricWeightFields");

  toggleDiv.addEventListener("click", function () {
    checkbox.checked = !checkbox.checked;
    fieldsDiv.style.display = checkbox.checked ? "flex" : "none";
  });

  // Optional: If you want to initially hide fields unless checkbox is checked
  if (!checkbox.checked) {
    fieldsDiv.style.display = "none";
  }
});
$(document).ready(function () {
  function validateForm(formId, fields) {
    const form = document.getElementById(formId);

    if (!form) {
      console.error(`Form with ID '${formId}' not found.`);
      return;
    }

    function onSubmit(e) {
      e.preventDefault();

      const errorMsg = document.querySelectorAll(".error-message");
      errorMsg.forEach((msg) => {
        msg.style.display = "none";
      });

      let isValid = true;

      fields.forEach((field) => {
        const input = document.getElementById(field.id);
        if (!input) {
          console.error(`Input with ID '${field.id}' not found.`);
          return;
        }

        const value = input.value.trim();
        if (value === "" || value === "0") {
          document.querySelector(`#${field.errorId}`).style.display = "block";
          isValid = false;
        } else {
          document.querySelector(`#${field.errorId}`).style.display = "none";
        }

        // if (field.id === "package_type" || field.id === "weight_unit" || field.id === "volumetric_unit") {
        //   const checkedInputs = document.querySelectorAll(`input[name="${field.id}"]:checked`);
        //   if (checkedInputs.length === 0) {
        //     document.querySelector(`#${field.errorId}`).style.display = "block";
        //     isValid = false;
        //   } else {
        //     document.querySelector(`#${field.errorId}`).style.display = "none";
        //   }
        // }

        if (
          field.id === "weight" //||
          // field.id === "length" ||
          // field.id === "height" ||
          // field.id === "width"
        ) {
          // Assuming numeric value validation here
          const numericValue = parseFloat(value);
          if (isNaN(numericValue) || numericValue <= 0) {
            document.querySelector(`#${field.errorId}`).style.display = "block";
            isValid = false;
          } else {
            document.querySelector(`#${field.errorId}`).style.display = "none";
          }
        }
      });

      if (isValid) {
        // Perform the form submission or further processing
        form.submit();
      }
    }

    form.addEventListener("submit", onSubmit);
  }

  // Call the validation function for the form on the current page
  if (document.getElementById("calculatorEnquiry")) {
    validateForm("calculatorEnquiry", [
      { id: "name", errorId: "nameError" },
      { id: "phone", errorId: "phoneError", type: "phone" },
      { id: "email", errorId: "emailError" },
    ]);
  }
  if (document.getElementById("enquiryFormContact")) {
    validateForm("enquiryFormContact", [
      { id: "name", errorId: "nameError" },
      { id: "phone", errorId: "phoneError", type: "phone" },
      { id: "email", errorId: "emailError" },
      { id: "message", errorId: "messageError" },
    ]);
  }

  if (document.getElementById("popupForm")) {
    validateForm("popupForm", [
      { id: "name_enquiry", errorId: "name_enquiryError" },
      { id: "email_enquiry", errorId: "email_enquiryError" },
      { id: "phone_enquiry", errorId: "phone_enquiryError", type: "phone" },
      { id: "message_enquiry", errorId: "message_enquiryError" },
    ]);
  }

  if (document.getElementById("shippingForm")) {
    validateForm("shippingForm", [
      { id: "location", errorId: "locationError" },
      { id: "weight", errorId: "weightError" },
      // { id: "length", errorId: "lengthError" },
      // { id: "height", errorId: "heightError" },
      // { id: "width", errorId: "widthError" },
    ]);
  }
});

