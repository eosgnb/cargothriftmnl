<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CargoThrift.Mnl</title>

    <!-- Bootstrap CSS Link -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Montserrat&family=Open+Sans&family=Oswald&family=Roboto+Condensed&display=swap" rel="stylesheet">

    <!-- Local CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'navigation.php';?>
    
    <!-- Header section -->
    <div class="jumbotron d-flex flex-column align-items-center text-center">
        <h1 class="display-1 pb-3">Experience Ethical Fashion<br>at its Finest</h1>
        <p class="lead pb-3">Since 2023, CARGOTHRIFT.MNL been known for its great service and impeccable style.</p>
        <a onclick="window.location.href='shop.php'" class="btn btn-primary btn-lg" id="shopBtn" href="#" role="button">SHOP NOW</a>
    </div>
    
    <!-- Products category gallery -->
    <!-- <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 m-2">
                <div class="image-box">
                    <img src="./images/products/cargo-pants/cp-product-9.jpg" alt="Image 1">
                    <div class="button-container">
                        <button class="btn btn-primary">Button 1</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 m-2">
                <div class="image-box">
                    <img src="./images/products/corduroy/cords-product-1.jpg" alt="Image 2">
                    <div class="button-container">
                        <button class="btn btn-primary">Button 2</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 m-2">
                <div class="image-box">
                    <img src="./images/products/vintage/vint-product-2.jpg" alt="Image 3">
                    <div class="button-container">
                        <button class="btn btn-primary">Button 3</button>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="image-box">
                    <img src="./images/products/cargo-pants/cp-product-9.jpg" alt="Image 1">
                    <div class="button-container">
                        <button onclick="window.location.href='cargo.php'" class="btn prod-cat-btn">CARGO</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="image-box">
                    <img src="./images/products/corduroy/cords-product-1.jpg" alt="Image 2">
                    <div class="button-container">
                        <button onclick="window.location.href='corduroy.php'" class="btn prod-cat-btn">CORDUROY</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="image-box">
                    <img src="./images/products/vintage/vint-product-2.jpg" alt="Image 3">
                    <div class="button-container">
                        <button onclick="window.location.href='vintage.php'" class="btn prod-cat-btn">VINTAGE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

            <div class="main-container">        
                <div class="container1">
                    <div class="slider">
                        <img src="Images/CARGOTHRIFT.png"  alt="slider" />
                    </div>   
                </div>
                <div class="container2">
                    <div class="text">
                        <div id="About">
                            <h1>About Us</h1>
                            <h3>Founded in 2023, CargoThrift.mnl was born
                            from a vision to <br> revolutionize fashion and
                            promote sustainability. We curate <br>pre-loved
                            clothing, making fashion affordable and 
                            environmentally <br>friendly. With a commitment 
                            to reducing waste and empowering <br>conscious
                            consumerism, we provide a platform where
                            style meets <br>sustainability.</h3>
                            <h3>CargoThrift Shop is a unique and innovative retail destination
                            that <br> brings together the thrill of treasure hunting with the convenience <br> of online shopping.
                            We specialize in offering a wide variety of <br> pre-loved and gently used items, carefully curated to 
                            cater <br>to the diverse tastes and preferences of our customers.</h3>
                        </div>
                    </div> 
                </div>
            </div>
                
        
    <?php include 'footer.php';?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>