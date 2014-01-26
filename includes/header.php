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

  <link href='http://fonts.googleapis.com/css?family=Droid+Sans|Droid+Serif' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="/css/global.min.css?v=<?php echo date('His'); ?>">

</head>
<body class="page page--<?php echo $page; ?>">
  <div class="page__container">
    <a href="/" class="logo">
      <header class="page__header" data-stellar-background-ratio="0.5">
        <h1 class="page__title">TJ Fogarty</h1>
        <h2 class="page__sub-title">Web Development <span class="fancify">&amp;</span> Design</h2>
      </header>
    </a>