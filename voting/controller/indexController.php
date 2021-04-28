<?php
require_once("model/cursoModel.php");
require_once("model/comptrollerModel.php");
require_once("model/lobbyistModel.php");

$curso= new curso();
$opciones=$curso->get_opciones();

$comptroller= new comptroller();
$comptrollers=$comptroller->get_contralor();

$lobbyist= new lobbyist();
$lobbyists=$lobbyist->get_lobbyist();
require_once("voting.php")
?>