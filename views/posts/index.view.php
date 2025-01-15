<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>
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
     <li><a href ="show?id=" <?=  $post["content"]  ?></li>
} <?php } ?>
</ul>
<?php require "views/components/footer.php";?>
