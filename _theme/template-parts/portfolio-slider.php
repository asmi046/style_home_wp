<div class="slider">
    <div class="swiper portfolio_swiper_big portfolio_slider_<? echo $args['index']?>">
        <div class="swiper-wrapper">
            <?php 
                $i = 1;
                foreach ($args['photo'] as $elem) {
            ?>
                <div class="swiper-slide">
                    <img src="<? echo get_template_directory_uri()."/img/portfolio/".$args['folder']."/".$elem?>" alt="Выполненная работа: <? echo $args['name']?> фото <? echo $i?>" />
                </div>
            <?    
                $i++;
                }
            ?>
            
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <div thumbsSlider="" class="swiper portfolio_swiper_min portfolio_slider_prewew_<? echo $args['index']?>">
        <div class="swiper-wrapper">
            <?php 
                $i = 1;
                foreach ($args['photo'] as $elem) {
            ?>
                <div class="swiper-slide">
                    <img src="<? echo get_template_directory_uri()."/img/portfolio/".$args['folder']."/".$elem?>" alt="Выполненная работа: <? echo $args['name']?> фото <? echo $i?>" />
                </div>
            <?    
                $i++;   
                }
            ?>
        </div>
    </div>
</div>

  <script>
    var swiper_pr_<? echo $args['index']?> = new Swiper(".portfolio_slider_prewew_<? echo $args['index']?>", {
      spaceBetween: 10,
      slidesPerView: 4,
      freeMode: true,
      watchSlidesProgress: true,
    });
    var swiper<? echo $args['index']?> = new Swiper(".portfolio_slider_<? echo $args['index']?>", {
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      thumbs: {
        swiper: swiper_pr_<? echo $args['index']?>,
      },
    });
  </script>