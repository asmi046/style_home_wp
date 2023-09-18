<section id="section-footer" class="section-footer section-footer__top">
    <div class="_container">
        <div class="content-footer d_flex f_jc_sb">
            <div class="logo-footer">
                <img src="<?bloginfo("template_url")?>/img/logo.svg" alt="Логотип компании «Стильный дом»">
                <p>Качественный ремонт помещений <br> под ключ в Москве и области</p>
            </div>
            <div class="footer-nav__panel">
                <p class="f_h">Клиентам:</p>
                <ul class="footer-nav__list">
                    <li><a href="#">Цены</a></li>
                    <li><a href="#">Акции</a></li>
                    <li><a href="#">О компании</a></li>
                    <li><a href="#">Отзывы</a></li>
                    <li><a href="#">Контакты</a></li>
                </ul>
            </div>

            <div class="footer-nav__panel">
                <p class="f_h">Услуги:</p>
                <ul class="footer-nav__list">
                    <li><a href="#">Дизайн</a></li>
                    <li><a href="#">Ремонт</a></li>
                    <li><a href="#">Умный дом</a></li>
                    <li><a href="#">Галерея</a></li>
                </ul>
            </div>

            <div class="footer-nav__panel">
                <p class="f_h">Принимаем к оплате:</p>
                <div class="footer-nav__panel-card d_flex f_jc_sb">
                    <img src="<?php echo get_template_directory_uri();?>/img/icons/icon-viza.svg" alt="Visa">
                    <img src="<?php echo get_template_directory_uri();?>/img/icons/icon-sber.svg" alt="СБЕР">
                </div>

                <div class="footer-nav__panel-card d_flex f_jc_sb">
                    <img src="<?php echo get_template_directory_uri();?>/img/icons/icon-mirpay.svg" alt="МИР">
                    <img src="<?php echo get_template_directory_uri();?>/img/icons/icon-bank.svg" alt="Mastercard">
                </div>
            </div>

            <div class="phone_footer_blk">
                <a href="tel:<?php echo get_clear_phone(PHONE); ?>"><? echo PHONE; ?></a>
                <p><?php echo TIME_WORK; ?></p>
                <a href="#recollMsg" class="btn btn-fit">Оставить заявку</a>
                <p><span class="footer-phone_text-agree">Нажимая на кнопку, вы даете согласие<br> на обработку персональных данных</span></p>
            </div>
        </div>
    </div>
</section>

<section class="section-footer section-footer__bot">
<div class="_container">
    <p>ОБРАЩАЕМ ВАШЕ ВНИМАНИЕ НА ТО, ЧТО ДАННЫЙ САЙТ НОСИТ ИСКЛЮЧИТЕЛЬНО ИНФОРМАЦИОННЫЙ ХАРАКТЕР И НЕ ЯВЛЯЕТСЯ ПУБЛИЧНОЙ ОФЕРТОЙ, ОПРЕДЕЛЯЕМОЙ ПОЛОЖЕНИЯМИ СТАТЬИ 437 ГК РФ.</p>
    <p>ООО "СКАЙ" ОГРН 1147746036712 ИНН/КПП 7707824090/770701001</p>
    <p><a href="#">КАРТА САЙТА</a></p>
</div>
</section>