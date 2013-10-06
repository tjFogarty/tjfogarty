<?php
  $title = "T.J. Fogarty | Web Development and Design";
  $description = "Work and thoughts revolving around web development and design. JavaScript, Sass and CSS3.";
  $page = "index";

  include('includes/header.php');
?>

<div class="grid-container">
	<article class="grid-100">
		<h1>Heading 1</h1>
		<h2>Heading 2</h2>
		<h3>Heading 3</h3>
		<h4>Heading 4</h4>
		<h5>Heading 5</h5>
		<h6>Heading 6</h6>

		<p>Lorem ipsum dolor sit amet, <a href="">consectetur</a> adipisicing elit. Iusto, neque, nam, eum, itaque aut error voluptates quis corrupti id provident quia expedita praesentium minima est vero illum cupiditate reprehenderit exercitationem. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima alias laborum nemo accusamus harum! Esse, earum officia sequi omnis repudiandae magni ipsam ducimus deserunt asperiores commodi quia aspernatur dolore qui!</p>

		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, tempora, accusantium, eum, facere debitis laudantium recusandae vitae aliquid ad explicabo in impedit commodi quisquam cupiditate sunt. Ipsa, quis ex excepturi.</p>

		<a href="#">This is a link</a>

		<hr>

		<time><?php echo date('Y m d'); ?></time>

		<blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae, nobis, eos, nam facilis cupiditate minima.</blockquote>

	</article>
</div>

<?php include('includes/footer.php'); ?>