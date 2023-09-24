
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X">
        <meta>
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
                    background-image: url("C:\xampp\htdocs\thrift store\background.jpeg");
                    background-size: cover ;
                }
                form{
                    background-color: beige;
                     margin-top: 15px;
                margin-left: 10em;
                margin-right: 10em;
                padding 20px;
                

            }
        </style><title>
            Register
        </title>
    </head>
    <body>
<div class="heading">
  <h1>Register</h1>
          </div>
        <div class="key_container">
            <form  method="POST" action ="connection.php">
                <div class="mb-3">
                    <label for="exampleInputname" class="form-label">Full name</label>
                    <input type="text" class="form-control" id="exampleInputname" name="name">
                
                  </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mail">
                  <div id="emailHelp" class="for m-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputphone_no" class="form-label">phone number</label>
                    <input type="number" class="form-control" id="exampleInputphone_no" name="pno"  >
                
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="pwd">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword2" class="form-label">confirm Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword2">
                  </div>
               
                <input type="submit" class="btn btn-primary" name="submit">
              <br>
            already registered? <a href="lgn.php">login</a>
          </form>
        </div>
    </body>
</html>