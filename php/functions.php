<?php 
    $nameFunction = $_POST['nameFunction'];

    $nameFunction();
    
    function connectionMySQL(){
    
    
        //echo 'echo has been called'.$value;
    
        $servername = "localhost";
        $username = "id21360120_root";
        $password = "Evdr05!6";
        $dataBase = "id21360120_ecommercesite";
    
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dataBase);
    
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        //echo "Connected successfully";
        return $conn;
    }

    function productsPhp()
{
    $conn = connectionMySQL(); 


    $sql = "SELECT * FROM id21360120_ecommercesite.Products";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            //echo "id: " . $row["operatorID"] . " - Name: " . $row["operatorName"] . " " . $row["operatorLastName"] . "<br>";
            echo '<div class="col-lg-4 col-md-3 col-sm-12 pb-1"><div class="card product-item border-0 mb-4">'.
            '<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">'.
                '<a href="product.php?id='.$row["productID"].'" onclick="whatProduct("'.$row["productID"].'")">'.
                    '<img class="img-fluid w-100" src="'.$row["productImage"].'" alt="">'.
                '</a>'.
            '</div>'.
            '<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">'.
                '<h6 class="text-truncate mb-3">'.$row["productName"].'</h6>'.
                '<div class="d-flex justify-content-center">'.
                    '<h6>$'.$row["productPrice"].'</h6>'.
                '</div>'.
            '</div>'.
            '<div class="card-footer d-flex justify-content-between bg-light border">'.
                '<a href="product.php?id='.$row["productID"].'" class="btn btn-sm text-dark p-0" ><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>',
                '<a href="#" class="btn btn-sm text-dark p-0" onclick="toastFunction(\'Cart\',\'Product added to cart\'),addProductToCartPhp('.$row["productID"].',1)"><i class="fas fa-shopping-cart text-primary mr-1" ></i>Add To Cart</a>'.
            '</div>'.
        '</div>'.
    '</div>';
        }
    } else {
        echo "0 results";
    }
    $conn->close();

}



function productPagePhp()
{
    $conn = connectionMySQL(); 

    $id = $_POST['id'];

    $sql = "SELECT * FROM id21360120_ecommercesite.Products WHERE productID = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            //echo "id: " . $row["operatorID"] . " - Name: " . $row["operatorName"] . " " . $row["operatorLastName"] . "<br>";
            echo '<div class="container px-4 px-lg-5 my-5">'.
                '<div class="row gx-4 gx-lg-5 align-items-center">'.
                '<div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="'.$row["productImage"].'" alt="..." /></div>'.
                '<div class="col-md-6">'.
                    '<div class="small mb-1">'.$row["brandName"].'</div>'.
                    '<h1 class="display-5 fw-bolder">'.$row["productName"].'</h1>'.
                    '<div class="fs-5 mb-5">'.
                        '<span>$'.$row["productPrice"].'</span>'.
                    '</div>'.
                    '<p class="lead">'.$row["productDescription"].'</p>'.
                    '<div class="d-flex">'.
                        '<input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />'.
                        '<a href="#">'. 
                            '<button class="btn btn-primary flex-shrink-0" type="button" onclick="addProductToCartPhp(returnID(),returnQty()),toastFunction(\'Cart\',\'Product added to cart\')">'.
                            '<i class="bi-cart-fill me-1"></i>'.
                            'Add to cart'.
                            '</button>'.
                        '</a>'.
                    '</div>'.
                '</div>'.
                '</div>'.
                 '</div>';
        }
    } else {
        echo "0 results";
    }
    $conn->close();

}



function homeProductsPhp()
{
    $conn = connectionMySQL(); 


    $sql = "SELECT * FROM id21360120_ecommercesite.Products limit 3";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            //echo "id: " . $row["operatorID"] . " - Name: " . $row["operatorName"] . " " . $row["operatorLastName"] . "<br>";
            echo  '<div class="col-lg-4 col-md-3 col-sm-12 pb-1"><div class="card product-item border-0 mb-4">'.
            '<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">'.
                '<a href="product.php?id='.$row["productID"].'" onclick="whatProduct("'.$row["productID"].'")">'.
                    '<img class="img-fluid w-100" src="'.$row["productImage"].'" alt="">'.
                '</a>'.
            '</div>'.
            '<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">'.
                '<h6 class="text-truncate mb-3">'.$row["productName"].'</h6>'.
                '<div class="d-flex justify-content-center">'.
                    '<h6>$'.$row["productPrice"].'</h6>'.
                '</div>'.
            '</div>'.
            '<div class="card-footer d-flex justify-content-between bg-light border">'.
                '<a href="product.php?id='.$row["productID"].'" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>',
                '<a href="#" class="btn btn-sm text-dark p-0" onclick="toastFunction(\'Cart\',\'Product added to cart\'),addProductToCartPhp('.$row["productID"].',1)"><i class="fas fa-shopping-cart text-primary mr-1"  ></i>Add To Cart</a>'.
            '</div>'.
        '</div>'.
    '</div>';
        }
    } else {
        echo "0 results";
    }
    $conn->close();

}


