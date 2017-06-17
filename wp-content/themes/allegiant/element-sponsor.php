<?php
$logo = $post['logo'];
$name = $post['name'];
$url = $post['url'];
?>

<div class="sponsor">
    <a href="<? echo $url;?>">
        <img style="max-height:  <?php the_field('sponsorsHeightMaxSize', 'option'); ?>px;"
             src="<? echo $logo['url'];?>"
             class="client-image wp-post-image"
             alt="<? echo $name;?>"
             title="<? echo $name;?>"
        >
    </a>
</div>
