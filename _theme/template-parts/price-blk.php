<div class="price_blk standart_roundet">
    <h3 class="h3_in_blk">
        <a href="<?php echo $args['name']?>">
            <?php echo $args['name']?>
        </a>
    </h3>
    
    <span class="info_blk">
        <?php echo $args['info']?>
    </span>

    <ul class="ul_in_blk">
        <?php 
            foreach ($args['list'] as $key => $value) {
        ?>
            <li><a href="<? echo $value; ?>"> <? echo $key; ?></a></li>
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
    <a href="#callback" class="btn btn-fit">Оставить заявку</a>
</div>