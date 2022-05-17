<?php 
    require_once('../models/students.php');
    $studentModel= new students();
    $reg=$studentModel->list();
    if($reg){
        return $reg;
    }
?>
