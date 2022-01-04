<?php

require_once '../header.php';
require_once '../controllers/deletePatientController.php';
?>
<title>Supprimer un patient</title>
<link rel="stylesheet" href="../css/homepage.css">
</head>
<html>
    <body>
        <main class="container-fluid">
            <div class="row col-12">
                <h1>Supprimer un patient</h1>
            </div>
            <form action="delete-patient.php" method="POST">
                <div class="form-group">
                    <label for="patient" class="mb-3">Veuillez choisir un patient</label>
                    <select class="form-control" id="patient" name="patient" required>
                        <?php foreach($patients as $patient): ?>
                            <option value="<?=$patient->id?>">
                                <?= $patient->firstname . ' ' . $patient->lastname ?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </div>

                <button type="submit" id="delete" name="delete" value="yes" class="btn btn-danger mt-5">Supprimer</button>
            </form>
        </main>
<?php
require_once '../footer.php';
?>