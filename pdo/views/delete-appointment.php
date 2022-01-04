<?php

require_once '../header.php';
require_once '../controllers/deleteAppointmentController.php';
?>
<title>Supprimer un rendez vous</title>
<link rel="stylesheet" href="../css/homepage.css">
</head>
<html>
    <body>
        <main class="container-fluid">
            <div class="row col-12">
                <h1>Supprimer un rendez vous</h1>
            </div>
            <form action="delete-appointment.php" method="POST">
                <div class="form-group">
                    <label for="appointment" class="mb-3">Veuillez choisir un Rendez-vous</label>
                    <select class="form-control" id="appointment" name="appointment" required>
                        <?php foreach($appointments as $appointment): ?>
                            <option value="<?=$appointment->id?>">
                                <?php $patient = $dao->getOnePatientById($appointment->idPatients)?>
                                <?= $patient->firstname.' '.$patient->lastname.' - '. DateTime::createFromFormat('Y-m-d H:i:s',$appointment->dateHour)->format('d/m/Y H:i') ?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="w-25">
                    <button type="submit" id="delete" name="delete" value="yes" class="btn btn-danger mt-5 mb-3 w-50">Supprimer</button>
                    <div>
                        <a href="../index.php" class="btn btn-warning w-50">Accueil</a>
                    </div>
                </div>
            </form>
        </main>
<?php
require_once '../footer.php';
?>