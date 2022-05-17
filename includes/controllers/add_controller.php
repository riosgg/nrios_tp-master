<?php
    require_once('../models/students.php');

    $name=$_POST['name'];
    $lastname=$_POST['lastname'];
    $dni=$_POST['dni'];
    $email=$_POST['email'];

    $students= new students();
    $reg=$students->add($name,$lastname,$dni,$email);
    if($reg){
        header("location:list_controller.php");

    }else{
        echo "Fallo el registro";
        ##echo "Error: " . $reg . "" . mysqli_error($_db);
    }
?>