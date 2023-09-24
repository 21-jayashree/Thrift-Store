<?php
$sname='localhost';
$uname='root';
$pw='';
$dname='thrifted';
$conn=mysqli_connect($sname,$uname,$pw,$dname);
if($conn->connect_error)
{
    die("connection failed:".$conn->connect_error);
}
   mysqli_select_db($conn,"thrifted");
 if(isset($_POST['submit']))
 {
    $uname=$_POST['name'];
    $email=$_POST['mail'];
    $number=$_POST['pno'];
    $pw=$_POST['pwd'];
$sql="INSERT INTO register (`Name`, `Email`, `Phone number`, `Password`) VALUES ('$uname','$email','$number','$pw')";
   if(mysqli_query($conn,$sql))
   {
    echo "success";
     header('location:lgn.php');
    }
    else
    {
        echo "error $sql".mysqli_error($conn);
    }
}
   
session_start();
if(isset($_POST['login']))
{
    // $email=$_POST['mail'];
    // $pw=$_POST['pwd'];
    // $query="SELECT * FROM register WHERE 'mail'='$email' AND 'pwd'='$pw'";
    // $result=mysqli_query($conn,$query);
    // $row=mysql_fetch_array($result,MYSQLI_ASSOS);
    // if($row==1)
    // {
        header("location:thrift store.php");
    // }
}



mysqli_close($conn);


