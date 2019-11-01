<html>
<head>


<?php if($card->card_size=='large'): ?>

<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
<meta name="robots" content="noindex, follow" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="<?php echo e($card->title); ?>" />
<meta name="twitter:description" content="<?php echo e($card->description); ?>" />
<meta name="twitter:image" content="<?php echo e(asset('media/upload_image')); ?>/<?php echo e($card->twitter_image); ?>" />
<meta property="og:updated_time" content="1560282319" />
<meta property="og:type" content="website" />
<meta property="og:title" content="<?php echo e($card->title); ?>" />
<meta property="og:description" content="<?php echo e($card->description); ?>" />
<meta property="og:image" content="<?php echo e(asset('media/upload_image')); ?>/<?php echo e($card->twitter_image); ?>" />
<meta property="og:image:width" content="720" />
<meta property="og:image:height" content="404" />


<?php else: ?>



<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
<meta name="robots" content="noindex, follow" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="<?php echo e($card->title); ?>" />
<meta name="twitter:description" content="<?php echo e($card->description); ?>" />
<meta name="twitter:image" content="<?php echo e(asset('media/upload_image')); ?>/<?php echo e($card->twitter_image); ?>" />
<meta property="og:updated_time" content="1561064023" />
<meta property="og:type" content="website" />
<meta property="og:title" content="<?php echo e($card->title); ?>" />
<meta property="og:description" content="<?php echo e($card->description); ?>" />
<meta property="og:image" content="<?php echo e(asset('media/upload_image')); ?>/<?php echo e($card->twitter_image); ?>" />
<meta property="og:image:width" content="299" />
<meta property="og:image:height" content="299" />



<?php endif; ?>


<script>
            location.href = '//<?php echo e($card->destination); ?>';
    </script>
</head>

<body></body>
</html><?php /**PATH /home/wnaezmgawim0/public_html/asher/asher/resources/views/frontend/card.blade.php ENDPATH**/ ?>