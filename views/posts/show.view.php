<?php require "views/components/header.php"; ?>

<body>
  <h1><?= $post["content"]?></h1>
  <?htmlspecialchars($post["content"])?>
<?php require "views/components/footer.php";?>



