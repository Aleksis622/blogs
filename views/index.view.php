<?php require "components/header.php"; ?>
<?php require "components/navbar.php"; ?>
<body>
    <?php $pageTitle="Blogs";?>

 <form>
 <input name='search_query' value = '<?= $_GET["search_query"] ??""?>' />

 <buttton>Meklet</button>

</form>;

<?php if(count($posts) == 0  ){?>
    <p> "Not found"</p>
}<?php } ?>


<ul>
<?php foreach($posts as $post) { ?>
     <li> <?=  $post["content"]  ?></li>
} <?php } ?>
</ul>
<?php require "components/footer.php";?>
