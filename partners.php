<?php
/*
Template Name: Наши партнёры
Template Post Type: page
*/
?>

<?php
get_header();
?>


<?php the_post(); ?>
<div class="breadcrumbs">
<?php
if(function_exists('bcn_display'))
{
bcn_display();
}?>
</div>



<main class="post-page">
    <div class="partners-content">
        <div class="text">
          <h2><?php the_title(); ?></h2>
          <p><?php the_content() ?></p>
        </div>
    </div>
</main>

<?php
get_footer();
?>
