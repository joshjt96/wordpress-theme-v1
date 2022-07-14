<div class="ex-page">
    <div class="blog-info">
        <p>
            <?php 
            the_date(); 
            ?>
        </p>
    <?php
    the_tags('<span class="tag">', '</span><span class="tag">', '</span>');
    ?>
    </div>
    <?php
    the_content();
    ?>
</div>