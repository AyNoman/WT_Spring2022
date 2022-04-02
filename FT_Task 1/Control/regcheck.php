<?php
include '../Model/model.php';

if (isset($_POST['submit'])) {
    $fname = $_POST['FirstName'];
    $lname = $_POST['LastName'];
    $age = $_POST['Age'];
    $designation = $_POST['Desgination'];
    $language1 = $_POST['PreferredLanguage1'];
    $language2 = $_POST['PreferredLanguage2'];
    $language3 = $_POST['PreferredLanguage3'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];


    $mydb = new DB();
    $conobj = $mydb->opencon();
    $mydb->InsertData($fname,$lname,$age,$designation,$language1,$language2,$language3,$email,$password,'person',$conobj
    );
    $mydb->opencon($conobj);
}
?>