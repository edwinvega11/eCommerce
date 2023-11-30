<html> 
    <head>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <link href="css/index.css" rel="stylesheet">

    </head>
    <body>
        <div class="container">
            <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
              <a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                <span class="fs-4">Edwin's Shop</span>
              </a>
        
              <ul class="nav nav-pills">
                <li class="nav-item"><a href="index.php" class="nav-link " aria-current="page">Home</a></li>
                <li class="nav-item"><a href="products.html" class="nav-link active">Products</a></li>
                <li class="nav-item"><a href="#" class="nav-link">About</a></li>
                <li class="nav-item"><a href="cart.html" class="nav-link">Cart</a></li>
              </ul>
            </header>
        </div>

        <div class="container-fluid bg-secondary mb-5">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px" >
                <h1 class="font-weight-semi-bold text-uppercase mb-3">The Shop</h1>
                <div class="d-inline-flex">
                    <p class="m-0">Welcome</p>
                </div>
            </div>
        </div>

        <div class="col-lg-12 col-md-12">
            <div class="row pb-3" id="productsDisplay">
                    <div class="col-lg-4 col-md-3 col-sm-12 pb-1"> 
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <a href="product1.html">
                                    <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
                                </a>
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <div class="square-spin-2"></div>
                                <div class="d-flex justify-content-center">
                                <div class="square-spin-2"></div>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <a href="product1.html" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                                <a href="cart.html" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1" onclick="EC.addToCart('\' + result.name + \'')"></i>Add To Cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-3 col-sm-12 pb-1"> 
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <a href="product2.html">
                                    <img class="img-fluid w-100" src="img/product-2.jpg" alt="">
                                </a>
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <div class="square-spin-2"></div>
                                <div class="d-flex justify-content-center">
                                <div class="square-spin-2"></div>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <a href="product2.html" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                                <a href="cart.html" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-3 col-sm-12 pb-1"> 
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <a href="product3.html">
                                    <img class="img-fluid w-100" src="img/product-3.jpg" alt="">
                                </a>
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <div class="square-spin-2"></div>
                                <div class="d-flex justify-content-center">
                                <div class="square-spin-2"></div>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <a href="product3.html" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                                <a href="cart.html" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-3 col-sm-12 pb-1"> 
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <a href="product4.html">
                                    <img class="img-fluid w-100" src="img/product-4.jpg" alt="">
                                </a>
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <div class="square-spin-2"></div>
                                <div class="d-flex justify-content-center">
                                <div class="square-spin-2"></div>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <a href="product4.html" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                                <a href="cart.html" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 pb-1"> 
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <a href="product5.html">
                                    <img class="img-fluid w-100" src="img/product-5.jpg" alt="">
                                </a>
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <div class="square-spin-2"></div>
                                <div class="d-flex justify-content-center">
                                <div class="square-spin-2"></div>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <a href="product5.html" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                                <a href="cart.html" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 pb-1"> 
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <a href="product6.html">
                                    <img class="img-fluid w-100" src="img/product-8.jpg" alt="">
                                </a>
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                             <div class="square-spin-2"></div>
                                <div class="d-flex justify-content-center">
                                    <div class="square-spin-2"></div>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <a href="product6.html" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                                <a href="cart.html" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                            </div>
                        </div>
                    </div>



            </div>
        </div>
   

            

        </div>


        <?php include 'toast.php'; ?>

    
    <script src="JS/ecomClass.js"></script>
    <script src="JS/productsClass.js"></script>
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