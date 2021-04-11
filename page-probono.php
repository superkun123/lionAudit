<?php
/*
Template Name: ПроБоно
Template Post Type: page
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
    <?php wp_nav_menu( array(
	'theme_location' => 'proBono_menu',
    'fallback_cb' => '__return_empty_string',
    'container'     => 'ul',
    'container_class'   => 'aside-list',
    'container_id'      => 'aside-list'
) );?>
        <!-- <ul class="aside-list">
            <li>Общая информация</li>
            <li>Рейтинги</li>
            <li>Карьера</li>
            <li>Обращение Управляющей</li>
        </ul> -->
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
