<?php
require_once 'header.php';
?>
<title>Accueil</title>
<link rel="stylesheet" href="css/homepage.css">
</head>
<html>
    <body>
        <main class="container-fluid bg-main">
            <div class="d-flex align-items-center w-100 justify-content-center vh-100 flex-column">
                <div class="d-flex justify-content-center w-25 mb-1">
                        <a class="btn btn-warning d-block w-50" href="views/ajout-patient.php" role="button">
                            Ajouter un Patient
                        </a>
                </div>
                <div class="d-flex justify-content-center w-25 mb-1">
                        <a class="btn btn-primary d-block w-50" href="views/liste-patients.php" role="button">
                            Voir tous les Patients
                        </a>
                </div>
                <div class="d-flex justify-content-center w-25 mb-1">
                        <a class="btn btn-success d-block w-50" href="views/add-appointment.php" role="button">
                            Prendre rendez vous
                        </a>
                </div>
                <div class="d-flex justify-content-center w-25 mb-1">
                        <a class="btn btn-danger d-block w-50" href="views/liste-rdv.php" role="button">
                            Voir tous les rendez-vous
                        </a>
                </div>
            </div>
            
        </main>
<?php
require_once 'footer.php';
?>  