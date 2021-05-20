<nav class="navbar navbar-expand-lg navbar-light justify-content-between">
  <a class="navbar-brand" href="#">
    <img src="../assets/img/wordbite_logo.png" width="30" class="image rounded" height="30" alt="" loading="lazy">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">play</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">books</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">blogs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Writers</a>
      </li>
    </ul>
    <div class="d-flex mr-auto flex-row justitfy-content-start">
      <div class="form-inline my-2 my-lg-0">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="validatedInputGroupPrepend"><i class="bi-search"></i></span>
          </div>
        </div>
        <input class="form-control mr-sm-2" type="search" placeholder="Search" id="inputSearch" onClick="search()" aria-label="Search">
        <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
      </div>
    </div>
    <div class="d-flex ml-auto flex-row justitfy-content-start">
      <?php
      if(isset($_SESSION['isloggedIn'])&&$_SESSION['isloggedIn']==true){?>

      <a href="#" class="btn my-2 my-sm-0" style="color:orange;">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-bell"
          viewBox="0 0 16 16">
          <path
            d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
        </svg>
      </a>
      <a href="../index.php?logout='1'" class="btn my-2 my-sm-0" style="color:red;">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-box-arrow-right"
          viewBox="0 0 16 16">
          <path fill-rule="evenodd"
            d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
          <path fill-rule="evenodd"
            d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
        </svg>
      </a>
      <?php
      }else{
        ?>
      <a href="../modules/login.php" class="btn btn-outline-primary my-2 mr-2 my-sm-0">LogIn</a>
      <a href="../modules/signup.php" class="btn btn-outline-info my-2 mr-2 my-sm-0">SignUp</a>
      <?php
      }
    ?>
    </div>
  </div>
</nav>

<script src="../js/search.js"></script>