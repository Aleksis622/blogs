
<?php require "views/components/header.php";?>

<body>
<h1>Izveido bloga ierakstu</h1>



<form method="POST">
 <label><input name = "content" /></label>
 
 <?php if(isset($errors["content"])) { ?>
       <p><?= $errors["content"] ?></p>
     <?php } ?>
<?= $_POST['content'] ?? ''  ?>
 <button> Izveidot </button>

</form>




<?php require "views/components/footer.php";?>
