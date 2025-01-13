<?php 


$url=parse_url($_SERVER["REQUEST_URI"])["path"];

if($url == "/"){
    require "controllers/index.php";
}elseif($url == "/about"){

require "controllers/story.php";

}else{
   http_response_code (404);

   echo "<p> Lapa nav atrasta :( </p>";
   die();
}

?>