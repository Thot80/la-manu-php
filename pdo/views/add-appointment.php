<?php
require_once '../header.php';
require_once '../utils/Database.php';
require_once '../controllers/addAppointmentController.php';
$today = new DateTime();
?>
<title>Prendre Rendez Vous</title>
<link rel="stylesheet" href="../css/homepage.css">
</head>
<html>
    <body>
        <main class="container">
            <div class="row">
                <h1>
                    Prendre rendez-vous
                </h1>
            </div>
            <form action="add-appointment.php" method="POST">
                <div class="form-group">
                    <label for="patient">Veuillez choisir un Patient</label>
                    <select class="form-control" id="patient" name="patient" required>
                        <?php foreach($patients as $patient): ?>
                        <option value="<?=$patient->id?>"><?=$patient->firstname.' '.$patient->lastname?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="mb-3 form-group">
                    <label for="appointmentDate" class="form-label">Veuillez choisir le jour du rendez-vous</label>
                    <input type="date" class="form-control" id="appointmentDate" name="appointmentDate" required min="<?= $today->format('Y-m-d')?>">
                </div>
                <div class="mb-3 form-group">
                <label for="appointmentTime">Veuillez choisir une heure de rendez-vous :</label>
                <input class="form-control" id="appointmentTime" type="time" name="appointmentTime" min="09:00" max="18:00" required>
                </div>
                
                <button type="submit" class="btn btn-primary">Valider</button>
                <a href="../index.php" class="btn btn-warning">Accueil</a>
                <a href="liste-rdv" class="btn btn-success">Voir tous les rendez vous</a>
            </form>
        </main>
<?php
require_once '../footer.php';
?>   