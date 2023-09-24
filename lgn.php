<?php
include("connection.php");
if(isset($_POST['submit']))
{
    $uname=$_POST['user'];
    $pw=$_POST['pass'];

    $sql="select * from lgn where username='$uname' and password='$pw'";
    $result=mysqli_querry($conn,$sql);
    $row=mysql_fetch_array($result,MYSQL_ASSOC);
    $count=mysqli_num_rows($result);
    if($count==1)
    {
        header("location:thrifted.html");
    }
    else{
        echo'<script>
        window.location.href=register.php
        alert("login failed invalid username/password")
        </script>';
    }
   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="thrifted.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
           .heading h1{
            color:blue;
    font-size: 35px;
    text-align:center;
    padding:5px;
    margin-top: 8px;
    
           }
           body{
               background-image: url(https://in.images.search.yahoo.com/images/view;_ylt=Awr1Tp0dO1BjrogX1ne9HAx.;_ylu=c2VjA3NyBHNsawNpbWcEb2lkA2Q3OGViM2I0MTNmNmE3ZmUwMDAwYTU5YmNhYjUwMTZhBGdwb3MDMgRpdANiaW5n?back=https%3A%2F%2Fin.images.search.yahoo.com%2Fsearch%2Fimages%3Fp%3Dpattern%26type%3DE211IN826G0%26fr%3Dmcafee%26fr2%3Dpiv-web%26tab%3Dorganic%26ri%3D2&w=1024&h=1024&imgurl=media.istockphoto.com%2Fvectors%2Fseamless-pattern-with-paisley-vector-id462765381&rurl=https%3A%2F%2Fwww.istockphoto.com%2Fvector%2Fseamless-pattern-with-paisley-gm462765381-32782540&size=492.2KB&p=pattern&oid=d78eb3b413f6a7fe0000a59bcab5016a&fr2=piv-web&fr=mcafee&tt=Seamless+Pattern+With+Paisley+Stock+Illustration+-+Download+Image+Now+...&b=0&ni=21&no=2&ts=&tab=organic&sigr=5uqNme8NuQac&sigb=sbw_voVDQi9p&sigi=qaTzjivTHHAa&sigt=bIM7yBWlQkjU&.crumb=.jPSL86dca9&fr=mcafee&fr2=piv-web&type=E211IN826G0);
               background-size: cover ;
           }
           form{
               background-color: beige;
                margin-top: 10em;
           margin-left: 10em;
           margin-right: 10em;
           padding 30px;
           

       }
   </style>
   <title>registration form</title>
</head>
<body>
<div class="heading">
  <h1>Login</h1>
          </div>
<div class="key_container">
            <form action="thrift store.php">
                
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <div id="emailHelp" class="for m-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="pwd">
                  </div>
                  <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1"  >
                    <label  class="form-check-label" for="exampleCheck1">check me out</label>
                
                  </div>
               
                <button type="submit" class="btn btn-primary" name="login">Submit</button>
              <br>
          
          </form>
        </div>
</body>
</html>