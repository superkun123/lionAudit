<?php
/*
Template Name: Главная страница
Template Post Type: page
*/
get_header();
?>
    <main class="main-page">

 


        <section class="news-slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                <?php    // параметры по умолчанию
$posts = get_posts( array(
	'numberposts' => 6,
	'category'    => 17,
	'orderby'     => 'date',
	'order'       => 'ASC',
	'include'     => array(),
	'exclude'     => array(),
	'meta_key'    => '',
	'meta_value'  =>'',
	'post_type'   => 'post',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

foreach( $posts as $post ){
    setup_postdata($post);
    ?>
   <a href="<?php the_permalink() ?>" class="swiper-slide">
                        <div class="slider__item-container">
                            <h2 class="slider__title"><?php the_title() ?></h2>
                            <!-- <div class="slider__text"><?php the_excerpt()?></div> -->
                            <!-- <a class="slider__btn" href="<?php the_permalink() ?>">Подробнее</a> -->
                        </div>
                        <div class="slider__img-container"><?php the_post_thumbnail(); ?></div>
    </a>
   <?php
}

wp_reset_postdata(); // сброс

?>



                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <div class="swiper-pagination"></div>
        </section>
        <section class="about-company">
            <div class="about-company__text-container">
                <h2 class="about-company__title"><a href="https://www.lev-group.ru/%d0%be-%d0%ba%d0%be%d0%bc%d0%bf%d0%b0%d0%bd%d0%b8%d0%b8/"><?php the_field('company_title'); ?></a></h2>
                <p class="about-compnay__text"><?php the_field('company'); ?></p>
            </div>
            <div class="services">
                <h2 class="services__title"><a href="https://www.lev-group.ru/%d1%8e%d1%80%d0%b8%d0%b4%d0%b8%d1%87%d0%b5%d1%81%d0%ba%d0%b8%d0%b5-%d1%83%d1%81%d0%bb%d1%83%d0%b3%d0%b8/"><?php the_field('services_title'); ?></a></h2>
                <ul class="services__list">
                    <li> <a href="https://www.lev-group.ru/services/yuridicheskie-uslugi/"><?php the_field('services_text1'); ?></a></li>
                    <li> <a href="https://www.lev-group.ru/services/nalogovyj-konsalting/"><?php the_field('services_text2'); ?></a></li>
                    <li><a href="https://www.lev-group.ru/services/audit-i-revizii/"><?php the_field('services_text3'); ?></a></li>
                    <li><a href="https://www.lev-group.ru/services/buhgalterskoe-obsluzhivanie/">Бухгалтерское обслуживание</a></li>
                </ul><a class="main-link" href="https://www.lev-group.ru/services/">Подробнее</a>
            </div>
        </section>
        <section class="victories">
            <h2 class="victories__main-title"><a href="https://www.lev-group.ru/category/new_victories/">Наши победы</a></h2>
            <div class="victories-post__row">
            <?php    // параметры по умолчанию
$posts = get_posts( array(
	'numberposts' => 6,
	'category'    => 15,
	'orderby'     => 'date',
	'order'       => 'DESC',
	'include'     => array(),
	'exclude'     => array(),
	'meta_key'    => '',
	'meta_value'  =>'',
	'post_type'   => 'post',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

foreach( $posts as $post ){
    setup_postdata($post);
    ?>
    <a class="victories-post" href="<?php the_permalink() ?>">
    <!-- <div class="victories-post__img"></div> -->
       <h3 class="victories-post__title"><?php the_title() ?></h3>
       <div class="victories-post__text"><?php the_excerpt()?>
       </div>
   </a>
   <?php
}

wp_reset_postdata(); // сброс
?>
                   </div>
            <div class="victories__btn"> <a href="https://www.lev-group.ru/category/new_victories">Подробнее</a></div>
        </section>
        <section class="proBono">
            <div class="proBono__logo"><a href="https://www.lev-group.ru/%d0%bf%d1%80%d0%be%d0%b1%d0%be%d0%bd%d0%be/"><img src="<?php echo get_template_directory_uri() ?>/img/proBono.svg" alt="Про боно" /></a></div>
            <div class="proBono__features">
                <ul class="proBono__list">
                    <li> <a href="https://www.lev-group.ru/%d0%bf%d1%80%d0%be%d0%b1%d0%be%d0%bd%d0%be/%d0%b1%d0%b5%d0%b7%d0%b2%d0%be%d0%b7%d0%bc%d0%b5%d0%b7%d0%b4%d0%bd%d0%b0%d1%8f-%d1%8d%d0%ba%d1%81%d0%bf%d0%b5%d1%80%d1%82%d0%bd%d0%b0%d1%8f-%d0%bf%d1%80%d0%b0%d0%b2%d0%be%d0%b2%d0%b0%d1%8f-%d0%bf/"><?php the_field('proBono_text1'); ?></a></li>
                    <li> <a href="https://www.lev-group.ru/%d0%bf%d1%80%d0%be%d0%b1%d0%be%d0%bd%d0%be/%d0%b7%d0%b0%d0%ba%d0%be%d0%bd%d0%be%d1%82%d0%b2%d0%be%d1%80%d1%87%d0%b5%d1%81%d0%ba%d0%b0%d1%8f-%d0%b4%d0%b5%d1%8f%d1%82%d0%b5%d0%bb%d1%8c%d0%bd%d0%be%d1%81%d1%82%d1%8c/"><?php the_field('proBono_text2'); ?></a></li>
                    <li> <a href="https://www.lev-group.ru/%d0%bf%d1%80%d0%be%d0%b1%d0%be%d0%bd%d0%be/%d0%b4%d0%b5%d1%8f%d1%82%d0%b5%d0%bb%d1%8c%d0%bd%d0%be%d1%81%d1%82%d1%8c-%d0%b1%d1%8e%d1%80%d0%be-%d0%bf%d0%be-%d0%b7%d0%b0%d1%89%d0%b8%d1%82%d0%b5-%d0%bf%d1%80%d0%b0%d0%b2-%d0%bf%d1%80%d0%b5%d0%b4/"><?php the_field('proBono_text3'); ?></a></li>
                    <li> <a href="https://www.lev-group.ru/%d0%bf%d1%80%d0%be%d0%b1%d0%be%d0%bd%d0%be/"><?php the_field('proBono_text4'); ?></a></li>
                </ul><a class="main-link" href="https://www.lev-group.ru/%d0%bf%d1%80%d0%be%d0%b1%d0%be%d0%bd%d0%be/">Подробнее</a>
            </div>
        </section>
        <section class="reviews">
            <h2 class="reviews__title">Отзывы</h2>
            <div class="reviews__container">
                <div class="review-block swiper-slide">
                    <div class="review-block__header"><img class="review-block__thumb" src="<?php the_field('review_thumb1'); ?>" />
                        <h3 class="review-block__title"><?php the_field('company_title_review1'); ?></h3>
                    </div>
                    <div class="review-block__body">
                        <p class="review-block__text"><?php the_field('review_text1'); ?></p>
                    </div>
                </div>
                <div class="review-block swiper-slide">
                    <div class="review-block__header"><img class="review-block__thumb" src="<?php the_field('review_thumb2'); ?>" />
                        <h3 class="review-block__title"><?php the_field('company_title_review2'); ?></h3>
                    </div>
                    <div class="review-block__body">
                        <p class="review-block__text"><?php the_field('review_text2'); ?></p>
                    </div>
                </div>
                <div class="review-block swiper-slide">
                    <div class="review-block__header"><img class="review-block__thumb" src="<?php the_field('review_thumb3'); ?>" />
                        <h3 class="review-block__title"><?php the_field('company_title_review3'); ?></h3>
                    </div>
                    <div class="review-block__body">
                        <p class="review-block__text"><?php the_field('review_text3'); ?></p>
                    </div>
                </div>                 
        </div>
        </section>


   

    </main>
    <section class="map">
        <h2 class="map__title">Наша география</h2>
        <div class="map__container"><img src="<?php echo get_template_directory_uri() ?>/img/map.svg" alt="Карта" /></div>
    </section>
<?php
get_footer();
?>
