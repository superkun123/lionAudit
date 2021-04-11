<?php
/*
Template Name: Мероприятие
Template Post Type: post
*/
?>

<?php
get_header();
?>
<?php the_post(); ?>
<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">

</div>
<main class="single-post">
<div class="single-post__container" href="<?php the_permalink() ?>">
    <div class="single-post__img"><?php the_post_thumbnail(); ?></div>
       <h3 class="single-post__title"><?php the_title() ?></h3>
       <p class="single-post__text"><?php the_content()?>
       </p>
   </div>

</main>

<?php
get_footer();
?>
