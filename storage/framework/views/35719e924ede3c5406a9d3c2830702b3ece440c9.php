<?php $__env->startSection('css_js'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('/front-end/assets/slick/slick-theme.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/front-end/assets/slick/slick.css')); ?>">
        
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php if($about): ?>
<?php if($about->imageEnt): ?>
<section class="container-banner" style="background-image:url(<?php echo e(asset('/app/apropos/'.$about->imageEnt)); ?>)">
    
<?php else: ?>
<section class="container-banner" style="background-image:url(<?php echo e(asset('front-end/assets/img/pano1.jpg')); ?>)">
    
<?php endif; ?>
<div class="container">
    <div class="inner-container">
        <div class="content-title-banner ">
          <h1>A propos</h1>
          <p > <?php echo $about->descriptionEnt; ?> </p>
        </div>
    </div>
  </div>
</section>
<?php else: ?>
<section class="container-banner" style="background-image:url(<?php echo e(asset('front-end/assets/img/pano1.jpg')); ?>)">
  <div class="container">
    <div class="inner-container">
        <div class="content-title-banner">
          <h1>A propos</h1>
          <p class="text-justify">A l’origine PME familiale, le Groupe Batipro est aujourd’hui un groupe majeur de la conception et construction de maison sur-mesure dans la région Rhône Alpes Auvergne.</p>
        </div>
    </div>
  </div>
</section>
<?php endif; ?>


<section class="container-about-us">
  

  <?php if($about): ?>
  <div class="container flex between">
    <div class="left-bloc-text">
      <div class="content-text-up">
        <div class="header-title">
          <h3 class="green"><?php echo e($about->titre); ?></h3>
          <h4><?php echo $about->resume; ?></h4>
        </div>
        <div class="content-bloc-description add-square">
          <p class="jost-style jost-style-100 text-justify">
            <?php echo $about->description; ?>

          <div class="content-number-about-us green"><?php echo e($about->anneeCreat); ?></div>
          
        </div>
      </div>
    </div>
    <div class="content-img-about-us">
      <div class="inner-img-wrapper">
        <div id="content-innner-slider">
          <img src="<?php echo asset('/app/apropos/'.$about->imageB1); ?>" alt="">
          <img src="<?php echo asset('/app/apropos/'.$about->imageB2); ?>" alt="">
        </div>
        <div class="content-btn-navigation">
          <div class="prev ">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 34.075 34.075" style="enable-background:new 0 0 34.075 34.075;" xml:space="preserve">
                    <path style="fill:#010002;" d="M24.57,34.075c-0.505,0-1.011-0.191-1.396-0.577L8.11,18.432c-0.771-0.771-0.771-2.019,0-2.79
                        L23.174,0.578c0.771-0.771,2.02-0.771,2.791,0s0.771,2.02,0,2.79l-13.67,13.669l13.67,13.669c0.771,0.771,0.771,2.021,0,2.792
                        C25.58,33.883,25.075,34.075,24.57,34.075z"/>
            </svg>
          </div>
          <div class="next ">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"  viewBox="0 0 34.1 34.1" style="enable-background:new 0 0 34.1 34.1;" xml:space="preserve">

                      <path class="st0" d="M9.1,0.2c0.5,0,1,0.2,1.4,0.5l15.4,14.7c0.8,0.8,0.8,2,0.1,2.8L11.3,33.6c-0.8,0.8-2,0.8-2.8,0.1
                        s-0.8-2-0.1-2.8l13.4-14L7.8,3.6C7,2.8,7,1.6,7.7,0.8C8.1,0.4,8.6,0.2,9.1,0.2z"/>

            </svg>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php else: ?>
  <div class="container flex between">
    <div class="left-bloc-text">
      <div class="content-text-up">
        <div class="header-title">
          <h3 class="green">historique</h3>
          <h4>C'est l'histoire d'une petite entreprise que devient grande</h4>
        </div>
        <div class="content-bloc-description add-square">
          <p class="jost-style jost-style-100">
            <?php if($about): ?>
            <?php echo substr($about->description,0,250).'.'; ?>

            <?php else: ?>
            Création de la société Batipro63 Entreprise Générale du Bâtiment par Ahmet Saril et son fils Hakan Saril dans la commune des Matres de Veyre (63). Ils réalisent les travaux d'amélioration de l'habitat et de maçonnerie sur la commune et celle avoisinante.</p>
            <?php endif; ?>
          <div class="content-number-about-us green">2008</div>
        </div>
      </div>
    </div>
    <div class="content-img-about-us">
      <div class="inner-img-wrapper">
        <div id="content-innner-slider">
          <img src="<?php echo e(asset('/front-end/assets/img/about-us.jpg')); ?>" alt="">
          <img src="<?php echo e(asset('/front-end/assets/img/about-us.jpg')); ?>" alt="">
        </div>
        <div class="content-btn-navigation">
          <div class="prev ">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 34.075 34.075" style="enable-background:new 0 0 34.075 34.075;" xml:space="preserve">
                    <path style="fill:#010002;" d="M24.57,34.075c-0.505,0-1.011-0.191-1.396-0.577L8.11,18.432c-0.771-0.771-0.771-2.019,0-2.79
                        L23.174,0.578c0.771-0.771,2.02-0.771,2.791,0s0.771,2.02,0,2.79l-13.67,13.669l13.67,13.669c0.771,0.771,0.771,2.021,0,2.792
                        C25.58,33.883,25.075,34.075,24.57,34.075z"/>
            </svg>
          </div>
          <div class="next ">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"  viewBox="0 0 34.1 34.1" style="enable-background:new 0 0 34.1 34.1;" xml:space="preserve">

                      <path class="st0" d="M9.1,0.2c0.5,0,1,0.2,1.4,0.5l15.4,14.7c0.8,0.8,0.8,2,0.1,2.8L11.3,33.6c-0.8,0.8-2,0.8-2.8,0.1
                        s-0.8-2-0.1-2.8l13.4-14L7.8,3.6C7,2.8,7,1.6,7.7,0.8C8.1,0.4,8.6,0.2,9.1,0.2z"/>

            </svg>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php endif; ?>
