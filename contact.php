<?php include('includes/header.php') ?>

<section class="innerBanner">
    <picture><img src="web/images/banner/contact.jpg" alt=""></picture>
    <div class="container-ctn">
        <div class="head">
            <h1>Contact Us</h1>
        </div>
    </div>

    <div class="breadCrumb">
        <ul>
            <li><a href="index.php">HOME</a>&nbsp; / &nbsp;</li>
            <li>Contact Us</li>
        </ul>
    </div>
</section>

<section class="contact-page">
    <div class="container-ctn">
        <div class="heading text-center">
            <p><span>+</span> Contact <span>+</span></p>
            <h2>Contact us for NDIS Services</h2>
        </div>
        <div class="d-flex flex-wrap justify-content-between">
            <div class="contact-address">
                <div class="phone">
                    <strong>CALL US</strong>
                    <a href="tel:0283199433">02 8319 9433 (SYD)</a>
                    <a href="tel:0385950933">03 8595 0933 (MEL)</a>
                </div>
                <div class="email">
                    <strong>E-MAIL US</strong>
                    <a href="mailto:info@triniticare.com.au">info@triniticare.com.au (SYD) </a>
                    <a href="mailto:contact@triniticare.com.au">contact@triniticare.com.au (MEL)</a>
                </div>
                <div class="address">
                    <strong>LOCATE US</strong>
                    <div>
                        <p>56 Kokoda Cct, Mount Annan NSW 2567, Australia.</p>
                        <a href="https://maps.app.goo.gl/QajPwoLDjvLNqQDv9" target="_blank">View on Map</a>
                    </div>
                    <div>
                        <p>Shop L080 200 Gilchrist DR, Campbelltown NSW 2560</p>
                        <a href="https://maps.app.goo.gl/Q5iAtRwi3tGMkZV98" target="_blank">View on Map</a>
                    </div>
                </div>

            </div>
           <div class="form-container">
            <div class="form-wrapper theme-form">
                    <h3>Enquire Now</h3>
                <form id="enquiryForm" action="" method="post" enctype="multipart/form-data">
                <div class="formGroup form-col-3">
                            <div class="service">
                                <select name="location" id="location">
                                    <option value="" selected="selected" hidden="hidden">Select location</option>
                                    <option value="UAE">UAE</option>
                                    <option value="US">US</option>
                                    <option value="India">India</option>
                                </select>
                                <span id="locationError" class="error-message">Please select a location</span>
                            </div>
                        </div>
                        <div class="formGroup">
                            <div class="name">
                                <input type="text" id="name" name="name" placeholder="Full Name">
                                <span id="nameError" class="error-message">Please enter your name</span>
                            </div>
                        </div>
                        <div class="formGroup">
                            <div class="mail">
                                <input type="email" id="email" class="mail" name="email" placeholder="Email address">
                                <span id="emailError" class="error-message">Please enter a valid email</span>
                            </div>
                        </div>
                        <div class="formGroup">
                            <div class="phone">
                                <input type="tel" id="phone" name="phone" placeholder="Phone number">
                                <span id="phoneError" class="error-message">Please enter your phone number</span>
                            </div>
                        </div>
                        <div class="formGroup">
                            <div class="service">
                                <select name="service" id="service">
                                    <option value="" selected="selected" hidden="hidden">Services</option>
                                    <option value="Support for personal and household activities">Support for personal
                                        and household activities</option>
                                    <option value="Life Stage Transition Assistance">Life Stage Transition Assistance
                                    </option>
                                    <option value="Travel/Transport assistance">Travel/Transport assistance</option>
                                    <option value="Community Nursing Care">Community Nursing Care</option>
                                    <option value="Daily tasks/shared living support">Daily tasks/shared living support
                                    </option>
                                    <option value="Life Skill Development">Life Skill Development</option>
                                    <option value="Community Participation">Community Participation</option>
                                    <option value="Plan Management">Plan Management</option>
                                    <option value="Therapeutic Support">Therapeutic Support</option>
                                    <option value="Specialized disability accommodation">Specialized disability
                                        accommodation</option>
                                    <option value="Support Coordination">Support Coordination</option>
                                    <option value="Hospitality">Hospitality</option>
                                    <option value="Home Cleaning">Home Cleaning</option>
                                </select>
                                <span id="serviceError" class="error-message">Please select a service</span>
                            </div>
                        </div>
                        <div class="formGroup ">
                            <div class="message">
                                <textarea name="message" id="message" cols="1" rows="1" placeholder="Message"></textarea>
                                <span id="messageError" class="error-message">Please enter your message</span>
                            </div>
                        </div>

                        <button type="submit" class="btn" value="Submit">SEND NOW <i><svg xmlns="http://www.w3.org/2000/svg"
                                    width="10" height="20" viewBox="0 0 10 20" fill="none">
                                    <path
                                        d="M0.00669386 18.7499C0.00647095 18.5858 0.0391681 18.4233 0.102899 18.2718C0.166629 18.1202 0.260132 17.9827 0.378012 17.867L6.85244 11.4753C7.04841 11.282 7.20386 11.0524 7.30992 10.7997C7.41598 10.547 7.47057 10.2761 7.47057 10.0026C7.47057 9.72908 7.41598 9.45823 7.30992 9.20554C7.20386 8.95284 7.04841 8.72324 6.85244 8.52986L0.38645 2.14825C0.265548 2.03299 0.169112 1.89511 0.10277 1.74267C0.0364274 1.59022 0.00150755 1.42626 4.69759e-05 1.26036C-0.0014136 1.09445 0.0306144 0.929915 0.0942628 0.776356C0.157911 0.622797 0.251905 0.483289 0.37076 0.36597C0.489614 0.248651 0.630949 0.155871 0.786518 0.0930455C0.942088 0.0302195 1.10877 -0.00139468 1.27685 4.70013e-05C1.44493 0.00148869 1.61104 0.0359573 1.76548 0.101442C1.91992 0.166927 2.0596 0.262116 2.17637 0.381456L8.64236 6.76307C9.51173 7.6228 10 8.78789 10 10.0026C10 11.2173 9.51173 12.3824 8.64236 13.2421L2.16793 19.6337C1.9909 19.8086 1.76529 19.9277 1.51966 19.976C1.27404 20.0242 1.01943 19.9995 0.78805 19.9049C0.556674 19.8102 0.358932 19.65 0.219846 19.4444C0.0807598 19.2388 0.00658035 18.9971 0.00669386 18.7499Z"
                                        fill="white"></path>
                                </svg></i></button>
                    </form>
                    <picture>
                        <img src="web/images/contact/contact.jpg" width="402" height="581" class="img-fluid" alt="">
                    </picture>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('includes/footer.php') ?>