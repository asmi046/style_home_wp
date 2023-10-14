<?php 
    // wp_nav_menu( [
    // 'theme_location' => 'menu-1',
    // 'menu_class' => 'menu_head',
	// 'container' => false ]); 
?>

<ul class="menu_head" id="menu_head">
    <li>
        <a href="#" class="sub_puncts">Дизайн</a>
        <div data-name="Дизайн" class="menu_sub_puncts" id="menu_sub_puncts">
            <div class="_container">
                <div class="subaction_blk">
                    <img class="standart_roundet" src="<?php echo get_template_directory_uri()?>/img/menu_design_foto.jpg" alt="">
                </div>

                <div class="subpuncts_blk">
                    <ul>
                        <li><a href="">Новости</a></li>
                        <li><a href="">Блог</a></li>
                        <li><a href="">Публикации в СМИ</a></li>
                        <li><a href="">Мы на телевидении</a></li>
                        <li><a href="">Энциклопедия</a></li>
                    </ul>
                </div>

                <?php get_template_part('template-parts/subcontacts-blk');?>
            </div>
        </div>
    </li>
    <li><a href="#" class="sub_puncts">Ремонт</a></li>
    <li><a href="#">Галерея</a></li>
    <li><a href="#">Контакты</a></li>
</ul>