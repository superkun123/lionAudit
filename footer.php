<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lion-audit
 */

?>
    <div class="modal">
        <div class="modal__header">
            <h2 class="modal__title">Мы свяжемся с вами</h2><a class="modal__cross" href="#"></a>
        </div>
        <div class="modal__body">
            <?php echo do_shortcode('[contact-form-7 id="187" title="Контактная форма 1"]')?>
        </div>
    </div>

<footer class="main-footer">
    <div class="contacts">
        <!-- <p class="contacts__modal main-link">Связаться с нами</p> -->
        <a class="contacts__phone" href="tel:+7(343)3717766">+7 (343) 371-77-66</a>
        <a href="mailto:lev@lev-group.ru " class="contacts__adress">e-mail: lev@lev-group.ru</a>
            <a href="http://lev-audit.na4u.ru/%d0%be-%d0%ba%d0%be%d0%bc%d0%bf%d0%b0%d0%bd%d0%b8%d0%b8/%d0%ba%d0%be%d0%bd%d1%82%d0%b0%d0%ba%d1%82%d1%8b/" class="contacts__adress">620014, Россия, <br>г. Екатеринбург, проспект Ленина, 5/4 </a>
        </div>
        <div class="footer-call-us">
        <div class="services-repeat">
    
    <ul class="services__list">
            <li> <a href="https://www.lev-group.ru/services/yuridicheskie-uslugi/">Юридические услуги</a></li>
            <li> <a href="https://www.lev-group.ru/services/nalogovyj-konsalting/">Налоговый консалтинг</a></li>
            <li><a href="https://www.lev-group.ru/services/audit-i-revizii/">Аудит и ревизии</a></li>
            <li><a href="https://www.lev-group.ru/services/buhgalterskoe-obsluzhivanie/">Бухгалтерское обслуживание</a></li>
        </ul>

</div>


        <p class="contacts__modal main-link">Заказать звонок</p>
        </div>
        <div class="logo-container">
            <!-- <a href="<?php echo home_url()?>"><img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="Логотип" /></a> -->
            <div class="social-medias__container">
                <a href="https://www.facebook.com/lev.levaudit" class="social-medias"><img src="<?php echo get_template_directory_uri() ?>/img/facebook.svg" alt="Фейсбук"></a>
                <a href="https://www.youtube.com/channel/UCbyZUaMsEsBFxDhLwHBwxTg" class="social-medias"><img src="<?php echo get_template_directory_uri() ?>/img/youtube.svg" alt="Ютуб"></a>
                <a href="https://www.instagram.com/levlawfirm/?igshid=51093i2u5myc" class="social-medias"><img src="<?php echo get_template_directory_uri() ?>/img/inst.svg" alt="Инстаграм"></a>
            </div>
            <a href="http://lev-audit.na4u.ru/info/" class="rules">Правовая информация</a>
            <!-- <a href="http://lev-audit.na4u.ru/%d0%bf%d0%be%d0%bb%d0%b8%d1%82%d0%b8%d0%ba%d0%b0-%d0%ba%d0%be%d0%bd%d1%84%d0%b8%d0%b4%d0%b5%d0%bd%d1%86%d0%b8%d0%b0%d0%bb%d1%8c%d0%bd%d0%be%d1%81%d1%82%d0%b8/" class="policy">Политика обработки персональных данных</a> -->
        </div>
    </footer>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Yandex.Metrika informer -->

<!-- /Yandex.Metrika informer -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter17180776 = new Ya.Metrika({
                    id:17180776,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/17180776" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<?php wp_footer(); ?>

</body>
</html>
