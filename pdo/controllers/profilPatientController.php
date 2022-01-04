<?php

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = (int) $_GET['id'];
    $dao = new Database();
    $dao->connect();
    $patient = $dao->getOnePatientById($id);
   
}
else{
    header('Location: ../index.php');
}