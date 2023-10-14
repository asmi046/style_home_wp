<section id="section-portfolio" class="section-portfolio">
    <div class="_container">
        <h2>Посмотрите, что мы сделали!</h2>
		
        <div class="portfolios_list">
            <div class="portfolio_elem">
                <?php get_template_part('template-parts/portfolio','slider', [
                    "name" => "ЖК Лица площадь 106 м²",
                    "index" => 1,
                    "folder" => "elem_1",
                    "photo" => [
                         "p1-1.jpg",
                         "p1-2.jpg",
                         "p1-3.jpg",
                         "p1-4.jpg",
                         "p1-5.jpg",
                         "p1-6.jpg"
                    ]
                ]);?>
                
                <?php get_template_part('template-parts/portfolio','info', [
                    "name" => "ЖК Лица площадь 106 м²",
                    "info_str_1" => "Процесс работы в ЖК Лица 3 спальни, кухня-гостиная и 2 санузла",
                    "info_str_2" => "Рассчитайте стоимость вашего ремонта",
                    "param" => [
                        "Площадь:" => "106 м²", 
                        "Комнаты:" => "6", 
                        "Срок:" => "3,5 месяц", 
                        "Стоимость:" => "3 100 000 руб.", 
                    ]
                ]);?>
            </div>

            <div class="portfolio_elem">
                <?php get_template_part('template-parts/portfolio','slider', [
                    "name" => "ЖК Скандинавия 88 м²",
                    "index" => 2,
                    "folder" => "elem_2",
                    "photo" => [
                         "p1-1.jpg",
                         "p1-2.jpg",
                         "p1-3.jpg",
                         "p1-4.jpg",
                         "p1-5.jpg",
                         "p1-6.jpg"
                    ]
                ]);?>
                
                <?php get_template_part('template-parts/portfolio','info', [
                    "name" => "ЖК Скандинавия 88 м²",
                    "info_str_1" => "Процесс работы в ЖК Лица 3 спальни, кухня-гостиная и 2 санузла",
                    "info_str_2" => "Рассчитайте стоимость вашего ремонта",
                    "param" => [
                        "Площадь:" => "88 м²", 
                        "Комнаты:" => "6", 
                        "Срок:" => "3,5 месяц", 
                        "Стоимость:" => "3 100 000 руб.", 
                    ]
                ]);?>
            </div>
			
        </div>
    </div>
</section>