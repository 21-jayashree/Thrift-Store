<?php
session_start();
include("connect_.php");
$sql="SELECT * FROM homedecor WHERE hfeature=2";
$hfeature= $con->query($sql);

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
 <h2 class="text-center"> homedecor</h2><br><br>
           <?php
     while($homedecor=mysqli_fetch_assoc($hfeature)){ 
       ?>
         <div class="col-md-3"> 
       <form action="manage_clothes_.php?id=<?=$homedecor['hid'];?>&item_name=<?=$homedecor['htitle'];?>" method="POST">
    <img src="<?=$homedecor['hpic'];?>"width="200px"/>
    <p class="name"> <?=$homedecor['htitle'];?></p>
    <input type="hidden" name="item_name" value="<?$homedecor['htitle'];?>"> 
    <input type="hidden" name="item_price" value="<?=$homedecor['hprice'];?>"> 
    <div class="text-danger"><p class="lprice">  <?=$homedecor['hbrand'];?>   Rs<?=$homedecor['hprice'];?></p></div>
    <div class="text-warning"> <p class="des"> <?=$homedecor['hdescription'];?></p></div>
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
homedecor