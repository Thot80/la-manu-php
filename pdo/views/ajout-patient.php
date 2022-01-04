<?php
require_once '../header.php';
require_once '../controllers/addPatientController.php';
?>
<title>Nouveau Patient</title>
<link rel="stylesheet" href="../css/homepage.css">
</head>
<html>
    <body>
        <main class="container">
            <div class="row">
                <h1>
                    Ajouter un Patient
                </h1>
            </div>
            <form action="ajout-patient.php" method="POST">
                <div class="mb-3 form-group">
                        <label for="lastname" class="form-label">Nom
                        </label>
                        <input type="text" class="form-control" id="lastname" name="lastname" required>
                </div>
                <div class="mb-3 form-group">
                        <label for="firstname" class="form-label">Prénom
                        </label>
                        <input type="text" class="form-control" id="firstname" name="firstname" required>
                </div>
                <div class="mb-3 form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Nous ne partagerons jamais votre adresse email</div>
                </div>
                <div class="mb-3 form-group">
                    <label for="birthdate" class="form-label">Date de Naissance</label>
                    <input type="date" class="form-control" id="birthdate" name="birthdate" required>
                </div>
                <div class="mb-3 form-group">
                    <label for="phone" class="form-label">Téléphone</label>
                    <input type="tel" class="form-control" id="phone" name="phone">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="agreed" name="agreed" required>
                    <label class="form-check-label" for="agreed">Accépter les conditions</label>
                </div>
                <button type="submit" class="btn btn-primary">Valider</button>
                <a href="../index.php" class="btn btn-warning">Accueil</a>
                <a href="liste-pateints.php" class="btn btn-success">Voir tous les Patients</a>
            </form>
        </main>
<?php
require_once '../footer.php';
?>   