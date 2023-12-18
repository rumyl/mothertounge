<?php
require_once 'config/config.php'; 
require_once 'config/db.php'; 
require_once 'config/crud.php';


$databaseObj = new Database();
$conn = $databaseObj->getConnection();
$crud = new CRUD($conn);

?>