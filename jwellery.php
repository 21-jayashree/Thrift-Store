<?php
session_start();
include("connect_.php");
$sql="SELECT * FROM jew WHERE jfeatured=1";
$jfeature= $con->query($sql);

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            
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
                <a href="about_thriftstore.html">About Us</a>
                
            </div>
        </nav>
       
 
<div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="row">
 <h2 class="text-center"> jewellery</h2><br><br>
           <?php
     while($jew=mysqli_fetch_assoc($jfeature)){ 
       ?>
         <div class="col-md-3"> 
       <form action="manage_clothes_.php?id=<?=$jew['jid'];?>&item_name=<?=$jew['jtitle'];?>" method="POST">
    <img src="<?=$jew['jimg'];?>"width="200px"/>
    <p class="name"> <?=$jew['jtitle'];?></p>
    <input type="hidden" name="item_name" value="<?$jew['jtitle'];?>"> 
    <input type="hidden" name="item_price" value="<?=$jew['jprice'];?>"> 
    <div class="text-danger"><p class="lprice">  <?=$jew['jbrand'];?>  Rs<?=$jew['jprice'];?></p></div> <br>
    <div class="text-warning"> <p class="des"> <?=$jew['jdescription'];?></p></div>
    Quantity :<br><input type="number" name="quant" value="1" class="form-control"><br>
    <input type="submit" name="Add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to cart"/>
    <br><br>
     </form>
</div>
<?php } ?> 

</div>
<div class="btn btn-primary"><a href="shopnow.html">Explore our products</a></div>
</div>
</body>
</html>
