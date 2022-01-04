<?php
$dao = new Database();
$dao->connect();
$patients = $dao->getAllPatients();
if(isset($_POST['search'])){
    $filter = $_POST['filter'];
    $patients = $dao->getPatientsByKeyword($filter);
}