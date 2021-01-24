<?php

$taxonomy     = 'product_cat';
$orderby      = 'name';
$show_count   = 0;     
$hierarchical = 1;   
$empty        = 0;

$args = array(
    'taxonomy'     => $taxonomy,
    'orderby'      => $orderby,
    'show_count'   => $show_count,
    'pad_counts'   => $pad_counts,
    'hierarchical' => $hierarchical,
    'hide_empty'   => $empty
);

$all_categories = get_categories( $args );
?>
<nav class="menu-categories">
    <ul>
    <?php
    foreach ($all_categories as $cat):
        if($cat->category_parent == 0):
            $category_id = $cat->term_id;
            $category_name = $cat->name;
            $category_description = $cat->description;
            $link = '/categoria/'.$cat->slug;
            $thumbnail_id   = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
            $image = wp_get_attachment_url( $thumbnail_id );

            if($category_id != 21 && $category_id != 15 ):
                ?>
                <li class="menu-categories__item menu-categories__item--<?php echo $category_id; ?>">
                    <a href="<?php echo $link;?>">
                        <figure>
                            <img src="<?php echo $image;?>" alt="<?php echo $category_name;?>">
                        </figure>
                        <h3><?php echo $category_name; ?></h3>
                        <?php echo ( $category_description ? $category_description : '' ); ?>
                    </a>
                </li>
                <?php
            endif;
        endif;
    endforeach;
    ?>
    </ul>
</nav>
<?php
        