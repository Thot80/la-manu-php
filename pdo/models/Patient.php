<?php
require_once __DIR__.'/../utils/DatabaseManager.php';
/**
 * Entity Patient
 */
class Patient{
    private int $id;
    private string $lastname;
    private string $firstname;
    private string $birthdate;
    private string $phone;
    private string $mail;
    private PDO $db;

    /**
     * Constructor
     *
     * @param integer $id
     * @param string $lastname
     * @param string $firstname
     * @param string $birthdate
     * @param string $phone
     * @param string $mail
     */
    public function __construct(int $id, string $lastname, string $firstname, string $birthdate, string $phone, string $mail){
        $this->id = $id;
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->birthdate = $birthdate;
        $this->phone = $phone;
        $this->mail = $mail;
        $this->db = DatabaseManager::getInstance();
    }


    /**
     * Responsible of CRUD Create
     *
     * @param string $lastname
     * @param string $firstname
     * @param string $birthdate
     * @param string $phone
     * @param string $mail
     * @return boolean
     */
    public function addOne(string $lastname, string $firstname, string $birthdate, string $phone, string $mail):bool{
        try{
            $statement = $this->db->prepare('INSERT INTO Patients (lastname, firstname, birthdate, phone, mail) VALUES (:lastname, :firstname, :birthdate, :phone, :mail)');
            $statement->bindParam(':lastname', $lastname);
            $statement->bindParam(':firstname', $firstname);
            $statement->bindParam(':birthdate', $birthdate);
            $statement->bindParam(':mail', $mail);
            $statement->bindParam(':phone', $phone);
            $statement->execute();
            return true;
        }
        catch(PDOException $e){
            echo 'Erreur : ' . $e->getMessage();
            return false;
        }
    }

    /**
     * Getter for the last entry id in Database
     *
     * @return integer
     */
    public function getLastInsertedId():int{
        return $this->db->lastInsertId();
    }

    /**
     * Count Numbers of entries in Patients Table
     *
     * @return integer
     */
    public function getCount():int{
        $statement = $this->db->prepare('SELECT COUNT(id) as nbPatient FROM PATIENTS');
        $statement->execute();
        $patient = $statement->fetch(PDO::FETCH_OBJ);
        return $patient->nbPatient;
    }

    /**
     * Return the list of patients registered in database 
     *
     * @return array
     */
    public function getAll():array{
        try{
            $statement = $this->db->prepare('SELECT * FROM Patients');
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_OBJ);
        }
        catch(PDOException $e){
            echo 'Erreur : '. $e->getMessage();
        }
    }

    /**
     * Filter Patients name by keyword
     *
     * @param string $keyword
     * @return array
     */
    public function getOneByKeyword(string $keyword):array{
        try{
            $statement = $this->db->prepare('SELECT * FROM Patients WHERE lastname LIKE :keyword');
            $pattern = '%'.$keyword.'%';
            $statement->bindParam(':keyword', $pattern);
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_OBJ);
        }
        catch(PDOException $e){
            echo 'Erreur : '. $e->getMessage();
        }
    }

    /**
     * Get an array of patient going from at a certain id to another
     *
     * @param integer $start
     * @param integer $end
     * @return array
     */
    public function getGroup(int $start, int $end):array{
        try{
            $statement = $this->db->prepare('SELECT * FROM Patients  LIMIT :offset OFFSET :ending');
            $statement->bindParam(':offset', $start, PDO::PARAM_INT);
            $statement->bindParam(':ending', $end, PDO::PARAM_INT);
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_OBJ);
        }
        catch(PDOException $e){
            echo 'Erreur : '. $e->getMessage();
        }
    }

    /**
     * Get a list of patient filter by key word and grouped 
     *
     * @param string $keyword
     * @param integer $start
     * @param integer $end
     * @return array
     */
    public function getGroupByKeyword(string $keyword, int $start, int $end):array{
        try{
            $statement = $this->db->prepare('SELECT * FROM Patients WHERE lastname LIKE :keyword LIMIT :offset OFFSET :ending');
            $pattern = '%'.$keyword.'%';
            $statement->bindParam(':keyword', $pattern);
            $statement->bindParam(':offset', $start, PDO::PARAM_INT);
            $statement->bindParam(':ending', $end, PDO::PARAM_INT);
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_OBJ);
        }
        catch(PDOException $e){
            echo 'Erreur : '. $e->getMessage();
        }
    }
    /**
     * Get one patient by id
     *
     * @param integer $id
     * @return object
     */
    public function getOneById(int $id):object{
        try{
            // Je prépare la requête
            $statement = $this->db->prepare('SELECT * FROM Patients WHERE id = :id');
            // Je lie le paramètre :id
            $statement->bindParam(':id', $id, PDO::PARAM_INT);
            // J'éxecute la requête
            $statement->execute();
            // Je récupère le résultat de la requête (fetch) sous forme d'objet et je le renvoi
            return $statement->fetch(PDO::FETCH_OBJ);
        }
        catch(PDOException $e){
            echo 'Erreur : '. $e->getMessage();
        }
    }

    /**
     * CRUD Function Update
     *
     * @param integer $id
     * @param string $lastname
     * @param string $firstname
     * @param string $mail
     * @param string $birthdate
     * @param string $phone
     * @return boolean
     */
    public function updateOne(int $id, string $lastname, string $firstname, string $mail, string $birthdate, string $phone=''): bool{

        try{
            $statement = $this->db->prepare('UPDATE Patients SET lastname = :lastname, firstname = :firstname, birthdate = :birthdate, phone = :phone, mail = :mail WHERE id = :id');
            $statement->bindParam(':id', $id, PDO::PARAM_INT);
            $statement->bindParam(':lastname', $lastname);
            $statement->bindParam(':firstname', $firstname);
            $statement->bindParam(':birthdate', $birthdate);
            $statement->bindParam(':mail', $mail);
            $statement->bindParam(':phone', $phone);
            $statement->execute();
            return true;
        }
        catch(PDOException $e){
            echo 'Erreur : ' . $e->getMessage();
            return false;
        }
    }

    public function deleteOneById(int $patientId){
        try{
            $appointment = new Appointment(0, '', $patientId);
            $appointment->deleteManyByPatientId($patientId);
            $statement = $this->db->prepare('DELETE FROM Patients WHERE id = :id');
            $statement->bindParam(':id', $patientId, PDO::PARAM_INT);
            $statement->execute();
            return true;
        }
        catch(PDOException $e){
            echo 'Erreur : ' . $e->getMessage();
            return false;
        }
    }
}