<?php require_once __DIR__."/../src/session.php"; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vite&Gourmand</title>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" defer></script>
</head>

<body class="d-flex flex-column min-vh-100">


          <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #2E2E2E;" data-bs-theme="light">
  <div class="container-fluid">
<img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
    <a class="navbar-brand mw-2">Navbar</a>
         <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="index.php">Accueil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="carte.php">La carte</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Mon compte</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="login.php">Connexion</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="logout.php">Deconnexion</a>
                  </li>
                    <li class="nav-item">
                    <a class="nav-link" href="register.php">inscription</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                  </li>
                </ul>
         </div>
    </nav>
 </header>
      <!-- Menu -->
      <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center">

          <li class="nav-item">
            <a class="nav-link text-white" href="index.php">Accueil</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="carte.php">La carte</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="#">Mon compte</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="login.php">Connexion</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="logout.php">Deconnexion</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="register.php">Inscription</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="contact.php">Contact</a>
          </li>

        </ul>
      </div>

    </div>
  </nav>
</header>



<main class="flex-fill py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">

                <div class="card shadow p-4">
                    <h4 class="text-center mb-4">Inscription</h4>

                    <form action="../src/index.php"  method="POST">

                     
                        <div class="mb-3">
                            <label for="email" class="form-label">Adresse Email :</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Entrer votre email">
                            <div class="form-text">Nous ne partagerons jamais votre e-mail avec qui que ce soit.</div>
                        </div>

                        <div class="mb-3">
                            <label for="prenom" class="form-label">Prénom :</label>
                            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Entrer votre prénom">
                        </div>

                      
                        <div class="mb-3">
                            <label for="nom1" class="form-label">Nom :</label>
                            <input type="text" class="form-control" id="nom1" name="nom" placeholder="Entrer votre nom">
                        </div>


                      
                        <div class="mb-3">
                            <label for="dateNaissance" class="form-label">Date de naissance : :</label>
                            <input type="date" class="form-control" id="dateNaissance" name="dateNaissance" placeholder="Entrer votre date de naissance">
                        </div>

                       
                        <div class="mb-3">
                            <label for="rue" class="form-label">Rue :</label>
                            <input type="text" class="form-control" id="rue" name ="rue" placeholder="Entrer votre rue">
                        </div>

                  
                        <div class="mb-3">
                            <label for="Ville" class="form-label">Ville :</label>
                            <input type="text" class="form-control" id="ville" name="ville" placeholder="Entrer votre ville">
                        </div>

                        <div class="mb-3">
                            <label for="codePostal" class="form-label">Code Postal :</label>
                            <input type="text" class="form-control" id="codePostal" name="codePostal" placeholder="Entrer votre codePostal">
                        </div>

                        <div class="mb-3">
                            <label for="pays" class="form-label">Pays :</label>
                            <input type="text" class="form-control" id="pays" name="pays" placeholder="Entrer votre pays">
                        </div>

                        <div class="mb-3">
                            <label for="telephone" class="form-label">Telephone:</label>
                            <input type="tel" class="form-control" id="telephone" name="telephone" placeholder="Entrer votre numéro de telephone">
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Mot de passe :</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Entrer votre mot de passe">
                        </div>

                        <div class="mb-3">
                            <label for="confPassword" class="form-label">Confirmation mot de passe  :</label>
                            <input type="password" class="form-control" id="confPassword" placeholder="Entrer a nouveau votre mot de passe">
                        </div>

                        <div class="d-grid mt-4">
                            <input type="hidden" name="csrfToken" value="<?php echo $_SESSION['csrfToken']; ?>">
                            <button type="submit" name="newUtilisateur" value="newUtilisateur" class="btn btn-primary">Inscription</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
</main>


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
