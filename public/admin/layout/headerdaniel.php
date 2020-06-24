
         <header id="above">
      <nav class="login text-right">
        <?php 
          //if (isset($_SESSION['username'])) {
            // ucfirst() turns the first letter to a capital letter, in a string

            $loggedInUsername = htmlentities(ucfirst($_SESSION['first_name'])); 

            $aboveNav = "Välkommen $loggedInUsername | <a href='../logout.php'>Logga ut</a>";
          //} else {
           // $aboveNav = "<a href='register.php'>Registrera dig</a> | <a href='login.php'>Logga in</a>";
          //}

          echo $aboveNav;
        ?>
      </nav>  
    </header>
 
  <nav class="navbar navbar-expand-lg navbar-light bg-light">

  <a class="navbar-brand" href="#"> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">

    <ul class="navbar-nav mr-only">
      <li class="nav-item active">
        <a class="nav-link" href="../productlist.php">Home <span class="sr-only"></span></a>
      </li>
      
     <li class="nav-item active">
        <a class="nav-link" href="../productlist.php">Product <span class="sr-only"></span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#"> Contact<span class="sr-only"></span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">About Us <span class="sr-only"></span></a>
      </li>
    </ul>
  </div>
</nav>





  <div class="row justify-content-center" id="bannercenter">
    <div class="col-fluid-auto">
         <img src="img/logo4.png" id="logo" width="100%">
    </div>
 

</div>


