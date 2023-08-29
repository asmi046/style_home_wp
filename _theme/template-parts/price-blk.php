<div class="price_blk standart_roundet">
    <h3 class="h3_in_blk"><?php echo $args['name']?></h3>
    
    <span class="info_blk">
        <?php echo $args['info']?>
    </span>

    <ul class="ul_in_blk">
        <?php 
            foreach ($args['list'] as $elem) {
        ?>
            <li><? echo $elem; ?></li>
        <?        
            }
        ?>
    </ul>
    <div class="srok_element">
        Срок: <?php echo $args['srok']?>
    </div>
    <div class="price_in_blk">
        <?php echo $args['price']?>
    </div>
    <a href="#" class="btn btn-fit">Рассчитать стоимость</a>
</div>