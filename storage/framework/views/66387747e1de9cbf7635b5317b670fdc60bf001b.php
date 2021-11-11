<?php $__env->startSection('css_js'); ?>
    
    <link rel="stylesheet" href="<?php echo e(asset('/front-end/assets/masterslider/style/masterslider.css')); ?>" />
    <!-- MasterSlider default skin -->
    <link rel="stylesheet" href="<?php echo e(asset('/front-end/assets/masterslider/skins/default/style.css')); ?>" />
    <script src="<?php echo e(asset('/front-end/assets/masterslider/masterslider.min.js')); ?>"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="container-banner line-plus line-3">
        <!-- masterslider -->
        <div class="master-slider ms-skin-default" id="masterslider">
        <!-- new slide -->
        <div class="ms-slide">
            <!-- slide background -->
            <?php if($infos): ?>
                <?php if($infos->imageMc): ?>
            <img src="<?php echo e(asset('/app/accueil/'.$infos->imageMc)); ?>" data-src="<?php echo e(asset('/app/accueil/'.$infos->imageMc)); ?>" alt="lorem ipsum dolor sit"/>
                    
                <?php else: ?>
            <img src="<?php echo e(asset('/front-end/assets/masterslider/style/blank.gif')); ?>" data-src="<?php echo e(asset('/front-end/assets/img/pano1.jpg')); ?>" alt="lorem ipsum dolor sit"/>
                    
                <?php endif; ?>
            <?php else: ?>
            <img src="<?php echo e(asset('/front-end/assets/masterslider/style/blank.gif')); ?>" data-src="<?php echo e(asset('/front-end/assets/img/pano1.jpg')); ?>" alt="lorem ipsum dolor sit"/>
                
            <?php endif; ?>
            <!-- slide text layer -->
            <div class="ms-thumb">
                <a href=" <?php echo e(route('mc')); ?> ">
                    <div class="content-thumbs ">
                        <h3>Maison</h3>
                        <p>Contemporaine</p>
                    </div>
                </a>
                
            </div>
        </div>
        <!-- end of slide -->
        <!-- new slide -->
        <div class="ms-slide">
            <!-- slide background -->
            <?php if($infos): ?>
            <?php if($infos->imageMc): ?>
                <img src="<?php echo e(asset('/app/accueil/'.$infos->imageLc)); ?>" data-src="<?php echo e(asset('/app/accueil/'.$infos->imageLc)); ?>" alt="lorem ipsum dolor sit"/>
                        
                    <?php else: ?>
                <img src="<?php echo e(asset('/front-end/assets/masterslider/style/blank.gif')); ?>" data-src="<?php echo e(asset('/front-end/assets/img/pano1.jpg')); ?>" alt="lorem ipsum dolor sit"/>
                        
                    <?php endif; ?>
                <?php else: ?>
                <img src="<?php echo e(asset('/front-end/assets/masterslider/style/blank.gif')); ?>" data-src="<?php echo e(asset('/front-end/assets/img/pano1.jpg')); ?>" alt="lorem ipsum dolor sit"/>
            
            <?php endif; ?>
            <!-- slide text layer -->
            <div class="ms-thumb">
                <a href=" <?php echo e(route('lc')); ?> ">
                    <div class="content-thumbs ">
                    <h3>Logement</h3>
                    <p>Collectif</p>
                </div>
            </a>

            </div>
        </div>
        <!-- end of slide -->
        <!-- new slide -->
        <div class="ms-slide">
            <!-- slide background -->
            <?php if($infos): ?>
                    <?php if($infos->imageMc): ?>
                <img src="<?php echo e(asset('/app/accueil/'.$infos->imageMg)); ?>" data-src="<?php echo e(asset('/app/accueil/'.$infos->imageMg)); ?>" alt="lorem ipsum dolor sit"/>
                        
                    <?php else: ?>
                <img src="<?php echo e(asset('/front-end/assets/masterslider/style/blank.gif')); ?>" data-src="<?php echo e(asset('/front-end/assets/img/pano1.jpg')); ?>" alt="lorem ipsum dolor sit"/>
                        
                    <?php endif; ?>
                    <?php else: ?>
            <img src="<?php echo e(asset('/front-end/assets/masterslider/style/blank.gif')); ?>" data-src="<?php echo e(asset('/front-end/assets/img/pano1.jpg')); ?>" alt="lorem ipsum dolor sit"/>
            
        <?php endif; ?>
            <!-- slide text layer -->
            <div class="ms-thumb">
                <a href=" <?php echo e(route('mg')); ?> ">
                    <div class="content-thumbs ">
                    <h3>Maçonnerie</h3>
                    <p>Générale</p>
                </div>
            </a>
        </div>
        </div>
        <!-- end of slide -->
        </div>
        <!-- end of masterslider -->
    </section>

    <?php if($infos): ?>
        

    <section class="container-why line-plus" id="why">
        <div class="container flex ">
        <div class="left-bloc-text">
            <div class="header-title">
                <h3 class="green"><?php echo e($infos->titreVert1); ?></h3>
                <h4><?php echo e($infos->titre1); ?></h4>
            </div>
            <div class="content-bloc-description add-square">
                <p class="head green">
                    <?php echo e($infos->slogan1); ?>

                </p>
                <p class="jost-style jost-style-100">
                    <?php echo e($infos->resume1); ?>

                </p>
                <div class="content-exp flex align-center">
                    <div class="numb bebas"> 
                    <?php if($about): ?>
                        <?php echo e(date('Y')-$about->anneeCreat); ?>

                    <?php else: ?>
                    <?php echo e(date('Y')-2008); ?>


                    <?php endif; ?>    
                    </div>
                    <div class="content-text-">
                    <p class="jost-style jost-style-100">En construction</p>
                    <p class="caveat-style">ans d'expérience</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="right-bloc-img ">
            <?php if($infos->image1): ?>
            <img src="<?php echo e(asset('/app/accueil/'.$infos->image1)); ?>" alt="">
                
            <?php else: ?>
            <img src="<?php echo e(asset('/front-end/assets/img/why.jpg')); ?>" alt="">
                
            <?php endif; ?>
        </div>
        </div>
    </section>


    <?php else: ?>
        <section class="container-why line-plus" id="why">
            <div class="container flex ">
            <div class="left-bloc-text">
                <div class="header-title">
                    <h3 class="green">Pourquoi BATIPRO ?</h3>
                    <h4>Ici nous concevons votre maison sur mesure</h4>
                </div>
                <div class="content-bloc-description add-square">
                    <p class="head green">Notre métier la construction</p>
                    <p class="jost-style jost-style-100">Fort d’une expérience de plus de 10 années Batipro a dévéloppé pour votre futur villa un concept novateur alliant design architectural et technologies odernes, afin de répondre au mieux à vos atentes d’élégance et de fonctionnalités</p>
                    <p  class="jost-style jost-style-100">Votre projet est unique, nous vous accompagnons tout au long de la réalisation grâce à notre équipe réactive et à l’écoute.</p>
                    <div class="content-exp flex align-center">
                        <div class="numb bebas">11</div>
                        <div class="content-text-">
                        <p class="jost-style jost-style-100">En construction</p>
                        <p class="caveat-style">ans d'expérience</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-bloc-img ">
                <img src="<?php echo e(asset('/front-end/assets/img/why.jpg')); ?>" alt="">
            </div>
            </div>
        </section>
    <?php endif; ?>
   
    <div class="content-separator after-white"></div>
                <section class="container-projects line-plus line-2" >
                    <div class="container">
                        <?php if($infos): ?>
                        <div class="content-text-up">
                            <div class="header-title">
                                <h3 class="green"> <?php echo e($infos->titreVert2); ?> </h3>
                                <h4><?php echo e($infos->titre2); ?> </h4>
                            </div>
                            <div class="content-bloc-description add-square" style="max-width: 60%;text-align: justify; ">
                                <p class="head green"><?php echo e($infos->slogan2); ?></p>
                                <?php if($infos->resume2): ?>
                                <p class="jost-style jost-style-100"><?php echo e($infos->resume2); ?></p>
                                    
                                <?php else: ?>
                                <p class="jost-style jost-style-100">Fort Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php else: ?>
                        <div class="content-text-up">
                            <div class="header-title">
                                <h3 class="green">Nos réalisations</h3>
                                <h4>Votre projet est aussi le nôtre</h4>
                            </div>
                            <div class="content-bloc-description add-square" style="max-width: 60%;text-align: justify; ">
                                <p class="head green">Il n’y a pas de pétit projet, chaque projet est unique ...</p>
                                <p class="jost-style jost-style-100">Fort Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                        <?php endif; ?>
                        <br>
                        <br>

                            <?php if(sizeOf($projets)==0): ?>
                    <br>
                    <br>
                                    
                                        <div class="header-title">
                                        <h4>Aucun projet enregistré pour le moment.</h4>
                                        </div>
                            <?php endif; ?>
                                <div class="content-list-projects1 line-plus line-3">
                                    
                                    


                                    <div class="content-projects-wrapper1">
                                        <div id="grid" class="flex my-shuffle-container space-around">
                                          
                                        <?php $__currentLoopData = $projets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($item->service=='Maison individuelle' || $item->service=='Maison contemporaine'): ?>
                                        <div class="content-project-wrapper1 hg-height"  style="margin-bottom: -5%">
                                            <div class="project-inner">
                                              <a href="<?php echo e(route('detailProjet',encrypt($item->id))); ?>">
                                
                                            
                                              <img src="<?php echo e(asset('/app/projet/'.$item->img_principale)); ?>" style="width: 100%;height: 350px;">
                                            
                                
                                              <div class="inner-overlay">
                                                 <div class="content-overlay"> 
                                                    <div class="content-icone-plus"></div>           
                                                    <div class="title-project">
                                                       <h3> <?php echo e($item->libelle); ?> </h3>
                                                    </div>
                                                    <div class="content-title-category">
                                                      <?php if($item->service=='Maison individuelle'): ?><?php echo e('Maison contemporaine'); ?><?php else: ?><?php echo e($item->service); ?><?php endif; ?>  
                                                    </div>
                                                 </div>
                                              </div>
                                        </a>
                                          </div>
                                        </div>
                                        <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        <?php $__currentLoopData = $projets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($item->service=='Logement collectif'): ?>
                                        <div class="content-project-wrapper1 hg-height"  style="margin-bottom: -5%">
                                            <div class="project-inner">
                                              <a href="<?php echo e(route('detailProjet',encrypt($item->id))); ?>">
                                
                                            
                                              <img src="<?php echo e(asset('/app/projet/'.$item->img_principale)); ?>" style="width: 100%;height: 350px;">
                                            
                                
                                              <div class="inner-overlay">
                                                 <div class="content-overlay"> 
                                                    <div class="content-icone-plus"></div>           
                                                    <div class="title-project">
                                                       <h3> <?php echo e($item->libelle); ?> </h3>
                                                    </div>
                                                    <div class="content-title-category">
                                                      <?php if($item->service=='Maison individuelle'): ?><?php echo e('Maison contemporaine'); ?><?php else: ?><?php echo e($item->service); ?><?php endif; ?>  
                                                    </div>
                                                 </div>
                                              </div>
                                        </a>
                                          </div>
                                        </div>
                                        <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        <?php $__currentLoopData = $projets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($item->service=='Maçonnerie générale'): ?>
                                        <div class="content-project-wrapper1 hg-height"  style="margin-bottom: -5%">
                                            <div class="project-inner">
                                              <a href="<?php echo e(route('detailProjet',encrypt($item->id))); ?>">
                                
                                            
                                              <img src="<?php echo e(asset('/app/projet/'.$item->img_principale)); ?>" style="width: 100%;height: 350px;">
                                            
                                
                                              <div class="inner-overlay">
                                                 <div class="content-overlay"> 
                                                    <div class="content-icone-plus"></div>           
                                                    <div class="title-project">
                                                       <h3> <?php echo e($item->libelle); ?> </h3>
                                                    </div>
                                                    <div class="content-title-category">
                                                      <?php if($item->service=='Maison individuelle'): ?><?php echo e('Maison contemporaine'); ?><?php else: ?><?php echo e($item->service); ?><?php endif; ?>  
                                                    </div>
                                                 </div>
                                              </div>
                                        </a>
                                          </div>
                                        </div>
                                        <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        
                                        
                                      </div>
                                      <div class="my-sizer-element"></div>
                                
                                    </div>

                                </div>

                                <br>
                                <br>

                                <div class="content-btn-action-">
                                    <a href=" <?php echo e(route('projet-front')); ?> "><span>voir toutes les réalisations</span></a>
                                </div>
                    </section>
                    <div class="content-separator after-black"></div>
                    <section class="container-solution line-plus" id="solution">
                    <div class="container">


        <?php if($infos): ?>
        <div class="content-text-up">
            <div class="header-title">
                <h3 class="green"> <?php echo e($infos->titreVert3); ?> </h3>
                <h4><?php echo e($infos->titre3); ?> </h4>
            </div>
            <div class="content-bloc-description add-square">
                <p class="head green"><?php echo e($infos->slogan3); ?> </p>
                <p class="jost-style jost-style-100">
                    <?php echo e($infos->resume3); ?> 
                </p>
            </div>
            <div class="content-btn-action-">
                <a href="<?php echo e(route('contact')); ?>"><span>Un projet, parlons-en !</span></a>
            </div>
            </div>
        <?php else: ?>
        <div class="content-text-up">
            <div class="header-title">
                <h3 class="green">SOLUTION CLÉ EN MAIN</h3>
                <h4>Une expertise portée par notre diversité technique</h4>
            </div>
            <div class="content-bloc-description add-square">
                <p class="head green">Batipro63, spécialiste des Maison contemporaines ...</p>
                <p class="jost-style jost-style-100">Vous propose des maisons sur mesure, personnalisables, adaptables. En collaboration avec nos architectes et dessinateurs, nous concevons vos maisons comme vous les avez imaginées.</p>
            </div>
            <div class="content-btn-action-">
                <a href="<?php echo e(route('contact')); ?>"><span>Un projet, parlons-en !</span></a>
            </div>
            </div>
        <?php endif; ?>


        <div class="content-list-plus">

            <?php if($infos): ?>
            <div class="content-plus-wrapper flex">
                <div class="item-wrapper">
                <div class="item-inner-">
                <div class="content-icon-">
                <img src="<?php echo e(asset('/app/accueil/'.$infos->petiteImage1)); ?>" alt="">
                </div>
                <div class="title-plus green"><?php echo e($infos->slogan4); ?></div>
                <p><?php echo e($infos->resume4); ?></p>
                </div>
                </div>
                <div class="item-wrapper">
                <div class="item-inner-">
                <div class="content-icon-">
                    <img src="<?php echo e(asset('/app/accueil/'.$infos->petiteImage2)); ?>" alt="">
                </div>
                <div class="title-plus green"><?php echo e($infos->slogan5); ?></div>
                <p><?php echo e($infos->resume5); ?></p>
                </div>
                </div>
                <div class="item-wrapper">
                <div class="item-inner-">
                <div class="content-icon-">
                    <img src="<?php echo e(asset('/app/accueil/'.$infos->petiteImage3)); ?>" alt="">
                </div>
                <div class="title-plus green"><?php echo e($infos->slogan6); ?></div>
                <p><?php echo e($infos->resume6); ?></p>
                </div>
                </div>
                <div class="item-wrapper">
                <div class="item-inner-">
                <div class="content-icon-">
                    <img src="<?php echo e(asset('/app/accueil/'.$infos->petiteImage4)); ?>" alt="">
                </div>
                <div class="title-plus green"><?php echo e($infos->slogan7); ?></div>
                <p><?php echo e($infos->resume7); ?></p>
                </div>
                </div>
                </div>
            <?php else: ?>
            <div class="content-plus-wrapper flex">
                <div class="item-wrapper">
                <div class="item-inner-">
                <div class="content-icon-">
                <img src="<?php echo e(asset('/front-end/assets/img/architect.png')); ?>" alt="">
                </div>
                <div class="title-plus green">Architecture</div>
                <p>Profitez de la compétence et de l’expérience de notre architecte, de l’architecture d’intérieur et de nos dessinateurs.</p>
                </div>
                </div>
                <div class="item-wrapper">
                <div class="item-inner-">
                <div class="content-icon-">
                <img src="<?php echo e(asset('/front-end/assets/img/features.png')); ?>" alt="">
                </div>
                <div class="title-plus green">customisation</div>
                <p>Vous avez la possibilité de personnaliser vos plans suivant vos besoins.</p>
                </div>
                </div>
                <div class="item-wrapper">
                <div class="item-inner-">
                <div class="content-icon-">
                <img src="<?php echo e(asset('/front-end/assets/img/budget.png')); ?>" alt="">
                </div>
                <div class="title-plus green">Adaptabilté</div>
                <p>Tous nos projets sont modifiables en fonction de votre terrain et de votre budget.</p>
                </div>
                </div>
                <div class="item-wrapper">
                <div class="item-inner-">
                <div class="content-icon-">
                <img src="<?php echo e(asset('/front-end/assets/img/certificate.png')); ?>" alt="">
                </div>
                <div class="title-plus green">Expérience</div>
                <p>Bénéficiez du savoir-faire d’une entreprise familiale qui a réalisé plus de 400 projets sur la région Auvergne.</p>
                </div>
                </div>
                </div>
            <?php endif; ?>


        



        </div>
    </div>
    </section>
    <section class="content-partner-bloc">
    <div class="container flex between">
        <div class="content-maillot">
        <img src="<?php echo e(asset('/front-end/assets/img/maillot.png')); ?>" alt="">
        </div>
        <div class="content-logo-button ">
        <div class="logo-clermont">
            <img src="<?php echo e(asset('/front-end/assets/img/clermont-foot.png')); ?>" alt="">
        </div>
        <p>​PARTENAIRE OFFICIEL DU CLERMONT FOOT 63</p>
        <div class="content-btn-action-">
            <?php if($infos): ?>
            <a href="<?php echo e(($infos)? $infos->savoir : ''); ?>"><span>En savoir +</span></a>
                
            <?php else: ?>
                
            <a href="#!" target="_blank"><span>En savoir +</span></a>
            <?php endif; ?>
        </div>
        </div>
    </div>
    </section>



    <br>
    <br>
    <br>
    <div class="header-title">
        <h3 class="green">Notre équipe</h3>
        <h4>UNE ENTREPRISE À TAILLE HUMAINE</h4>
    </div>

    <section class="content-partner-bloc1" style="min-height:10%;margin-top: 3px">

    </section>


  
    

<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>
    
<script src='https://unpkg.com/shufflejs@5'></script>
<script  src="<?php echo e(asset('/front-end/assets/js/script.js')); ?>"></script>
<script type="text/javascript">
   var slider = new MasterSlider();
   slider.setup('masterslider' , {
        width:800,    // slider standard width
        height:650,   // slider standard height
        space:5,
         fullwidth:true,
         autoplay: true,start           : 1,
       layout          : "boxed",
       loop            : true,
       shuffle         : false,
       smoothHeight    : true,
        // more slider options goes here...
        // check slider options section in documentation for more options.
   });
   // adds Arrows navigation control to the slider.
   slider.control('thumblist' , {autohide:false  , dir:"h",align:'bottom',type:'thumbs'});
    slider.control('timebar'    ,{ autohide:false, overVideo:false, align:'bottom', color:'#51bbb1' , hideUnder:3 , width:5 });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front-end/defaut/base', ['title' => 'Accueil | '] , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/styve/dev/laravel/batipro/resources/views/front-end/home.blade.php ENDPATH**/ ?>