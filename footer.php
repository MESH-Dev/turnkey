

<footer class="site-footer">
   <?php if (!is_front_page()){ ?>
      <div class="cards fixed left">
         <p class="address"><span class="line-one">311 Washington Street, West</span><span class="divider"> | </span><span class="line-two">Charleston, WV  25302</span></p>
         <p class="info-item"><span class="line-one"><a href="tel:681-265-9468">681-265-9468</a></span><span class="divider"> | </span><span class="line-two"><a href="mailto:contact@elkcityrecords.com">contact@elkcityrecords.com</a></span></p>
      </div>
      <div class="cards fixed right">
         <div class="footer social">
            <?php
            if (have_rows('social_nav', 'options')):
               while (have_rows('social_nav', 'options')): the_row();
                  $icon = get_sub_field('social_icon');
                  $url = get_sub_field('social_url');
                  ?>
                  <a href="<?php echo $url ?>" target="_blank"><i class="<?php echo $icon ?>"></i></a>
               <?php endwhile;
            endif;
            ?>
           <!-- <a href="https://www.facebook.com/elkcityrecords/" target="_blank"><i class="fa fa-lg fa-facebook-square"></i></a>
           <a href="https://www.instagram.com/ecrecords/" target="_blank"><i class="fa fa-lg fa-instagram"></i></a>
           <a href="https://www.yelp.com/biz/elk-city-records-charleston" target="_blank"><i class="fa fa-lg fa-yelp"></i></a> -->
         </div>
        <p><span class="mesh info-item">Website by <a href="http://meshfresh.com" target="_blank">MESH</a></span></p>
      </div>
   <?php }; ?>
</footer>

<?php wp_footer(); ?>
