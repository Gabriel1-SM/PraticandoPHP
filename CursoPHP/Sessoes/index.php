<?php
session_start();

$_SESSION['COR'] = "VERDE";
$_SESSION['CARRO'] = "VELOSTER";
echo $_SESSION['COR']."<br>".$_SESSION['CARRO']."<br>".session_id();