<section class="footer">
    <div class="container flex between">
    <div class="item-footer ">
      <div class="title-footer-"><h6>Nous contacter</h6></div>
      <div class="content-text-footer ">
        <?php if($about): ?>
        T 1: <a href="tel:<?php echo e($about->telephone1); ?>"><?php echo e($about->telephone1); ?></a>
        <?php endif; ?>
        <br>
        <?php if($about): ?>
        <?php if($about->telephone2): ?>
        T 2: <a href="tel:<?php echo e($about->telephone2); ?>"><?php echo e($about->telephone2); ?></a>
        <?php endif; ?>
        <?php endif; ?>

      <?php if($about): ?>
      <?php if(!$about->telephone2 && !$about->telephone1): ?>
      T : <a href="tel:04 73 31 23 97">04 73 31 23 97</a>
      
      <?php endif; ?>
      <?php else: ?>
      T : <a href="tel:04 73 31 23 97">04 73 31 23 97</a>

      <?php endif; ?>
      
      <p>Du lundi au vendredi <br>De 09h à 12h et de 14h à 18h</p>
      <a href=" <?php echo e(route('contact')); ?> ">Contactez-nous</a>
      </div>
    </div>
    
    <?php if($about): ?>
    <div class="item-footer ">
      <div class="title-footer-"><h6>Bureau</h6></div>
      <div class="content-text-footer ">
      <p> <?php echo $about->bureau; ?> </p>
      </div>
      <div class="title-footer-"><h6>Dépôt</h6></div>
      <div class="content-text-footer ">
      <p><?php echo $about->depot; ?> </p>
      </div>
    </div>
    <?php else: ?>
    <div class="item-footer ">
      <div class="title-footer-"><h6>Bureau</h6></div>
      <div class="content-text-footer ">
      <p>1 rue de l'Eminée 63000 Clermont-Ferrand</p>
      </div>
      <div class="title-footer-"><h6>Dépôt</h6></div>
      <div class="content-text-footer ">
      <p>7 route du Cendre 63800 Cournon d'Auvergne</p>
      </div>
    </div>
    <?php endif; ?>

    <div class="item-footer ">
      <div class="title-footer-"><h6>Suivez-nous</h6></div>
      <div class="content-text-footer ">

        <?php if($about): ?>
        <?php if($about->linkedin): ?>
          <a href="<?php echo e($about->linkedin); ?>" target="_blank"><img src="<?php echo e(asset('front-end/assets/img/hou.png')); ?>" alt=""></a>
          <?php else: ?>
          <a href="#" target="_blank"><img src="<?php echo e(asset('front-end/assets/img/hou.png')); ?>" alt=""></a>
        <?php endif; ?>

        <?php if($about->instagram): ?>
          <a href="<?php echo e($about->instagram); ?>" target="_blank"><img src="<?php echo e(asset('front-end/assets/img/insta.png')); ?>" alt=""></a>
          <?php else: ?>
          <a href="https://instagram.com" target="_blank"><img src="<?php echo e(asset('front-end/assets/img/insta.png')); ?>" alt=""></a>
        <?php endif; ?>

        <?php if($about->facebbok): ?>
          <a href=" <?php echo e($about->facebook); ?>" target="_blank"><img src="<?php echo e(asset('front-end/assets/img/face.png')); ?>" alt=""></a>
          <?php else: ?>
          <a href="https://www.facebook.com/Batipro63/" target="_blank"><img src="<?php echo e(asset('front-end/assets/img/face.png')); ?>" alt=""></a>
        <?php endif; ?>

        <?php if($about->twitter): ?>
          <a href=" <?php echo e($about->twitter); ?>" target="_blank"><img src="<?php echo e(asset('front-end/assets/img/twit.png')); ?>" alt=""></a>
          <?php else: ?>
          <a href="https://twitter.com" target="_blank"><img src="<?php echo e(asset('front-end/assets/img/twit.png')); ?>" alt=""></a>
          <?php endif; ?>  
          
          <?php else: ?>

          <a href="#" target="_blank"><img src="<?php echo e(asset('front-end/assets/img/hou.png')); ?>" alt=""></a>

          <a href="https://instagram.com" target="_blank"><img src="<?php echo e(asset('front-end/assets/img/insta.png')); ?>" alt=""></a>

          <a href="https://www.facebook.com/Batipro63/" target="_blank"><img src="<?php echo e(asset('front-end/assets/img/face.png')); ?>" alt=""></a>

          <a href="https://twitter.com" target="_blank"><img src="<?php echo e(asset('front-end/assets/img/twit.png')); ?>" alt=""></a>

        <?php endif; ?>
        
      </div>
    </div>
  </div>
  </section>
  <section class="copyright">
    <div class="container flex space-around">
      <span>© <?php echo e(date('Y').' '.env('APP_NAME')); ?></span>
      <a href="<?php echo e(route('mention')); ?>">Mentions légales</a>
      <a href="<?php echo e(route('politique')); ?>"> Politique de confidentialité</a>
    </div>
  </section>
  </div>
  
  <section id="nav-off">
    <div class="infobul">
      <ul class="icon" style="">
        <li></li>
        <li></li>
        <li></li>
      </ul>
      <i class="icon" style="display: none;"></i>
      <ul class="list">
        <li class="call">
          <h6>Appelez au</h6>
          <p>04 73 31 23 97</p>
        </li>
        <li class="mail">
          <h6>Envoyez</h6>
          <p><a href="#">Un message</a></p>
        </li>
        <li class="tchat">
          <h6>Tchatez</h6>
          <p><a href="#">Sur messenger</a></p>
        </li>
        <li class="pdf">
          <h6>Consultez</h6>
          <p><a href="#">La brochure</a></p>
        </li>
      </ul>
    </div>
</section>
  
  <script type="text/javascript">
    $('.list').click(function(){
      $('.infobul').toggleClass('open')
    })
    $('i.icon').click(function(){
      $('.infobul').removeClass('open')
    })
  
    jQuery( document ).ready(function(){
  
                    setTimeout(function(){ jQuery('#loading').fadeOut(1000); }, 2000);
  
  });
  $('.content-btn-responsive').click(function(){
                      $(this).parent().toggleClass("active-menu-responsive")
                    })
  </script>
  <?php /**PATH /home/styve/dev/laravel/batipro/resources/views/front-end/partials/footer.blade.php ENDPATH**/ ?>