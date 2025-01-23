<?php 

$select = "SELECT * FROM posts";
$params = [];

if(isset($_GET["search_query"]) && $_GET["search_query"] !=""){

$search_query = "%" . $_GET["search_query"] . "%"; 

$select .=" WHERE content LIKE: nosaukums"; 

$params = ["nosaukums"=>$search_query] ;
}

$posts = $db->query($select, $params)->fetchAll();

dd($_SERVER["REQUEST_METHOD"]);



require "views/posts/create.view.php";
?>