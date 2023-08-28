<section id="section-komanda" class="section-komanda">
    <div class="_container">
        <h2>Наша команда</h2>
        <div class="comand_blk">
            <?php get_template_part('template-parts/command', "person", [
                "name" => "Наталья Викторовна",
                "dolg" => "Руководитель отдела дизайна",
                "img" => "comand_1.jpg",
            ]);?>
            
            <?php get_template_part('template-parts/command', "person", [
                "name" => "Наталья Викторовна",
                "dolg" => "Дизайнер",
                "img" => "comand_2.jpg",
            ]);?>
            
            <?php get_template_part('template-parts/command', "person", [
                "name" => "Юрий Олегович",
                "dolg" => "Руководитель отдела дизайна",
                "img" => "comand_3.jpg",
            ]);?>
            
            <?php get_template_part('template-parts/command', "person", [
                "name" => "Наталья Викторовна",
                "dolg" => "Руководитель отдела дизайна",
                "img" => "comand_4.jpg",
            ]);?>
        </div>
    </div>
</section>