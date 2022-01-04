<?php
require_once '../utils/Database.php';
$dao = new Database();
$dao->connect();
$appointments = $dao->getAllAppointments();

if(isset($_POST["delete"])){
    $appointmentId = $_POST['appointment'];
    $dao->deleteAppointment($appointmentId);
    $appointments = $dao->getAllAppointments();
    echo '<div class="is-valid w-100 text-center alert alert-success" role="alert">Suppression réussie</div>';
}
?>