<?php

$select = "SELECT * FROM posts";
$params = [];

if(isset($_GET["search_query"]) && $_POST["search_query"] !=""){

$search_query = "%" . $_GET["search_query"] . "%"; 

$select .=" WHERE content LIKE: nosaukums"; 

$params = ["nosaukums"=>$search_query] ;
}
$posts = $db->query($select, $params)->fetchAll();








require "views/posts/index.view.php";