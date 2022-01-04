<?php
$dao = new Database();
$dao->connect();
return $dao->getAllAppointments();