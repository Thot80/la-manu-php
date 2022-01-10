<?php
// Connexion à la BDD
$dao = new Database();
$dao->connect();

// On choisit le nombre d'élément par page, on peut ensuite changer la valeur ici pour modifier directement toute la logique qui s'en sert
$elements_per_page = 10;

// On récupère tous les patients
$patients = $dao->getAllPatients();

// On compte le nombre de patient qu'il y a
$number_of_element = count($patients);

if(isset($_POST['search'])){
    $filter = $_POST['filter'];
    $patients = $dao->getPatientsByKeyword($filter);
    $number_of_element = count($patients);
    $number_of_pages = ceil($number_of_element/$elements_per_page);
    $page = $_GET['page'] ??= 1;
    $page = intval($page);
    $start = ($page-1)*$elements_per_page;
    $end = $start + $elements_per_page;
    $patient_to_show = $dao->getPatientSearchGroup($filter, $elements_per_page, $start);   
}else{
    // pagination

    // Compte le nombre d'éléments à afficher
    $number_of_element = count($patients);

    // Calcul du nombre de page nécessaire
    $number_of_pages = ceil($number_of_element/$elements_per_page);

    // Récupère la valeur de page passée en URL, si pas dans URL, page = 1
    $page = $_GET['page'] ??= 1;
    $page = intval($page);

    // start représente l'id du 1er patient à afficher
    $start = ($page-1)*$elements_per_page;

    // end est l'id du dernier patient à afficher
    $end = $start + $elements_per_page;
    // On récupère les patients à afficher en BDD
    $patient_to_show = $dao->getPatientByGroup($elements_per_page, $start);
}

