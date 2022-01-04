<?php

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = (int) $_GET['id'];
    $dao = new Database();
    $dao->connect();
    $appointment = $dao->getOneAppointmentById($id);
    $patient = $dao->getOnePatientById($appointment->idPatients);
   
}
else{
    header('Location: ../index.php');
}