<?php
require_once '../utils/Database.php';
require_once '../header.php';
$appointments = require_once '../controllers/listRdvController.php';
?>
<title>Liste Rendez-vous</title>
<link rel="stylesheet" href="../css/homepage.css">
</head>
<html>
    <body>
        <main class="container-fluid">
            <div class="row col-12">
                <h1>Liste des Rendez-vous</h1>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Date</th>
                    <th scope="col">Heure</th>
                    <th scope="col">Patient</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($appointments as $appointment):?>
                    <tr class = "appointment-row">
                    <th scope="row"><?=$appointment->id?></th>
                    <td><?=DateTime::createFromFormat('Y-m-d H:i:s', $appointment->dateHour)->format('d/m/Y') ?></td>
                    <td><?=DateTime::createFromFormat('Y-m-d H:i:s', $appointment->dateHour)->format('H:i')?></td>
                    <td><?= $appointment->idPatients?></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <a class="btn btn-success mx-auto d-block w-25" href="add-appointment.php">Ajouter un rendez-vous</a>
        </main>
<?php
require_once '../footer.php';
?>