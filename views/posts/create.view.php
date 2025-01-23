
<?php require "views/components/header.php";?>

<body>
<h1>Izveido bloga ierakstu</h1>

<form method="POST">
 <label><input name = "content" /></label>

 <button> Meklēt </button>

</form>

<?php if(count($posts) == 0  ){?>
    <p> "Not found"</p>
}<?php } ?>




<?php require "views/components/footer.php";?>
