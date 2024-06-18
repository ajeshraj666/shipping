<?php include('includes/header.php') ?>

<section class="innerBanner">
    <picture><img src="web/images/banner/calculator.jpg" alt=""></picture>
    <div class="container-ctn">
        <div class="heading">
            <span>Shipping Cost</span>
            <h1>International Shipping Cost</h1>
        </div>
    </div>

    <div class="breadCrumb">
        <ul>
            <li><a href="index.php">HOME</a>&nbsp; / &nbsp;</li>
            <li>Shipping Cost</li>
        </ul>
    </div>
</section>

<section class="calculator commonPadding">
    <div class="container-ctn">
        <div class="heading">
            <span>How does it work</span>
            <h2>Calculate Your International Shipping Cost</h2>
            <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and
                more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
        </div>
        <form id="shippingForm" class="shippingForm d-flex flex-wrap" novalidate>
            <div class="d-flex location">
                <div class="form-col-12 w-100 d-flex flex-wrap border1">
                    <select id="location" name="location">
                        <option value="0">Where do you want to send your package to?</option>
                        <option value="us">United States</option>
                        <option value="uk">United Kingdom</option>
                        <option value="ca">Canada</option>
                        <!-- Add more options as needed -->
                    </select>
                    <span class="error" id="locationError">Please select the location</span>
                </div>
            </div>
            <div class="d-flex flex-wrap form-row justify-content-between package">
                <div class="form-col-5 radioOuter d-flex flex-wrap align-items-end border1">
                    <p>Package Type</p>
                    <div class="d-flex">
                        <div class="custom-radio">
                            <input type="radio" id="document" name="package_type" value="document" checked>
                            <label for="document">Document</label>
                        </div>
                        <div class="custom-radio">
                            <input type="radio" id="non_document" name="package_type" value="non_document">
                            <label for="non_document">Non-document</label>
                        </div>
                    </div>
                    <span class="error" id="package_typeError">Please select the package type</span>

                </div>
                <div class="form-col-5 radioOuter d-flex flex-wrap  align-items-end border1">
                    <p>Package Weight</p>
                    <div class="d-flex">
                        <div class="custom-radio">
                            <input type="radio" id="kg" name="weight_unit" value="kg" checked>
                            <label for="kg">Kg</label>
                        </div>
                        <div class="custom-radio">
                            <input type="radio" id="lb" name="weight_unit" value="lb">
                            <label for="lb">Lb</label>
                        </div>
                    </div>
                    <span class="error" id="weight_unitError">Please select any option</span>

                </div>
                <div class="form-col-2 ">
                    <div class="input-group justify-content-between">
                        <button type="button" class="decrement" data-field="weight"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none"> <g clip-path="url(#clip0_1623_290)"> <path d="M21.25 15C21.25 15.69 20.69 16.25 20 16.25H10C9.31 16.25 8.75 15.69 8.75 15C8.75 14.31 9.31 13.75 10 13.75H20C20.69 13.75 21.25 14.31 21.25 15ZM30 6.25V23.75C30 27.1962 27.1962 30 23.75 30H6.25C2.80375 30 0 27.1962 0 23.75V6.25C0 2.80375 2.80375 0 6.25 0H23.75C27.1962 0 30 2.80375 30 6.25ZM27.5 6.25C27.5 4.1825 25.8175 2.5 23.75 2.5H6.25C4.1825 2.5 2.5 4.1825 2.5 6.25V23.75C2.5 25.8175 4.1825 27.5 6.25 27.5H23.75C25.8175 27.5 27.5 25.8175 27.5 23.75V6.25Z" fill="#101010" /> </g> <defs> <clipPath id="clip0_1623_290"> <rect width="30" height="30" fill="white" /> </clipPath> </defs> </svg></button>
                        <input type="number" id="weight" name="weight"  value=" 0.00" step="0.1" >
                        <button type="button" class="increment" data-field="weight"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none"> <g clip-path="url(#clip0_1623_286)"> <path d="M21.25 15C21.25 15.6912 20.69 16.25 20 16.25H16.25V20C16.25 20.6912 15.69 21.25 15 21.25C14.31 21.25 13.75 20.6912 13.75 20V16.25H10C9.31 16.25 8.75 15.6912 8.75 15C8.75 14.3088 9.31 13.75 10 13.75H13.75V10C13.75 9.30875 14.31 8.75 15 8.75C15.69 8.75 16.25 9.30875 16.25 10V13.75H20C20.69 13.75 21.25 14.3088 21.25 15ZM30 6.25V23.75C30 27.1962 27.1962 30 23.75 30H6.25C2.80375 30 0 27.1962 0 23.75V6.25C0 2.80375 2.80375 0 6.25 0H23.75C27.1962 0 30 2.80375 30 6.25ZM27.5 6.25C27.5 4.1825 25.8175 2.5 23.75 2.5H6.25C4.1825 2.5 2.5 4.1825 2.5 6.25V23.75C2.5 25.8175 4.1825 27.5 6.25 27.5H23.75C25.8175 27.5 27.5 25.8175 27.5 23.75V6.25Z" fill="#101010" /> </g> <defs> <clipPath id="clip0_1623_286"> <rect width="30" height="30" fill="white" /> </clipPath> </defs> </svg></button>
                    </div>
                    <span class="error" id="weightError">Please select the package weight</span>

                </div>
            </div>
            <h3>Volumetric Weight (Optional)</h3>
            <div class="d-flex flex-wrap form-row justify-content-between weight">
                <div class="form-col-2 radioOuter d-flex flex-wrap align-items-end border1">
                    <p>Unit</p>
                    <div class="d-flex">
                        <div class="custom-radio">
                            <input type="radio" id="cm" name="volumetric_unit" value="cm" checked>
                            <label for="cm">cm</label>
                        </div>
                        <div class="custom-radio">
                            <input type="radio" id="in" name="volumetric_unit" value="in">
                            <label for="in">in</label>
                        </div>
                    </div>
                    <span class="error" id="volumetric_unitError">Please select any option</span>

                </div>
                <div class="form-col-3  border1 d-flex align-items-end inputOuter">
                    <p>Length</p>
                    <div class="input-group justify-content-between">
                        <button type="button" class="decrement" data-field="length"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none"> <g clip-path="url(#clip0_1623_290)"> <path d="M21.25 15C21.25 15.69 20.69 16.25 20 16.25H10C9.31 16.25 8.75 15.69 8.75 15C8.75 14.31 9.31 13.75 10 13.75H20C20.69 13.75 21.25 14.31 21.25 15ZM30 6.25V23.75C30 27.1962 27.1962 30 23.75 30H6.25C2.80375 30 0 27.1962 0 23.75V6.25C0 2.80375 2.80375 0 6.25 0H23.75C27.1962 0 30 2.80375 30 6.25ZM27.5 6.25C27.5 4.1825 25.8175 2.5 23.75 2.5H6.25C4.1825 2.5 2.5 4.1825 2.5 6.25V23.75C2.5 25.8175 4.1825 27.5 6.25 27.5H23.75C25.8175 27.5 27.5 25.8175 27.5 23.75V6.25Z" fill="#101010" /> </g> <defs> <clipPath id="clip0_1623_290"> <rect width="30" height="30" fill="white" /> </clipPath> </defs> </svg></button>
                        <input type="number" id="length" name="length"  value=" 0.00" step="0.1">
                        <button type="button" class="increment" data-field="length"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none"> <g clip-path="url(#clip0_1623_286)"> <path d="M21.25 15C21.25 15.6912 20.69 16.25 20 16.25H16.25V20C16.25 20.6912 15.69 21.25 15 21.25C14.31 21.25 13.75 20.6912 13.75 20V16.25H10C9.31 16.25 8.75 15.6912 8.75 15C8.75 14.3088 9.31 13.75 10 13.75H13.75V10C13.75 9.30875 14.31 8.75 15 8.75C15.69 8.75 16.25 9.30875 16.25 10V13.75H20C20.69 13.75 21.25 14.3088 21.25 15ZM30 6.25V23.75C30 27.1962 27.1962 30 23.75 30H6.25C2.80375 30 0 27.1962 0 23.75V6.25C0 2.80375 2.80375 0 6.25 0H23.75C27.1962 0 30 2.80375 30 6.25ZM27.5 6.25C27.5 4.1825 25.8175 2.5 23.75 2.5H6.25C4.1825 2.5 2.5 4.1825 2.5 6.25V23.75C2.5 25.8175 4.1825 27.5 6.25 27.5H23.75C25.8175 27.5 27.5 25.8175 27.5 23.75V6.25Z" fill="#101010" /> </g> <defs> <clipPath id="clip0_1623_286"> <rect width="30" height="30" fill="white" /> </clipPath> </defs> </svg></button>
                    </div>
                    <span class="error" id="lengthError">Please select the package length</span>

                </div>
                <div class="form-col-3  border1 d-flex align-items-end inputOuter">
                    <p>Height</p>
                    <div class="input-group justify-content-between">
                       <button type="button" class="decrement" data-field="height"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none"> <g clip-path="url(#clip0_1623_290)"> <path d="M21.25 15C21.25 15.69 20.69 16.25 20 16.25H10C9.31 16.25 8.75 15.69 8.75 15C8.75 14.31 9.31 13.75 10 13.75H20C20.69 13.75 21.25 14.31 21.25 15ZM30 6.25V23.75C30 27.1962 27.1962 30 23.75 30H6.25C2.80375 30 0 27.1962 0 23.75V6.25C0 2.80375 2.80375 0 6.25 0H23.75C27.1962 0 30 2.80375 30 6.25ZM27.5 6.25C27.5 4.1825 25.8175 2.5 23.75 2.5H6.25C4.1825 2.5 2.5 4.1825 2.5 6.25V23.75C2.5 25.8175 4.1825 27.5 6.25 27.5H23.75C25.8175 27.5 27.5 25.8175 27.5 23.75V6.25Z" fill="#101010" /> </g> <defs> <clipPath id="clip0_1623_290"> <rect width="30" height="30" fill="white" /> </clipPath> </defs> </svg></button>
                       <input type="number" id="height" name="height"  value=" 0.00" step="0.1">
                       <button type="button" class="increment" data-field="height"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none"> <g clip-path="url(#clip0_1623_286)"> <path d="M21.25 15C21.25 15.6912 20.69 16.25 20 16.25H16.25V20C16.25 20.6912 15.69 21.25 15 21.25C14.31 21.25 13.75 20.6912 13.75 20V16.25H10C9.31 16.25 8.75 15.6912 8.75 15C8.75 14.3088 9.31 13.75 10 13.75H13.75V10C13.75 9.30875 14.31 8.75 15 8.75C15.69 8.75 16.25 9.30875 16.25 10V13.75H20C20.69 13.75 21.25 14.3088 21.25 15ZM30 6.25V23.75C30 27.1962 27.1962 30 23.75 30H6.25C2.80375 30 0 27.1962 0 23.75V6.25C0 2.80375 2.80375 0 6.25 0H23.75C27.1962 0 30 2.80375 30 6.25ZM27.5 6.25C27.5 4.1825 25.8175 2.5 23.75 2.5H6.25C4.1825 2.5 2.5 4.1825 2.5 6.25V23.75C2.5 25.8175 4.1825 27.5 6.25 27.5H23.75C25.8175 27.5 27.5 25.8175 27.5 23.75V6.25Z" fill="#101010" /> </g> <defs> <clipPath id="clip0_1623_286"> <rect width="30" height="30" fill="white" /> </clipPath> </defs> </svg></button>
                    </div>
                    <span class="error" id="heightError">Please select the package height</span>

                </div>
                <div class="form-col-3  border1 d-flex align-items-end inputOuter">
                    <p>Width</p>
                    <div class="input-group justify-content-between">
                         <button type="button" class="decrement" data-field="width"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none"> <g clip-path="url(#clip0_1623_290)"> <path d="M21.25 15C21.25 15.69 20.69 16.25 20 16.25H10C9.31 16.25 8.75 15.69 8.75 15C8.75 14.31 9.31 13.75 10 13.75H20C20.69 13.75 21.25 14.31 21.25 15ZM30 6.25V23.75C30 27.1962 27.1962 30 23.75 30H6.25C2.80375 30 0 27.1962 0 23.75V6.25C0 2.80375 2.80375 0 6.25 0H23.75C27.1962 0 30 2.80375 30 6.25ZM27.5 6.25C27.5 4.1825 25.8175 2.5 23.75 2.5H6.25C4.1825 2.5 2.5 4.1825 2.5 6.25V23.75C2.5 25.8175 4.1825 27.5 6.25 27.5H23.75C25.8175 27.5 27.5 25.8175 27.5 23.75V6.25Z" fill="#101010" /> </g> <defs> <clipPath id="clip0_1623_290"> <rect width="30" height="30" fill="white" /> </clipPath> </defs> </svg></button>
                        <input type="number" id="width" name="width"  value=" 0.00" step="0.1">
                        <button type="button" class="increment" data-field="width"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none"> <g clip-path="url(#clip0_1623_286)"> <path d="M21.25 15C21.25 15.6912 20.69 16.25 20 16.25H16.25V20C16.25 20.6912 15.69 21.25 15 21.25C14.31 21.25 13.75 20.6912 13.75 20V16.25H10C9.31 16.25 8.75 15.6912 8.75 15C8.75 14.3088 9.31 13.75 10 13.75H13.75V10C13.75 9.30875 14.31 8.75 15 8.75C15.69 8.75 16.25 9.30875 16.25 10V13.75H20C20.69 13.75 21.25 14.3088 21.25 15ZM30 6.25V23.75C30 27.1962 27.1962 30 23.75 30H6.25C2.80375 30 0 27.1962 0 23.75V6.25C0 2.80375 2.80375 0 6.25 0H23.75C27.1962 0 30 2.80375 30 6.25ZM27.5 6.25C27.5 4.1825 25.8175 2.5 23.75 2.5H6.25C4.1825 2.5 2.5 4.1825 2.5 6.25V23.75C2.5 25.8175 4.1825 27.5 6.25 27.5H23.75C25.8175 27.5 27.5 25.8175 27.5 23.75V6.25Z" fill="#101010" /> </g> <defs> <clipPath id="clip0_1623_286"> <rect width="30" height="30" fill="white" /> </clipPath> </defs> </svg></button>
                    </div>
                    <span class="error" id="widthError">Please select the package width</span>

                </div>
            </div>

            <button type="submit" class="btn w-fit themeBtn loadMore m-auto"><i><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none"> <g clip-path="url(#clip0_1566_268)"> <path d="M14.1667 10.5C14.1667 10.9608 13.7933 11.3333 13.3333 11.3333H10.8333V13.8333C10.8333 14.2942 10.46 14.6667 10 14.6667C9.54 14.6667 9.16667 14.2942 9.16667 13.8333V11.3333H6.66667C6.20667 11.3333 5.83333 10.9608 5.83333 10.5C5.83333 10.0392 6.20667 9.66667 6.66667 9.66667H9.16667V7.16667C9.16667 6.70583 9.54 6.33333 10 6.33333C10.46 6.33333 10.8333 6.70583 10.8333 7.16667V9.66667H13.3333C13.7933 9.66667 14.1667 10.0392 14.1667 10.5ZM20 4.66667V16.3333C20 18.6308 18.1308 20.5 15.8333 20.5H4.16667C1.86917 20.5 0 18.6308 0 16.3333V4.66667C0 2.36917 1.86917 0.5 4.16667 0.5H15.8333C18.1308 0.5 20 2.36917 20 4.66667ZM18.3333 4.66667C18.3333 3.28833 17.2117 2.16667 15.8333 2.16667H4.16667C2.78833 2.16667 1.66667 3.28833 1.66667 4.66667V16.3333C1.66667 17.7117 2.78833 18.8333 4.16667 18.8333H15.8333C17.2117 18.8333 18.3333 17.7117 18.3333 16.3333V4.66667Z" fill="white"></path> </g> <defs> <clipPath id="clip0_1566_268"> <rect width="20" height="20" fill="white" transform="translate(0 0.5)"></rect> </clipPath> </defs> </svg></i>Get an Estimate </button>
        </form>
    </div>

</section>

<section class="dimension">
    <div class="container-ctn">
        <p>For the final weight we will calculate both the volumetric as well as the actual weight of the shipment and choose whichever is higher.</p>
        <div class="d-flex flex-wrap">
            <picture>
                <img src="web/images/box.png" class="img-fluid" width="352" height="323" alt="">
            </picture>
            <div class="calculations d-flex align-items-center flex-wrap justify-content-between">
                <p class="w-100">What is Volumetric weight?</p>
                <div class="sum">
                    <p>Volumetric Weight = </p>
                </div>
                <div class="result d-flex  flex-wrap">
                    <p>Length x Width x Height</p>
                    <p>5000 </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="shipping-notes commonPadding ">
    <div class="container-ctn list">
        <div class="heading">
            <span>Terms and Conditions</span>
            <h2 class="m-0">Shipping Notes</h2>
        </div>
        <p>Payment solutions enable businesses to accept payments Payment stions enable businesses to accept payments from ctly customers ctly securely. stions enable businesses to accept payments from ctly customers ctly securely. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
            <h3>Notes</h3>
            <ul>
                <li>Excludes oversized and palletized shipments, and special products (liquids, homemade food, etc)</li>
                <li>We cannot push the Ship Requests to Dispatch that are made after 3 PM or on Sundays; the same will be processed the next working day.</li>
                <li>For Electronics related shipping <a href="">please see the details here</a></li>
            </ul>

            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
       
    </div>
</section>

<section class="shipping-cta commonPadding pt-0">
    <div class="container-ctn">
        <div class="d-flex align-items-center flex-wrap">
            <picture>
                <img src="web/images/man.png" class="img-fluid" width="500" height="500" alt="">
            </picture>
            <div class="formContainer theme-form">
                 <h2 class="h3">Drop Your Contact Below and We Will Call You Back</h2>
             <form id="calculatorEnquiry" action="" method="post" enctype="multipart/form-data">
       
                     <div class="formGroup">
                         <div class="name">
                             <input type="text" id="name" name="name" placeholder="Full Name">
                             <span id="nameError" class="error-message">Please enter your name</span>
                         </div>
                     </div>
                     <div class="formGroup">
                         <div class="phone">
                             <input type="tel" id="phone" name="phone" placeholder="Phone number" class="phone_number">
                             <span id="phoneError" class="error-message">Please enter your phone number</span>
                         </div>
                     </div>
                     <div class="formGroup">
                         <div class="mail">
                             <input type="email" id="email" class="mail" name="email" placeholder="Email address">
                             <span id="emailError" class="error-message">Please enter a valid email</span>
                         </div>
                     </div>

                     <button type="submit" class="btn  themeBtn themeBtnWhite" value="Submit">
                     <i><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none"> <path d="M14.1667 10.5C14.1667 10.9608 13.7933 11.3333 13.3333 11.3333H10.8333V13.8333C10.8333 14.2942 10.46 14.6667 10 14.6667C9.54 14.6667 9.16667 14.2942 9.16667 13.8333V11.3333H6.66667C6.20667 11.3333 5.83333 10.9608 5.83333 10.5C5.83333 10.0392 6.20667 9.66667 6.66667 9.66667H9.16667V7.16667C9.16667 6.70583 9.54 6.33333 10 6.33333C10.46 6.33333 10.8333 6.70583 10.8333 7.16667V9.66667H13.3333C13.7933 9.66667 14.1667 10.0392 14.1667 10.5ZM20 4.66667V16.3333C20 18.6308 18.1308 20.5 15.8333 20.5H4.16667C1.86917 20.5 0 18.6308 0 16.3333V4.66667C0 2.36917 1.86917 0.5 4.16667 0.5H15.8333C18.1308 0.5 20 2.36917 20 4.66667ZM18.3333 4.66667C18.3333 3.28833 17.2117 2.16667 15.8333 2.16667H4.16667C2.78833 2.16667 1.66667 3.28833 1.66667 4.66667V16.3333C1.66667 17.7117 2.78833 18.8333 4.16667 18.8333H15.8333C17.2117 18.8333 18.3333 17.7117 18.3333 16.3333V4.66667Z" fill="#07725B"/> </svg></i>
                     SEND</button>
            </form>

             </div>
        </div>
    </div>
</section>

<?php include('includes/footer.php') ?>

