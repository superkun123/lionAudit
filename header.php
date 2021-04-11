<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lion-audit
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri() ?>/img/favicon.ico">
    <title>ЛЕВЪ & ЛЕВЪ-АУДИТ юридические услуги, опыт с 1991 года - группа компаний ЛЕВЪ & ЛЕВЪ-АУДИТ</title>
    <meta name="description" CONTENT="Бухгалтерские, аудиторские, юридические услуги для бизнеса и частных лиц.">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <meta property="og:image" content="<?php echo get_template_directory_uri() ?>/img/logo.png" />
	<?php wp_head(); ?>
</head>
<body>
    <header class="header-main">
        <div class="nav-main">
            <div class="nav-main__logo-container"><a href="<?php echo home_url()?>"><img class="nav-main__logo" src="<?php echo get_template_directory_uri() ?>/img/logo.svg"
                        alt="логотип" /></a>
            </div>
            <div class="nav-main__main-links">
            <ul class="nav-main__list">
                    <li> <a href="https://www.lev-group.ru/services/yuridicheskie-uslugi/">Юридические услуги</a></li>
                    <li> <a href="https://www.lev-group.ru/services/nalogovyj-konsalting/">Налоговый консалтинг</a></li>
                </ul>
                <ul class="nav-main__list second-nav-list">
                    <li><a href="https://www.lev-group.ru/services/audit-i-revizii/">Аудит и ревизии</a></li>
                    <li><a href="https://www.lev-group.ru/services/buhgalterskoe-obsluzhivanie/">Бухгалтерское обслуживание</a></li>
                </ul>
            </div>
            <div class="nav-main__phone-n-adress">
                <div class="nav-main__phone-container">
                <a class="nav-main__phone" href="tel:+7(343)3717766">+7 (343) 371-77-66</a>
                <p class="contacts__modal contacts__modal-header">Заказать звонок</p>
                </div>
                
<!--                 <div class="social-medias__container">
                <a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/lev.levaudit" class="social-medias"><img src="<?php echo get_template_directory_uri() ?>/img/facebook.svg" alt="Фейсбук"></a>
                <a target="_blank" rel="noopener noreferrer" href="https://www.youtube.com/channel/UCbyZUaMsEsBFxDhLwHBwxTg" class="social-medias"><img src="<?php echo get_template_directory_uri() ?>/img/youtube.svg" alt="Ютуб"></a>
                <a target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/levlawfirm/?igshid=51093i2u5myc" class="social-medias"><img src="<?php echo get_template_directory_uri() ?>/img/inst.svg" alt="Инстаграм"></a>
            </div> -->
                <div class="nav-main__hamburger"
                    href="#"></div>
            </div>
        </div>
        <div class="nav__list hide">
        <?php wp_nav_menu( array(
	'theme_location' => 'header_menu',
	'fallback_cb' => '__return_empty_string'
) );?>
        </div>


        <div class="nav-main__main-links mobile-links">
            <ul class="nav-main__list">
                    <li> <a href="https://www.lev-group.ru/services/yuridicheskie-uslugi/">Юридические услуги</a></li>
                    <li> <a href="https://www.lev-group.ru/services/nalogovyj-konsalting/">Налоговый консалтинг</a></li>
                </ul>
                <ul class="nav-main__list second-nav-list">
                    <li><a href="https://www.lev-group.ru/services/audit-i-revizii/">Аудит и ревизии</a></li>
                    <li><a href="https://www.lev-group.ru/services/buhgalterskoe-obsluzhivanie/">Бухгалтерское обслуживание</a></li>
                </ul>
            </div>


    </header>




