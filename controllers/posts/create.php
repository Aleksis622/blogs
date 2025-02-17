<?php
$params = [];
$errors = [];
if(isset($_POST["content"]) && $_POST["content"] !=""){

}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$sql = "INSERT INTO posts (content) VALUES(:content)" ;

$params = ["content"=> $_POST["content"]];

$db->query( $sql,$params);

header("Location: /");

exit();

}
if( !isset($_POST["content"]) ||  strlen($_POST["content"])== 0  || strlen( $_POST["content"]) > 50)  {
  
   $errors["content"] ="Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";
}

if(empty($errors)){
    require_once "views/posts/create.view.php";
   
}


$pageTitle ="Izveido ierakstu";

require "views/posts/create.view.php";
?>