function addProductToCartPhp()
{

    $id = $_POST['id'];
    $qty = $_POST['qty'];


   

    $conn = connectionMySQL(); 
    
   

    $sql = "INSERT INTO id21360120_ecommercesite.Cart (cartProductID, cartQuantity) VALUES ($id, $qty); ";
    
    echo $sql;
    $conn->query($sql);


    $conn->close();
}




function displayCartProductsPhp()
{
    $conn = connectionMySQL(); 
    $totalPrice=0;

    $sql = "SELECT cartProductID,SUM(cartQuantity)AS quantity,productName,productImage,productPrice,SUM(cartQuantity)*productPrice AS subtotal FROM id21360120_ecommercesite.Cart inner join id21360120_ecommercesite.Products ON Cart.cartProductID=Products.productID group by productID;"; 
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            //echo "id: " . $row["operatorID"] . " - Name: " . $row["operatorName"] . " " . $row["operatorLastName"] . "<br>";
            echo  '<div class="card rounded-3 mb-4">'.
            '<div class="card-body p-4">'.
            '<div class="row d-flex justify-content-between align-items-center">'.
                '<div class="col-md-2 col-lg-2 col-xl-2">'.
                '<img src="'.$row["productImage"].'"'.
                    'class="img-fluid rounded-3" alt="Cotton T-shirt">'.
                '</div>'.
                '<div class="col-md-3 col-lg-3 col-xl-3">'.
                '<p class="lead fw-normal mb-2">'.$row["productName"].'</p>'.
                '<p><span class="text-muted">Unit Price: </span>$'.$row["productPrice"].' </p>'.
                '</div>'.
                '<div class="col-md-3 col-lg-3 col-xl-2 d-flex">'.
                '<button class="btn btn-link px-2"'.
                    'onclick="this.parentNode.querySelector(\'input[type=number]\').stepDown()">'.
                    '<i class="fas fa-minus"></i>'.
                '</button>'.
                '<input id="form1" min="0" name="quantity" value="'.$row["quantity"].'" type="number"'.
                    'class="form-control form-control-sm" />'.
                '<button class="btn btn-link px-2"'.
                    'onclick="this.parentNode.querySelector(\'input[type=number]\').stepUp()">'.
                    '<i class="fas fa-plus"></i>'.
                '</button>'.
                '</div>'.
               '<div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">'.
                '<h5 class="mb-0" id="subtotalCart">$'.$row["subtotal"].'</h5>'.
                '</div>'.
                '<div class="col-md-1 col-lg-1 col-xl-1 text-end">'.
                '<a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>'.
                '</div>'.
            '</div>'.
            '</div>'.
            '</div>';
            $totalPrice = $totalPrice + $row["subtotal"];
           
            
        }
    } else {
        echo "0 results";
    }
   
   


    $conn->close();

}




function checkoutPricePhp()
{
    $conn = connectionMySQL(); 


    $sql = "SELECT SUM(cartQuantity * productPrice) AS subtotal FROM id21360120_ecommercesite.Cart inner join id21360120_ecommercesite.Products ON Cart.cartProductID=Products.productID";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            //echo "id: " . $row["operatorID"] . " - Name: " . $row["operatorName"] . " " . $row["operatorLastName"] . "<br>";
            echo '<h6 class="font-weight-medium">Subtotal</h6>'.
            '<h6 class="font-weight-medium" id="subTotalPriceDisplay">$'.$row["subtotal"] .'</h6>';
         
             
        }
    } else {
        echo "0 results";
    }
    $conn->close();
}


function checkoutTotalPricePhp()
{
    $conn = connectionMySQL(); 


    $sql = "SELECT SUM(cartQuantity * productPrice) + 10  AS total FROM id21360120_ecommercesite.Cart inner join id21360120_ecommercesite.Products ON Cart.cartProductID=Products.productID";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo '<h5 class="font-weight-bold">Total</h5>
            <h5 class="font-weight-bold" id="totalPriceDisplay">$'.$row["total"].'</h5>';
         
             
        }
    } else {
        echo "0 results";
    }
    $conn->close();
}

