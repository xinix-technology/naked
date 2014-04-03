<!doctype html>
<html lang="en">

	<?php include ('part-head.php') ?>

	<body>

		<?php include ('part-header.php') ?>

		<div class="container">
			<div class="wrapper">

				<h1 class="title">Tabs</h1>
				<hr>
				<p>
					With Naked CSS, we set out to create an easy to handle, powerful and versatile form layout system. A combination of form styles and the Naked grid means you can do basically anything
				</p>

				<div class="ex-tabs">
					<article class="tabs">

						<section>
							<h2><a href="#tab1">Tab 1</a></h2>
							<div class="content" id="tab1">
								<p>This content appears on tab 1.</p>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum lacinia elit nec mi ornare et viverra massa pharetra. Phasellus mollis, massa sed suscipit pharetra, nunc tellus sagittis nunc, et tempus dui lorem a ipsum.
								</p>
							</div>
						</section>
						
						<section>
							<h2><a href="#tab2">Tab 2</a></h2>
							<div class="content" id="tab2">
								<p>This content appears on tab 2.</p>
								<p>
									Fusce ullamcorper orci vel turpis vestibulum eu congue nisl euismod. Maecenas euismod, orci non tempus fermentum, leo metus lacinia lacus, nec ultrices quam ligula ac leo. Quisque tortor neque, vulputate quis ultricies ut, rhoncus mollis metus.
								</p>
							</div>
						</section>
						
						<section>
							<h2><a href="#tab3">Tab 3</a></h2>
							<div class="content" id="tab3">
								<p>This content appears on tab 3.</p>
								<p>
									Sed et diam eu ipsum scelerisque laoreet quis in nibh. Proin sodales augue lectus. Maecenas a lorem a mi congue pharetra. Sed sed risus in nisi venenatis condimentum. Donec ac consectetur arcu. Integer urna neque, rutrum at pretium eu.
								</p>
							</div>
						</section>
					</article>
				</div>


				<div class="html">
                    <div class="highlight">
                        <pre class="prettyprint">
&lt;article class="tabs"&gt;
   &lt;section&gt;
      &lt;h2&gt;&lt;a href="#tab1"&gt;Tab 1&lt;/a&gt;&lt;/h2&gt;
      &lt;div class="content" id="tab1"&gt;
         &lt;p&gt;This content appears on tab 1.&lt;/p&gt;
         &lt;p&gt;&hellip;&lt;/p&gt;
      &lt;/div&gt;
   &lt;/section&gt;
	
   &lt;section&gt;
      &lt;h2&gt;&lt;a href="#tab2"&gt;Tab 2&lt;/a&gt;&lt;/h2&gt;
      &lt;div class="content" id="tab2"&gt;
         &lt;p&gt;This content appears on tab 2.&lt;/p&gt;
         &lt;p&gt;&hellip;&lt;/p&gt;
      &lt;/div&gt;
   &lt;/section&gt;
	
   &lt;section&gt;
      &lt;h2&gt;&lt;a href="#tab3"&gt;Tab 3&lt;/a&gt;&lt;/h2&gt;
      &lt;div class="content" id="tab3"&gt;
         &lt;p&gt;This content appears on tab 3.&lt;/p&gt;
         &lt;p&gt;&hellip;&lt;/p&gt;
      &lt;/div&gt;
   &lt;/section&gt;
&lt;/article&gt;
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