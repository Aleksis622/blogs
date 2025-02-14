<?php

$sql = "INSERT INTO posts (content) VALUES(:content)" ;


if(isset($_POST["content"]) && $_POST["content"] !=""){

$search_query = "%" . $_POST["content"] . "%"; 

$params = ["nosaukums"=>$search_query] ;
}
dd($_SERVER["REQUEST_METHOD"]);

$posts = $db->query( $params)->fetchAll();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["content"]) && $_POST["content"] != "") {
    // Execute the insert query to add content to the posts table
    $prepare->execute(["content" => $_POST["content"]]);
    $execute->execute(["content" => $_POST["content"]]);
    
    // Redirect after insertion
    header("Location: /");
    exit();
}



require "views/posts/create.view.php";
?>