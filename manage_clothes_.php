<?php
session_start();
include("connect_.php");
if( isset($_POST['Add_to_cart']))
{
    if(isset($_SESSION['cart']))
    {
        $myitems=array_column($_SESSION['cart'],'id');
        if(in_array($_GET['id'],$myitems))
        {
            echo"<script>alert('item already added'); window.location.href='clothes.php';</script>";
        }
        else
        { 
            $id=$_GET['id'];
            $iname=$_GET["item_name"];
            $amount=$_POST["item_price"];
            $qty=$_POST["quant"];
            $q1="insert into cart values('$id','$iname','$amount','$qty')";
            $res=mysqli_query($con,$q1);
            $_SESSION['cart'][]=array('idno'=>$_GET['id'],'name'=>$_GET["item_name"],'price'=>$_POST["item_price"],'quant'=>$_POST["quant"]);
            echo"<script>alert('item  added'); window.location.href='clothes_.php';</script>";
       }
    }
    else{
        $id=$_GET['id'];
        $iname=$_GET["item_name"];
        $amount=$_POST["item_price"];
        $qty=$_POST["quant"];
        $q1="insert into cart values('$id','$iname','$amount','$qty')";
        $res=mysqli_query($con,$q1);
    $_SESSION['cart'][]=array('idno'=>$_GET['id'],'name'=>$_GET["item_name"],'price'=>$_POST["item_price"],'quant'=>$_POST["quant"]);
    echo"<script>alert('item  added'); window.location.href='clothes_.php';</script>";
} 
}

// }
?>