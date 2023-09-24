<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <title>
            my cart
        </title>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" 
        integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/css/bootstrap-theme.min.css" 
        integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
        
        <link rel="stylesheet" type="text/css" href="thrifted.css">
        
        
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        
   
    </head>
    <body>

        <nav class="nav nav_top">
           
            <div class="nav_side">
                <a href="thrift store.html">Home</a>
                <a href="mycart_.php">My Cart</a>
               <!--<a href="">Favourite</a>--> 
                <!--<a href="Registerlogin.php">Register/login</a>-->
                <a href="about_thriftstore.html">About Us</a>
                
            </div>
        </nav>
          <div class="container">
          <div class="row">
           <div class="col-lg-12 text-center border rounded my-5">
          <h1 >My Cart</h1><br/>
</div>
<div class="col-lg-9">
 <table class="table table-bordered table-striped">
  <thead class="text-center">
    <tr>
      <!-- <th scope="col">Serial no</th> -->
      <th scope="col">Item name</th>
      <th scope="col">Item price</th>
      <th scope="col">Quantity</th>
    </tr>
  </thead>
  <tbody class="text-center"> 
    <?php
    include("connect_.php");
    $total=0;
        // foreach($_SESSION['cart'] as $key=>$value)
        $data=mysqli_query($con,"select * from cart");
        while($value=mysqli_fetch_assoc($data))
         {
            $total=$total+($value['item_price']*$value['quantity']);
            $idval=$value['serial_no'];
 print("
 <tr>
  
 <td>$value[item_name]</td>
 <td>$value[item_price]</td>
 <td>$value[quantity]</td>
 <td>
 <input class='btn btn-danger' type='submit' value='REMOVE' name='remove_item' onclick='redirect($idval);'>
 </td>
 </tr>
 ");
 }
 
 ?>
  </tbody>
</table>
</div>
<script>
    function redirect(val)
    {
        window.location.href="remove_.php?id="+val;
    }
</script>


<div class="col-lg-5" style="text-align:center;">
  <div class="border bg-light rounded p-4">
  <h3>TOTAL : Rs. <?php echo $total;?></h3>
 
</div>
<br><br>
<input class="btn btn-primary"type="submit" name="purchase" value="MAKE PURCHASE" style="width: 842px;padding:15px;font-size:15px;"/>

</div>

</div>
</div>
<br>
<br>
<div class="btn btn-primary" style="padding:15px;font-size:15px;color:white;"><a href="shopnow.html">Explore our products</a></div>
</body>
</html>