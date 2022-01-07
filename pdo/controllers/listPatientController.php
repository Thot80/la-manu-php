<?php
$dao = new Database();
$dao->connect();
$elements_per_page = 10;
$patients = $dao->getAllPatients();
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
$number_of_element = count($patients);
$number_of_pages = ceil($number_of_element/$elements_per_page);
$page = $_GET['page'] ??= 1;
$page = intval($page);
$start = ($page-1)*$elements_per_page;
$end = $start + $elements_per_page;
$patient_to_show = $dao->getPatientByGroup($elements_per_page, $start);
}

