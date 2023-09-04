<?php
include 'includes/class-autoload.inc.php';
if (isset($_POST)) {
    $values = new Data();
    $values->setDirections($_POST['direc'], $_POST['dist']);
} else {
    return false;
}
?>