<div class="otd_usl">
    <div class="photo" data-uslname="<?php echo $args['name']?>"></div>
    <h3 class="h3_in_blk h3_line">
        <a href="<?php echo $args['name_lnk']?>">
            <?php echo $args['name']?>
        </a>
    </h3>
    <ul class="ul_in_blk">
        <? foreach ($args['list'] as $key => $value) {?>
            <li><a href="<?echo $value?>"><?echo $key?></a></li>
        <?}?>
        
    </ul>
    <span class="price_in_blk"><?php echo $args['price']?></span>
    <p>без учета материалов</p>
    <a href="#callback" class="btn">Оставить заявку</a>
</div>