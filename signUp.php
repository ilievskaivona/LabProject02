<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Sign Up Form</title>
    <style>
        .bg-1{
            background-color: #fafafa;
        }
        .bg-2{
            background-color: #b8e1dd;
        }
        .btn-color{
            background-color: #35b0ab;
        }
    </style>
  </head>
  <body>
  <div class="container mt-5">
    <div class="row pt-5">
        <div class="col-2"></div>
        <div class="col-lg-4 col-md-6 p-3 bg-1 rounded">
            <h2 class="text-center pb-4">Sign Up</h2>
            <form action="signup.php" method="POST">
                <div class="form-group">
                    <label for="signupUsername">Username:</label>
                    <input type="text" class="form-control" id="signupUsername" name="signupUsername" required>
                </div>
                <div class="form-group">
                    <label for="signupEmail">Email:</label>
                    <input type="email" class="form-control" id="signupEmail" name="signupEmail" required>
                </div>
                <div class="form-group">
                    <label for="signupPassword">Password:</label>
                    <input type="password" class="form-control" id="signupPassword" name="signupPassword" required>
                </div>
                <button type="submit" class="btn btn-color font-weight-bold mt-4 text-white w-100">Sign Up</button>
            </form>
        </div>

        <div class="col-lg-4 col-md-6 p-5 bg-2 rounded">
            <h4 class="pb-4">Welcome to our Book Library!</h4>
            <p>By signing up, you're opening the doors to a world of stories waiting to be embraced. As a new member, you'll create your reading haven, where every page turned and every story discovered becomes a part of your journey. Let your reading adventure commence – sign up today and let the words weave their magic.
            </p>
            <h5>Your next chapter awaits!</h5>
        </div>
        <div class="col-2"></div>
    </div>
</div>


    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  </body>
</html>