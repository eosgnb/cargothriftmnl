<!-- Header File -->
<?php include 'header.php';?>

<body>
    <!-- Navigation File -->
    <?php include 'navigation.php';?>

    <div class="container pt-4">
        <div class="row justify-content-center g-2 align-items-lg-start">
            <div class="col-lg-7 p-5">
                <div class="logo pb-3">
                    <img src="./images/logo.png" alt="CARGOTHRIFT.MNL Logo">
                </div>
                <div class="info-nav pb-3">
                    <div class="navigation-menu">
                        <a href="#" class="menu-item">Cart</a>
                        <a href="#" class="menu-item">Information</a>
                        <a href="#" class="menu-item current">Shipping</a>
                        <a href="#" class="menu-item">Payment</a>
                    </div>
                </div>
                <div>
                    <p class="h4 my-4 form-title">Contact</p>
                    <div class="pb-3">
                        <div class="border-gray p-4">
                            <p class="no-margin">Email</p>
                            <div class="checkout-details d-flex align-items-start">
                                <p class="justify-content-start no-margin">eosuganob@gmail.com</p>
                                <button class="justify-content-end btn return-btn no-margin">Change</button>
                            </div>
                            <p class="gray-line"></p>
                            <p class="no-margin">Address</p>
                            <div class="checkout-details d-flex align-items-start">
                                <p class="justify-content-start no-margin">084 Area 1-A Luzon Avenue, Matandang Balara, 1119 Quezon City, Philippines</p>
                                <button class="justify-content-end btn return-btn no-margin">Change</button>
                            </div>
                        </div>
                    </div>
                    <p class="h4 my-4 form-title">Shipping Method</p>
                    <div class="border-gray p-4" style="background-color: #DADADA; border: 2px solid #909090;">
                        <div class="checkout-details">
                            <p class="justify-content-start no-margin">Shipping method</p>
                            <p class="justify-content-end no-margin">Free</p>
                        </div>
                    </div>
                    <div class="button-group">
                        <button type="button" class="btn return-btn justify-content-start">Return to Information</button>
                        <button type="submit" class="btn submit-btn ml-2 p-4 justify-content-end">Continue to Payment</button>
                    </div>
                </div>
            </div>
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

    <!-- Footer File -->
    <?php include 'footer.php';?>
</body>
</html>