</section>


<?php if($about): ?>
<section class="container-experience">
  <div class="container flex">
    <div class="content-left-img ">
      <?php if($about->imageC1): ?>
      <img src="<?php echo e(asset('/app/apropos/'.$about->imageC1)); ?>" alt="">
          
      <?php else: ?>
      <img src="<?php echo e(asset('/front-end/assets/img/pano-1.jpg')); ?>" alt="">
          
      <?php endif; ?>
    </div>
      <div class="content-text-up">
        <div class="header-title">
          <h3 class="green"><?php echo e($about->titre2); ?></h3>
           
          <h4 class="text-justify">Après <?php echo $about->annee_experience; ?> ans d'expérience, quelques chiffres clés</h4>
         
        </div>
        <div class="content-bloc-description add-square">
          <p class="jost-style jost-style-100 text-justify"><?php echo $about->description2; ?></p>
        </div>
      </div>
      <div class="content-key-figures flex">
        <div class="content-key-figure-wrapper flex">
          <div class="content-number"><span class="spin">
           
            <div class="content-number"><span class="spin"><?php echo e($about->nombre3); ?></span></div>


          </span></div>
          <div class="content-text-key-figure ">
            <h3><?php echo e($about->titre3); ?></h3>
            <p class="text-justify"><?php echo $about->description3; ?></p>
          </div>
        </div>
        <div class="content-key-figure-wrapper flex">
          <div class="content-number">+<span class="spin"><?php echo e($about->nombre4); ?></span></div>
          <div class="content-text-key-figure ">
            <h3><?php echo e($about->titre4); ?></h3>
            <p class="text-justify"><?php echo $about->description4; ?></p>
          </div>
        </div>
      </div>
  </div>
