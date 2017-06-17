<div class="portfolio-item dark  portfolio-item-has-excerpt">

    <a class="portfolio-item-image" href="<?php the_permalink(); ?>">

        <div class="portfolio-item-overlay primary-color-bg"></div>

        <h3 class="portfolio-item-title">
            <?php echo get_field("name"); ?>
        </h3>

        <div class="portfolio-item-description">
            <p>  <?php echo get_field("shortDescription")?> </p>
        </div>

        <img
                src="<?php
                if(get_field('image') == "")
                    echo get_field('researchGroupDefaultImage', 'option')['url'];
                else
                    echo get_field('image')['url'];
                ?>"
                class="attachment-portfolio size-portfolio wp-post-image group-image"
                style="height: <?php the_field('researchGroupBoxHeight', 'option'); ?>px;"
                alt="<?php echo get_field("name"); ?>"
                title="<?php echo get_field("name"); ?>">
    </a>
</div>