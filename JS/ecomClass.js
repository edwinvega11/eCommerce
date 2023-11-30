class ecomClass{
    
    constructor(){
        this.products = [];
        this.cart=[];

    }

    addProducts(productID, name, price, image){
        let subArray = {productID:productID, productName:name, productPrice:price, productImage:image }
        this.products.push(subArray);
    }

   testProducts(){
    EC.addProducts("2", "White Dress", "$46", "img/product-1.jpg");
    EC.addProducts("12", "Denim Jacket", "$43", "img/product-2.jpg");
    EC.addProducts("22", "Black dress", "$56", "img/product-4.jpg");
    EC.addProducts("23", "Leather Jacket", "$28", "img/product-3.jpg");
   }

   testCart(){
    EC.addToCart("2", "White Dress", "$46", "1", "img/product-1.jpg");
    EC.addToCart("12", "Denim Jacket", "$43", "1", "img/product-2.jpg");
   }

   
    addToCart(id, names, cost ,qty,pic){
        let subArray ={productID:id, productName:names,price:cost ,productQuantity:qty, productImage:pic}
        this.cart.push(subArray);
    
    }



}