<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>WordBite Login</title>
  <base href="/">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="../img/wordbite_logo.png">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    
   <div class="container-fluid">
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
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1" required>
                  </div>
                  <small id="loginHelpBlock" class="form-text text-muted">
                    <label for="SignUpAccount">Don't have a account? <a href="./modules/signup.php" class="btn-link my-2">Sign UP</a></label>
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


    <script src="../js/jquery-3.5.1.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>
