<div class="modal fade careerApply enquiryForm" id="enquiryForm" aria-hidden="true" aria-labelledby="enquiryFormLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="enquiryFormClose"></button>

            <div class="modal-body p-0">
                <div class="d-flex careerPopupBox">
                <picture><img src="web/images/about/mission.jpg" width="580" height="720" alt="" class="w-100 img-fluid h-100"></picture>
                    <div>
                    <p>ENQUIRY</p>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="formGroup">
                              <select name="location_enquiry" id="location">
                                    <option value="" selected="selected" hidden="hidden">Select location</option>
                                    <option value="UAE">UAE</option>
                                    <option value="US">US</option>
                                    <option value="India">India</option>
                                </select>
                            <span id="location_enquiryError" class="error-message">Please enter your name</span>
                        </div>
                        <div class="formGroup">
                            <label for="name">Full Name</label> 
                            <input type="text" id="name_enquiry" name="name_enquiry">
                            <span id="name_enquiryError" class="error-message">Please enter your name</span>
                        </div>
                        <div class="formGroup">
                        <label for="email">E-mail</label> 
                        <input type="email" id="email_enquiry" name="email_enquiry" >
                        <span id="email_enquiryError" class="error-message">Please enter your email</span>

                        </div>
                        <div class="formGroup">
                        <label for="phone">Phone</label> 
                            <input type="tel" id="phone_enquiry" name="phone_enquiry" class="phone_number">
                            <span id="phone_enquiryError" class="error-message">Please enter your phone</span>

                        </div>
                     
                        <div class="formGroup">
                        <label for="service">Service</label>
                            <select name="" id="enquiry-service">
                                <option value=""  selected="selected" hidden="hidden">Please Select</option>
                                <option value="">Integrated Facilities Management </option>
                                <option value="">Hard Services</option>
                                <option value="">Hospitality Services</option>
                            </select>
                        <span id="sevice_enquiryError" class="error-message">Please upload your resume</span>

                        </div>
                        <div class="formGroup">
                            <label for="message">Message</label> 
                            <textarea id="message_enquiry" name="message_enquiry" rows="1" cols="1" ></textarea>
                            <span id="message_enquiryError" class="error-message">Please your message</span>

                        </div>
                        <button type="submit" class="btn themeBtn themeBtnp  " value="Submit">Submit <i><svg xmlns="http://www.w3.org/2000/svg" width="10" height="20" viewBox="0 0 10 20" fill="none"> <path d="M0.00669386 18.7499C0.00647095 18.5858 0.0391681 18.4233 0.102899 18.2718C0.166629 18.1202 0.260132 17.9827 0.378012 17.867L6.85244 11.4753C7.04841 11.282 7.20386 11.0524 7.30992 10.7997C7.41598 10.547 7.47057 10.2761 7.47057 10.0026C7.47057 9.72908 7.41598 9.45823 7.30992 9.20554C7.20386 8.95284 7.04841 8.72324 6.85244 8.52986L0.38645 2.14825C0.265548 2.03299 0.169112 1.89511 0.10277 1.74267C0.0364274 1.59022 0.00150755 1.42626 4.69759e-05 1.26036C-0.0014136 1.09445 0.0306144 0.929915 0.0942628 0.776356C0.157911 0.622797 0.251905 0.483289 0.37076 0.36597C0.489614 0.248651 0.630949 0.155871 0.786518 0.0930455C0.942088 0.0302195 1.10877 -0.00139468 1.27685 4.70013e-05C1.44493 0.00148869 1.61104 0.0359573 1.76548 0.101442C1.91992 0.166927 2.0596 0.262116 2.17637 0.381456L8.64236 6.76307C9.51173 7.6228 10 8.78789 10 10.0026C10 11.2173 9.51173 12.3824 8.64236 13.2421L2.16793 19.6337C1.9909 19.8086 1.76529 19.9277 1.51966 19.976C1.27404 20.0242 1.01943 19.9995 0.78805 19.9049C0.556674 19.8102 0.358932 19.65 0.219846 19.4444C0.0807598 19.2388 0.00658035 18.9971 0.00669386 18.7499Z" fill="white"></path> </svg></i></button>
                    </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<script>
       function validateForm() {
        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var phone = document.getElementById('phone').value;
        var resume = document.getElementById('resume').value;
        var message = document.getElementById('message').value;

        if (name === "") {
            document.getElementById('nameError').style.display = 'block';
            return false;
        } else {
            document.getElementById('nameError').style.display = 'none';
        }

        if (email === "") {
            document.getElementById('emailError').style.display = 'block';
            return false;
        } else {
            document.getElementById('emailError').style.display = 'none';
        }

        if (phone === "") {
            document.getElementById('phoneError').style.display = 'block';
            return false;
        } else {
            document.getElementById('phoneError').style.display = 'none';
        }

        if (resume === "") {
            document.getElementById('resumeError').style.display = 'block';
            return false;
        } else {
            document.getElementById('resumeError').style.display = 'none';
        }

        if (message === "") {
            document.getElementById('messageError').style.display = 'block';
            return false;
        } else {
            document.getElementById('messageError').style.display = 'none';
        }

        // If all fields are valid, you can submit the form
        return true;
    }
</script>