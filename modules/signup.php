<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wordbite SignUp</title>
  <link rel="icon" type="image/png" href="../img/wordbite_logo.png">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>

  <div class="container-fluid">

    <div class="d-flex justify-content-center mt-5 pb-3">
      <div class="card text-center">
        <div class="card-header">
          SignUp
        </div>
        <div class="card-body">
          <form action="../index.php" method="POST" id="signupForm">
            <input type="hidden" name="action" value="signup">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="imputFirstName">First Name</label>
                <input type="text" name="firstName" placeholder="first name" required class="form-control"
                  id="inputFirstName">
              </div>
              <div class="form-group col-md-6">
                <label for="inputLastName">Last Name</label>
                <input type="text" class="form-control" id="inputLastname" name="lastName" required
                  placeholder="last name">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-lg-6">
                <label for="inputEmail">Email</label>
                <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email" required>
              </div>
              <div class="form-group col-lg-6">
                <label for="inputDOB">Date of Birth</label>
                <input type="date" name="DOB" plcaeholder="dd/mm/yyyy" id="inputDOB" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label for="inputUniqueName">Username</label>
              <input type="text" name="uniqueName" id="inputUniqueName" class="form-control" placeholder="username" required>
                <span id="inputUniqueNameSpan"></span>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputPassword1">Password</label>
                <input type="password" class="form-control" name="password1" id="inputPassword1" placeholder="Password"
                  required>
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword2">Confirm password</label>
                <input type="password" class="form-control" name="password2" id="inputPassword2"
                  placeholder="Confirm Password" required>
              </div>
              <div class="form-group col-lg-12 justify-content-center">
                <span id="passwordSpan"></span>
              </div>
            </div>
            <div class="form-row justify-content-center">
              <div class="form-group col-lg-6">
                <label for="inputAddress">Gender</label>
                <div class="form-check form-check-inline">
                  <input class="form-check-input ml-3" type="radio" name="gender" id="exampleRadios1" value="female"
                    checked>
                  <label class="form-check-label" for="exampleRadios1">
                    Female
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="male" checked>
                  <label class="form-check-label" for="exampleRadios1">
                    Male
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="inputMobile">Mobile</label>
              <input type="text" name="mobile" id="inputMobile" class="form-control" placeholder="0000000000"
                max_length=10 min_length=10 required>
            </div>
            <small id="loginHelpBlock" class="form-text text-muted">
              <label for="loginAccount">Have an account? <a href="./login.php" class="btn-link my-2">Log
                  In</a></label>
            </small>
            <button type="submit" id="signupBtn" class="btn btn-primary">Sign in</button>
          </form>
        </div>
        <div class="card-footer text-muted">
          Powered by Wordbite technologies
        </div>
      </div>
    </div>

  </div>

  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

  <!-- custom scripts -->
  <script src="../js/singupPageScript.js"></script>

  <script src="../js/jquery-3.5.1.slim.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>

</html>