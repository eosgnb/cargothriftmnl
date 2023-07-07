<!-- Header File -->
<?php include 'header.php';?>

<body>
    <!-- Navigation File -->
    <?php include 'navigation.php';?>
    
    <!-- Header section -->
    <div class="jumbotron d-flex flex-column align-items-center text-center">
        <h1 class="display-1 pb-3">Experience Ethical Fashion<br>at its Finest</h1>
        <p class="h5 pb-3">Since 2023, CARGOTHRIFT.MNL been known for its great service and impeccable style.</p>
        <a onclick="window.location.href='shop.php'" class="btn btn-primary btn-lg" id="shopBtn" href="#" role="button">SHOP NOW</a>
    </div>
    
    <!-- Products category gallery -->
    <div class="container">
        <div class="row">
            <div class="col-md p-4">
                <div class="image-box">
                    <img src="./images/products/cargo-pants/cp-product-9.jpg" alt="Image 1">
                    <div class="button-container">
                        <button onclick="window.location.href='cargo.php'" class="btn prod-cat-btn">CARGO</button>
                    </div>
                </div>
            </div>
            <div class="col-md p-4">
                <div class="image-box">
                    <img src="./images/products/corduroy/cords-product-1.jpg" alt="Image 2">
                    <div class="button-container">
                        <button onclick="window.location.href='corduroy.php'" class="btn prod-cat-btn">CORDUROY</button>
                    </div>
                </div>
            </div>
            <div class="col-md p-4">
                <div class="image-box">
                    <img src="./images/products/vintage/vint-product-2.jpg" alt="Image 3">
                    <div class="button-container">
                        <button onclick="window.location.href='vintage.php'" class="btn prod-cat-btn">VINTAGE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Us -->
    <div class="container my-5 h-100 .bg-dark.bg-gradient">
        <div class="row">
            <div class="col-lg-4 pe-4">
                <img class="w-100" src="./images/justthriftit.png"/>
            </div>
            <div class="col-lg-8">
                <div class="mt-4">
                    <h1 class="display-4">ABOUT US</h1>
                    <p class="lead h3">Founded in 2023, CargoThrift.mnl was born from a vision to revolutionize fashion and promote sustainability. We curate pre-loved clothing, making fashion affordable and environmentally friendly. With a commitment to reducing waste and empowering conscious consumerism, we provide a platform where style meets sustainability. <br><br>CARGOTHRIFT.MNL is a unique and innovative retail destination that brings together the thrill of treasure hunting with the convenience of online shopping. We specialize in offering a wide variety of pre-loved and gently used items, carefully curated to cater to the diverse tastes and preferences of our customers.</p>
                </div>
            </div>
        </div>
    </div>     
        
    <?php include 'footer.php';?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>