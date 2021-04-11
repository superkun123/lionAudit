<?php
/*
Template Name: Мероприятия
Template Post Type: page
*/
?>

<?php
get_header();
?>
<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
<?php
if(function_exists('bcn_display'))
{
bcn_display();
}?>
</div>
<?php the_post(); ?>
<main class="our-team-page event-page">
<h2 class="victories__main-title">Мероприятия</h2>
    <div class="victories-post__row">
    <?php    // параметры по умолчанию
$posts = get_posts( array(
    'numberposts' => 0,
	'category'    => 20,
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
    <a class="victories-post"  href="<?php the_permalink() ?>">
    <div class="victories-post__img"><?php the_post_thumbnail(); ?></div>
       <h3 class="victories-post__title"><?php the_title() ?></h3>
       <div class="victories-post__text"><?php the_excerpt()?>
       </div>
    </a>
   <?php the_posts_pagination(); ?>
   <?php
}

wp_reset_postdata(); // сброс
?>
    </div>
</main>

<?php
get_footer();
?>
