<h1> Blogs</h1>

 <form>
 <input name='search_query' />

 <buttton>Meklet</button>

</form>;

<?php if(count($posts) == 0  ){?>
    <p> "Not found"</p>
}<?php } ?>


<ul>
<?php foreach($posts as $post) { ?>
     <li><?php echo $post["content"]  ?></li>
} <?php } ?>
</ul>