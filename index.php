<?php

require "functions.php";
require "Database.php";

$config = require("config.php");



$db = new Database($config["database"]);
$posts = $db->query("SELECT * FROM posts")->fetchAll();

//var_dump(isset($_GET["search_query"]));

if(isset($_GET["search_query"]) && $_GET["search_query"] !=""){

    echo "Atgriezt ierakstus";

    // TODO: Iegt filtretos ierakstus
$posts = $db->query("SELECT*FROM posts WHERE content LIKE '%". $_GET["search_query"] . "%';")->fetchAll();
}

echo "<h1> Blogs</h1>";

echo "<form>";

echo "<input name='search_query' />";

echo "<buttton>Meklet</button>";

//echo "input type = 'submit' value='Meklet'";



echo "</form>";


echo "<ul>";
foreach($posts as $post) {
    echo "<li>" . $post["content"] . "</li>";
}
echo "</ul>";
