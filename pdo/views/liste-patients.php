<?php
require_once '../utils/Database.php';
require_once '../header.php';
$patients = require_once '../controllers/listPatientController.php';
?>
<title>Liste Patients</title>
<link rel="stylesheet" href="../css/homepage.css">
</head>
<html>
    <body>
        <main class="container-fluid">
            <div class="row col-12">
                <h1>Liste des Patients</h1>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Date de Naissance</th>
                    <th scope="col">Téléphone</th>
                    <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($patients as $patient):?>
                    <tr class="patient-row">
                    <th scope="row"><?=$patient->id?></th>
                    <td><?=$patient->lastname?></td>
                    <td><?=$patient->firstname?></td>
                    <td><?= DateTime::createFromFormat('Y-m-d', $patient->birthdate)->format('d/m/Y')?></td>
                    <td><?=$patient->phone?></td>
                    <td><?=$patient->mail?></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <a class="btn btn-success mx-auto d-block w-25 my-3" href="ajout-patient.php">Ajouter un patient</a>
            <a class="btn btn-danger mx-auto d-block w-25" href="delete-patient.php">Supprimer un patient</a>

        </main>
<?php
require_once '../footer.php';
?>