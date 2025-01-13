<?php 


$url=parse_url($_SERVER["REQUEST_URI"])["path"];

if($url == "/"){
    require "controllers/index.php";
}elseif($url == "/about"){

require "controllers/story.php";

}

?>