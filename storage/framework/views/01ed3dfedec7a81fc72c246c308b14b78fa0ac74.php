<?php $set = DB::table('pengaturan')->first(); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('tema/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('tema/css/style.css')); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="<?php echo asset('storage/'. $set->icon_situs) ?>" sizes="16x16" type="image/png">

    <title><?php echo e($title); ?></title>
  </head>
  <body><?php /**PATH C:\xampp\htdocs\cms-blog-laravel-versi-8\resources\views/layout/head.blade.php ENDPATH**/ ?>