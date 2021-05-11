<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>WordBite Password Reset</title>
  <base href="/">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="./assets/img/logo.png">
    <!-- bootstrap css file -->
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
</head>
<body>
    
   <div class="container-fluid">
   <?php
    include_once('./components/header.php');
   ?>
    <!-- for forget form -->
    <div class="d-flex justify-content-center mt-3">
      
        <div class="card text-center mt-5">
            <div class="card-header">
              Wordbite Password Reset
            </div>
            <div class="card-body">
              <form method="POST" action="./index.php">
                <input type="hidden" name="action" value="resetPassword">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                  <small id="loginHelpBlock" class="form-text text-muted">
                    <label for="SignUpAccount">Now you remember your account? <a href="./login.php" class="btn-link my-2">Log In</a></label>
                  </small>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="card-footer text-muted">
              Powered by wordbite technologies
            </div>
          </div>
    </div>

   </div>

<script src="./assets/js/jquery-3.5.1.slim.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script> -->
</body>
</html>
