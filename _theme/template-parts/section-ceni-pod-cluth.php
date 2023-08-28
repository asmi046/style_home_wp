<section id="section-ceni-pod-cluth" class="section-ceni-pod-cluth">
    <div class="_container">
        <h2>Цены на ремонт под ключ</h2>
        <div class="tap_blk price_pod_cl_blk">
            <div class="taphead">
                <div class="th_elem select" data-index="1">Новостройка</div>
                <div class="th_elem" data-index="2">Вторичка</div>
                <div class="th_elem" data-index="3">Дизайнерский</div>
            </div>
            <div class="tap_body"> 
                <div class="tap_slide select" data-index="1">
                    <div class="price_elements">
                        <?php get_template_part('template-parts/price', 'blk',
                            [
                                "name" => "Чистовой",
                                "info" => "Выполняется на ранее подготовленных поверхностях стен, полов и потолков",
                                "list" => ["Отделка полов", "Отделка стен", "Отделка потолков", "Электромонтажные работы", "Установка светильников", "Установка сантехники"],
                                "srok" => "от 8 до 20 дней",
                                "price" => "от 200 руб/м²"
                            ]
                        );?>

                        <?php get_template_part('template-parts/price', 'blk',
                            [
                                "name" => "Черновой",
                                "info" => "Выполняется на ранее подготовленных поверхностях стен, полов и потолков",
                                "list" => ["Отделка потолков", "Электромонтажные работы", "Установка светильников", "Установка сантехники"],
                                "srok" => "от 10 до 40 дней",
                                "price" => "от 200 руб/м²"
                            ]
                        );?>

                        <?php get_template_part('template-parts/price', 'blk',
                            [
                                "name" => "Евро",
                                "info" => "Выполняется на ранее подготовленных поверхностях стен, полов и потолков",
                                "list" => ["Отделка полов", "Отделка потолков", "Электромонтажные работы", "Установка светильников", "Установка сантехники"],
                                "srok" => "от 8 до 30 дней",
                                "price" => "от 200 руб/м²"
                            ]
                        );?>

                    </div>
                </div>
                
                <div class="tap_slide" data-index="2">

                </div>
                
                <div class="tap_slide" data-index="3">

                </div>                
            </div>
        </div>
    </div>
</section>