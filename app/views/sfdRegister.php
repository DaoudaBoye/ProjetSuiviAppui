<?php
// Inclusion du fichier de connexion à la base de données
require_once('C:/xampp/htdocs/demande/app/models/Database.php');

// Création d'une instance de la classe Database pour obtenir la connexion à la base de données
$database = new Database();
$connexion = $database->getConnection();

// Vérification de la connexion
if ($connexion->connect_error) {
    die("Échec de la connexion : " . $connexion->connect_error);
}

// Vérification si le formulaire a été soumis
if (isset($_POST['register'])) {
  // Création d'une instance de la classe DemandeModel
  require_once('C:/xampp/htdocs/demande/app/models/DemandeModel.php'); // Remplacez Chemin_vers_votre_classe_DemandeModel par le chemin correct de votre classe DemandeModel
  $demandeModel = new DemandeModel();

  // Appel de la méthode insertDemande avec les données du formulaire
  $result = $demandeModel->enregistrerSFD($_POST);

  // Affichage du résultat ou message de réussite ou d'erreur
  echo $result;
 
}

?>

<!DOCTYPE html>
<html lang="fr" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - nice-forms.css</title>
  <!-- Vos liens de feuilles de style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <!-- <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="./table.css"> -->
  <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Custom Stylesheet -->
  <link href="./plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="../public/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="../public/script.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <style>
    body {
        padding-top: 60px; /* Ajustez la valeur selon la hauteur de votre barre de navigation */
    }

    
    /* Styles pour le mode sombre */
body.dark-theme {
    background-color: #222;
    color: #fff; /* Couleur de texte en mode sombre */
} */
    /* Styles spécifiques pour le bouton en mode sombre */
body.dark-theme #themeToggle {
    background-color: #ffcc00; /* Couleur de fond pour le bouton en mode sombre */
    color: #222; /* Couleur de texte pour le bouton en mode sombre */
    border: 1px solid #ffcc00; /* Bordure pour le bouton en mode sombre */
    /* Autres styles selon votre préférence */
}

/* Hover styles pour le bouton en mode sombre */
body.dark-theme #themeToggle:hover {
    background-color: #ffdd44; /* Couleur de fond au survol en mode sombre */
    color: #333; /* Couleur de texte au survol en mode sombre */
    border-color: #fff; /* Couleur de bordure au survol en mode sombre */
    /* Autres styles au survol selon votre préférence */
}

body.dark-theme .navbar {
    background-color: #fff; /* Couleur de fond pour le bouton en mode sombre */
    color: #222; /* Couleur de texte pour le bouton en mode sombre */
    border: 1px solid #fff; /* Bordure pour le bouton en mode sombre */
    /* Autres styles selon votre préférence */
}

    
</style>

</head>
<body>
    <!-- Barre de navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#">
    <img src="Logo_FIMF.png" alt="Logo" height="40">
  </a>
  <!-- Bouton pour afficher le menu sur mobile -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="button-group">
    <button id="themeToggle">Mode sombre</button>
  </div>
  <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="http://localhost:81/demande/app/views/formulaire.php"><i class="fas fa-home"></i> Accueil <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-info-circle"></i> À propos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-envelope"></i> Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-user"></i> Mon compte</a>
        </li>
      </ul>
    </div>
