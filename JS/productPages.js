let EC = new ecomClass();




    getProductIDPhp(returnID());
    



function returnID(){

  return document.getElementById('productID').value;
}
// function productPagePhp(productID){
//     var data = new FormData();
//     data.append('nameFunction','productPagePhp');
//     data.append('productID', 'productID');
   
//     // (B2) AJAX CALL
  
//     var xhr = new XMLHttpRequest();
//     xhr.open("POST", "php/functions.php");
//     xhr.onload = function () {
//       console.log(this.response);
  
//       document.getElementById('productPageDisplay').innerHTML = this.response;
//     };
//     xhr.send(data);
//     return false;
//   }

  function getProductIDPhp(id){
    var data = new FormData();
    data.append('nameFunction','productPagePhp');
    data.append('id',id);
   
    // (B2) AJAX CALL
  
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "php/functions.php");
    xhr.onload = function () {
      console.log(this.response);
  
      document.getElementById('productPageDisplay').innerHTML = this.response;
    };
    xhr.send(data);
    return false;
  }

  


  