<!-- Header File -->
<?php include 'header.php';?>

<body>
    <!-- Navigation File -->
    <?php include 'navigation.php';?>

    <div class="container pt-4">
        <div class="col-lg-7">
            <div class="logo pb-3">
                <img src="./images/logo.png" alt="CARGOTHRIFT.MNL Logo">
            </div>
            <div class="info-nav pb-3">
                <div class="navigation-menu">
                    <a href="#" class="menu-item">Cart</a>
                    <a href="#" class="menu-item current">Information</a>
                    <a href="#" class="menu-item">Shipping</a>
                    <a href="#" class="menu-item">Payment</a>
                </div>
            </div>
            <div>
                <p class="h3 my-4 form-title">Contact</p>
                <form class="pb-2">
                    <div class="form-group">
                        <label for="firstName">Email</label>
                        <input type="text" class="form-control" id="email" placeholder="Enter email">
                    </div>
                </form>
            </div>
            <div>
                <p class="h3 my-4 form-title">Shipping Address</p>
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

        </div>
    </div>

    <!-- Footer File -->
    <?php include 'footer.php';?>
</body>
</html>