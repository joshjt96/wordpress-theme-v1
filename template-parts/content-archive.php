<div class="ex-page"></div>
    <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="">
    <h2 class="blue-text"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
    <p class="blue-text"><?php the_date();?></p>
    <?php
    the_excerpt();
    ?>
    <a class="read-more" href="<?php the_permalink(); ?>">Read more &rarr;</a>
</div>