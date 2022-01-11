<?php

class Appointment{
    private int $id;
    private string $timeHour;
    private int $idPatients;
    private PDO $db;

    /**
     * Undocumented function
     *
     * @param integer $id
     * @param string $timeHour
     * @param integer $idPatients
     */
    public function __construct(int $id, string $timeHour, int $idPatients){
        $this->id = $id;
        $this->timeHour = $timeHour;
        $this->idPatients = $idPatients;
        $this->db = DatabaseManager::getInstance();
    }

    
    /**
     * Undocumented function
     *
     * @param integer $patientId
     * @param string $appointmentDate
     * @param string $appointmentTime
     * @return boolean
     */
    public function addOne(int $patientId, string $appointmentDate, string $appointmentTime):bool{
        try{
            $statement = $this->db->prepare('INSERT INTO Appointments (dateHour, idPatients) VALUES (:dateHour, :idPatients)');
            $dateTime = $appointmentDate.' '.$appointmentTime;
            $statement->bindParam(':dateHour', $dateTime);
            $statement->bindParam(':idPatients', $patientId);
            $statement->execute();
            return true;
        }
        catch(PDOException $e){
            echo 'Erreur : ' . $e->getMessage();
            return false;
        }
    }

    public function getAll():array{
        try{
            $statement = $this->db->prepare('SELECT * FROM Appointments ORDER BY dateHour ASC');
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_OBJ);
        }
        catch(PDOException $e){
            echo 'Erreur : '. $e->getMessage();
        }
    }

    public function getOneAppointmentById(int $id):object{
        try{
            $statement = $this->conn->prepare('SELECT * FROM Appointments WHERE id = :id');
            $statement->bindParam(':id', $id, PDO::PARAM_INT);
            $statement->execute();
            return $statement->fetch(PDO::FETCH_OBJ);
        }
        catch(PDOException $e){
            echo 'Erreur : '. $e->getMessage();
        }
    }

    public function getManyByPatient(int $patientId):array{

        try{
            $statement = $this->db->prepare('SELECT * FROM Appointments WHERE idPatients = :idPatients ORDER BY dateHour ASC');
            $statement->bindParam(':idPatients', $patientId, PDO::PARAM_INT);
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_OBJ);
        }
        catch(PDOException $e){
            echo 'Erreur : '. $e->getMessage();
        }
    }

    public function updateOne(int $id, string $date, string $time): bool{

        try{
            $statement = $this->db->prepare('UPDATE Appointments SET dateHour = :dateHour WHERE id = :id');
            $statement->bindParam(':id', $id, PDO::PARAM_INT);
            $dateTime = $date.' '.$time;
            $statement->bindParam(':dateHour', $dateTime);
            $statement->execute();
            return true;
        }
        catch(PDOException $e){
            echo 'Erreur : ' . $e->getMessage();
            return false;
        }
    }
    public function deleteOneById(int $appointmentId){
        try{
            $statement = $this->conn->prepare('DELETE FROM Appointments WHERE id = :id');
            $statement->bindParam(':id', $appointmentId, PDO::PARAM_INT);
            $statement->execute();
            return true;
        }
        catch(PDOException $e){
            echo 'Erreur : ' . $e->getMessage();
            return false;
        }
    }
    public function deleteManyByPatientId(int $idPatient){
        try{
            $statement = $this->conn->prepare('DELETE FROM Appointments WHERE idPatients = :idPatients');
            $statement->bindParam(':idPatients', $idPatient, PDO::PARAM_INT);
            $statement->execute();
            return true;
        }
        catch(PDOException $e){
            echo 'Erreur : ' . $e->getMessage();
            return false;
        }
    }
}