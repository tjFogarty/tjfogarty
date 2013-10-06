<?php 
date_default_timezone_set('Europe/Dublin'); 
include( $_SERVER['DOCUMENT_ROOT'] . '/php/bootstrap.php' );
?>
<!DOCTYPE html>
<html>
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
<body class="page page--<?php echo $page; ?>">
  <div class="page-container">
    <header class="page-header">
      <?php include('includes/main-navigation.php'); ?>
    </header>