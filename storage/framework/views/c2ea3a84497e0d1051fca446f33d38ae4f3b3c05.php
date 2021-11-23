<!doctype html>
<html lang="en">

<head>
    <title>Carousel 06</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo e(asset('/front-end/mo/css/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/front-end/mo/css/owl.theme.default.min.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('/front-end/mo/css/style.css')); ?>">
</head>

<style>
    @media  screen and (max-width:450px) {
        .btn{
            display: none;
        }
    }

    @media  screen and (max-width:600px) {
        .btn{
            display: none;
        }
    }
</style>
<body>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="heading-section mb-5">Le GROUPE BATIPRO vous accompagne dans toutes les étapes de la conception à la réalisation.</h2>
                </div>
                <div class="col-md-12">

                    <div class="featured-carousel1 owl-carousel1">

                    </div>

                    <div class="featured-carousel owl-carousel">


                        <?php if($etape): ?>
                            




                        <div class="item">
                            <div class="work-wrap d-md-flex">
                                <div class="text text-left text-lg-right p-4 px-xl-5 d-flex align-items-center ">
                                    <div class="desc w-100">
                                        <h2 class="mb-2"><?php echo e($etape->etape1); ?></h2>
                                        <h3><?php echo e($etape->titre1); ?></h3>
                                        <div class="row justify-content-end">
                                            <div class="col-xl-8 text-justify">
                                                <p>
                                                    <?php echo e($etape->description1); ?>

                                                </p>
                                            </div>
                                        </div>
                                        <p style="margin-top: 30%">
                                             <button type="button" class="btn btn-outline-dark mb-2 py-3 px-4" id="precedent1">Précédent</button>
 
                                            <button type="button" class="btn btn-outline-dark mb-2 py-3 px-4" id="suivant1">Suivant</button>
                                        </p>
                                        
                                    </div>
                                </div>
                                <div class="img order-md-last" style="background-image: url(<?php echo e(asset('/app/maison/'.$etape->image1)); ?>);"></div>

                            </div>
                        </div>

                        <div class="item">
                            <div class="work-wrap d-md-flex">
                                <div class="text text-left text-lg-right p-4 px-xl-5 d-flex align-items-center ">
                                    <div class="desc w-100">
                                        <h2 class="mb-2"><?php echo e($etape->etape2); ?></h2>
                                        <h3><?php echo e($etape->titre2); ?></h3>
                                        <div class="row justify-content-end">
                                            <div class="col-xl-8 text-justify">
                                                <p>
                                                    <?php echo e($etape->description2); ?>

                                                </p>
                                            </div>
                                        </div>
                                        <p style="margin-top: 30%">
                                            <button type="button" class="btn btn-outline-dark mb-2 py-3 px-4" id="precedent2">Précédent</button>

                                            <button type="button" class="btn btn-outline-dark mb-2 py-3 px-4" id="suivant2">Suivant</button>
                                        </p>
                                    </div>
                                </div>
                                <div class="img order-md-last" style="background-image: url(<?php echo e(asset('/app/maison/'.$etape->image2)); ?>);"></div>

                            </div>
                        </div>

                        <div class="item">
                            <div class="work-wrap d-md-flex">
                                <div class="text text-left text-lg-right p-4 px-xl-5 d-flex align-items-center ">
                                    <div class="desc w-100">
                                        <h2 class="mb-2"><?php echo e($etape->etape3); ?></h2>
                                        <h3><?php echo e($etape->titre3); ?></h3>
                                        <div class="row justify-content-end">
                                            <div class="col-xl-8 text-justify">
                                                <p>
                                                    <?php echo e($etape->description3); ?>

                                                </p>
                                            </div>
                                        </div>
                                        <p style="margin-top: 30%">
                                            <button type="button" class="btn btn-outline-dark mb-2 py-3 px-4" id="precedent3">Précédent</button>

                                            <button type="button" class="btn btn-outline-dark mb-2 py-3 px-4" id="suivant3">Suivant</button>
                                        </p>
                                    </div>
                                </div>
                                <div class="img order-md-last" style="background-image: url(<?php echo e(asset('/app/maison/'.$etape->image3)); ?>);"></div>

                            </div>
                        </div>


                        <div class="item">
                            <div class="work-wrap d-md-flex">
                                <div class="text text-left text-lg-right p-4 px-xl-5 d-flex align-items-center ">
                                    <div class="desc w-100">
                                        <h2 class="mb-2"><?php echo e($etape->etape4); ?></h2>
                                        <h3><?php echo e($etape->titre4); ?></h3>
                                        <div class="row justify-content-end">
                                            <div class="col-xl-8 text-justify">
                                                <p>
                                                    <?php echo e($etape->description4); ?>

                                                </p>
                                            </div>
                                        </div>
                                        <p style="margin-top: 30%">
                                            <button type="button" class="btn btn-outline-dark mb-2 py-3 px-4" id="precedent4">Précédent</button>

                                            <button type="button" class="btn btn-outline-dark mb-2 py-3 px-4" id="suivant4">Suivant</button>
                                        </p>
                                    </div>
                                </div>
                                <div class="img order-md-last" style="background-image: url(<?php echo e(asset('/app/maison/'.$etape->image4)); ?>);"></div>

                            </div>
                        </div>

                        <div class="item">
                            <div class="work-wrap d-md-flex">
                                <div class="text text-left text-lg-right p-4 px-xl-5 d-flex align-items-center ">
                                    <div class="desc w-100">
                                        <h2 class="mb-2"><?php echo e($etape->etape5); ?></h2>
                                        <h3><?php echo e($etape->titre5); ?></h3>
                                        <div class="row justify-content-end">
                                            <div class="col-xl-8 text-justify">
                                                <p>
                                                    <?php echo e($etape->description5); ?>

                                                </p>
                                            </div>
                                        </div>
                                        <p style="margin-top: 30%">
                                            <button type="button" class="btn btn-outline-dark mb-2 py-3 px-4" id="precedent5">Précédent</button>

                                            <button type="button" class="btn btn-outline-dark mb-2 py-3 px-4" id="suivant5">Suivant</button>
                                        </p>
                                    </div>
                                </div>
                                <div class="img order-md-last" style="background-image: url(<?php echo e(asset('/app/maison/'.$etape->image5)); ?>);"></div>

                            </div>
                        </div>

                        <div class="item">
                            <div class="work-wrap d-md-flex">
                                <div class="img order-md-last" style="background-image: url(<?php echo e(asset('/app/maison/'.$etape->image6)); ?>);"></div>
                                <div class="text text-left text-lg-right p-4 px-xl-5 d-flex align-items-center ">
                                    <div class="desc w-100">
                                        <h2 class="mb-2"><?php echo e($etape->etape6); ?></h2>
                                        <h3><?php echo e($etape->titre6); ?></h3>
                                        <div class="row justify-content-end">
                                            <div class="col-xl-8 text-justify">
                                                <p>
                                                    <?php echo e($etape->description6); ?>

                                                </p>
                                            </div>
                                        </div>
                                        <p style="margin-top: 30%">
                                            <button type="button" class="btn btn-outline-dark mb-2 py-3 px-4" id="precedent6">Précédent</button>

                                            <button type="button" class="btn btn-outline-dark mb-2 py-3 px-4" id="suivant6">Suivant</button>
                                        </p>
                                    </div>
                                </div>
                                <div class="img order-md-last" style="background-image: url(<?php echo e(asset('/app/maison/'.$etape->image5)); ?>);"></div>

                            </div>
                        </div>

                        <div class="item">
                            <div class="work-wrap d-md-flex">
                                <div class="text text-left text-lg-right p-4 px-xl-5 d-flex align-items-center ">
                                    <div class="desc w-100">
                                        <h2 class="mb-2"><?php echo e($etape->etape7); ?></h2>
                                        <h3><?php echo e($etape->titre7); ?></h3>
                                        <div class="row justify-content-end">
                                            <div class="col-xl-8 text-justify">
                                                <p>
                                                    <?php echo e($etape->description7); ?>

                                                </p>
                                            </div>
                                        </div>
                                        <p style="margin-top: 30%">
                                            <button type="button" class="btn btn-outline-dark mb-2 py-3 px-4" id="precedent7">Précédent</button>

                                            <button type="button" class="btn btn-outline-dark mb-2 py-3 px-4" id="suivant7">Suivant</button>
                                        </p>
                                    </div>
                                </div>
                                <div class="img order-md-last" style="background-image: url(<?php echo e(asset('/app/maison/'.$etape->image7)); ?>);"></div>

                            </div>

                        </div>

                        




                        <?php else: ?>
                        <div class="item">
                            <div class="work-wrap d-md-flex">
                                <div class="img order-md-last" style="background-image: url(<?php echo e(asset('/front-end/assets/img/logo-simple.png')); ?>);"></div>
                                <div class="text text-left text-lg-right p-4 px-xl-5 d-flex align-items-center ">
                                    <div class="desc w-100">
                                        <h2 class="mb-2">Aucun contenu</h2>
                                        <div class="row justify-content-end">
                                            <div class="col-xl-8 text-justify">
                                                <p>
                                                    Aucune étape enregistrée pour le moment. pour plus d'informations veuillez nous contacter.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>

                      

                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="<?php echo e(asset('/front-end/mo/js/jquery.min.js')); ?>"></script>
    <script>
        $("#suivant1").click(function() {
            $('.owl-next').click();
        });

        $("#suivant2").click(function() {
            $('.owl-next').click();
        });
        $("#suivant3").click(function() {
            $('.owl-next').click();
        });

        $("#suivant4").click(function() {
            $('.owl-next').click();
        });
        $("#suivant5").click(function() {
            $('.owl-next').click();
        });

        $("#suivant6").click(function() {
            $('.owl-next').click();
        });
        $("#suivant7").click(function() {
            $('.owl-next').click();
        });

        $("#suivant8").click(function() {
            $('.owl-next').click();
        });
        $("#suivant9").click(function() {
            $('.owl-next').click();
        });

        $("#suivant10").click(function() {
            $('.owl-next').click();
        });



        $("#precedent1").click(function() {
            $('.owl-prev').click();
        });

        $("#precedent2").click(function() {
            $('.owl-prev').click();
        });
        $("#precedent3").click(function() {
            $('.owl-prev').click();
        });
        $("#precedent4").click(function() {
            $('.owl-prev').click();
        });
        $("#precedent5").click(function() {
            $('.owl-prev').click();
        });

        $("#precedent6").click(function() {
            $('.owl-prev').click();
        });
        $("#precedent7").click(function() {
            $('.owl-prev').click();
        });
        $("#precedent8").click(function() {
            $('.owl-prev').click();
        });
        $("#precedent9").click(function() {
            $('.owl-prev').click();
        });

        $("#precedent10").click(function() {
            $('.owl-prev').click();
        });
    </script>
    <script src="<?php echo e(asset('/front-end/mo/js/popper.js')); ?>"></script>
    <script src="<?php echo e(asset('/front-end/mo/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/front-end/mo/js/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/front-end/mo/js/main.js')); ?>"></script>
</body>






</html><?php /**PATH /home/styve/dev/laravel/batipro/resources/views/front-end/etape.blade.php ENDPATH**/ ?>