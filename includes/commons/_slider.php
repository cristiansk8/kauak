<?php
    /*
        home_slider
            home_slider_img
    */
    $home_slider = get_field('home_slider');
    if($home_slider):
?>
<section id="SliderHome" class="slider row">
    <div class="slider__wrapper">
        <?php while(have_rows('home_slider')): the_row();?>
            <figure class="slider__wrapper-item">
                <?php if ( wp_is_mobile() ):?>
                    <img src="<?php the_sub_field('home_slider_img_mobile')?>" alt="">
                <?php else: ?>
                    <img src="<?php the_sub_field('home_slider_img')?>" alt="">
                <?php endif;?>
                <?php if(get_sub_field('home_slider_txt')):?>
                    <div class="slider__wrapper-item--caption">
                        <?php the_sub_field('home_slider_txt'); ?>
                    </div>
                <?php endif; ?>
            </figure>
        <?php endwhile;?>
    </div>
</section>
<?php
    endif;