<?php
require_once '../utils/Database.php';
$dao = new Database();
$dao->connect();
$patients = $dao->getAllPatients();

if(isset($_POST["delete"])){
    $patientId = $_POST['patient'];
    $dao->deletePatientById($patientId);
    $patients = $dao->getAllPatients();
    echo '<div class="is-valid w-100 text-center alert alert-success" role="alert">Suppression réussie</div>';
}
?>