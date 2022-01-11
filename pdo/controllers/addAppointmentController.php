<?php
require_once '../models/Appointment.php';
require_once '../views/add-appointment.php';


$patients = $dao->getAllPatients();

if(isset($_POST['patient']) && !empty($_POST['patient']) && isset($_POST['appointmentDate']) && !empty($_POST['appointmentDate']) && isset($_POST['appointmentTime']) && !empty($_POST['appointmentTime'])){
    $patientId = $_POST['patient'];
    $date = $_POST['appointmentDate'];
    $time = $_POST['appointmentTime'];
    $hasSucced = $dao->addAppointment(patientId: $patientId, appointmentDate:$date, appointmentTime:$time);
    if($hasSucced){
       echo '<div class="is-valid w-100 text-center alert alert-success" role="alert">Rendez vous pri</div>';
        
    }
}
?>