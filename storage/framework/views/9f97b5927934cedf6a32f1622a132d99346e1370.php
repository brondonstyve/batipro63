    <section id="loading">
        <span></span>
    </section>
    <div class="container-logo-navigation top-fixed">
        <div class="logo">
            <a href="<?php echo e(route('home-front')); ?>"><img src="<?php echo e(asset('/front-end/assets/img/logo-vertical.png')); ?>" alt=""></a>
        </div>
        <div class="container-navigation">
            <ul>
                <li><a class="<?php echo e(Route::currentRouteName() == 'aboutus' ? 'active' : ''); ?>" href="<?php echo e(route('aboutus')); ?>">A propos</a></li>
                <li><a class="<?php if(in_array(Route::currentRouteName(), ['service-front','mc','lc','mg','mo'])): ?>   active <?php endif; ?>"  href="<?php echo e(route('service-front')); ?>">Services</a></li>
                <li><a class="<?php echo e(Route::currentRouteName() == 'projet-front' ? 'active' : ''); ?>"   href=" <?php echo e(route('projet-front')); ?> ">Projets</a></li>
                <li><a class="<?php echo e(Route::currentRouteName() == 'terrain-front' ? 'active' : ''); ?>"  href="<?php echo e(route('terrain-front')); ?>">Terrains</a></li>
                <li><a class="<?php echo e(Route::currentRouteName() == 'maisonVirtuelle' ? 'active' : ''); ?>" href="<?php echo e(route('maisonVirtuelle')); ?>">Maisons virtuelles</a></li>
                <li><a class="<?php if(in_array(Route::currentRouteName(), ['actualite-front','detailActualite'])): ?>   active <?php endif; ?> "  href=" <?php echo e(route('actualite-front')); ?> ">Actualités</a></li>
                <li><a class="<?php echo e(Route::currentRouteName() == 'brochure' ? 'active' : ''); ?>"   href="<?php echo e(route('brochure')); ?>">Brochure</a></li>
                <li><a class="<?php echo e(Route::currentRouteName() == 'temoignage' ? 'active' : ''); ?>"   href="<?php echo e(route('temoignage')); ?>">Vidéos</a></li>
            </ul>
        </div>
    </div>


     <div class="container-logo-navigation top-fixed" id="responsive-mode" style="display:none">
        <div class="logo">
           <a href="./"><img src="<?php echo e(asset('/front-end/assets/img/logo.png')); ?>" alt=""></a>
        </div>
        <div class="container-navigation">
                 <div class="content-btn-responsive">
                     <span class="bar"></span>
                     <span class="bar"></span>
                     <span class="bar"></span>
                 </div>
                 <ul>
                    <li><a class="<?php echo e(Route::currentRouteName() == 'aboutus' ? 'active' : ''); ?>" href="<?php echo e(route('aboutus')); ?>">A propos</a></li>
                    <li><a class="<?php if(in_array(Route::currentRouteName(), ['service-front','mc','lc','mg','mo'])): ?>   active <?php endif; ?>"  href="<?php echo e(route('service-front')); ?>">Services</a></li>
                    <li><a class="<?php echo e(Route::currentRouteName() == 'projet-front' ? 'active' : ''); ?>"   href=" <?php echo e(route('projet-front')); ?> ">Projets</a></li>
                    <li><a class="<?php echo e(Route::currentRouteName() == 'terrain-front' ? 'active' : ''); ?>"  href="<?php echo e(route('terrain-front')); ?>">Terrains</a></li>
                    <li><a class="<?php echo e(Route::currentRouteName() == 'maisonVirtuelle' ? 'active' : ''); ?>" href="<?php echo e(route('maisonVirtuelle')); ?>">Maisons virtuelles</a></li>
                    <li><a class="<?php if(in_array(Route::currentRouteName(), ['actualite-front','detailActualite'])): ?>   active <?php endif; ?> "  href=" <?php echo e(route('actualite-front')); ?> ">Actualités</a></li>
                    <li><a class="<?php echo e(Route::currentRouteName() == 'brochure' ? 'active' : ''); ?>"   href="<?php echo e(route('brochure')); ?>">Brochure</a></li>
                    <li><a class="<?php echo e(Route::currentRouteName() == 'temoignage' ? 'active' : ''); ?>"   href="<?php echo e(route('temoignage')); ?>">Vidéos</a></li>
                </ul>
        </div>
     </div>
<?php /**PATH /home/styve/dev/laravel/batipro/resources/views/front-end/partials/header.blade.php ENDPATH**/ ?>