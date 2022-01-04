<?php

if( isset($_GET['id']) && !empty($_GET['id']) ){
    $today = new DateTime();
    $appointmentId = $_GET['id'];
    $dao = new Database();
    $dao->connect();
    $appointment = $dao->getOneAppointmentById($appointmentId);
    $patient = $dao->getOnePatientById($appointment->idPatients);
    if(isset($_POST["appointmentDate"]) && !empty($_POST["appointmentDate"]) && isset($_POST["appointmentTime"]) && !empty($_POST["appointmentTime"])){
  
        $date = $_POST['appointmentDate'];
        $time = $_POST['appointmentTime'];
        $hasSucced = $dao->updateAppointment($appointmentId, $date, $time);
        if($hasSucced){
            echo '<div class="is-valid w-100 text-center alert alert-success" role="alert">Modification réussi</div>';
        }
    }
}else{
    header('Location: ../index.php');
}

?>