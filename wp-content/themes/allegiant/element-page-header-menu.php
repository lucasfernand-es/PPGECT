
<li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-home top-menu-item">
    <a href="<?php echo get_bloginfo('url'); ?>">
        <?php the_field('displayHome', 'option'); ?>
    </a>
</li>
<li id="menu-item-181" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-home  top-menu-item">
    <a href="<?php echo get_bloginfo('url'); ?>/#research-group">
        <?php the_field('displayResearchGroup', 'option'); ?>
    </a>
    <?php
    $posts = get_posts(array(
        'posts_per_page'  => -1,
        'post_type'      => 'research_group',
        'order' => 'ASC'
    ));
    // 'orderby' => 'abreviacao',
    if( $posts ): ?>
    <ul class="sub-menu">
        <?php
            foreach( $posts as $post ):
            setup_postdata( $post ); ?>
                <li class="menu-item menu-item-type-post_type menu-item-object-research_group  top-menu-item"><a href="<?php the_permalink(); ?>"> <?php echo get_field("name"); ?></a></li>
            <?php endforeach; ?>
    </ul>
    <?php endif; ?>
</li>
<!--li class="menu-item menu-item-type-post_type menu-item-object-page  top-menu-item">
    <a href="<?php ?>">
        <?php the_field('displayContact', 'option'); ?>
    </a>
</li-->
