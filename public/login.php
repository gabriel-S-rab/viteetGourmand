<?php require_once __DIR__.'/../src/session.php'; ?>

<!--formulaire de connexion  -->
<!DOCTYPE html>
<html lang="fr"> 
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Vite&Gourmand</title> 
        <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
        <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" defer></script>
    </head> 
<body>
      <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #2E2E2E;" data-bs-theme="light">
  <div class="container-fluid">
<img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
    <a class="navbar-brand mx-2">Navbar</a>
         <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="index.html">Accueil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="carte.html">La carte</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Mon compte</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="login.html">Connexion</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="logout.html">Deconnexion</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="register.html">Inscription</a>
                  </li>
                    <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                  </li>
                </ul>
         </div>
    </nav>
 </header>
    <main>
        <div class="container-fluid  vh-100 text-center">
          <h4 class="m-4">Connexion</h4>
          <div class="container w-25 h-50 align-content-center">
            <form action="../src/index.php" method="POST">
  <div class="mb-3">
    <label for="Email" class="form-label">adresse Email :</label>
    <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder = "entrer votre email..." name="email">
    <div id="emailHelp" class="form-text">Nous ne partagerons jamais votre e-mail avec qui que ce soit.</div>
  </div>
  <div class="mb-3">
    <label for="Password" class="form-label">mot de passe :</label>
    <input type="password" class="form-control" id="Password" placeholder ="entrer votre mot de passe..." name="password">
  </div>
  <div class="mb-3 form-check">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  
  <button type="submit"  class="btn btn-primary" name="connexion" value="connexion">Connexion</button>
  
 <?php if(isset($_SESSION['csrfToken'],$_SESSION['utilisateur_id']))  echo $_SESSION['utilisateur_id'] .$_SESSION['csrfToken'] ?>


</form>
          </div>
        </div>
 
    </header>
    <main></main>
       <footer class="bg-dark text-white text-center" >
        <div class= "row">
            <div class="col-12">
            <h3>nos horaires</h3>
            <p>du mardi au dimanche 12h00 - 14h00   18h00 - 23h00</p>
         </div>
         <div clas="col-6"> 
            <p>Adresse <br>
               adresse <br>
               adresse <br>
            </p>
         </div>
         <div class= "col-6">
            <p>le mail</p>
         </div>
          <div class= "col-6">
            <p>numero de telephone</p>
         </div>
       </div>
     </footer>
</body> 
</html>