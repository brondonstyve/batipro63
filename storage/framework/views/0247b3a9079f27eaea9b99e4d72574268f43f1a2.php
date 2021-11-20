<!DOCTYPE html>
<html>
<head>
    <title><?php echo e(env('APP_NAME')); ?></title>
</head>
<body>


    <?php if($details['title']=='demande de terrain'): ?>
    
    <h1><?php echo e($details['title']); ?></h1>
    <p><?php echo e($details['body']); ?></p>
    <br>
    Ces informations sont les suivantes:
    <br>
    <span>Email : <?php echo e($details['email']); ?></span>
    <br>
    <span>Nom : <?php echo e($details['nom']); ?></span>
    <br>
    <span>Code Postal : <?php echo e($details['postal']); ?></span>
    <br>
    <span>Ville : <?php echo e($details['ville']); ?></span>
    <br>
    <span>Téléphone : <?php echo e($details['telephone']); ?></span>

       <?php else: ?>
       <h1><?php echo e($details['title']); ?></h1>
       <p><?php echo e($details['body']); ?></p>
       <br>
       <span>Email : <?php echo e($details['email']); ?></span>
       <br>
       <span>Nom : <?php echo e($details['nom']); ?></span>
    <?php endif; ?>

    


   
    <p>Merci!</p>
</body>
</html><?php /**PATH /home/styve/dev/laravel/batipro/resources/views/mail/notif1.blade.php ENDPATH**/ ?>