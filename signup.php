<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wordbite SignUp</title>
    <link rel="icon" type="image/png" href="./assets/img/logo.png">
    <!-- bootstrap css file -->
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
</head>
<body>
    
    <div class="container-fluid">

        <div class="d-flex justify-content-center mt-5 pb-3">
            <div class="card text-center">
                <div class="card-header">
                  SignUp
                </div>
                <div class="card-body">
                    <form action="./src/register.php" method="POST">
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="imputFirstName">First Name</label>
                            <input type="text" name="firstName" placeholder="first name" required class="form-control" id="inputFirstName">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputLastName">Last Name</label>
                            <input type="text" class="form-control" id="inputLastname" name="lastName" required placeholder="last name">
                          </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail">Email</label>
                            <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email" required>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputPassword1">Password</label>
                                <input type="password" class="form-control" name="password1" id="inputPassowrd1" placeholder="Password" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword2">Confirm password</label>
                                <input type="password" class="form-control" name="password2" id="inputPassword2" placeholder="Confirm Password" required>
                            </div>
                        </div>
                        <div class="form-group">
                          <label for="inputAddress">Address</label>
                          <input type="text" name="address1" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </div>
                        <div class="form-group">
                          <label for="inputAddress2">Address 2</label>
                          <input type="text" name="address2" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="inputCity">City</label>
                            <input type="text" name="city" class="form-control" id="inputCity" placeholder="city">
                          </div>
                          <div class="form-group col-md-4">
                            <label for="inputState">State</label>
                            <input type="text" name="state" id="inputState" class="form-control" required>
                          </div>
                          <div class="form-group col-md-2">
                            <label for="inputZip">Zip</label>
                            <input type="text" name="zip" class="form-control" id="inputZip">
                          </div>
                        </div>
                        <small id="loginHelpBlock" class="form-text text-muted">
                            <label for="loginAccount">Have an account? <a href="./login.php" class="btn-link my-2">Log In</a></label>
                        </small>
                        <button type="submit" class="btn btn-primary">Sign in</button>
                      </form>
                </div>
                <div class="card-footer text-muted">
                  Powered by Wordbite technologies
                </div>
              </div>
        </div>

    </div>

<script src="./assets/js/jquery-3.5.1.slim.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
</body>
</html>