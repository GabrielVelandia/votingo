<?php
require_once("../model/cursoModel.php");
require_once("../model/comptrollerModel.php");
require_once("../model/lobbyistModel.php");
// require_once("../model/userSessionModel.php");
$curso= new curso();
$comptroller= new comptroller();
$lobbyist= new lobbyist();  
// $userSession= new userSession();  

$curso->votar($_POST['id_nav']);
echo $_POST['id_nav'];

$comptroller->vote($_POST['id_navv']);
echo $_POST['id_navv'];

$lobbyist->votes($_POST['id_navvv']);
echo $_POST['id_navvv'];

// $userSession->getIduserSession($_POST['idUserS']);
// echo $_POST['idUserS'];



?>
