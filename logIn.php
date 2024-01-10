<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Log In Form</title>
    <style>
        .bg-1{
            background-color: #ffcccc;
        }
        .bg-2{
            background-color: #fafafa;
        }
        .btn-color{
            background-color: #e46161;
        }
    </style>
  </head>
  <body>
  <div class="container mt-5">
    <div class="row pt-5">
        <div class="col-2"></div> 
        <div class="col-lg-4 col-md-6 p-3 bg-1 rounded">
            <h2 class="text-center pb-4">Log In</h2>
            
            <form action="login.php" method="POST">
                <div class="form-group">
                    <label for="loginUsername">Username:</label>
                    <input type="text" class="form-control" id="loginUsername" name="loginUsername" required>
                </div>
                <div class="form-group">
                    <label for="loginPassword">Password:</label>
                    <input type="password" class="form-control" id="loginPassword" name="loginPassword" required>
                </div>
                <button type="submit" class="btn btn-color font-weight-bold mt-4 text-white w-100">Login</button>
            </form>
        </div>

        <div class="col-lg-4 col-md-6 p-5 bg-2 rounded">
            <h4 class="pb-4">Welcome back to our Book Library! </h4>
            <p>It's fantastic to see you again. Your literary journey continues as you log in to your account. The stories you've explored, the characters you've met, and the knowledge you've gained all await your return. 
            </p>
            <h5>Happy reading!</h5>
        </div>
        <div class="col-2"></div>
    </div>
</div>

<?php
    
?>


    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  </body>
</html>