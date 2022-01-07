<?php
require_once '../utils/Database.php';
$dao = new Database();
$dao->connect();
$patients = $dao->getAllPatients();
if(isset($_POST["modal-trigger"])){
    $id_to_delete =  $_POST["modal-trigger"];
    $id_to_delete = intval($id_to_delete);
    $patient_to_delete = $dao->getOnePatientById($id_to_delete);
    $lastname = $patient_to_delete->lastname;
    $firstname = $patient_to_delete->firstname;
    $birthdate = $patient_to_delete->birthdate;
    $phone = $patient_to_delete->phone;
    $mail = $patient_to_delete->mail;

    $modal =<<<TEXT
                <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModal" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Confirmer la suppression ?</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <ul class="list-group">
                                <li class="list-group-item">Lastname : $lastname</li>
                                <li class="list-group-item">Firstname : $firstname</li>
                                <li class="list-group-item">Birthdate : $birthdate</li>
                                <li class="list-group-item">Phone : $phone</li>
                                <li class="list-group-item">Mail : $mail</li>
                            </ul>
                        </div>
                        <div class="modal-footer">
                            <form action="delete-patient.php" method="POST">
                            <button type="submit" value="$id_to_delete" name="delete" class="btn btn-danger">Supprimer</button>
                            </form>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                        </div>
                    </div>
                </div>
TEXT;

echo $modal;
}
if(isset($_POST["delete"])){
    $patientId = $_POST['delete'];
    $dao->deletePatientById($patientId);
    $patients = $dao->getAllPatients();
    echo '<div class="is-valid w-100 text-center alert alert-success" role="alert">Suppression réussie</div>';
}
?>