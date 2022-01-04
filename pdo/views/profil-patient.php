<?php
require_once '../header.php';
require_once '../utils/Database.php';
require_once '../controllers/profilPatientController.php';
?>
<title>Détail</title>
<link rel="stylesheet" href="../css/homepage.css">
</head>
<html>
    <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center mb-5">Détail du Patient</h1>
                <div class="card w-50 mx-auto">
                    <div class="card-body">
                        <h5 class="card-title"><?= $patient->firstname . ' ' . $patient->lastname ?></h5>
                        <p class="card-text">
                            <ul class="list-group">
                                <li class="list-group-item">id : <?= $patient->id?> </li>
                                <li class="list-group-item">Nom : <?= $patient->lastname?></li>
                                <li class="list-group-item">Prénom : <?= $patient->firstname?></li>
                                <li class="list-group-item">Date de Naissance : <?= DateTime::createFromFormat('Y-m-d', $patient->birthdate)->format('d/m/Y') ?></li>
                                <li class="list-group-item">Tél : <?= $patient->phone?></li>
                                <li class="list-group-item">Mail : <?= $patient->mail?></li>
                            </ul>
                        </p>
                        <h6>Prochains rendez-vous</h6>
                        <p class="card-text">
                            <?php foreach($appointments as $appointment): ?>
                                <ul class="list-group mb-3">
                                    <li class="list-group-item">
                                        Date du rendez-vous : <?= DateTime::createFromFormat('Y-m-d H:i:s',$appointment->dateHour)->format('d/m/Y') ?>
                                    </li>
                                    <li class="list-group-item">
                                        Heure du rendez-vous : <?= DateTime::createFromFormat('Y-m-d H:i:s',$appointment->dateHour)->format('H:i') ?>
                                    </li>
                                </ul>
                            <?php endforeach?>
                        </p>
                        <a href="update-patient.php?id=<?= $patient->id?>" class="btn btn-warning">Modifier les informations</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
require_once '../footer.php';
?>