<?php
  $title = "T.J. Fogarty | Web Development and Design";
  $description = "Work and thoughts revolving around web development and design. JavaScript, Sass and CSS3.";
  $page = "index";

  include('includes/header.php');
?>

<header class="hero hero--thin hero--dark">
	<div class="grid-container">
		<div class="grid-100">
			<h1 class="hero__title">T.J. Fogarty</h1>
			<p class="hero__text">Web Development &amp; Design</p>
		</div>
	</div>
</header>

<section class="block">
	<div class="grid-container">
		<div class="grid-50 tablet-grid-50">
			<a href="#" class="button button--small">Small Button</a>
			<a href="#" class="button">Regular Button</a>
			<a href="#" class="button button--large">Large Button</a>
		</div>
	</div>
</section>

<?php include('includes/footer.php'); ?>