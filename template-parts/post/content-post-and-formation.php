<article class="article_custom">
    <?php if (get_post_type()): ?>
        <a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
<?php endif;?>
        <div class="infos">
            <div class="cats-date">
            <?php ?><!-- affiche categorie -->
                <time datetime="<?php the_time("Y-m-d H:i");?>"><?php the_time("j F Y");?></time>
            </div>
            <?php the_tags('<div class="">', ' ', '</div>');?>
                <h1><a href="<?php the_permalink();?>"> <?php the_title();?></a></h1>
        </div>
</article>