</section>
<?php else: ?>
<section class="container-experience">
  <div class="container flex">
    <div class="content-left-img ">
      <img src="<?php echo e(asset('/front-end/assets/img/pano-1.jpg')); ?>" alt="">
    </div>
      <div class="content-text-up">
        <div class="header-title">
          <h3 class="green">Bilan</h3>
            <?php if($about): ?>
          <h4>Après <?php echo e($about->annee_experience); ?> ans d'expérience, quelques chiffres clés</h4>
          <?php else: ?>
          <h4>Après 11 ans d'expérience, quelques chiffres clés</h4>
          <?php endif; ?>
        </div>
        <div class="content-bloc-description add-square">
          <p class="jost-style jost-style-100">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna .</p>
        </div>
      </div>
      <div class="content-key-figures flex">
        <div class="content-key-figure-wrapper flex">
          <div class="content-number"><span class="spin">
            <?php if($about): ?>
          <h4><?php echo e($about->nb_salarie); ?></h4>
          <?php else: ?>
          60
          <?php endif; ?>  
          </span></div>
          <div class="content-text-key-figure ">
            <h3>Salariés & collaborateurs</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
          </div>
        </div>
        <div class="content-key-figure-wrapper flex">
          <div class="content-number">+<span class="spin">6</span></div>
          <div class="content-text-key-figure ">
            <h3>Salariés & collaborateurs</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
          </div>
        </div>
      </div>
  </div>
</section>
<?php endif; ?>





<section id="mot-directeur">
  <div class="container ">
    <div class="content-text-dorecteur">
        <div class="content-quote flex">
          <img src="<?php echo e(asset('/front-end/assets/img/quote.png')); ?>" alt="">
          <img src="<?php echo e(asset('/front-end/assets/img/quote.png')); ?>" alt="">
        </div>

        <?php if($about): ?>
            <p class="text-justify">
              <?php echo e($about->description5); ?>

            </p>
        <?php else: ?>
      <p>Depuis 2008, notre métier c'est contruction de maison individuelle, mais aussi l'extension et la rénovation de maison complète. Un savoir faire familial et une passion transmise de père en fils.</p>
            
        <?php endif; ?>

        <div class="content-dir flex align-center">
        <div class="content-img-dir " >
        <?php if($about): ?>
          <?php if($about->image): ?>
          <img src="<?php echo e(asset('app/membre/'.$about->image)); ?>" alt="" style="border-radius: 100%"> 
              
          <?php else: ?>
          <img src="<?php echo e(asset('front-end/assets/img/hakan-saril.png')); ?>" alt="">
              
          <?php endif; ?>
        <?php else: ?>
          <img src="<?php echo e(asset('front-end/assets/img/hakan-saril.png')); ?>" alt="">

        <?php endif; ?>
        
          
        </div>
        <div class="content-text">
        <?php if($about): ?>
          <?php if($about->dg): ?>
          <h3 class="green"><?php echo e($about->dg); ?></h3>
              
          <?php else: ?>
          <h3 class="green">Hakan Saril</h3>
              
          <?php endif; ?>
        <?php else: ?>
          <h3 class="green">Hakan Saril</h3>

        <?php endif; ?>
          <p>Directeur Général</p>
        </div>
      </div>
    </div>
  </div>
</section>



