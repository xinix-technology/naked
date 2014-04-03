<!doctype html>
<html lang="en">

	<?php include ('part-head.php') ?>

	<body>

		<?php include ('part-header.php') ?>
		
		<div class="container">
			<div class="wrapper">

				<h1 class="title">Alert</h1>
				<p>
					These are examples of different ways to use the Naked CSS Grid. Since Naked is mobile-first, we'll stack content by default. You do have access to an entirely separate small grid to use up to the 768px breakpoint. This means you can create some pretty complex layouts and even drop columns if you want.
				</p>
				<h4 class="sub-title">Alert Error</h4>
				<div class="ex-alert-content">
					<div class="alert error">
						<button type="button" class="close">&times;</button>
						<h6>Error!</h6>
						<p>Error Example</p>
					</div>
				</div>
				<div class="html">
					<div class="highlight">
						<pre class="prettyprint">
&lt;div class="alert error"&gt;
   &lt;button type="button" class="close"&gt;&times;&lt;/button&gt;
   &lt;h6&gt;Error!&lt;/h6&gt;
   &lt;p&gt;Error Example&lt;/p&gt;
&lt;/div&gt;
						</pre>
					</div>
				</div>
				<hr>
				<h4 class="sub-title">Alert Success</h4>
				<div class="ex-alert-content">
					<div class="alert success">
						<button type="button" class="close">&times;</button>
						<h6>Success!</h6>
						<p>Success Example</p>
					</div>
				</div>
				<div class="html">
					<div class="highlight">
						<pre class="prettyprint">
&lt;div class="alert success"&gt;
   &lt;button type="button" class="close"&gt;&times;&lt;/button&gt;
   &lt;h6&gt;Success!&lt;/h6&gt;
   &lt;p&gt;Success Example&lt;/p&gt;
&lt;/div&gt;
						</pre>
					</div>
				</div>
				<hr>
				<h4 class="sub-title">Alert Warning</h4>
				<div class="ex-alert-content">
					<div class="alert warning">
						<button type="button" class="close">&times;</button>
						<h6>Warning!</h6>
						<p>Warning Example</p>
					</div>
				</div>
				<div class="html">
					<div class="highlight">
						<pre class="prettyprint">
&lt;div class="alert warning"&gt;
   &lt;button type="button" class="close"&gt;&times;&lt;/button&gt;
   &lt;h6&gt;Warning!&lt;/h6&gt;
   &lt;p&gt;Warning Example&lt;/p&gt;
&lt;/div&gt;
						</pre>
					</div>
				</div>
				<hr>
				<h4 class="sub-title">Alert Info</h4>
				<div class="ex-alert-content">
					<div class="alert info">
						<button type="button" class="close">&times;</button>
						<h6>Info!</h6>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nisl ipsum, bibendum eu semper eu, tristique a nisi. Nullam mattis iaculis interdum. Curabitur sed sem at est mollis gravida. Nullam vitae vestibulum ligula. Proin tincidunt, dolor non ornare malesuada, turpis risus iaculis nulla, vel consectetur justo ligula eu justo.
						</p>
					</div>
				</div>
				<div class="html">
					<div class="highlight">
						<pre class="prettyprint">
&lt;div class="alert info"&gt;
   &lt;button type="button" class="close"&gt;&times;&lt;/button&gt;
   &lt;h6&gt;Info!&lt;/h6&gt;
   &lt;p&gt;&hellip;&lt;/p&gt;
&lt;/div&gt;
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