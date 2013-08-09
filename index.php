<?php
  $title = "Project Scaffold | New Project";
  $description = "Description";
  $page = "index";

  include('includes/header.php');
?>

<header class="grid-container">
	<div class="grid-100">
		<h1>Project Scaffold</h1>

		<p>Besides including the header and footer, each page accepts 3 variables declared before calling the header:</p>
		<ol>
			<li>
				<code>$title</code> will be the page title
			</li>
			<li>
				<code>$description</code> will be the description in the meta tag
			</li>
			<li>
				<code>$page</code> is used as a class given to the body tag
			</li>
		</ol>
	</div>
</header>

<?php include('includes/footer.php'); ?>