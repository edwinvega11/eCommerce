// let EC = new ecomClass();
// EC.testProducts();
innit();

function innit (){
    homeProductsPhp();

}



// function homeProductBuilder(){

//     let lis ="";
//     let counter = 1;
    
//         for (const key in EC.products) {
//             const value = EC.products[key];
//             if (counter > 3 ){
//             } else{
//                 lis += '<div class="col-lg-4">'+
//                     '<div class="card product-item border-0 mb-4">' +
//                         '<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">' +
//                             '<a href="product1.html">' +
//                                 '<img class="img-fluid w-100" src=" ' + value.productImage + ' " alt="">' +
//                             '</a>' +                        
//                         '</div>' +
//                     ' <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">' +
//                             '<h6 class="text-truncate mb-3">'+value.productName +'</h6>' +
//                             '<div class="d-flex justify-content-center">' +
//                                 '<h6>'+value.productPrice +'</h6><h6 class="text-muted ml-2"></h6>' +
//                             '</div>' +
//                         '</div>' +
//                         '<div class="card-footer d-flex justify-content-between bg-light border">' +
//                             '<a href="product1.html" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>' +
//                             '<a href="cart.html" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>' +
//                         '</div>' +
//                         '</div>' +
//                     '</div>'
//                 counter++;
//         }
//     }

//     document.getElementById('homeProductsDisplay').innerHTML = lis;
// }


function homeProductsPhp(){
    var data = new FormData();
    data.append('nameFunction','homeProductsPhp');
   
    // (B2) AJAX CALL
  
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "php/functions.php");
    xhr.onload = function () {
      console.log(this.response);
  
      document.getElementById('homeProductsDisplay').innerHTML = this.response;
    };
    xhr.send(data);
    return false;
  }


 