<section id="qualite">
  <div class="container">
    <div class="inner-wrapper flex">
      <div class="item-quality">
        <div class="img-quality">
          <img src="<?php echo e(asset('/front-end/assets/img/innovation.jpg')); ?>" alt="">
        </div>
        <div class="content-text-quality">
          <h3>Innovations</h3>
          <p>Proposer plus de solutions, plus de produits, plus de technologies</p>
        </div>
      </div>
      <div class="item-quality">
        <div class="img-quality">
          <img src="<?php echo e(asset('/front-end/assets/img/solution-verte.jpg')); ?>" alt="">
        </div>
        <div class="content-text-quality">
          <h3>Solution verte</h3>
          <p>Ne plus gaspiller, proposer un chantier propre, revaloriser les déchets de chantier</p>
        </div>
      </div>
      <div class="item-quality">
        <div class="img-quality">
          <img src="<?php echo e(asset('/front-end/assets/img/retour-client.jpg')); ?>" alt="">
        </div>
        <div class="content-text-quality">
          <h3>Retour client</h3>
          <p>99% de nos clients nous recommandent</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="container-team">
  <div class="container ">
    <?php if($about): ?>
    <div class="inner-sideleft">
      <div class="content-text-up">
        <div class="header-title">
          <h3 class="green"><?php echo e($about->titre6); ?></h3>
          <h4> <?php echo e($about->resume6); ?> </h4>
        </div>
        <div class="content-bloc-description add-square">
          <p class="jost-style jost-style-100 text-justify"><?php echo e($about->description6); ?></p>
        </div>
      </div>
    </div>
    <?php else: ?>
    <div class="inner-sideleft">
      <div class="content-text-up">
        <div class="header-title">
          <h3 class="green">Bilan</h3>
          <h4>Une équipe d'experts, jeunes et dynamiques</h4>
        </div>
        <div class="content-bloc-description add-square">
          <p class="jost-style jost-style-100">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna .</p>
        </div>
      </div>
    </div>
    <?php endif; ?>
    

    <?php if(sizeOf($membres)==0): ?>
        <div class="inner-sideleft">
          <h4>Aucun membre enregistré pour le moment.</h4>
        </div>
        <?php endif; ?>

    <div class="content-wrap-team">
      <div id="inner-team">

        <?php if(sizeOf($membres)==0): ?>
        
        <div class="single-team-wrapper">
          <div class="inner-single-team">
            <div class="img-team">
             <span></span>
             <span></span>
             <span></span>
             <span></span>
            </div>
              
          </div>
        </div>
        <div class="single-team-wrapper">
          <div class="inner-single-team">
            <div class="img-team">
             <span></span>
             <span></span>
             <span></span>
             <span></span>
            </div>
              
          </div>
        </div>
        <div class="single-team-wrapper">
          <div class="inner-single-team">
            <div class="img-team">
             <span></span>
             <span></span>
             <span></span>
             <span></span>
            </div>
              
          </div>
        </div>
        <div class="single-team-wrapper">
          <div class="inner-single-team">
            <div class="img-team">
             <span></span>
             <span></span>
             <span></span>
             <span></span>
            </div> 
              
          </div>
        </div>
        <div class="single-team-wrapper">
          <div class="inner-single-team">
            <div class="img-team">
             <span></span>
             <span></span>
             <span></span>
             <span></span>
            </div>
              
          </div>
        </div>
        <div class="single-team-wrapper">
          <div class="inner-single-team">
            <div class="img-team">
             <span></span>
             <span></span>
             <span></span>
             <span></span>
            </div>
              
          </div>
        </div>
        <div class="single-team-wrapper">
          <div class="inner-single-team">
            <div class="img-team">
             <span></span>
             <span></span>
             <span></span>
             <span></span>
            </div>
              
          </div>
        </div>
        <?php else: ?>
        <?php $__currentLoopData = $membres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $membre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="single-team-wrapper">
          <div class="inner-single-team" style="background: url(<?php echo e(asset('/app/membre/'.$membre->image)); ?>)">
            <div class="img-team"  style="background: url(<?php echo e(asset('/app/membre/'.$membre->image)); ?>)">
             <span></span>
             <span></span>
             <span></span>
             <span></span>
            </div>
              <div class="content">
                <h2> <?php echo e($membre->nom.' '.$membre->prenom); ?></h2>
                <h2><?php echo e($membre->description); ?></h2>
    
              </div>
          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
          
      </div>
      <div class="content-navigation">
          <div class="prev"><img src="<?php echo e(asset('/front-end/assets/img/arrow.png')); ?>" alt=""></div>
          <div class="next"><img src="<?php echo e(asset('/front-end/assets/img/right-arrow.png')); ?>" alt=""></div>
      </div>
    </div>
  </div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('/front-end/assets/slick/slick.min.js')); ?>"></script>
<script type="text/javascript">
  $('#content-innner-slider').slick({
    prevArrow: $('#inner-team .prev'),
    nextArrow: $('#inner-team .next'),
  });
  $('#inner-team').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 6,
    slidesToScroll: 1,
    prevArrow: $('.inner-img-wrapper .prev'),
    nextArrow: $('.inner-img-wrapper .next'),
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 6,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front-end/defaut/base', ['title' => 'A propors de Batipro ','body_class' => 'about-us-page'] , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/styve/app/laravel/batipro/resources/views/front-end/about-us.blade.php ENDPATH**/ ?>