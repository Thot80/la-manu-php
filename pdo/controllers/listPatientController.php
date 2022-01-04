<?php
$dao = new Database();
$dao->connect();
$patients = $dao->getAllPatients();
if(isset($_POST['search'])){
    $filter = $_POST['filter'];
    $patients = $dao->getPatientsByKeyword($filter);
}
// pagination
$elements_per_page = 10;
$number_of_element = count($patients);
$number_of_pages = ceil($number_of_element/$elements_per_page);
$page = $_GET['page'] ??= 1;
$start = ($page-1)*$elements_per_page;
$patient_to_show = array_slice($patients, $start, 10);