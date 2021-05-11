<nav class="navbar navbar-expand-lg navbar-light justify-content-between">
  <a class="navbar-brand" href="#">
    <img src="./assets/img/logo.png" width="30" class="image rounded" height="30" alt="" loading="lazy">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
        <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    <div class="d-flex ml-auto flex-row justitfy-content-start">
    <?php
      session_start();
      if(isset($_SESSION['loggedIn'])&&$_SESSION['loggedIn']==true){?>

        <a href="../index.php?logout='1'" class="btn btn-outline-warning my-2 my-sm-0">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
          <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
        </svg>
          LogOut
        </a>
<?php
      }else{
        ?>
        <a href="./login.php" class="btn btn-outline-primary my-2 mr-2 my-sm-0">LogIn</a>
        <a href="./login.php" class="btn btn-outline-info my-2 mr-2 my-sm-0">SignUp</a>
      <?php
      }
    ?>
    </div>
  </div>
</nav>