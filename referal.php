<?php include('includes/header.php') ?>
<section class="innerBanner">
    <picture><img src="web/images/banner/referal.jpg" alt=""></picture>
    <div class="container-ctn">
        <div class="head">
            <h1>Make a Referral</h1>
        </div>
    </div>

    <div class="breadCrumb">
        <ul>
            <li><a href="index.php">HOME</a>&nbsp; / &nbsp;</li>
            <li>Referral</li>
        </ul>
    </div>
</section>
<section class="multiStepForm commonPadding">
    <div class="container-ctn">
        <div class="heading text-center">
            <p><span>+ </span>Referral <span> +</span></p>
            <h2>Service Referral </h2>
            <p>If you or someone you care for are ready to get started, please complete the referral form below. For all general enquiries, please use our contact form or reach out using the contact details below.</p>
        </div>
        <form id="multi-step-form">
            <div class="step step-1">
                <!-- Step 1 form fields here -->
            <div class="triniti-form position-relative">
                <i class="one"></i>
                <i class="two"></i>
                <h3>Service Referral Form</h3>
                <div class=" d-flex flex-wrap justify-content-between">
                    <div class="formGroup formGroup-col-6 ">
                       <label for="documents">Are you referring yourself?</label>
                       <select name="" id="s-one-f-one">
                           <option value="documents">Yes, I’m referring myself?*</option>
                           <option value="documents">No, I’m referring myself?*</option>
                       </select>
                       <span id="s-one-f-oneError" class="error-message">Please choose an option</span>
                   </div>
                    <div class="formGroup formGroup-col-6 ">
                       <label for="documents">What is the primary service you are referring for?</label>
                       <select name="" id="s-one-f-two">
                           <option value="documents">Lorem Ipsum is simply dummy text of the printing</option>
                           <option value="documents">Lorem Ipsum is simply dummy text of the printing</option>
                       </select>
                       <span id="s-one-f-twoError" class="error-message">Please choose an option</span>
                   </div>
                    <div class="formGroup formGroup-col-6 ">
                       <label for="documents">Would you like to refer for another service?</label>
                       <select name="" id="s-one-f-three">
                           <option value="documents">Lorem Ipsum is simply dummy text of the printing</option>
                           <option value="documents">Lorem Ipsum is simply dummy text of the printing</option>
                       </select>
                       <span id="s-one-f-threeError" class="error-message">Please choose an option</span>
                   </div>
                    <div class="formGroup formGroup-col-6 ">
                       <label for="documents">How did you hear about us?</label>
                       <select name="" id="s-one-f-four">
                           <option value="documents">Lorem Ipsum is simply dummy text of the printing</option>
                           <option value="documents">Lorem Ipsum is simply dummy text of the printing</option>
                       </select>
                       <span id="s-one-f-fourError" class="error-message">Please choose an option</span>
                   </div>
                    <div class="formGroup formGroup-col-6 ">
                       <label for="documents">What other service are you referring for?</label>
                       <select name="" id="s-one-f-five">
                           <option value="documents">Lorem Ipsum is simply dummy text of the printing</option>
                           <option value="documents">Lorem Ipsum is simply dummy text of the printing</option>
                       </select>
                       <span id="s-one-f-fiveError" class="error-message">Please choose an option</span>
                   </div>
               
                   <div class="w-100 d-flex step-form-nav">
                   <button type="button" class="btn themeBtn themeBtnp next-step  ">Next <i><svg xmlns="http://www.w3.org/2000/svg" width="10" height="20" viewBox="0 0 10 20" fill="none"> <path d="M0.00669386 18.7499C0.00647095 18.5858 0.0391681 18.4233 0.102899 18.2718C0.166629 18.1202 0.260132 17.9827 0.378012 17.867L6.85244 11.4753C7.04841 11.282 7.20386 11.0524 7.30992 10.7997C7.41598 10.547 7.47057 10.2761 7.47057 10.0026C7.47057 9.72908 7.41598 9.45823 7.30992 9.20554C7.20386 8.95284 7.04841 8.72324 6.85244 8.52986L0.38645 2.14825C0.265548 2.03299 0.169112 1.89511 0.10277 1.74267C0.0364274 1.59022 0.00150755 1.42626 4.69759e-05 1.26036C-0.0014136 1.09445 0.0306144 0.929915 0.0942628 0.776356C0.157911 0.622797 0.251905 0.483289 0.37076 0.36597C0.489614 0.248651 0.630949 0.155871 0.786518 0.0930455C0.942088 0.0302195 1.10877 -0.00139468 1.27685 4.70013e-05C1.44493 0.00148869 1.61104 0.0359573 1.76548 0.101442C1.91992 0.166927 2.0596 0.262116 2.17637 0.381456L8.64236 6.76307C9.51173 7.6228 10 8.78789 10 10.0026C10 11.2173 9.51173 12.3824 8.64236 13.2421L2.16793 19.6337C1.9909 19.8086 1.76529 19.9277 1.51966 19.976C1.27404 20.0242 1.01943 19.9995 0.78805 19.9049C0.556674 19.8102 0.358932 19.65 0.219846 19.4444C0.0807598 19.2388 0.00658035 18.9971 0.00669386 18.7499Z" fill="white"></path> </svg></i> </button>
                   </div>
                </div>
            </div>
            </div>
            <div class="step step-2">
                <!-- Step 2 form fields here -->
                <div class="triniti-form position-relative">
                    <i class="one"></i>
                    <i class="two"></i>
                    <h3>Customer Details</h3>
                    <div class=" d-flex flex-wrap justify-content-between">
                        <div class="formGroup formGroup-col-6 ">
                        <label for="fname">Full Name</label>
                        <input type="text" name="fname" id="s-two-f-one">
                        <span id="s-two-f-oneError" class="error-message" >Please enter the name</span>
                    </div>
                        <div class="formGroup formGroup-col-6 ">
                        <label for="phone">Phone Number</label>
                        <input type="tel" name="phone" id="s-two-f-two">
                        <span id="s-two-f-twoError" class="error-message">Please enter the number</span>
                    </div>
                        <div class="formGroup formGroup-col-6 ">
                        <label for="mail">E-mail Id</label>
                        <input type="mail" name="mail" id="s-two-f-three">
                        <span id="s-one-f-threeError" class="error-message">Please enter the email id</span>
                    </div>
                        <div class="formGroup formGroup-col-6 ">
                        <label for="pincode">Pincode</label>
                        <input type="number" name="pincode" id="s-two-f-four">
                        <span id="s-two-f-fourError" class="error-message">Please enter the email id</span>
                    </div>
                
                        <div class="formGroup formGroup-col-6 ">
                        <label for="gender">Gender</label>
                        <select name="" id="s-two-f-five">
                            <option value="documents">Male</option>
                            <option value="documents">Female</option>
                        </select>
                        <span id="s-two-f-fiveError" class="error-message">Please choose an option</span>
                    </div>
                        <div class="formGroup formGroup-col-6 ">
                        <label for="age">Customer age range</label>
                        <select name="" id="s-two-f-six">
                            <option value="documents">Lorem Ipsum is simply dummy text of the printing</option>
                            <option value="documents">Lorem Ipsum is simply dummy text of the printing</option>
                        </select>
                        <span id="s-two-f-sixError" class="error-message">Please choose an option</span>
                    </div>
                
                    <div class="w-100 d-flex step-form-nav">
                    <button type="button" class="btn btn-primary prev-step">
                        <i><svg xmlns="http://www.w3.org/2000/svg" width="71" height="16" viewBox="0 0 71 16" fill="none"> <path d="M0.292892 8.70711C-0.0976334 8.31658 -0.0976334 7.68342 0.292892 7.29289L6.65685 0.928932C7.04738 0.538408 7.68054 0.538408 8.07107 0.928932C8.46159 1.31946 8.46159 1.95262 8.07107 2.34315L2.41422 8L8.07107 13.6569C8.46159 14.0474 8.46159 14.6805 8.07107 15.0711C7.68054 15.4616 7.04738 15.4616 6.65685 15.0711L0.292892 8.70711ZM71 9H1V7H71V9Z" fill="#D400F8"/> </svg></i>
                        BACK</button>
                    <button type="button" class="btn themeBtn themeBtnp next-step  ">Next <i><svg xmlns="http://www.w3.org/2000/svg" width="10" height="20" viewBox="0 0 10 20" fill="none"> <path d="M0.00669386 18.7499C0.00647095 18.5858 0.0391681 18.4233 0.102899 18.2718C0.166629 18.1202 0.260132 17.9827 0.378012 17.867L6.85244 11.4753C7.04841 11.282 7.20386 11.0524 7.30992 10.7997C7.41598 10.547 7.47057 10.2761 7.47057 10.0026C7.47057 9.72908 7.41598 9.45823 7.30992 9.20554C7.20386 8.95284 7.04841 8.72324 6.85244 8.52986L0.38645 2.14825C0.265548 2.03299 0.169112 1.89511 0.10277 1.74267C0.0364274 1.59022 0.00150755 1.42626 4.69759e-05 1.26036C-0.0014136 1.09445 0.0306144 0.929915 0.0942628 0.776356C0.157911 0.622797 0.251905 0.483289 0.37076 0.36597C0.489614 0.248651 0.630949 0.155871 0.786518 0.0930455C0.942088 0.0302195 1.10877 -0.00139468 1.27685 4.70013e-05C1.44493 0.00148869 1.61104 0.0359573 1.76548 0.101442C1.91992 0.166927 2.0596 0.262116 2.17637 0.381456L8.64236 6.76307C9.51173 7.6228 10 8.78789 10 10.0026C10 11.2173 9.51173 12.3824 8.64236 13.2421L2.16793 19.6337C1.9909 19.8086 1.76529 19.9277 1.51966 19.976C1.27404 20.0242 1.01943 19.9995 0.78805 19.9049C0.556674 19.8102 0.358932 19.65 0.219846 19.4444C0.0807598 19.2388 0.00658035 18.9971 0.00669386 18.7499Z" fill="white"></path> </svg></i> </button>
                    </div>
                    </div>
                </div>
              
            </div>

            <div class="step step-3">
                <!-- Step 3 form fields here -->
                <div class="triniti-form position-relative">
                    <i class="one"></i>
                    <i class="two"></i>
                    <h3>Primary Contact Details</h3>
                    <div class=" d-flex flex-wrap justify-content-between">
                        <div class="formGroup formGroup-col-6 ">
                        <label for="Pname">Primary Contact Name</label>
                        <input type="text" name="pname" id="s-three-f-one">
                        <span id="s-three-f-oneError" class="error-message" >Please enter the name</span>
                    </div>
                        <div class="formGroup formGroup-col-6 ">
                        <label for="pphone">Contact phone (if different to customer)</label>
                        <input type="tel" name="pphone" id="s-three-f-two">
                        <span id="s-three-f-twoError" class="error-message">Please enter the number</span>
                    </div>
                        <div class="formGroup formGroup-col-6 ">
                        <label for="pmail">E-mail Id</label>
                        <input type="mail" name="pmail" id="s-three-f-three">
                        <span id="s-three-f-threeError" class="error-message">Please enter the email id</span>
                    </div>
                       
                
                    <div class="w-100 d-flex step-form-nav">
                    <button type="button" class="btn btn-primary prev-step">
                        <i><svg xmlns="http://www.w3.org/2000/svg" width="71" height="16" viewBox="0 0 71 16" fill="none"> <path d="M0.292892 8.70711C-0.0976334 8.31658 -0.0976334 7.68342 0.292892 7.29289L6.65685 0.928932C7.04738 0.538408 7.68054 0.538408 8.07107 0.928932C8.46159 1.31946 8.46159 1.95262 8.07107 2.34315L2.41422 8L8.07107 13.6569C8.46159 14.0474 8.46159 14.6805 8.07107 15.0711C7.68054 15.4616 7.04738 15.4616 6.65685 15.0711L0.292892 8.70711ZM71 9H1V7H71V9Z" fill="#D400F8"/> </svg></i>
                        BACK</button>
                    <button type="button" class="btn themeBtn themeBtnp next-step  ">Next <i><svg xmlns="http://www.w3.org/2000/svg" width="10" height="20" viewBox="0 0 10 20" fill="none"> <path d="M0.00669386 18.7499C0.00647095 18.5858 0.0391681 18.4233 0.102899 18.2718C0.166629 18.1202 0.260132 17.9827 0.378012 17.867L6.85244 11.4753C7.04841 11.282 7.20386 11.0524 7.30992 10.7997C7.41598 10.547 7.47057 10.2761 7.47057 10.0026C7.47057 9.72908 7.41598 9.45823 7.30992 9.20554C7.20386 8.95284 7.04841 8.72324 6.85244 8.52986L0.38645 2.14825C0.265548 2.03299 0.169112 1.89511 0.10277 1.74267C0.0364274 1.59022 0.00150755 1.42626 4.69759e-05 1.26036C-0.0014136 1.09445 0.0306144 0.929915 0.0942628 0.776356C0.157911 0.622797 0.251905 0.483289 0.37076 0.36597C0.489614 0.248651 0.630949 0.155871 0.786518 0.0930455C0.942088 0.0302195 1.10877 -0.00139468 1.27685 4.70013e-05C1.44493 0.00148869 1.61104 0.0359573 1.76548 0.101442C1.91992 0.166927 2.0596 0.262116 2.17637 0.381456L8.64236 6.76307C9.51173 7.6228 10 8.78789 10 10.0026C10 11.2173 9.51173 12.3824 8.64236 13.2421L2.16793 19.6337C1.9909 19.8086 1.76529 19.9277 1.51966 19.976C1.27404 20.0242 1.01943 19.9995 0.78805 19.9049C0.556674 19.8102 0.358932 19.65 0.219846 19.4444C0.0807598 19.2388 0.00658035 18.9971 0.00669386 18.7499Z" fill="white"></path> </svg></i> </button>
                    </div>
                    </div>
                </div>

            </div>

            <div class="step step-4">
                <!-- Step 3 form fields here -->
               
                <div class="triniti-form position-relative">
                    <i class="one"></i>
                    <i class="two"></i>
                    <h3>Referral Details</h3>
                    <div class=" d-flex flex-wrap justify-content-between">
                        <div class="formGroup formGroup-col-6 ">
                        <label for="fund">Funding amount or number of service hours required</label>
                        <input type="text" name="fund" id="s-four-f-one">
                        <span id="s-four-f-oneError" class="error-message" >Please enter the amount or number of service hours</span>
                    </div>
                    
                       
                
                    <div class="w-100 d-flex step-form-nav">
                    <button type="button" class="btn btn-primary prev-step">
                        <i><svg xmlns="http://www.w3.org/2000/svg" width="71" height="16" viewBox="0 0 71 16" fill="none"> <path d="M0.292892 8.70711C-0.0976334 8.31658 -0.0976334 7.68342 0.292892 7.29289L6.65685 0.928932C7.04738 0.538408 7.68054 0.538408 8.07107 0.928932C8.46159 1.31946 8.46159 1.95262 8.07107 2.34315L2.41422 8L8.07107 13.6569C8.46159 14.0474 8.46159 14.6805 8.07107 15.0711C7.68054 15.4616 7.04738 15.4616 6.65685 15.0711L0.292892 8.70711ZM71 9H1V7H71V9Z" fill="#D400F8"/> </svg></i>
                        BACK</button>
                    <button type="button" class="btn themeBtn themeBtnp next-step  ">Next <i><svg xmlns="http://www.w3.org/2000/svg" width="10" height="20" viewBox="0 0 10 20" fill="none"> <path d="M0.00669386 18.7499C0.00647095 18.5858 0.0391681 18.4233 0.102899 18.2718C0.166629 18.1202 0.260132 17.9827 0.378012 17.867L6.85244 11.4753C7.04841 11.282 7.20386 11.0524 7.30992 10.7997C7.41598 10.547 7.47057 10.2761 7.47057 10.0026C7.47057 9.72908 7.41598 9.45823 7.30992 9.20554C7.20386 8.95284 7.04841 8.72324 6.85244 8.52986L0.38645 2.14825C0.265548 2.03299 0.169112 1.89511 0.10277 1.74267C0.0364274 1.59022 0.00150755 1.42626 4.69759e-05 1.26036C-0.0014136 1.09445 0.0306144 0.929915 0.0942628 0.776356C0.157911 0.622797 0.251905 0.483289 0.37076 0.36597C0.489614 0.248651 0.630949 0.155871 0.786518 0.0930455C0.942088 0.0302195 1.10877 -0.00139468 1.27685 4.70013e-05C1.44493 0.00148869 1.61104 0.0359573 1.76548 0.101442C1.91992 0.166927 2.0596 0.262116 2.17637 0.381456L8.64236 6.76307C9.51173 7.6228 10 8.78789 10 10.0026C10 11.2173 9.51173 12.3824 8.64236 13.2421L2.16793 19.6337C1.9909 19.8086 1.76529 19.9277 1.51966 19.976C1.27404 20.0242 1.01943 19.9995 0.78805 19.9049C0.556674 19.8102 0.358932 19.65 0.219846 19.4444C0.0807598 19.2388 0.00658035 18.9971 0.00669386 18.7499Z" fill="white"></path> </svg></i> </button>
                    </div>
                    </div>
                </div>
            </div>
                <div class="step step-5">
                <div class="triniti-form position-relative">
                        <i class="one"></i>
                        <i class="two"></i>
                        <h3>Risk Identification</h3>
                        <div class=" d-flex flex-wrap justify-content-between">
                            <div class="formGroup formGroup-col-6 ">
                                <label for="risk">Does the client have a history of behaviour we should be aware of?</label>
                                <input type="text" name="risk" id="s-five-f-one">
                                <span id="s-five-f-oneError" class="error-message" >Please enter the details</span>
                            </div>
                            <div class="formGroup formGroup-col-6 ">
                                <label for="property">Will any other people be present at the property during the appointment?</label>
                                <input type="text" name="property" id="s-five-f-two">
                                <span id="s-five-f-twoError" class="error-message" >Please enter the details</span>
                            </div>
                            <div class="formGroup formGroup-col-6 ">
                                <label for="other-property">Are there any pets at the property? (e.g. birds, cats, dogs, horses)</label>
                                <input type="text" name="other-property" id="s-five-f-three">
                                <span id="s-five-f-threeError" class="error-message" >Please enter the details</span>
                            </div>
                            <div class="formGroup formGroup-col-6 ">
                                <label for="access-property">Is there anything we need to know for access to the property?</label>
                                <input type="text" name="access-property" id="s-five-f-four">
                                <span id="s-five-f-fourError" class="error-message" >Please enter the details</span>
                                </div>
                            <div class="formGroup formGroup-col-6 ">
                                <label for="aware-property">Is there anything else we need to be aware of that may put you or us in any type of danger?</label>
                                <input type="text" name="aware-property" id="s-five-f-five">
                                <span id="s-five-f-fiveError" class="error-message" >Please enter the details</span>
                            </div>
                            
                            
                            <div class="w-100 d-flex step-form-nav">
                                <button type="button" class="btn btn-primary prev-step">
                                    <i><svg xmlns="http://www.w3.org/2000/svg" width="71" height="16" viewBox="0 0 71 16" fill="none"> <path d="M0.292892 8.70711C-0.0976334 8.31658 -0.0976334 7.68342 0.292892 7.29289L6.65685 0.928932C7.04738 0.538408 7.68054 0.538408 8.07107 0.928932C8.46159 1.31946 8.46159 1.95262 8.07107 2.34315L2.41422 8L8.07107 13.6569C8.46159 14.0474 8.46159 14.6805 8.07107 15.0711C7.68054 15.4616 7.04738 15.4616 6.65685 15.0711L0.292892 8.70711ZM71 9H1V7H71V9Z" fill="#D400F8"/> </svg></i>
                                    BACK</button>
                                    <button type="button" class="btn themeBtn themeBtnp next-step  ">Next <i><svg xmlns="http://www.w3.org/2000/svg" width="10" height="20" viewBox="0 0 10 20" fill="none"> <path d="M0.00669386 18.7499C0.00647095 18.5858 0.0391681 18.4233 0.102899 18.2718C0.166629 18.1202 0.260132 17.9827 0.378012 17.867L6.85244 11.4753C7.04841 11.282 7.20386 11.0524 7.30992 10.7997C7.41598 10.547 7.47057 10.2761 7.47057 10.0026C7.47057 9.72908 7.41598 9.45823 7.30992 9.20554C7.20386 8.95284 7.04841 8.72324 6.85244 8.52986L0.38645 2.14825C0.265548 2.03299 0.169112 1.89511 0.10277 1.74267C0.0364274 1.59022 0.00150755 1.42626 4.69759e-05 1.26036C-0.0014136 1.09445 0.0306144 0.929915 0.0942628 0.776356C0.157911 0.622797 0.251905 0.483289 0.37076 0.36597C0.489614 0.248651 0.630949 0.155871 0.786518 0.0930455C0.942088 0.0302195 1.10877 -0.00139468 1.27685 4.70013e-05C1.44493 0.00148869 1.61104 0.0359573 1.76548 0.101442C1.91992 0.166927 2.0596 0.262116 2.17637 0.381456L8.64236 6.76307C9.51173 7.6228 10 8.78789 10 10.0026C10 11.2173 9.51173 12.3824 8.64236 13.2421L2.16793 19.6337C1.9909 19.8086 1.76529 19.9277 1.51966 19.976C1.27404 20.0242 1.01943 19.9995 0.78805 19.9049C0.556674 19.8102 0.358932 19.65 0.219846 19.4444C0.0807598 19.2388 0.00658035 18.9971 0.00669386 18.7499Z" fill="white"></path> </svg></i> </button>
                                </div>
                        
                        </div>
                    </div>                

                </div>
            <div class="step step-6">
                <!-- Step 3 form fields here -->
                <div class="triniti-form position-relative">
                    <i class="one"></i>
                    <i class="two"></i>
                    <h3>Other details</h3>
                    <div class=" d-flex flex-wrap justify-content-between">
                     
                        <div class="formGroup formGroup-col-6 ">
                            <label for="Participant">How is the Participant's NDIS plan managed?</label>
                            <select name="Participant" id="s-six-f-one">
                                <option value="Yes, I’m referring myself?*">Yes, I’m referring myself?*</option>
                                <option value="No, I’m referring myself?*">No, I’m referring myself?*</option>
                            </select>
                            <span id="s-six-f-oneError" class="error-message">Please choose an option</span>
                        </div>
                        <div class="formGroup formGroup-col-6 ">
                            <label for="support">How urgently does the participant need support?</label>
                            <select name="support" id="s-six-f-two">
                                <option value="Lorem Ipsum is simply dummy text of the printing">Lorem Ipsum is simply dummy text of the printing</option>
                                <option value="Lorem Ipsum is simply dummy text of the printing">Lorem Ipsum is simply dummy text of the printing</option>
                            </select>
                            <span id="s-six-f-twoError" class="error-message">Please choose an option</span>
                        </div>
                        <div class="formGroup formGroup-col-6 ">
                            <label for="contactPerson">Contact person to organise sessions</label>
                            <select name="contactPerson " id="s-six-f-three">
                                <option value="Lorem Ipsum is simply dummy text of the printing">Lorem Ipsum is simply dummy text of the printing</option>
                                <option value="Lorem Ipsum is simply dummy text of the printing">Lorem Ipsum is simply dummy text of the printing</option>
                            </select>
                            <span id="s-six-f-threeError" class="error-message">Please choose an option</span>
                        </div>
                        <div class="formGroup formGroup-col-6 ">
                            <label for="additionalInfo">Additional information or comments</label>
                            <textarea name="additionalInfo" id="s-six-f-four" placeholder="Please list any other details such as worker preferences, diagnosis and known risk factors."></textarea>
                            <span id="s-six-f-fourError" class="error-message">Please enter aditional details</span>
                        </div>
                        
                         <div class="w-100 d-flex step-form-nav">
                            <button type="button" class="btn btn-primary prev-step">
                                <i><svg xmlns="http://www.w3.org/2000/svg" width="71" height="16" viewBox="0 0 71 16" fill="none"> <path d="M0.292892 8.70711C-0.0976334 8.31658 -0.0976334 7.68342 0.292892 7.29289L6.65685 0.928932C7.04738 0.538408 7.68054 0.538408 8.07107 0.928932C8.46159 1.31946 8.46159 1.95262 8.07107 2.34315L2.41422 8L8.07107 13.6569C8.46159 14.0474 8.46159 14.6805 8.07107 15.0711C7.68054 15.4616 7.04738 15.4616 6.65685 15.0711L0.292892 8.70711ZM71 9H1V7H71V9Z" fill="#D400F8"/> </svg></i>
                                BACK</button>
                                <button type="submit" class="btn themeBtn themeBtnp" value="Submit">SUBMIT <i><svg xmlns="http://www.w3.org/2000/svg" width="10" height="20" viewBox="0 0 10 20" fill="none"> <path d="M0.00669386 18.7499C0.00647095 18.5858 0.0391681 18.4233 0.102899 18.2718C0.166629 18.1202 0.260132 17.9827 0.378012 17.867L6.85244 11.4753C7.04841 11.282 7.20386 11.0524 7.30992 10.7997C7.41598 10.547 7.47057 10.2761 7.47057 10.0026C7.47057 9.72908 7.41598 9.45823 7.30992 9.20554C7.20386 8.95284 7.04841 8.72324 6.85244 8.52986L0.38645 2.14825C0.265548 2.03299 0.169112 1.89511 0.10277 1.74267C0.0364274 1.59022 0.00150755 1.42626 4.69759e-05 1.26036C-0.0014136 1.09445 0.0306144 0.929915 0.0942628 0.776356C0.157911 0.622797 0.251905 0.483289 0.37076 0.36597C0.489614 0.248651 0.630949 0.155871 0.786518 0.0930455C0.942088 0.0302195 1.10877 -0.00139468 1.27685 4.70013e-05C1.44493 0.00148869 1.61104 0.0359573 1.76548 0.101442C1.91992 0.166927 2.0596 0.262116 2.17637 0.381456L8.64236 6.76307C9.51173 7.6228 10 8.78789 10 10.0026C10 11.2173 9.51173 12.3824 8.64236 13.2421L2.16793 19.6337C1.9909 19.8086 1.76529 19.9277 1.51966 19.976C1.27404 20.0242 1.01943 19.9995 0.78805 19.9049C0.556674 19.8102 0.358932 19.65 0.219846 19.4444C0.0807598 19.2388 0.00658035 18.9971 0.00669386 18.7499Z" fill="white"></path> </svg></i> </button>
                            </div>
                     
                    </div>
                </div>                

            </div>

            </div>
          
        </form>

    </div>
</section>

<?php include('includes/footer.php') ?>

<script>
    var currentStep = 1;
    var updateProgressBar;

    function displayStep(stepNumber) {
        if (stepNumber >= 1 && stepNumber <= 6 && stepNumber !== currentStep) {
            if (currentStep === 1 && !validateStep1()) {
                return;
            }
            $(".step-" + currentStep).hide();
            $(".step-" + stepNumber).show();
         
        }
    }

    $(document).ready(function() {
        $('#multi-step-form').find('.step').slice(1).hide();
        $(".next-step").click(function() {
            if (currentStep < 6) {
         
                currentStep++;
                $(".step").hide();
                $(".step-" + currentStep).show();
          
            }
        });
        $(".prev-step").click(function() {
            if (currentStep > 1) {
                currentStep--;
                $(".step").hide();
                $(".step-" + currentStep).show();
            
            }
        });
  
    });


    
</script>