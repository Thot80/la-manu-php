<?php
require_once '../utils/Database.php';
require_once '../controllers/updatePatientController.php';
require_once '../header.php';
?>
<title>Modification</title>
<link rel="stylesheet" href="../css/homepage.css">
</head>
<html>
    <body>
        <main class="container">
            <div class="row">
                <h1>
                    Modifier le Patient
                </h1>
            </div>
            <form action="update-patient.php?id=<?= $id?>" method="POST">
                <div class="mb-3">
                        <label for="lastname" class="form-label">Nom
                        </label>
                        <input type="text" class="form-control" id="lastname" name="lastname" required value="<?=$patient->lastname?>">
                </div>
                <div class="mb-3">
                        <label for="firstname" class="form-label">Prénom
                        </label>
                        <input type="text" class="form-control" id="firstname" name="firstname" required value="<?=$patient->firstname?>">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?=$patient->mail?>" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Nous ne partagerons jamais votre adresse email</div>
                </div>
                <div class="mb-3">
                    <label for="birthdate" class="form-label">Date de Naissance</label>
                    <input type="date" class="form-control" id="birthdate" name="birthdate" required value="<?=$patient->birthdate?>">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Téléphone</label>
                    <input type="tel" class="form-control" id="phone" name="phone" value="<?=$patient->phone?>">
                </div>
                <button type="submit" class="btn btn-danger">Modifier</button>
                <a href="../index.php" class="btn btn-warning">Accueil</a>
            </form>
        </main>
<?php
require_once '../footer.php';
?>   