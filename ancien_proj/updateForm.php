<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Disabled</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>

    <?php

      $id = $_GET['id'];

	  $servername = 'localhost';
      $username = 'sio';
      $password = 'sio';
      $dbname = "chambord";
            
     //On essaie de se connecter
      try{
          $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
          //On définit le mode d'erreur de PDO sur Exception
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          //echo 'Connexion réussie';
      }
            
    /*On capture les exceptions si une exception est lancée et on affiche
    *les informations relatives à celle-ci*/
    catch(PDOException $e){
         echo "Erreur : " . $e->getMessage();
    }

    try { 
      /*Sélectionne toutes les valeurs dans la table contact*/
      $sql = "SELECT * FROM contact where id = $id";
      $stmt = $conn->query($sql);
 
        /*Retourne un tableau associatif pour chaque entrée de notre table
        *avec le nom des colonnes sélectionnées en clefs*/
      $leContact = $stmt->fetch(PDO::FETCH_ASSOC);

      //print_r($leContact);

       }
                  
   catch(PDOException $e){
         echo "Erreur : " . $e->getMessage();
     }
    ?>

    

 <!-- formulaire de contact-->
        <div class="col-md-7 my-5">
          <div class="row justify-content-center">
            <div class="col-lg-9">
              <form
                id="contact-form"
                method="get"
                action="updateContact.php"
                style="max-width: 500px"
                class="mx-auto"
              >
                <h2 class="mb-3">Contactez Nous</h2>
                <div class="row g-3">
                  <div class="col-md-6">
                    <label for="name" class="form-label">Nom</label>

                    <input
                      type="hidden"
                      name="id"
                      value="<?= $leContact['id']; ?>"
                      required
                    />

                    <input
                      type="text"
                      value="<?= $leContact['nom']; ?>"
                      class="form-control"
                      id="name"
                      name="name"
                      required
                    />
                  </div>
                  <div class="col-md-6">
                    <label for="surname" class="form-label">Prénom</label>
                    <input
                      type="text"
                      value="<?= $leContact['prenom']; ?>"
                      class="form-control"
                      id="surname"
                      name="surname"
                      required
                    />
                  </div>
                  <div class="col-md-6">
                    <label for="your-email" class="form-label">Email</label>
                    <input
                      type="email"
                      value="<?= $leContact['mail']; ?>"
                      class="form-control"
                      id="email"
                      name="email"
                      required
                    />
                  </div>
                  <div class="col-md-6">
                    <label for="sujet" class="form-label"
                      >Date Naissance</label
                    >
                    <input
                      type="date"
                      value="<?= $leContact['naissance']; ?>"
                      class="form-control"
                      id="naissance"
                      name="naissance"
                      required
                    />
                  </div>
                  <div class="col-12">
                     <div class="form-group">
                        <label for="sel1">Votre demande concerne:</label>
                        <select class="form-control" id="sel1" name="sujet" required>
                            <option value="<?= $leContact['sujet']; ?>"><?= $leContact['sujet']; ?></option>
                            <option value="hôtel">Hôtel</option>
                            <option value="restaurant">Restaurant</option>
                            <option value="réservations">Réservations</option>
                            <option>Autres</option>
                        </select>
                     </div> 
                  </div>
                  <div class="col-12">
                    <div class="row justify-content-md-end">
                      <div class="col-md-6">
                        <button
                          type="submit"
                          class="btn btn-dark w-100 fw-bold"
                        >
                          Envoyer
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      



    
    <div class="container my-5">
      <p>Copyright &copy; Mon application 2026</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="main.js"></script>
  </body>
</html>