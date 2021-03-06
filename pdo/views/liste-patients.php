<?php
require_once '../utils/Database.php';
require_once '../header.php';
require_once '../controllers/listPatientController.php';
?>
<title>Liste Patients</title>
<link rel="stylesheet" href="../css/homepage.css">
</head>
<html>
<header>
    <nav>
        <ul class="nav justify-content-end">
            <!-- On affiche un lien par nombre de page -->
        <?php for($i = 1; $i <= $number_of_pages; $i++): ?>
          <li class="nav-item">
              <!-- Le liens vaut $i , 1,2,3 ...  -->
              <!-- Le liens passe en URL le numéro de page qu'on veut -->
              <!-- En réalité, on ne change pas de page, on charge des informations différentes en fonctions de la valeur de $i contenu dans l'URL sur la même page -->
            <a class="nav-link" a, ria-current="page" href="?page=<?= $i ?>"><?= $i ?></a>
          </li>
          <?php endfor ?>
        </ul>
    </nav>
</header>
    <body>
        <main class="container-fluid">
            <div class="row col-12">
                <h1>Liste des Patients</h1>
            </div>
            <div class="search-field w-25 my-5 mx-auto">
                        <form action="liste-patients.php" method="post">
                            <div class="mb-3">
                                <label for="filter" class="form-label">Filtrer par nom :</label>
                                <input name="filter" type="text" class="form-control" id="filter">
                            </div> 
                            <button type="submit" id="search" name="search" value="yes" class="btn btn-primary mt-1 w-100">Rechercher</button>
                        </form>
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
                    <?php foreach ($patient_to_show as $patient):?>
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