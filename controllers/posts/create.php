<?php

$sql = "INSERT INTO posts VALUES(content)" ;
$select = "SELECT * FROM posts";
$params = ["content"=> $_POST["content"]];


if(isset($_POST["content"]) && $_POST["content"] !=""){

$search_query = "%" . $_GET["search_query"] . "%"; 

$select .=" WHERE content LIKE: nosaukums"; 

//$params = ["nosaukums"=>$search_query] ;
}

$posts = $db->query($select, $params)->fetchAll();

if($_SERVER["REQUEST_METHOD"] == $_POST){
    $sql;
}

dd($_SERVER["REQUEST_METHOD"]);

header("Location: /"); exit();

require "views/posts/create.view.php";
?>