<div class="information">
    <h3><?php echo $args['name']?></h3>
    <p><?php echo $args['info_str_1']?></p>
    <p class="h3_line"><?php echo $args['info_str_2']?></p>
    <ul>

        <?php 
            foreach ($args['param'] as $key => $elem) {
        ?>
            <li>
                <span class="param"><? echo $key; ?></span>
                <span class="value"><? echo $elem; ?></span>
            </li>
        <?        
            }
        ?>
        
    </ul>
    <a href="#callback" class="btn btn-fit">Рассчитать объект</a>
</div>