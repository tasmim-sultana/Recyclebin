<?php
include("dbConnection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu" rel="stylesheet">
  <title>Checkout</title>
  <style>
    body
    {
      background-color:#E6E6FA;
    }
    
  </style>
</head>
<body>
  <div class="container mt-5">
    <div class="row">
      <div class="col-sm-6 offset-sm-3" style=" background-color:#FFF8DC;
      color:00FFFF;">
        <h3 class="text-center">  Payment Page </h3>

         <form action="<?php $_PHP_SELF ?>" method="POST" enctype="multipart/form-data">
          <div class="form-group ">
            <label for="order_id">Order Id: </label>
            <input type="text" class="form-control" id="order_id" name="order_id" required>
          </div>
          <div class="form-group ">
            <label for="p_name">Product Name: </label>
            <input type="text" class="form-control" id="p_name" name="p_name" value="Hand Bag" readonly>
          </div>
          <div class="form-group ">
            <label for="p_desc">Product Description: </label>
            <input type="text" class="form-control" id="p_desc" name="p_desc" value="Only two times have been used. Still looks like new" readonly>
          </div>
          <div class="form-group">
            <label for="email">Customer Email: </label>
            <input type="text" class="form-control" id="userLogEmail" name="userLogEmail"
              value="tasmimsultana@gmail.com" readonly>
          </div>
          <div class="form-group">
            <label for="email">Selling Prices: </label>
            <input type="text" class="form-control" id="s_price" name="s_price" value="800" readonly>
          </div>

              <label for="paymentmethod">Enter a payment method: </label><br>

                  <div style="float:left; padding:25px; color:DarkCyan">
                  <input type="radio" id="paypal" name="p_method" value="paypal">
                  <label for="paypal "><i class="fab fa-cc-paypal"></i> Paypal</label><br>
                  <input type="radio" id="creditcard" name="p_method" value="creditcard">
                  <label for="creditcard"><i class="far fa-credit-card"></i>  Credit Card</label>
                  </div>  

                  <div style="float:right; padding:25px; color:DarkCyan">
                 <input type="radio" id="mastercard" name="p_method" value="mastercard">
                  <label for="mastercard"><i class="fab fa-cc-mastercard"></i>  Master Card</label><br>
                  <input type="radio" id="amazoncard" name="p_method" value="amazoncard" >
                  <label for="amazoncard"><i class="fab fa-cc-amazon-pay"></i>  Amazon Pay</label>
                  </div>
            <br> 
          <div style="clear:both; text-align:center">
          <button type="submit" class="btn btn-danger" name="productPurchesBtn"> Buy </button>
           </div>
          
        </form>

      </div>
    </div>
  </div>
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"> </script>
  <script src="js/all.min.js"></script>
  </body>
</html>
<?php
if(isset($_REQUEST['productPurchesBtn']))
{
     $orderId=$_REQUEST['order_id'];
     $pname=$_REQUEST["p_name"];
     $userEmail=$_REQUEST['userLogEmail'];
     $productPrice=$_REQUEST['s_price'];
     $paymentMethod=$_REQUEST['p_method'];
        $sql="INSERT INTO productOrder(order_id,user_email,s_price,p_method,date) VALUES ('$orderId','$userEmail','$productPrice','$paymentMethod',now())";
        $result=mysqli_query($conn,$sql);
        if($result)
        {
            echo "Redirecting to home page....";
            echo "<script> setTimeout(()=> { window.location.href ='index.php';},1500);</script>";
        }
        else
        {
           echo mysqli_error($conn);
        }
}
?>