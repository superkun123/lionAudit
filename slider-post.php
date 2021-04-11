<?php
/*
Template Name: обычная страница с полоской
Template Post Type: post
*/
?>

<?php
get_header();
?>
<?php the_post(); ?>
<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
<?php
if(function_exists('bcn_display'))
{
bcn_display();
}?>
</div>
<main class="post-page">
    <aside class="aside-menu">
    </aside>
    <div class="post-content">
        <div class="text">
          <h2><?php the_title(); ?></h2>
          <p><?php the_content() ?></p>
        </div>
    </div>
</main>

<?php
get_footer();
?>
