<div class="otd_usl">
    <div class="photo" data-uslname="<?php echo $args['name']?>"></div>
    <h3 class="h3_in_blk h3_line"><?php echo $args['name']?></h3>
    <ul class="ul_in_blk">
        <? foreach ($args['list'] as $key => $value) {?>
            <li><a href="<?echo $value?>"><?echo $key?></a></li>
        <?}?>
        
    </ul>
    <span class="price_in_blk"><?php echo $args['price']?></span>
    <p>без учета материалов</p>
    <a href="#callback" class="btn">Оставить заявку</a>
</div>