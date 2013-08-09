<?php 
date_default_timezone_set('Europe/Dublin');
?>

<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title><?php echo $title; ?></title>
  <meta name="description" content="<?php echo $description; ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="/css/global.min.css?v=<?php echo date('His'); ?>">

  <!--[if lt IE 9]>
    <script src="/js/fallbacks/lt-ie9.js"></script>
  <![endif]-->
</head>
<body class="page-<?php echo $page; ?>">
  <div class="container">