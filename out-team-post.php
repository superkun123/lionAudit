<?php
/*
Template Name: Сотрудник
Template Post Type: post
*/
?>

<?php
get_header();
?>
<?php the_post(); ?>
<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
<!-- Breadcrumb NavXT 6.6.0 -->
<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Перейти к ЛЕВЪ." href="http://lev-audit.na4u.ru" class="home"><span property="name">ЛЕВЪ</span></a><meta property="position" content="1"></span>›<span property="itemListElement" typeof="ListItem"><span property="name" class="post post-page current-item">Наша команда</span><meta property="url" content="http://lev-audit.na4u.ru/%d0%bd%d0%b0%d1%88%d0%b0-%d0%ba%d0%be%d0%bc%d0%b0%d0%bd%d0%b4%d0%b0/"><meta property="position" content="2"></span></div>
<main class="single-post__member">
<div class="single-post__container-member" href="<?php the_permalink() ?>">
    <div class="single-post__img-member"><?php the_post_thumbnail(); ?></div>
       <div class="single-post__text-member">
       <h2 class="single-post__title"><?php the_title() ?></h2>
       <div class="single-post__text-member"><?php the_content()?></div>
       </div>
    
   </div>

</main>

<?php
get_footer();
?>
