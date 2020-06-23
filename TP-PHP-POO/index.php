<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Bienvenue chez Clinique Veterinaire !" />
  <meta name="author" content="Atohoun Marvin"/>
  <title>Clinique Veterinaire</title>
    
  <!-- CSS & frameworks -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> 
  <script src="https://kit.fontawesome.com/2186d3ac63.js" crossorigin="anonymous"></script> 
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <!-- Image and text -->
  <nav class="row navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
      <img src="sources/images/veterinaire.png" width="60" height="60" class="d-inline-block align-top" alt="" loading="lazy">
    Clinique Veterinaire
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item mx-2">
            <a class="nav-link text-white" href="index.php#">Accueil</a>
        </li>
        <li class="nav-item mx-2">
            <a class="nav-link text-white" href="index.php#presentation">Nos Animaux</a>
        </li>
        <li class="nav-item mx-2">
            <a class="nav-link text-white" href="contact.php">Contact</a>
        </li>        
        </ul>
    </div>
  </nav>
    


  
  <div class="album py-5 bg-light">
    <div class="container jumbotron text-left">
      
      <div class="row">

        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="sources/images/bengal.jpg" alt="" width="100%" height="225">
            <div class="card-body">
                <h1>Chat</h1>
                <?php
                    include("chat.php"); 
                    ?>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="sources/images/cheval.jpg" alt="" width="100%" height="225">
            <div class="card-body">

            <h1>Cheval</h1>
            <?php
                    include("cheval.php"); 
                    ?>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="sources/images/jack-russell-terrier.jpg" alt="" width="100%" height="225">
            <div class="card-body">
                <h1>Chien</h1>
                <?php
                    include("chien.php"); 
                    ?>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="sources/images/perruche_ondule.jpg" alt="" width="100%" height="225">
            <div class="card-body">
                <h1>Perruche</h1>

                <?php
                    include("perruche.php"); 
                    ?>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                </div>
              </div>
            </div>
          </div>
        </div>




      </div>

    </div>
  </div>

  <footer class="page-footer font-small blue">
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
      <a href="https://mdbootstrap.com/"> Clinique veterinaire</a>
    </div>
  </footer>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-.1.2/jquery.s"></script>
</body>
</html>
