<div class="top_menu">
        <div class="bg_blk"></div>
        <div class="_container">
            <a class="logo" href="<?php bloginfo('url')?>">
                <img src="<?bloginfo("template_url")?>/img/logo.svg" alt="">
            </a>

            <?php get_template_part('template-parts/section-menu');?>


            <div class="head_button_lnk">
                <a href="#pricecalcBlk" class="h_calc_btn scroll-to">Расчет<br/>стоимости</a>
                <a href="#recollMsg" class="h_phone_btn">Обратный<br/>звонок</a>
            </div>

            <div class="phone_head_blk">
                <a href="tel:<?php echo get_clear_phone(PHONE); ?>"><? echo PHONE; ?></a>
                <p>Ежедневно <?php echo TIME_WORK; ?></p>
            </div>
            <div class="mobile_action ">
                <a href="tel:<?php echo get_clear_phone(PHONE); ?>" class="mobile_phone_btn"></a>
                <div id="burger_element" class="burger">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
                
            </div>
        </div>
</div>