let EC = new ecomClass();
EC.testProducts();
EC.testCart();


innit();

function innit (){
    displayCartProductsPhp();

}

// function displayCart(){
//     let lis ="";

    
//         for (const key in EC.cart) {
//             const value = EC.cart[key];
  
//                 lis += '<div class="card rounded-3 mb-4">'+
//                 '<div class="card-body p-4">'+
//                 '<div class="row d-flex justify-content-between align-items-center">'+
//                     '<div class="col-md-2 col-lg-2 col-xl-2">'+
//                     '<img src="'+value.productImage+'"'+
//                         'class="img-fluid rounded-3" alt="Cotton T-shirt">'+
//                     '</div>'+
//                     '<div class="col-md-3 col-lg-3 col-xl-3">'+
//                     '<p class="lead fw-normal mb-2">'+value.productName+'</p>'+
//                     '<p><span class="text-muted">Size: </span>M <span class="text-muted">Color: </span>Grey</p>'+
//                     '</div>'+
//                     '<div class="col-md-3 col-lg-3 col-xl-2 d-flex">'+
//                     '<button class="btn btn-link px-2"'+
//                         'onclick="this.parentNode.querySelector(\'input[type=number]\').stepDown()">'+
//                         '<i class="fas fa-minus"></i>'+
//                     '</button>'+
    
//                     '<input id="form1" min="0" name="quantity" value="2" type="number"'+
//                         'class="form-control form-control-sm" />'+
    
//                     '<button class="btn btn-link px-2"'+
//                         'onclick="this.parentNode.querySelector(\'input[type=number]\').stepUp()">'+
//                         '<i class="fas fa-plus"></i>'+
//                     '</button>'+
//                     '</div>'+
//                    '<div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">'+
//                     '<h5 class="mb-0">'+value.price+'</h5>'+
//                     '</div>'+
//                     '<div class="col-md-1 col-lg-1 col-xl-1 text-end">'+
//                     '<a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>'+
//                     '</div>'+
//                 '</div>'+
//                 '</div>'+
//                 '</div>'
        
//     }

//     document.getElementById('cartProductsDisplay').innerHTML = lis;
//     console.log(lis);


// }

function displayCartProductsPhp(){
    var data = new FormData();
    data.append('nameFunction','displayCartProductsPhp');
   
    // (B2) AJAX CALL
  
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "php/functions.php");
    xhr.onload = function () {
      console.log(this.response);
  
      document.getElementById('cartProductsDisplay').innerHTML = this.response;
    };
    xhr.send(data);
    return false;
  }



