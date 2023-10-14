<section id="section-text-blk" class="section-text-blk">
    <div class="_container">

        <?php
            $content = get_the_content();
            $m_h2 = substr($content, 0, strpos($content, "</h2>"));

            $content = str_replace($m_h2, "", $content);
        ?>

        <h2><?echo $m_h2;?></h2>
        <div class="page_text_blk">
            <div class="text_blk">
                <div id="textBlkSh" class="mainText">
                    <? echo $content; ?>
                </div>

                <div class="hide_show_panel">
                    <a id="showTxtBtn" class="btn" href="#">Читать далее</a>
                </div>
            </div>

            <div class="cta">
                <?php get_template_part('template-parts/text-cta-blk');?>
            </div>
        </div>
    </div>
</section>