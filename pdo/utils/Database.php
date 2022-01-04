<?php
    
    class Database {

        // Class Attributes
        private $host = 'localhost';
        private $db_name = 'hospitale2n';
        private $user = 'root';
        private $password = '';
        private $conn;


        /**
         * Instanciation to PDO access to database
         *
         * @return PDO
         */
        public function connect() : PDO{

            $this->conn = null;

            try {
                $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->user, $this->password);
                $this->conn->setAttribute( PDO::ERRMODE_EXCEPTION, PDO::FETCH_OBJ);
            } catch (PDOException $e) {
                echo 'Connection error : ' . $e->getMessage();
            }
            return $this->conn;
        }

        /**
         * New Entry
         *
         * @param string $lastname
         * @param string $firstname
         * @param string $mail
         * @param string $birthdate
         * @param string $phone
         * @return boolean
         */
        public function addPatient(string $lastname, string $firstname, string $mail, string $birthdate, string $phone=''): bool{

            try{
                $statement = $this->conn->prepare('INSERT INTO Patients (lastname, firstname, birthdate, phone, mail)VALUES (:lastname, :firstname, :birthdate, :phone, :mail)');
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
         * Gather every entries in Patients
         *
         * @return array
         */
        public function getAllPatients():array{
            try{
                $statement = $this->conn->prepare('SELECT * FROM Patients');
                $statement->execute();
                return $statement->fetchAll(PDO::FETCH_OBJ);
            }
            catch(PDOException $e){
                echo 'Erreur : '. $e->getMessage();
            }
        }
        public function getOnePatientById(int $id):object{
            try{
                $statement = $this->conn->prepare('SELECT * FROM Patients WHERE id = :id');
                $statement->bindParam(':id', $id, PDO::PARAM_INT);
                $statement->execute();
                return $statement->fetch(PDO::FETCH_OBJ);
            }
            catch(PDOException $e){
                echo 'Erreur : '. $e->getMessage();
            }
        }
        
        public function updatePatient(int $id, string $lastname, string $firstname, string $mail, string $birthdate, string $phone=''): bool{

            try{
                $statement = $this->conn->prepare('UPDATE Patients SET lastname = :lastname, firstname = :firstname, birthdate = :birthdate, phone = :phone, mail = :mail WHERE id = :id');
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

        public function deletePatientById(int $patientId){
            try{
                $this->deleteAppointmentsByPatient($patientId);
                $statement = $this->conn->prepare('DELETE FROM Patients WHERE id = :id');
                $statement->bindParam(':id', $patientId, PDO::PARAM_INT);
                $statement->execute();
                return true;
            }
            catch(PDOException $e){
                echo 'Erreur : ' . $e->getMessage();
                return false;
            }
        }

        public function addAppointment(int $patientId, string $appointmentDate, string $appointmentTime): bool{

            try{
                $statement = $this->conn->prepare('INSERT INTO Appointments (dateHour, idPatients) VALUES (:dateHour, :idPatients)');
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
        public function getAllAppointments():array{
            try{
                $statement = $this->conn->prepare('SELECT * FROM Appointments ORDER BY dateHour ASC');
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
        public function getAppointmentsByPatient(int $patientId):array{

            try{
                $statement = $this->conn->prepare('SELECT * FROM Appointments WHERE idPatients = :idPatients ORDER BY dateHour ASC');
                $statement->bindParam(':idPatients', $patientId, PDO::PARAM_INT);
                $statement->execute();
                return $statement->fetchAll(PDO::FETCH_OBJ);
            }
            catch(PDOException $e){
                echo 'Erreur : '. $e->getMessage();
            }
        }
        public function updateAppointment(int $id, string $date, string $time): bool{

            try{
                $statement = $this->conn->prepare('UPDATE Appointments SET dateHour = :dateHour WHERE id = :id');
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
        public function deleteAppointmentbyId(int $appointmentId){
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
        public function deleteAppointmentsByPatient(int $idPatient){
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
