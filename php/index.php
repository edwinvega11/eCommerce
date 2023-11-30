<html> 
    <head>  
        <title> Edwin's Shop</title>
        

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <link href="css/index.css" rel="stylesheet">

    </head>
    <body>
        <div class="container">
            <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
              <a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                <!-- <a href="index.html"> -->
                    <span class="fs-4">Edwin's Shop</span>
                <!-- </a> -->
                
              </a>
        
              <ul class="nav nav-pills">
                <li class="nav-item"><a href="index.php" class="nav-link active" aria-current="page">Home</a></li>
                <li class="nav-item"><a href="products.php" class="nav-link">Products</a></li>
                <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                <li class="nav-item"><a href="cart.html" class="nav-link">Cart</a></li>
              </ul>
            </header>
          </div>

          <!-- carousel -->
        <div id="carouselExampleCaptions" class="carousel slide" style="height: 50%;">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/carousel-1.jpg" class="d-block w-100" alt="..." style="height: 100%;">
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="font-weight-semi-bold text-uppercase mb-3"><font color="white">Welcome</h5>
                  <p>Amazing store with items you will not find anywhere else</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/carousel-2.jpg" class="d-block w-100" alt="..." style="height: 100%;">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="font-weight-semi-bold text-uppercase mb-3"><font color="white">Amazing deals</h5>
                    <p>This store has some of the best deals available</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/cat-4.jpg" class="d-block w-100" alt="..." style="height: 100%;">
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="font-weight-semi-bold text-uppercase mb-3"><font color="white">Best Quality</h5>
                  <p>The quality of our clothes is our top priority</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>

        <hr>

        <h1 class="text-center font-weight-semi-bold text-uppercase mb-3">Products</h1>
        <div class="container">
            <div class="row" id="homeProductsDisplay">
                <div class="col-lg-4">
                    <div class="card product-item border-0 mb-4">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <a href="product1.html">
                                <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
                            </a>
                            
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                            <div class="d-flex justify-content-center">
                                <h6>$123.00</h6><h6 class="text-muted ml-2"></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="product1.html" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="cart.html" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4 col-md-3 col-sm-12 pb-1"> 
                    <div class="card product-item border-0 mb-4">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <a href="product2.html">
                                <img class="img-fluid w-100" src="img/product-2.jpg" alt="">
                            </a>
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                            <div class="d-flex justify-content-center">
                                <h6>$130.00</h6><h6 class="text-muted ml-2"></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="product2.html" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="cart.html" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4 col-md-3 col-sm-12 pb-1"> 
                    <div class="card product-item border-0 mb-4">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <a href="product3.html">
                                <img class="img-fluid w-100" src="img/product-3.jpg" alt="">
                            </a>
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                            <div class="d-flex justify-content-center">
                                <h6>$148.00</h6><h6 class="text-muted ml-2"><del>$170.00</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="product3.html" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="cart.html" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                </div><!-- /.col-lg-4 -->
            </div>
        </div> 

        <?php include 'toast.php'; ?>
        
        <script src="JS/productPages.js"></script>
        <script src="JS/ecomClass.js"></script>
        <script src="JS/index.js"></script>
        <script src="JS/toast.js"></script>
        <script src="JS/cartFunction.js"></script>
       


    </body>
   
    <hr>
    <div class="container">
        <footer class="py-3 my-4">
          <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="index.html" class="nav-link px-2 text-body-secondary">Home</a></li>
            <li class="nav-item"><a href="products.html" class="nav-link px-2 text-body-secondary">Products</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
            <li class="nav-item"><a href="cart.html" class="nav-link px-2 text-body-secondary">Cart</a></li>
          </ul>
          <p class="text-center text-body-secondary">© 2023 Company, Inc</p>
        </footer>
      </div>



      
     


</html>