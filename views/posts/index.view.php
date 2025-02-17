<?php require "views/components/header.php"; ?>

<body>
    <h1>Blogs</h1>
    <?htmlspecialchars($post["content"])?>
 <form>
 <input name='search_query' value = '<?= $_GET["search_query"] ??""?>'name='content' >

 <button> Meklēt </button>

</form>

<?php if(count($posts) == 0  ){?>
    <p> "Not found"</p>
}<?php } ?>


<ul>
<?php foreach($posts as $post) { ?>
     <li><a href ="show?id=<?=$post["id"]?>"> <?=  $post["content"]  ?></li>
} <?php } ?>
</ul>
<?php require "views/components/footer.php";?>
