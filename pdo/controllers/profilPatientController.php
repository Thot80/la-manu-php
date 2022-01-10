<?php

// J'ai fait transiter l'id du Patient dont on veut afficher le détail par l'URL

// Je peux donc récupérer l'info avec la super globale $_GET
if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = (int) $_GET['id'];
    // INstance de ma connexion à la DataBase
    $dao = new Database();
    $dao->connect();
    // Méthode def dans la classe Database pour récupérer un patient par son id
    $patient = $dao->getOnePatientById($id);

    // Méthode def dans la classe Database pour récupérer tous les rendez-vous liés à un l'id d'un patient
    $appointments = $dao->getAppointmentsByPatient($id);
}
// Si quelqu'un essaye d'accéder à la page sans la variable id dans l'URL, il est redirigé
else{
    header('Location: ../index.php');
}