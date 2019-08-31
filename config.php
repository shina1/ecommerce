<?php 
session_start();

require_once "GoogleAPI/vendor/autoload.php";

$gClient = new Google_Client();
$gClient->setClientId("944799866753-jqq0pv2c3fejd9c813aq74bd8e23903j.apps.googleusercontent.com");
$gClient->setClientSecret("Yn1INmcB7D7_D_-xPcRxisCn");
$gClient->setApplicationName("CPI Login ");
$gClient->setRedirectUrl("http://localhost/Eshopper/gCallback.php");
$gClient->addScope(scope_of_scopes:"");






?>