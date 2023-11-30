function returnID(){

    return document.getElementById('productID').value;
  }
  
  function returnQty(){
    return document.getElementById('inputQuantity').value;
  
  }

function addProductToCartPhp(id,qty){
    var data = new FormData();
    data.append('nameFunction','addProductToCartPhp');
    data.append('id',id);
    data.append('qty', qty);
   
    // (B2) AJAX CALL
  
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "php/functions.php");
    xhr.onload = function () {
      console.log(this.response);
        
  
    };
    xhr.send(data);
    return false;
  }