function clientInfoPhp()
{

    
    $clientName = $_POST['clientName'];
    $clientLastName = $_POST['clientLastName'];
    $Email = $_POST['Email'];
    $mobileNumber = $_POST['mobileNumber'];
    $addressLine = $_POST['addressLine'];
    $addressLine2 = $_POST['addressLine2'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $zipCode = $_POST['zipCode'];
    $clientTotal = $_POST['totalPrice'];
    $clientSubTotal = $_POST['subtotalPrice'];
    $discount = $_POST['discount'];


   

    $conn = connectionMySQL(); 
 
    
   

    $sql = "INSERT INTO id21360120_ecommercesite.client (clientName, clientLastName, Email, MobileNumber) VALUES ('{$clientName}', '{$clientLastName}', '{$Email}', '{$mobileNumber}');";
    
    if ($conn->query($sql) === TRUE) {
        $last_id = $conn->insert_id;
        echo "New record created successfully. Last inserted ID is: " . $last_id;
        $sql = "INSERT INTO id21360120_ecommercesite.address (clientID, addressLine, addressLine2, `state`, country, city, zipCode) VALUES ('{$last_id}', '{$addressLine}', '{$addressLine2}', '{$state}', '{$country}', '{$city}', '{$zipCode}');";
        $conn->query($sql);
        echo $sql;
        $last_idAddress = $conn->insert_id;
        echo "New record created successfully. Last inserted ID fo address is: " . $last_idAddress;
        $sql = "INSERT INTO id21360120_ecommercesite.Sales (client, subtotalSale, discountsSale, totalAmount, countrySale, adressSale) VALUES ('{$last_id}', '{$clientSubTotal}', '{$discount}', '{$clientTotal}', '{$country}', '{$last_idAddress}');";
        echo $sql;
        $conn->query($sql);
        $last_idSales = $conn->insert_id;
        $sql="INSERT INTO id21360120_ecommercesite.SalesDetail( salesID, productID, subtotalAmount, quantity) SELECT $last_idSales, cartProductID,SUM(cartQuantity),SUM(cartQuantity)*productPrice FROM id21360120_ecommercesite.Cart inner join id21360120_ecommercesite.Products ON Cart.cartProductID = Products.productID group by cartProductID;";
        echo $sql;
        $conn->query($sql);


       

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }


    $conn->close();
}


function addressInfoPhp()
{

    
    $clientName = $_POST['clientName'];
    $clientLastName = $_POST['clientLastName'];
    $Email = $_POST['Email'];
    $mobileNumber = $_POST['mobileNumber'];


   

    $conn = connectionMySQL(); 
    
   

    $sql = "INSERT INTO id21360120_ecommercesite.client (clientName, clientLastName, Email, MobileNumber) VALUES ('{$clientName}', '{$clientLastName}', '{$Email}', '{$mobileNumber}');";
    
    echo $sql;
    $conn->query($sql);


    $conn->close();
}


function discountCodePhp()
{
    $conn = connectionMySQL(); 

    $code = $_POST['code'];

    $rows = [];

    $sql = "SELECT * FROM id21360120_ecommercesite.Deals WHERE discountCode = '$code'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            // echo '<h6 class="font-weight-medium">Code: '.$row["discountCode"] .' was applied</h6>'.
            // '<h6 class="font-weight-medium">- $'.$row["discountAmount"] .'</h6>';
            $rows['message']= '<h6 class="font-weight-medium">Code: '.$row["discountCode"] .' was applied</h6>'.
            '<h6 class="font-weight-medium">- $'.$row["discountAmount"] .'</h6>';
            $rows['status']=1;
            $rows['amount']=$row["discountAmount"];
        }
    } else {
        // echo '<p>Code does not exist</p>'.
        // '<p></p>';
        $rows['message']= '<p>Code does not exist</p>'.
        '<p></p>';
        $rows['status']=0;
    }
    $conn->close();
    print (json_encode($rows));
}


function orderConfPhp()
{
    $conn = connectionMySQL(); 


    $sql = "SELECT *,concat(clientName,' ',clientLastName) as fullName, concat(addressLine,', ',addressLine2,', ',`state`,', ',country)as fullAddress FROM id21360120_ecommercesite.Sales inner join id21360120_ecommercesite.address on Sales.adressSale = address.ID inner join id21360120_ecommercesite.client ON Sales.client = client.ID order by saleID desc limit 1;";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo  '<div class="row row-cols-2">'.
            '<div class="col font-weight-bold">Name: <h6>'.$row["fullName"] .'</h6></div>'. 
            '<div class="col font-weight-bold">Shipping Address: <h6>'.$row["fullAddress"] .'</h6></div>'. 
            '<div class="col font-weight-bold">Discounts: <h6>$'.$row["discountsSale"] .'</h6></div>'. 
            '<div class="col font-weight-bold">Total Price: <h6>$'.$row["totalAmount"] .'</h6></div>'. 
          '</div>';
        }
    } else {
        echo "0 results";
    }
    $conn->close();

}

function clearCartPhp()
{
    $conn = connectionMySQL(); 


    $sql = "DELETE FROM id21360120_ecommercesite.Cart";      
    $conn->query($sql);

    
    $conn->close();

}


function getSomeAPI(){
    $api = 'https://www.boredapi.com/api/activity';
    $ch = curl_init($api);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $respuesta = curl_exec($ch);
    $respuesta = json_decode($respuesta);
    curl_close($ch);
    unset($ch);
    print json_encode($respuesta, JSON_UNESCAPED_UNICODE);
}

?>