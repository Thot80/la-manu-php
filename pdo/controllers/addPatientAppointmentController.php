<?php
$today = new DateTime();

if (isset($_POST["lastname"]) && !empty($_POST["lastname"]) && isset($_POST["firstname"]) && !empty($_POST["firstname"]) && isset($_POST["email"]) && !empty($_POST["email"]) && isset($_POST["birthdate"]) && !empty($_POST["birthdate"]) && isset($_POST["agreed"]) && !empty($_POST["agreed"]) && isset($_POST['appointmentDate']) && !empty($_POST['appointmentDate']) && isset($_POST['appointmentTime']) && !empty($_POST['appointmentTime'])) {
  
    $lastname = $_POST["lastname"];
    $firstname = $_POST["firstname"];
    $email = $_POST["email"];
    $birthdate = $_POST["birthdate"];
    $phone = "";
   if(!empty($_POST["phone"]) && isset($_POST["phone"])) {
       $phone = $_POST["phone"];
   }
   $date = $_POST['appointmentDate'];
    $time = $_POST['appointmentTime'];
   $dao = new Database();
   $dao->connect();
   $hasSucceed = $dao->addPatient(lastname:$lastname, firstname:$firstname, mail:$email, birthdate:$birthdate, phone:$phone);
   if ($hasSucceed) {
       $patienId = $dao->getLastInsertedId();
       $hasSucceed = $dao->addAppointment($patienId, $date, $time);
       if($hasSucceed){
       echo '<div class="is-valid w-100 text-center alert alert-success" role="alert">Nouveau patient enregistré, rendez-vous pri </div>';
       }else{
       echo '<div class="is-invalid w-100 text-center alert alert-danger" role="alert">Le rendez vous n\'a pas été pri </div>';
       }
   }else{
    echo '<div class="is-invalid w-100 text-center alert alert-danger" role="alert">Le patient  n\'a pas été enregistré </div>';

   }

}