<!-- Header File -->
<?php include 'header.php';?>

<body>
    <!-- Navigation File -->
    <?php include 'navigation.php';?>

    <!-- Information page -->
    <div class="container">
        <div class="row justify-content-center g-2 align-items-lg-start">
            <div class="col-lg-7 p-5">
                <div class="logo pb-3">
                    <img src="./images/logo.png" alt="CARGOTHRIFT.MNL Logo">
                </div>
                <div class="info-nav mt-2 mb-4">
                    <div class="navigation-menu">
                        <p class="menu-item"><a href="" class="me-3">Cart</a></p>
                        <p class="menu-item current"><a href="information.php" class="fw-bold me-3">Information</a></p>
                        <p class="menu-item"><a href="shipping.php" class="me-3">Shipping</a></p>
                        <p class="menu-item"><a href="payment.php" class=" me-3">Payment</a>
                    </div>
                </div>
                <div>
                    <p class="my-4 form-title">Contact</p>
                    <form class="pb-2">
                        <div class="form-group">
                            <label for="firstName">Email</label>
                            <input type="text" class="form-control" id="email" placeholder="Enter email">
                        </div>
                    </form>
                </div>
                <div>
                    <p class="my-4 form-title">Shipping Address</p>
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
                        <div class="button-group">
                            <button type="button" class="btn return-btn justify-content-start">Return to Cart</button>
                            <button type="submit" class="btn submit-btn ml-2 p-4 justify-content-end">Continue to Shipping</button>
                        </div>
                    </form>
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