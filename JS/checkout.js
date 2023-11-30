innit();



function innit(){
    checkoutPricePhp();
    checkoutTotalPricePhp();
    

}
function clickButton() {
  var button = document.getElementById("myModalBtn");
  
  button.click();
}



function saveClientInfo(){

    let clientName = document.getElementById('clientNameInput').value;
    let clientLastName = document.getElementById('clientLastNameInput').value;
    let clientEmail = document.getElementById('clientEmailInput').value;
    let clientMobileNumber = document.getElementById('clientMobileNumberInput').value;
    let clientAddress1 = document.getElementById('clientAddress1Input').value;
    let clientAddress2 = document.getElementById('clientAddress2Input').value;
    let clientState = document.getElementById('clientStateInput').value;
    let clientCountry= document.getElementById('clientCountryInput').value;
    let clientCity = document.getElementById('clientCityInput').value;
    let clientZipCode= document.getElementById('clientZipCodeInput').value;
    let clientTotal= document.getElementById('totalPriceDisplayHIDDEN').value;
    let clientSubTotal= document.getElementById('subTotalPriceDisplay').innerHTML;
    let discount = document.getElementById('discountHIDDEN').value;
    clientSubTotal=clientSubTotal.replace('$','');
    
    
    
  
  
  

   
    clientInfoPhp(clientName, clientLastName, clientEmail, clientMobileNumber, clientAddress1, clientAddress2, clientState, clientCountry, clientCity, clientZipCode,clientTotal, clientSubTotal,discount);
   
   
}
  
  
  

function checkoutPricePhp(){
    var data = new FormData();
    data.append('nameFunction','checkoutPricePhp');
    
   
    // (B2) AJAX CALL
  
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "php/functions.php");
    xhr.onload = function () {
      console.log(this.response);
  
      document.getElementById('subtotalDisplay').innerHTML = this.response;
    //   document.getElementById('subTotalPriceDisplayHIDDEN').value = this.response;
    };
    xhr.send(data);
    return false;
  }

  function checkoutTotalPricePhp(){
    var data = new FormData();
    data.append('nameFunction','checkoutTotalPricePhp');
    
   
    // (B2) AJAX CALL
  
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "php/functions.php");
    xhr.onload = function () {
      console.log(this.response);
  
      document.getElementById('totalDisplay').innerHTML = this.response;
      checkCode();
      
      
    };
    xhr.send(data);
    return false;
  }

  function clientInfoPhp(clientName, clientLastName, Email, mobileNumber, addressLine, addressLine2, state, country, city, zipCode, totalPrice, subTotalPrice, discount){
    var data = new FormData();
    data.append('nameFunction','clientInfoPhp');
    data.append('clientName',clientName);
    data.append('clientLastName', clientLastName);
    data.append('Email',Email);
    data.append('mobileNumber', mobileNumber);
    data.append('addressLine',addressLine);
    data.append('addressLine2',addressLine2);
    data.append('state', state);
    data.append('country',country);
    data.append('city', city);
    data.append('zipCode', zipCode);
    data.append('totalPrice',totalPrice);
    data.append('subtotalPrice', subTotalPrice);
    data.append('discount',discount);


    // (B2) AJAX CALL
  
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "php/functions.php");
    xhr.onload = function () {
      console.log(this.response);
      clickButton();
  
    };
    xhr.send(data);
    return false;
  }

  function discountCodePhp(code){
    var data = new FormData();
    data.append('nameFunction','discountCodePhp');
    data.append('code',code);
    
   
    // (B2) AJAX CALL
  
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "php/functions.php");
    xhr.onload = function () {
      console.log(this.response);
  
        let myJson = JSON.parse(this.response);

      document.getElementById('discountCodeDisplay').innerHTML = myJson.message;
      if (myJson.status == 1){
        console.log("apply discount");
        let currTotal = document.getElementById('totalPriceDisplay').innerHTML;
        currTotal = currTotal.replace('$','');
        document.getElementById('discountHIDDEN').value=myJson.amount;
        let finalPrice = currTotal - myJson.amount;
        document.getElementById('totalPriceDisplay').innerHTML= "$" + finalPrice;
        document.getElementById('totalPriceDisplayHIDDEN').value= finalPrice;


      }  
      
    };
    xhr.send(data);
    return false;
  }


  function checkCode(){
    let temp = document.getElementById('codeInput').value;
    discountCodePhp(temp);
    
    


  }

  function orderConfPhp(){
    var data = new FormData();
    data.append('nameFunction','orderConfPhp');
    
   
    // (B2) AJAX CALL
  
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "php/functions.php");
    xhr.onload = function () {
      console.log(this.response);
  
      document.getElementById('modalText').innerHTML = this.response;
      
      
    };
    xhr.send(data);
    return false;
  }
 

  function clearCart(){
    var data = new FormData();
    data.append('nameFunction','clearCartPhp');
    
   
    // (B2) AJAX CALL
  
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "php/functions.php");
    xhr.onload = function () {
      console.log(this.response);
            window.location.href = 'index.php';
    };
    xhr.send(data);
    return false;

  }

  