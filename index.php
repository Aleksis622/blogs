<?php 
require "functions.php";
require "Database.php";
require "views/components/navbar.php";


$config = require("config.php");
$db = new Database($config["database"]);



require "router.php";
?>