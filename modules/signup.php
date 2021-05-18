<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wordbite SignUp</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
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
            <div class="form-group">
              <label for="inputUsername">Username</label>
              <input type="text" name="username" class="form-control" id="inputUsername" required
                placeholder="Username">
            </div>
            <div class="form-group">
              <label for="inputEmail">Email</label>
              <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required>
            </div>
            <div class="form-row">
              <div class="form-group col-lg-6">
                <label for="inputPassword1">Password</label>
                <input type="password" name="password1" id="inputPassword1" class="form-control" placeholder="Password" required>
              </div>
              <div class="form-group col-lg-6">
                <label for="inputPassword2">Confirm Password</label>
                <input type="password" name="password2" id="inputPassword2" class="form-control" placeholder="Confirm Password" required>
              </div>
            </div>
            
            <small id="loginHelpBlock" class="form-text text-muted">
              <label for="loginAccount">Have an account? <a href="./modules/login.php" class="btn-link my-2">Log In</a></label>
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

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
    integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
  </script>

</body>

</html>