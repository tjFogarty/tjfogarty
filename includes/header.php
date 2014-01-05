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
  
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="/css/global.min.css?v=<?php echo date('His'); ?>">

</head>
<body class="page page--<?php echo $page; ?>">
  <div class="page-container">
    <header class="page-header grid-container">
      <div class="grid-100">
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/main-navigation.php'); ?>

        <h1 class="page__title">TJ Fogarty</h1>
      </div>
    </header>