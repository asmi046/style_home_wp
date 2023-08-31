
<div class="top_menu">
        <div class="bg_blk"></div>
        <div class="_container">
            <a class="logo" href="#">
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

<?php get_template_part('template-parts/section-mobile-menu');?>

<section id="section-header" class="section-header">

    
    <div  id="pricecalcBlk" class="header_content">
        <div class="_container">
            <div class="text">
                <h1>ДИЗАЙН ИНТЕРЬЕРА И СОВРЕМЕННЫЙ РЕМОНТ ПО ФИКСИРОВАННОЙ ЦЕНЕ</h1>
                <p>Квартиры, дома, <br/>коммерческая недвижимость</p>
            </div>

            <div id="calc_form_blk" class="form_blk">
                
                <calc-form redirect="/thencs"></calc-form>
            </div>

        </div>
    </div>
</section>