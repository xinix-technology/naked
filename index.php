<!doctype html>
<html lang="en">

	<?php include ('part-head.php') ?>

	<body>

		<?php include ('part-header.php') ?>
		
		<div class="container">
			<div class="wrapper">

				<h3>Using our Predefined HTML Classes</h3>
				<p>
					These are examples of different ways to use the Naked CSS Grid. Since Naked is mobile-first, we'll stack content by default. You do have access to an entirely separate small grid to use up to the 768px breakpoint. This means you can create some pretty complex layouts and even drop columns if you want.
				</p>
				<hr>
				<h1 class="title">Container</h1>
				<hr>
				<ul>
					<li>On the Extra Large Screen, Container Fix width is <b>1320px</b>.</li>
					<li>On the Large Screen, Container Fix width is <b>984px</b>.</li>
					<li>On the Medium Screen, Container Fix width is <b>728px</b>.</li>
					<li>On the Small Screen, Container Fix width is <b>440px</b>.</li>
					<li>On the Tiny Screen, Container Fix width is <b>100%</b>.</li>
				</ul>
				<div class="html">
					<div class="highlight">
					<pre class="prettyprint">
&lt;div class="container"&gt;...&lt;/div&gt;
					</pre>
					</div>
				</div>
				<h4 class="sub-title">Container Fluid</h4>
				<p>Countainer Fluid is a <b>Container</b> whose length is <b>always 100%</b>.</p>
				<div class="html">
					<div class="highlight">
						<pre class="prettyprint">
&lt;div class="container-fluid"&gt;...&lt;/div&gt;
						</pre>
					</div>
				</div>
				<hr>

			</div>
		</div>
		
		<?php include ('part-footer.php') ?>

		<?php include ('part-script.php') ?>

	</body>
</html>