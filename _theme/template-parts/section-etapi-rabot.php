<section id="section-etapi-rabot" class="section-etapi-rabot">
    <div class="_container">
        <h2>Этапы работ</h2>
        <div class="etapi_wrapper">
            <div class="spl_line"></div>
            <div class="etapi_line">
                
                <?php get_template_part('template-parts/etap', 'elem', [
                    "name" => "Заявка",
                    "text" => "Оставляете заявку. Мы узнаем Ваши предпочтения и какой ремонт Вам нужен",
                ]);?>
                
                <?php get_template_part('template-parts/etap', 'elem', [
                    "name" => "Выезд на объект",
                    "text" => "Оставляете заявку. Мы узнаем Ваши предпочтения и какой ремонт Вам нужен",
                ]);?>
                
                <?php get_template_part('template-parts/etap', 'elem', [
                    "name" => "Заключение договора",
                    "text" => "Составляем смету, график выполнения и оплаты работ. Подписываем договор",
                ]);?>
                
                <?php get_template_part('template-parts/etap', 'elem', [
                    "name" => "Закупка материалов",
                    "text" => "Составляем смету, график выполнения и оплаты работ. Подписываем договор",
                ]);?>
                
                <?php get_template_part('template-parts/etap', 'elem', [
                    "name" => "Ремонт",
                    "text" => "Выполняем ремонтные работы согласно подписанному договору",
                ]);?>
                
                <?php get_template_part('template-parts/etap', 'elem', [
                    "name" => "Сдача объекта",
                    "text" => "Прием и сдача всех работ, клининг-уборка. Предоставление гарантии",
                ]);?>
                
            </div>
        </div>
    </div>
</section>