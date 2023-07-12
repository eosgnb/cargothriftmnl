<!-- Header File -->
<?php include 'header.php';?>

<body>
    <!-- Navigation File -->
    <?php include 'navigation.php';?>

    <!-- Shipping page -->
    <div class="container">
        <div class="row justify-content-center g-2 align-items-lg-start">
            <div class="col-lg-7 p-5"> 
                <div class="logo pb-3">
                    <img src="./images/logo.png" alt="CARGOTHRIFT.MNL Logo">
                </div>
                <div class="info-nav mt-2 mb-4">
                    <div class="navigation-menu">
                        <p class="menu-item"><a href="#" class="me-3">Cart</a></p>
                        <p class="menu-item"><a href="#" class="me-3">Information</a></p>
                        <p class="menu-item"><a href="#" class="me-3">Shipping</a></p>
                        <p class="menu-item current"><a href="#" class="fw-bold me-3">Payment</a>
                    </div>
                </div>
                <div>
                    <p class="mb-3 form-title">Contact</p>
                    <div class="mb-4">
                        <div class="border-gray p-3">
                            <p class="no-margin">Contact</p>
                            <div class="checkout-details d-flex align-items-start">
                                <p class="justify-content-start no-margin">eosuganob@gmail.com</p>
                                <button class="justify-content-end btn return-btn no-margin">Change</button>
                            </div>
                            <p class="gray-line"></p>
                            <p class="no-margin">Ship to</p>
                            <div class="checkout-details d-flex align-items-start">
                                <p class="justify-content-start no-margin">084 Area 1-A Luzon Avenue, Matandang Balara, 1119 Quezon City, Philippines</p>
                                <button class="justify-content-end btn return-btn no-margin">Change</button>
                            </div>
                            <p class="gray-line"></p>
                            <p class="no-margin">Method</p>
                            <div class="checkout-details d-flex align-items-start">
                                <p class="justify-content-start no-margin">Free Shipping</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Payment -->
                    <p class="mb-3 form-title">Payment</p>
                    <div class="accordion border-gray payment-section mb-4" id="accordionWithRadioExample_PreChecked">
                        <div class="card">
                            <div class="card-header payment-header highlight-border p-4">
                                <div class="form-check">
                                    <input checked data-bs-toggle="collapse" data-bs-target="#collapseOne_PreChecked" type="radio"  id="customRadio1_PreChecked" name="customRadio2" class="form-check-input"/>
                                    <label class="form-check-label fw-bold" for="customRadio1_PreChecked">Secure payments via PayMongo</label>
                                </div>
                            </div>
                            <div id="collapseOne_PreChecked" class="collapse show" data-bs-parent="#accordionWithRadioExample_PreChecked">
                                <div class="card-body">
                                    <p class="text-start no-margin">After clicking “Pay now”, you will be redirected to Secure Payments via PayMongo to complete your purchase securely.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header payment-header p-4">
                                <div class="form-check">
                                    <input data-bs-toggle="collapse" data-bs-target="#collapseTwo_PreChecked" type="radio" id="customRadio2_PreChecked" name="customRadio2" class="form-check-input" />
                                    <label class="form-check-label fw-bold" for="customRadio2_PreChecked">Cash on Delivery - Metro Manila</label>
                                </div>
                            </div>
                            <div id="collapseTwo_PreChecked" class="collapse" data-bs-parent="#accordionWithRadioExample_PreChecked">
                                <div class="card-body">
                                    <p class="text-start no-margin">If you live within Metro Manila, you can pay the product fee via cash directly to your rider upon delivery! The instructions will be presented on the next page and a system automated instructions will be sent through your email.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header payment-header p-4">
                                <div class="form-check">
                                    <input data-bs-toggle="collapse" data-bs-target="#collapseThree_PreChecked" type="radio" id="customRadio3_PreChecked" name="customRadio2" class="form-check-input" />
                                    <label class="form-check-label fw-bold" for="customRadio3_PreChecked">Cash on Delivery - Nationwide</label>
                                </div>
                            </div>
                            <div id="collapseThree_PreChecked" class="collapse" data-bs-parent="#accordionWithRadioExample_PreChecked">
                                <div class="card-body">
                                    <p class="text-start no-margin">If you live outside Metro Manila, you can pay the product fee via cash directly to your rider upon delivery or your LBC branch representative upon pick-up. The instructions will be presented on the next page and a system automated instructions will be sent through your email.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Billing Address -->
                    <p class="mb-3 form-title">Billing Address</p>
                    <div class="accordion border-gray address-section" id="accordionWithRadioExample_PreChecked">
                        <div class="card">
                            <div class="card-header address-header highlight-border p-4">
                                <div class="form-check">
                                    <input checked data-bs-toggle="collapse" data-bs-target="#collapseFour_PreChecked" type="radio" name="customRadio" id="customRadio4_PreChecked" class="form-check-input"/>
                                    <label class="form-check-label fw-bold" for="customRadio4_PreChecked">Same as shipping address</label>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header address-header p-4">
                                <div class="form-check">
                                    <input data-bs-toggle="collapse" data-bs-target="#collapseFive_PreChecked" type="radio" id="customRadio5_PreChecked" name="customRadio" class="form-check-input" />
                                    <label class="form-check-label fw-bold" for="customRadio5_PreChecked">Use different billing address</label>
                                </div>
                            </div>
                            <div id="collapseFive_PreChecked" class="collapse" data-bs-parent="#accordionWithRadioExample_PreChecked">
                                <div class="card-body">
                                    <form class="pb-2">
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label for="firstName">First Name</label>
                                                <input type="text" class="form-control" id="firstName" placeholder="Enter first name">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="lastName">Last Name</label>
                                                <input type="text" class="form-control" id="lastName" placeholder="Enter last name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <input type="text" class="form-control" id="address" placeholder="Enter address">
                                        </div>
                                        <div class="form-group">
                                            <label for="address">Apartment, suite, etc. (optional)</label>
                                            <input type="text" class="form-control" id="apartment" placeholder="Enter apartment, suite, etc.">
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label for="city">City</label>
                                                <input type="text" class="form-control" id="city" placeholder="Enter city">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="postalCode">Postal Code</label>
                                                <input type="text" class="form-control" id="postalCode" placeholder="Enter postal code">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="address">Region</label>
                                            <input type="text" class="form-control" id="region" placeholder="Enter region">
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="text" class="form-control" id="phone" placeholder="Enter phone number">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="button-group">
                        <button type="button" class="btn return-btn justify-content-start">Return to Shipping</button>
                        <button type="submit" id="submitBtn" class="btn submit-btn ml-2 p-4 justify-content-end">Pay Now</button>
                    </div>
                </div>
            </div>

            <!-- Checkout products preview -->
            <div class="col-lg-5">
                <div class="checkout">
                    <div class="d-flex align-items-center m-3 checkout-item-border">
                        <img src="./images/products/cargo-pants/cp-product-1.jpg" class="img-fluid checkout-img" alt="">
                        <div class="checkout-details checkout-item pb-3">
                            <p class="justify-content-start">Aeropostale Cargo</p>
                            <p class="justify-content-end fw-bold">₱400</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center m-3 checkout-item-border">
                        <img src="./images/products/cargo-pants/cp-product-2.jpg" class="img-fluid checkout-img" alt="">
                        <div class="checkout-details checkout-item pb-2">
                            <p class="justify-content-start">Dockers Cargo</p>
                            <p class="justify-content-end fw-bold">₱350</p>
                        </div>
                    </div>
                    <div class="checkout-pricing-details">
                        <div class="checkout-details">
                            <p class="justify-content-start">Subtotal</p>
                            <p class="justify-content-end">₱750</p>
                        </div>
                        <div class="checkout-details">
                            <p class="justify-content-start">Shipping</p>
                            <p class="justify-content-end">Free</p>
                        </div>
                        <div class="checkout-details">
                            <p class="justify-content-start fw-bold">Total</p>
                            <p class="justify-content-end fw-bold">₱750</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const submitButton = document.querySelector('#submitBtn');
            const radioButtons = document.querySelectorAll('input[name="customRadio2"]');
            radioButtons.forEach(radioButton => {
            
            radioButton.addEventListener('change', function() {
                    if (this.id === 'customRadio1_PreChecked') {
                        submitButton.innerHTML = 'Pay Now';
                    } else if (this.id === 'customRadio2_PreChecked') {
                        submitButton.innerHTML = 'Complete Order';
                    } else if (this.id === 'customRadio3_PreChecked') {
                        submitButton.innerHTML = 'Complete Order';
                    }
                });
            });
        });

        // Get all the radio buttons within the payment section
        var paymentRadioButtons = document.querySelectorAll('.payment-section input[type="radio"]');

        // Add event listener to each radio button
        paymentRadioButtons.forEach(function (paymentRadioButton) {
        paymentRadioButton.addEventListener('click', function () {
            // Get the parent card header element
            var paymentCardHeader = this.closest('.payment-header');

            // Remove the highlight-border class from all card header elements
            var allPaymentHeaders = document.querySelectorAll('.payment-header');
            allPaymentHeaders.forEach(function (paymentHeader) {
            paymentHeader.classList.remove('highlight-border');
            });

            // Add the highlight-border class to the clicked card header element
            paymentCardHeader.classList.add('highlight-border');
        });
        });

        // Get all the radio buttons within the payment section
        var addressRadioButtons = document.querySelectorAll('.address-section input[type="radio"]');
        // Add event listener to each radio button
        addressRadioButtons.forEach(function (addressRadioButton) {
        addressRadioButton.addEventListener('click', function () {
            // Get the parent card header element
            var addressCardHeader = this.closest('.address-header');

            // Remove the highlight-border class from all card header elements
            var allAddressHeaders = document.querySelectorAll('.address-header');
            allAddressHeaders.forEach(function (addressHeader) {
            addressHeader.classList.remove('highlight-border');
            });

            // Add the highlight-border class to the clicked card header element
            addressCardHeader.classList.add('highlight-border');
        });
        });

    </script>
    
    <!-- Footer File -->
    <?php include 'footer.php';?>
</body>
</html>