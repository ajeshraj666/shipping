<?php include('includes/header.php') ?>

<section class="innerBanner">
        <picture><img src="web/images/banner/feedback.jpg" alt=""></picture>
        <div class="container-ctn">
            <div class="head">
                <h1>Complaints and Feedbacks</h1>
            </div>
        </div>
      
        <div class="breadCrumb">
            <ul>
                <li><a href="index.php">HOME</a>&nbsp; / &nbsp;</li>
                <li>COMPLAINTS</li>
            </ul>
        </div>
    </section>

    <section class="feedbacks">
        <div class="container-ctn">
            <div class="heading text-center">
                <p><span>+</span>  We Will Help You <span>+</span></p>
                <h2>Complaints and Feedbacks</h2>
            </div>
            <p>If you or someone you care for are ready to get started, please complete the referral form below. For all general enquiries, please use our contact form or reach out using the contact details below.</p>
        
            <div class="triniti-form">
                <h3>Service Referral Form</h3>
                <form id="complaintForm" action="">
        <div class="formGroup formGroup-col-6">
            <label for="name">Name (Optional)</label>
            <input type="text" id="name" name="name" placeholder="Enter Name">
            <span id="nameError" class="error-message">Please enter your name</span>
        </div>
        <div class="formGroup formGroup-col-6">
            <label for="number">NDIS number</label>
            <input type="number" id="number" name="number" placeholder="Enter NDIS number">
            <span id="numberError" class="error-message">Please enter your NDIS number</span>
        </div>
        <div class="formGroup formGroup-col-12">
            <label for="message">What is your complaint about? Please give us as much detail as possible. If you do not have enough space, you can give us more detail on a different piece of paper.</label>
            <textarea name="message" id="message" placeholder="Message"></textarea>
            <span id="messageError" class="error-message">Please enter your complaint</span>
        </div>
        <div class="formGroup formGroup-col-12">
            <label for="complaint">Who is your complaint about?</label>
            <input type="text" id="complaint" name="complaint" placeholder="Name / Department">
            <span id="complaintError" class="error-message">Please enter Name / Department</span>
        </div>
        <div class="formGroup formGroup-col-12">
            <label for="work">What do you want us to do?</label>
            <input type="text" id="work" name="work" placeholder="What do you want us to do?">
            <span id="workError" class="error-message">Please enter the details</span>
        </div>
        <div class="formGroup formGroup-col-12">
            <label for="documents">Do you have any documents you would like to share with us about your complaint?</label>
            <select name="documents" id="documents">
                <option value="" selected="selected" hidden="hidden">Choose</option>
                <option value="documents1">Document 1</option>
                <option value="documents2">Document 2</option>
                <option value="documents3">Document 3</option>
            </select>
            <span id="documentsError" class="error-message">Please choose an option</span>
        </div>
        <div class="formGroup formGroup-col-12">
            <label for="organisation">Do you have any documents you would like to share with us about your complaint?</label>
            <select name="organisation" id="organisation">
                <option value="" selected="selected" hidden="hidden">Choose</option>
                <option value="organisation1">Organisation 1</option>
                <option value="organisation2">Organisation 2</option>
                <option value="organisation3">Organisation 3</option>
            </select>
            <span id="organisationError" class="error-message">Please choose an option</span>
        </div>
        <div class="formGroup formGroup-col-12">
            <label for="support">If you are complaining on behalf of someone else, please fill in this section</label>
            <select name="support" id="support">
                <option value="" selected="selected" hidden="hidden">Choose</option>
                <option value="support1">Support 1</option>
                <option value="support2">Support 2</option>
                <option value="support3">Support 3</option>
            </select>
            <span id="supportError" class="error-message">Please choose an option</span>
        </div>
        <button type="submit" class="btn themeBtn themeBtnp" value="Submit">Submit <i><svg xmlns="http://www.w3.org/2000/svg" width="10" height="20" viewBox="0 0 10 20" fill="none"> <path d="M0.00669386 18.7499C0.00647095 18.5858 0.0391681 18.4233 0.102899 18.2718C0.166629 18.1202 0.260132 17.9827 0.378012 17.867L6.85244 11.4753C7.04841 11.282 7.20386 11.0524 7.30992 10.7997C7.41598 10.547 7.47057 10.2761 7.47057 10.0026C7.47057 9.72908 7.41598 9.45823 7.30992 9.20554C7.20386 8.95284 7.04841 8.72324 6.85244 8.52986L0.38645 2.14825C0.265548 2.03299 0.169112 1.89511 0.10277 1.74267C0.0364274 1.59022 0.00150755 1.42626 4.69759e-05 1.26036C-0.0014136 1.09445 0.0306144 0.929915 0.0942628 0.776356C0.157911 0.622797 0.251905 0.483289 0.37076 0.36597C0.489614 0.248651 0.630949 0.155871 0.786518 0.0930455C0.942088 0.0302195 1.10877 -0.00139468 1.27685 4.70013e-05C1.44493 0.00148869 1.61104 0.0359573 1.76548 0.101442C1.91992 0.166927 2.0596 0.262116 2.17637 0.381456L8.64236 6.76307C9.51173 7.6228 10 8.78789 10 10.0026C10 11.2173 9.51173 12.3824 8.64236 13.2421L2.16793 19.6337C1.9909 19.8086 1.76529 19.9277 1.51966 19.976C1.27404 20.0242 1.01943 19.9995 0.78805 19.9049C0.556674 19.8102 0.358932 19.65 0.219846 19.4444C0.0807598 19.2388 0.00658035 18.9971 0.00669386 18.7499Z" fill="white"></path> </svg></i></button>
    </form>
            </div>
        </div>
    </section>



    <?php include('includes/footer.php') ?>