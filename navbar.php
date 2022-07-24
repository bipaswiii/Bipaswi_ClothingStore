<link type="text/css" rel="stylesheet" href="navbar.css">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="login.php"><img src="images/logo.png"  /></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
    <li class="nav-item active">
        <a class="nav-link" href="homepage.php">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="dashboard.php">My Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="newdisplay.php">Our Clothes</a>
      </li>

      <?php if(isset($_SESSION['ticket']) ) {?>
      
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="add_clothes.php">Add Items</a>
      </li>
      <?php  }
      else { 
     ?>




      <li class="nav-item">
      <a class="nav-link" href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
   
 
    

      <?php } ?>
      





      
      
    </ul>
  </div>
</nav>