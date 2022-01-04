<?php
require_once '../utils/Database.php';
require_once '../controllers/updateAppointmentController.php';
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
                    Modifier le Rendez-vous
                </h1>
            </div>
            <form action="update-appointment.php?id=<?= $appointmentId?>" method="POST">
                <div class="mb-3">
                        <label for="lastname" class="form-label">Nom
                        </label>
                        <input type="text" class="form-control" id="lastname" name="lastname" disabled value="<?=$patient->lastname?>">
                </div>
                <div class="mb-3">
                        <label for="firstname" class="form-label">Prénom
                        </label>
                        <input type="text" class="form-control" id="firstname" name="firstname" disabled value="<?=$patient->firstname?>">
                </div>
                <div class="mb-3 form-group">
                    <label for="appointmentDate" class="form-label">Veuillez choisir le jour du rendez-vous</label>
                    <input type="date" class="form-control" id="appointmentDate" name="appointmentDate" required min="<?= $today->format('Y-m-d')?>" value="<?=DateTime::createFromFormat('Y-m-d H:i:s', $appointment->dateHour)->format('Y-m-d')?>">
                </div>
                <div class="mb-3 form-group">
                <label for="appointmentTime">Veuillez choisir une heure de rendez-vous :</label>
                <input class="form-control" id="appointmentTime" type="time" name="appointmentTime" min="09:00" max="18:00" required value="<?=DateTime::createFromFormat('Y-m-d H:i:s', $appointment->dateHour)->format('H:i')?>">
                </div>
                <button type="submit" class="btn btn-danger">Modifier</button>
                <a href="../index.php" class="btn btn-warning">Accueil</a>
                <a href="rendezvous.php?id=<?= $appointmentId ?>" class="btn btn-success">Voir le rendez-vous</a>
            </form>
        </main>
<?php
require_once '../footer.php';
?>   