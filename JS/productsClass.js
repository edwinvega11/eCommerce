let EC = new ecomClass();
EC.testProducts();

innit();

function innit (){
    productsPhp();
    

}



function productBuilder(){

    let lis ="";

    
        for (const key in EC.products) {
            const value = EC.products[key];
  
                lis += '<div class="col-lg-4">'+
                    '<div class="card product-item border-0 mb-4">' +
                        '<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">' +
                            '<a href="product1.html">' +
                                '<img class="img-fluid w-100" src=" ' + value.productImage + ' " alt="">' +
                            '</a>' +                        
                        '</div>' +
                    ' <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">' +
                            '<h6 class="text-truncate mb-3">'+value.productName +'</h6>' +
                            '<div class="d-flex justify-content-center">' +
                                '<h6>'+value.productPrice +'</h6><h6 class="text-muted ml-2"></h6>' +
                            '</div>' +
                        '</div>' +
                        '<div class="card-footer d-flex justify-content-between bg-light border">' +
                            '<a href="product1.html" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>' +
                            '<a href="#" class="btn btn-sm text-dark p-0" onclick="EC.addToCart(\'' + value.productID + '\', \'' + value.productName + '\', \'' + value.productPrice + '\',\'' + value.productName + '\',\'' + value.productImage + '\')"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>' +
                        '</div>' +
                        '</div>' +
                    '</div>'
                    // onclick="EC.addToCart("' + value.productID + '","'+ value.productName+'","'+ value.productPrice+'","'+ value.productImage+'")"
                    // onclick="EC.addToCart(\'' + value.productID + '\', \'' + value.productName + '\', \'' + value.productPrice + '\',\'' + value.productName + '\',\'' + value.productImage + '\')"
    }

    document.getElementById('productsDisplay').innerHTML = lis;
}


function productsPhp(){
    var data = new FormData();
    data.append('nameFunction','productsPhp');
   
    // (B2) AJAX CALL
  
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "php/functions.php");
    xhr.onload = function () {
      console.log(this.response);
  
      document.getElementById('productsDisplay').innerHTML = this.response;
    };
    xhr.send(data);
    return false;
  }

  