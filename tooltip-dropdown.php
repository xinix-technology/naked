<!doctype html>
<html lang="en">

	<?php include ('part-head.php') ?>

	<body>

		<?php include ('part-header.php') ?>
		
		<div class="container">
			<div class="wrapper">

				<h1 class="title">Dropdown</h1>
				<p>
					These are examples of different ways to use the Naked CSS Grid. Since Naked is mobile-first, we'll stack content by default. You do have access to an entirely separate small grid to use up to the 768px breakpoint. This means you can create some pretty complex layouts and even drop columns if you want.
				</p>
				<div class="ex-dropdown-content">
					<ul class="menu">
						<li>
							<a href="#">No Dropdown</a>
						</li>
						<li class="collapsible">
							<a href="#">Dropdown</a>
							<ul>
								<li><a href="#">Web Design</a></li>
								<li><a href="#">Web Development</a></li>
								<li class="divider"></li>
								<li><a href="#">Illustrations</a></li>
							</ul>
						</li>
						<li class="collapsible up">
							<a href="#">Dropup Nested</a>
							<ul>
								<li><a href="#">Web Design</a></li>
								<li class="collapsible left">
									<a href="#">Web Development</a>
									<ul>
										<li><a href="#">Designer</a></li>
										<li><a href="#">Developer</a></li>
									</ul>
								</li>
								<li><a href="#">Illustrations</a></li>
							</ul>
						</li>
						<li class="collapsible">
							<a href="#">Dropdown Nested</a>
							<ul>
								<li><a href="#">Web Design</a></li>
								<li class="collapsible right">
									<a href="#">Web Development</a>
									<ul>
										<li><a href="#">Designer</a></li>
										<li><a href="#">Developer</a></li>
									</ul>
								</li>
								<li><a href="#">Illustrations</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="html">
					<div class="highlight">
						<pre class="prettyprint">
&lt;ul class="menu"&gt;
   &lt;li&gt;
      &lt;a href="#"&gt;No Dropdown&lt;/a&gt;
   &lt;/li&gt;
   &lt;li class="collapsible"&gt;
      &lt;a href="#"&gt;Dropdown&lt;/a&gt;
      &lt;ul&gt;
         &lt;li&gt;&lt;a href="#"&gt;Web Design&lt;/a&gt;&lt;/li&gt;
         &lt;li&gt;&lt;a href="#"&gt;Web Development&lt;/a&gt;&lt;/li&gt;
         &lt;li class="divider"&gt;&lt;/li&gt;
         &lt;li&gt;&lt;a href="#"&gt;Illustrations&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
   &lt;/li&gt;
   &lt;li class="collapsible up"&gt;
      &lt;a href="#"&gt;Dropup Nested&lt;/a&gt;
      &lt;ul&gt;
         &lt;li&gt;&lt;a href="#"&gt;Web Design&lt;/a&gt;&lt;/li&gt;
         &lt;li class="collapsible left"&gt;
            &lt;a href="#"&gt;Web Development&lt;/a&gt;
            &lt;ul&gt;
               &lt;li&gt;&lt;a href="#"&gt;Designer&lt;/a&gt;&lt;/li&gt;
               &lt;li&gt;&lt;a href="#"&gt;Developer&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
         &lt;/li&gt;
         &lt;li&gt;&lt;a href="#"&gt;Illustrations&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
   &lt;/li&gt;
   &lt;li class="collapsible"&gt;
      &lt;a href="#"&gt;Dropdown Nested&lt;/a&gt;
      &lt;ul&gt;
         &lt;li&gt;&lt;a href="#"&gt;Web Design&lt;/a&gt;&lt;/li&gt;
         &lt;li class="collapsible right"&gt;
            &lt;a href="#"&gt;Web Development&lt;/a&gt;
            &lt;ul&gt;
               &lt;li&gt;&lt;a href="#"&gt;Designer&lt;/a&gt;&lt;/li&gt;
               &lt;li&gt;&lt;a href="#"&gt;Developer&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
         &lt;/li&gt;
         &lt;li&gt;&lt;a href="#"&gt;Illustrations&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
   &lt;/li&gt;
&lt;/ul&gt;
						</pre>
					</div>
				</div>
				<hr>
				<h1 class="title">Tooltip</h1>
				<p>
					These are examples of different ways to use the Naked CSS Grid. Since Naked is mobile-first, we'll stack content by default. You do have access to an entirely separate small grid to use up to the 768px breakpoint. This means you can create some pretty complex layouts and even drop columns if you want.
				</p>
				<div class="ex-tooltip-content">
					<ul class="flat">
						<li>
							<a href="#" class="tooltip-text">
								Tooltip Left
								<span class="tooltip left">Helloo!</span>
							</a>
						</li>
						<li>
							<a href="#" class="tooltip-text">
								Tooltip Down
								<span class="tooltip down">Helloo!</span>
							</a>
						</li>
						<li>
							<a href="#" class="tooltip-text">
								Tooltip Top
								<span class="tooltip top">Helloo!</span>
							</a>
						</li>
						<li>
							<a href="#" class="tooltip-text">
								Tooltip Right
								<span class="tooltip right">Helloo!</span>
							</a>
						</li>
					</ul>
				</div>
				<div class="html">
					<div class="highlight">
						<pre class="prettyprint">
&lt;a href="#" class="tooltip-text"&gt;
   Tooltip Left
   &lt;span class="tooltip left"&gt;Helloo!&lt;/span&gt;
&lt;/a&gt;

&lt;a href="#" class="tooltip-text"&gt;
   Tooltip Down
   &lt;span class="tooltip down"&gt;Helloo!&lt;/span&gt;
&lt;/a&gt;

&lt;a href="#" class="tooltip-text"&gt;
   Tooltip Top
   &lt;span class="tooltip top"&gt;Helloo!&lt;/span&gt;
&lt;/a&gt;

&lt;a href="#" class="tooltip-text"&gt;
   Tooltip Right
   &lt;span class="tooltip right"&gt;Helloo!&lt;/span&gt;
&lt;/a&gt;
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