</nav>
  <div class="demo-page my-demo">
    <div class="demo-page-navigation">
      <nav>
        <ul>
          <li>
            <a href="http://localhost:81/demande/app/views/formulaire.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z" />
            </svg>
              Insérer une demande</a>
          </li>
          <li>
            <a href="liste_demande.php">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers">
                <polygon points="12 2 2 7 12 12 22 7 12 2" />
                <polyline points="2 17 12 22 22 17" />
                <polyline points="2 12 12 17 22 12" />
              </svg>
              Voir la liste des demandes</a>
          </li>
          <!-- <li>
            <a href="#input-types">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-align-justify">
                <line x1="21" y1="10" x2="3" y2="10" />
                <line x1="21" y1="6" x2="3" y2="6" />
                <line x1="21" y1="14" x2="3" y2="14" />
                <line x1="21" y1="18" x2="3" y2="18" />
              </svg>
              Modifier une demande</a>
          </li> -->
        
          <li>
            <a href="sfdRegister.php">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sliders">
                <line x1="4" y1="21" x2="4" y2="14" />
                <line x1="4" y1="10" x2="4" y2="3" />
                <line x1="12" y1="21" x2="12" y2="12" />
                <line x1="12" y1="8" x2="12" y2="3" />
                <line x1="20" y1="21" x2="20" y2="16" />
                <line x1="20" y1="12" x2="20" y2="3" />
                <line x1="1" y1="14" x2="7" y2="14" />
                <line x1="9" y1="8" x2="15" y2="8" />
                <line x1="17" y1="16" x2="23" y2="16" />
              </svg>
              Enregistrer un SFD</a>
          </li>
          <li>
            <a href="http://localhost:81/demande/app/views/listeSFD.php">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list">
                <line x1="8" y1="6" x2="21" y2="6" />
                <line x1="8" y1="12" x2="21" y2="12" />
                <line x1="8" y1="18" x2="21" y2="18" />
                <line x1="3" y1="6" x2="3.01" y2="6" />
                <line x1="3" y1="12" x2="3.01" y2="12" />
                <line x1="3" y1="18" x2="3.01" y2="18" />
              </svg>
              Voir la liste des SFD</a>
          </li>
          <li>
          <a href="http://localhost:81/demande/app/views/index.php">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-power">
                <path d="M18.36 6.64a9 9 0 1 1-12.73 0" />
                <line x1="12" y1="2" x2="12" y2="12" />
              </svg>
              Déconnexion</a>
          </li>
        </ul>
      </nav>
    </div>
    <main class="demo-page-content">

      <section>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return validateForm()">
          <div class="href-target" id="input-types"></div>
          <h1>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-align-justify">
              <line x1="21" y1="10" x2="3" y2="10" />
              <line x1="21" y1="6" x2="3" y2="6" />
              <line x1="21" y1="14" x2="3" y2="14" />
              <line x1="21" y1="18" x2="3" y2="18" />
            </svg>
            Enregistrer un SFD
          </h1>
          <p>Veuillez renseignez tous les champs svp !</p>
          

          <div id="sfdField" class="nice-form-group">
            <label for="autreInput">Agrement</label>
            <input type="text" id="sfdInput" name="agrementSFD" required>
          </div>

          <div class="nice-form-group">
            <label>Nom SFD</label>
            <input type="text" placeholder="Name SFD" name="nameSFD" required/>
          </div>

          <div class="nice-form-group">
            <label>Sigle SFD</label>
            <input type="text" placeholder="Sigle SFD" name="sigleSFD" required />
          </div>

          <div class="nice-form-group">
            <label>Phonenumber</label>
            <input type="tel" placeholder="Contact SFD" value="" class="icon-right" name="contactSFD" id="contactSFD" required/>
            </div>
        
          <div class="nice-form-group">
            <label for="region">Région</label>
            <select id="region" name="region" required>
              <option value="">Please select a value</option>
              <?php
            
                  // Vérification de la connexion
                  if ($connexion->connect_error) {
                      die("Échec de la connexion : " . $connexion->connect_error);
                  }

                  // Récupération des régions depuis la base de données
                  $requeteRegions = "SELECT nom_region FROM region"; // Remplacez 'table_regions' par le nom réel de votre table
                  $resultatRegions = $connexion->query($requeteRegions);

                  // Génération des options de la liste déroulante
                  if ($resultatRegions->num_rows > 0) {
                      while ($row = $resultatRegions->fetch_assoc()) {
                          echo "<option value='" . $row['nom_region'] . "'>" . $row['nom_region'] . "</option>";
                      }
                  }
              ?>
            </select>
          </div>
        
          <div class="nice-form-group">
              <label for="departement">Département</label>
              <select id="departement" name="departement" required>
                  <option value="">Veuillez sélectionner une région d'abord</option>
              </select>
          </div>

         
          <button type="submit" name="register">
              <i class="fas fa-save"></i> Enregistrer
          </button>
        </form>
      </section>

      <footer>Made By ♥ FIMF</footer>
    </main>
  </div>
  <!-- partial -->

  <script>
// jQuery example for handling region change and updating departments
$(document).ready(function() {
    $('#regionSelect').on('change', function() { // Change the ID to your region select ID
        var selectedRegion = $(this).val();
        $.ajax({
            type: 'POST',
            url: 'your_controller_endpoint_for_departments', // Replace with your actual endpoint
            data: { region: selectedRegion },
            success: function(response) {
                // Update the departments select with the retrieved data
                $('#departmentsSelect').html(response); // Change the ID to your departments select ID
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });
});

</script>


<script>
    function validateForm() {
        var contactSFD = document.forms["yourForm"]["contactSFD"].value;
        if (contactSFD === "") {
            alert("Le champ Contact SFD doit être renseigné");
            return false;
        }
        return true;
    }
  </script>

<script>
  const themeToggle = document.getElementById('themeToggle');

  themeToggle.addEventListener('click', () => {
      document.body.classList.toggle('dark-theme');
      if (document.body.classList.contains('dark-theme')) {
          themeToggle.textContent = 'Mode clair';
      } else {
          themeToggle.textContent = 'Mode sombre';
      }
  });
</script>
</body>
</html>