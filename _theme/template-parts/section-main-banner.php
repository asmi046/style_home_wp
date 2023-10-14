<?php get_template_part('template-parts/section-mobile-menu');?>

<section id="section-header" class="section-header">
    <div class="shadow"></div>
    
    <div  id="calculator" class="header_content">
        <div class="_container">
            <div class="text">
                <? if (is_home()) { ?>
                    <h1>ДИЗАЙН ИНТЕРЬЕРА И СОВРЕМЕННЫЙ РЕМОНТ ПО ФИКСИРОВАННОЙ ЦЕНЕ</h1>
                <?
                    } else {
                ?>
                    <h1><?php the_title()?></h1>
                <?
                    }
                ?>
                <p>Квартира, частный дом, <br/>коммерческая недвижимость</p>
            </div>

            <div id="calc_form_blk" class="form_blk">
                
                <calc-form redirect="/thanks"></calc-form>
            </div>

        </div>
    </div>
</section>
