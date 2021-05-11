<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>WordBite Login</title>
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

        <?php
            if(isset($message)){
              ?>
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?php echo $message;  ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php
            }
        ?>
    <!-- for login form -->
    <div class="d-flex justify-content-center mt-3">
      
        <div class="card text-center mt-5">
            <div class="card-header">
              Wordbite Login
            </div>
            <div class="card-body">
              <form method="POST" action="./index.php">
                <input type="hidden" name="action" value="login">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1" required>
                  </div>
                  <small id="loginHelpBlock" class="form-text text-muted">
                    <label for="SignUpAccount">Don't have a account? <a href="./signup.php" class="btn-link my-2">Sign UP</a></label><br>
                    <label for="SignUpAccount">Don't you rememeber password? <a href="./forgetPassword.php" class="btn-link my-2">Forget Password</a></label>
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
</body>
</html>
