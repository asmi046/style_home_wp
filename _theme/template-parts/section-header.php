<section id="section-header" class="section-header">
    <div class="top_menu">
        <div class="_container">
            <a class="logo" href="#">
                <img src="<?bloginfo("template_url")?>/img/logo.svg" alt="">
            </a>

            <?php get_template_part('template-parts/section-menu');?>


            <div class="head_button_lnk">
                <a href="#" class="h_calc_btn">Расчет<br/>стоимости</a>
                <a href="#" class="h_phone_btn">Обратный<br/>звонок</a>
            </div>

            <div class="phone_head_blk">
                <a href="tel:+74952876725">+7 495 287 67 25</a>
                <p>Ежедневно с 9.00 до 21.00</p>
            </div>
        </div>
    </div>
    
    <div class="header_content">
        <div class="_container">
            <div class="text">
                <h1>ДИЗАЙН ИНТЕРЬЕРА И СОВРЕМЕННЫЙ РЕМОНТ ПО ФИКСИРОВАННОЙ ЦЕНЕ</h1>
                <p>Квартиры, дома, <br/>коммерческая недвижимость</p>
            </div>

            <div class="form_blk">
                <h2>Расчитайте стоимость ремонта и получите скидку</h2>
                <form action="">
                    
                    <div class="bn_form_wrapper">

                        <label for="sel_remont">
                            <span>Где нужен ремонт?</span>
                            <div class="select_wrapper">
                                <select name="sel_remont" id="sel_remont">
                                    <option value="Новостройка">Новостройка</option>
                                </select>
                            </div>
                        </label>
                        
                        <label for="sel_plce">
                            <span>Площадь:</span>
                            <div class="select_wrapper">
                                <select name="sel_plce" id="sel_plce">
                                    <option value="46 кв м">46 кв м</option>
                                </select>
                            </div>
                        </label>
                        
                        <label for="sel_type">
                            <span>Вид ремонта:</span>
                            <div class="select_wrapper">
                                <select name="sel_type" id="sel_type">
                                    <option value="Черновой">Черновой</option>
                                </select>
                            </div>
                        </label>
                        
                        <label for="sel_project">
                            <span>Дизайн проект?</span>
                            <div class="select_wrapper">
                                <select name="sel_project" id="sel_project">
                                    <option value="Да">Да</option>
                                </select>
                            </div>
                        </label>

                    </div>

                    <button class="btn" type="submit">Рассчитать стоимость</button>
                    <p class="snoska">Нажимая на кнопку, вы даете согласие на обработку персональных данных</p>
                </form>
            </div>

        </div>
    </div>
</section>