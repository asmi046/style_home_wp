<section id="section-vizov-mastera" class="section-vizov-mastera">
    <div class="_container standart_roundet">
        <div class="vm_form_blk">
            <div class="left">
                <h2>Бесплатно вызовите нашего специалиста в удобное время</h2>
                <p class="sub_h">Заполните форму, мы перезвоним вам <br/>и согласуем дату и время визита специалиста</p>
                
                <form action="">
                    <label for="master_col_tel">
                        <input type="tel" id="master_col_tel" name="phone" placeholder="Ваш телефон">
                    </label>
                    <button type="submit" class="btn">Отправить</button>
                    <p class="snoska">Нажимая на кнопку, вы даете согласие на обработку персональных данных</p>
                </form>

            </div>
            <div class="right">
                <div class="wrap">
                    <h3>К вам на объект приедет опытный бригадир компании, который:</h3>
                    <ul class="ul_in_blk">
                        <li>Сделает точный замер</li>
                        <li>Проконсультирует по видам работ и этапам</li>
                        <li>Подскажет по выбору материалов</li>
                        <li>Сориентирует по стоимости и срокам</li>
                    </ul>
                </div>

                <div class="green_pl_srohno">
                    <h3>Нужно срочно?</h3>
                    <p>Проведем осмотр и консультацию по видеосвязи</p>
                    <div class="phone_time">
                        <a href="tel:<?php echo get_clear_phone(PHONE); ?>"><? echo PHONE; ?></a>
                        <p class="time"><?php echo TIME_WORK; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>