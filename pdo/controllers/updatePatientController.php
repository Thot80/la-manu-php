<?php

if( isset($_GET['id']) && !empty($_GET['id']) ){

    $id = $_GET['id'];
    $dao = new Database();
    $dao->connect();
    $patient = $dao->getOnePatientById($id);
    if(isset($_POST["lastname"]) && !empty($_POST["lastname"]) && isset($_POST["firstname"]) && !empty($_POST["firstname"]) && isset($_POST["email"]) && !empty($_POST["email"]) && isset($_POST["birthdate"]) && !empty($_POST["birthdate"])) {
  
        $lastname = $_POST["lastname"];
        $firstname = $_POST["firstname"];
        $email = $_POST["email"];
        $birthdate = $_POST["birthdate"];
        $phone = "";
       if(!empty($_POST["phone"]) && isset($_POST["phone"])) {
           $phone = $_POST["phone"];
       }
       $hasSucced = $dao->updatePatient(id: $id, lastname:$lastname, firstname:$firstname, mail:$email, birthdate:$birthdate, phone:$phone);
       if($hasSucced){
        echo '<div class="is-valid w-100 text-center alert alert-success" role="alert">Modification réussi</div>';
        }
    }
}else{
    header('Location: ../index.php');
}

?>