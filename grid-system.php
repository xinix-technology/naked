<!doctype html>
<html lang="en">

	<?php include ('part-head.php') ?>

	<body>

		<?php include ('part-header.php') ?>
		
		<div class="container">
			<div class="wrapper">

				<h1 class="title">Grid Systems</h1>
				<hr>
				<h4 class="sub-title">Span</h4>
				<p>Span in Naked CSS is use <b>12</b> columns. It will show to all screen.</p>
				<h5 class="showto">Show to All Screen</h5>
				<div class="span-example">
					<div class="row">
						<div class="span-2">
							<div class="box">
								<p>Sp 2</p>
							</div>
						</div>
						<div class="span-6">
							<div class="box">
								<p>SP 6</p>
							</div>
						</div>
						<div class="span-4">
							<div class="box">
								<p>Sp 4</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="span-3">
							<div class="box">
								<p>Sp 3</p>
							</div>
						</div>
						<div class="span-4">
							<div class="box">
								<p>Sp 4</p>
							</div>
						</div>
						<div class="span-5">
							<div class="box">
								<p>Sp 5</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="span-4">
							<div class="box">
								<p>Sp 4</p>
							</div>
						</div>
						<div class="span-4">
							<div class="box">
								<p>Sp 4</p>
							</div>
						</div>
						<div class="span-4">
							<div class="box">
								<p>Sp 4</p>
							</div>
						</div>
					</div>
				</div>
				<div class="html">
					<div class="highlight">
						<pre class="prettyprint">
&lt;div class="row"&gt;
   &lt;div class="span-2"&gt;...&lt;/div&gt;
   &lt;div class="span-6"&gt;...&lt;/div&gt;
   &lt;div class="span-4"&gt;...&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
   &lt;div class="span-3"&gt;...&lt;/div&gt;
   &lt;div class="span-4"&gt;...&lt;/div&gt;
   &lt;div class="span-5"&gt;...&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
   &lt;div class="span-4"&gt;...&lt;/div&gt;
   &lt;div class="span-4"&gt;...&lt;/div&gt;
   &lt;div class="span-4"&gt;...&lt;/div&gt;
&lt;/div&gt;
						</pre>
					</div>
				</div>
				<hr>
				<h4 class="sub-title">Extra Large Screen (Minimum Width 1360px)</h4>
				<p>On the Extra Large Screen, Naked CSS is use <b>12</b> columns.</p>
				<h5 class="showto">Only Show on Extra Large Screen :</h5>
				<div class="xlarge-screen">
					<div class="row">
						<div class="xlarge-1">
							<div class="box">
								<p>XL 1</p>
							</div>
						</div>
						<div class="xlarge-3">
							<div class="box">
								<p>XL 3</p>
							</div>
						</div>
						<div class="xlarge-3">
							<div class="box">
								<p>XL 3</p>
							</div>
						</div>
						<div class="xlarge-5">
							<div class="box">
								<p>XL 5</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="xlarge-4">
							<div class="box">
								<p>XL 4</p>
							</div>
						</div>
						<div class="xlarge-4">
							<div class="box">
								<p>XL 4</p>
							</div>
						</div>
						<div class="xlarge-4">
							<div class="box">
								<p>XL 4</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="xlarge-5">
							<div class="box">
								<p>XL 5</p>
							</div>
						</div>
						<div class="xlarge-2">
							<div class="box">
								<p>XL 2</p>
							</div>
						</div>
						<div class="xlarge-3">
							<div class="box">
								<p>XL 3</p>
							</div>
						</div>
						<div class="xlarge-2">
							<div class="box">
								<p>XL 2</p>
							</div>
						</div>
					</div>
				</div>
				<div class="html">
					<div class="highlight">
						<pre class="prettyprint">
&lt;div class="row"&gt;
   &lt;div class="xlarge-1"&gt;...&lt;/div&gt;
   &lt;div class="xlarge-3"&gt;...&lt;/div&gt;
   &lt;div class="xlarge-3"&gt;...&lt;/div&gt;
   &lt;div class="xlarge-5"&gt;...&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
   &lt;div class="xlarge-4"&gt;...&lt;/div&gt;
   &lt;div class="xlarge-4"&gt;...&lt;/div&gt;
   &lt;div class="xlarge-4"&gt;...&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
   &lt;div class="xlarge-5"&gt;...&lt;/div&gt;
   &lt;div class="xlarge-2"&gt;...&lt;/div&gt;
   &lt;div class="xlarge-3"&gt;...&lt;/div&gt;
   &lt;div class="xlarge-2"&gt;...&lt;/div&gt;
&lt;/div&gt;
						</pre>
					</div>
				</div>
				<hr>
				<h4 class="sub-title">Large Screen (Minimum Width 1024px)</h4>
				<p>On the Large Screen, Naked CSS is use <b>12</b> columns.</p>
				<h5 class="showto">Only Show on Large Screen :</h5>
				<div class="large-screen">
					<div class="row">
						<div class="large-1">
							<div class="box">
								<p>L 1</p>
							</div>
						</div>
						<div class="large-2">
							<div class="box">
								<p>L 2</p>
							</div>
						</div>
						<div class="large-3">
							<div class="box">
								<p>L 3</p>
							</div>
						</div>
						<div class="large-6">
							<div class="box">
								<p>L 6</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="large-1">
							<div class="box">
								<p>L 1</p>
							</div>
						</div>
						<div class="large-4">
							<div class="box">
								<p>L 4</p>
							</div>
						</div>
						<div class="large-7">
							<div class="box">
								<p>L 7</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="large-4">
							<div class="box">
								<p>L 4</p>
							</div>
						</div>
						<div class="large-8">
							<div class="box">
								<p>L 8</p>
							</div>
						</div>
					</div>
				</div>
				<div class="html">
					<div class="highlight">
						<pre class="prettyprint">
&lt;div class="row"&gt;
   &lt;div class="large-1"&gt;...&lt;/div&gt;
   &lt;div class="large-2"&gt;...&lt;/div&gt;
   &lt;div class="large-3"&gt;...&lt;/div&gt;
   &lt;div class="large-6"&gt;...&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
   &lt;div class="large-1"&gt;...&lt;/div&gt;
   &lt;div class="large-4"&gt;...&lt;/div&gt;
   &lt;div class="large-7"&gt;...&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
   &lt;div class="large-4"&gt;...&lt;/div&gt;
   &lt;div class="large-8"&gt;...&lt;/div&gt;
&lt;/div&gt;
						</pre>
					</div>
				</div>
				<hr>
				<h4 class="sub-title">Medium Screen (Minimum Width 768px)</h4>
				<p>On the Medium Screen, Naked CSS is use <b>12</b> columns.</p>
				<h5 class="showto">Only Show on Medium Screen :</h5>
				<div class="medium-screen">
					<div class="row">
						<div class="medium-4">
							<div class="box">
								<p>M 4</p>
							</div>
						</div>
						<div class="medium-4">
							<div class="box">
								<p>M 4</p>
							</div>
						</div>
						<div class="medium-4">
							<div class="box">
								<p>M 4</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="medium-1">
							<div class="box">
								<p>M 1</p>
							</div>
						</div>
						<div class="medium-2">
							<div class="box">
								<p>M 2</p>
							</div>
						</div>
						<div class="medium-3">
							<div class="box">
								<p>M 3</p>
							</div>
						</div>
						<div class="medium-6">
							<div class="box">
								<p>M 6</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="medium-6">
							<div class="box">
								<p>M 6</p>
							</div>
						</div>
						<div class="medium-6">
							<div class="box">
								<p>M 6</p>
							</div>
						</div>
					</div>
				</div>
				<div class="html">
					<!-- <h6 class="code">Code :</h6> -->
					<div class="highlight">
						<pre class="prettyprint">
&lt;div class="row"&gt;
   &lt;div class="medium-4"&gt;...&lt;/div&gt;
   &lt;div class="medium-4"&gt;...&lt;/div&gt;
   &lt;div class="medium-4"&gt;...&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
   &lt;div class="medium-1"&gt;...&lt;/div&gt;
   &lt;div class="medium-2"&gt;...&lt;/div&gt;
   &lt;div class="medium-3"&gt;...&lt;/div&gt;
   &lt;div class="medium-6"&gt;...&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
   &lt;div class="medium-6"&gt;...&lt;/div&gt;
   &lt;div class="medium-6"&gt;...&lt;/div&gt;
&lt;/div&gt;
						</pre>
					</div>
				</div>
				<hr>
				<h4 class="sub-title">Small Screen (Minimum Width 480px)</h4>
				<p>On the Small Screen, Naked CSS is use <b>12</b> columns.</p>
				<h5 class="showto">Only Show on Small Screen :</h5>
				<div class="small-screen">
					<div class="row">
						<div class="small-6">
							<div class="box">
								<p>S 6</p>
							</div>
						</div>
						<div class="small-6">
							<div class="box">
								<p>S 6</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="small-4">
							<div class="box">
								<p>S 4</p>
							</div>
						</div>
						<div class="small-4">
							<div class="box">
								<p>S 4</p>
							</div>
						</div>
						<div class="small-4">
							<div class="box">
								<p>S 4</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="small-2">
							<div class="box">
								<p>S 2</p>
							</div>
						</div>
						<div class="small-3">
							<div class="box">
								<p>S 3</p>
							</div>
						</div>
						<div class="small-3">
							<div class="box">
								<p>S 3</p>
							</div>
						</div>
						<div class="small-4">
							<div class="box">
								<p>S 4</p>
							</div>
						</div>
					</div>
				</div>
				<div class="html">
					<div class="highlight">
						<pre class="prettyprint">
&lt;div class="row"&gt;
   &lt;div class="small-6"&gt;...&lt;/div&gt;
   &lt;div class="small-6"&gt;...&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
   &lt;div class="small-4"&gt;...&lt;/div&gt;
   &lt;div class="small-4"&gt;...&lt;/div&gt;
   &lt;div class="small-4"&gt;...&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
   &lt;div class="small-2"&gt;...&lt;/div&gt;
   &lt;div class="small-3"&gt;...&lt;/div&gt;
   &lt;div class="small-3"&gt;...&lt;/div&gt;
   &lt;div class="small-4"&gt;...&lt;/div&gt;
&lt;/div&gt;
						</pre>
					</div>
				</div>
				<hr>
				<h4 class="sub-title">Tiny Screen (Minimum Width 240px)</h4>
				<p>On the Tiny Screen, Naked CSS is use <b>12</b> columns.</p>
				<h5 class="showto">Only Show on Tiny Screen :</h5>
				<div class="tiny-screen">
					<div class="row">
						<div class="tiny-4">
							<div class="box">
								<p>T 4</p>
							</div>
						</div>
						<div class="tiny-4">
							<div class="box">
								<p>T 4</p>
							</div>
						</div>
						<div class="tiny-4">
							<div class="box">
								<p>T 4</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="tiny-6">
							<div class="box">
								<p>T 6</p>
							</div>
						</div>
						<div class="tiny-6">
							<div class="box">
								<p>T 6</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="tiny-3">
							<div class="box">
								<p>T 3</p>
							</div>
						</div>
						<div class="tiny-2">
							<div class="box">
								<p>T 2</p>
							</div>
						</div>
						<div class="tiny-4">
							<div class="box">
								<p>T 4</p>
							</div>
						</div>
						<div class="tiny-3">
							<div class="box">
								<p>T 3</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="tiny-12">
							<div class="box">
								<p>T 12</p>
							</div>
						</div>
					</div>
				</div>
				<div class="html">
					<div class="highlight">
						<pre class="prettyprint">
&lt;div class="row"&gt;
   &lt;div class="tiny-4"&gt;...&lt;/div&gt;
   &lt;div class="tiny-4"&gt;...&lt;/div&gt;
   &lt;div class="tiny-4"&gt;...&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
   &lt;div class="tiny-6"&gt;...&lt;/div&gt;
   &lt;div class="tiny-6"&gt;...&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
   &lt;div class="tiny-3"&gt;...&lt;/div&gt;
   &lt;div class="tiny-2"&gt;...&lt;/div&gt;
   &lt;div class="tiny-4"&gt;...&lt;/div&gt;
   &lt;div class="tiny-3"&gt;...&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
   &lt;div class="tiny-12"&gt;...&lt;/div&gt;
&lt;/div&gt;
						</pre>
					</div>
				</div>
				<hr>
				<h4 class="sub-title">Mix Grid</h4>
				<p>
					You can mix the grid class between tiny-screen, small-screen, medium-screen, large-screen, and extra-large-screen. They will show depending on screen.
				</p>
				<h5 class="showto">Show to All Screen</h5>
				<div class="mix-screen">
					<div class="row">
						<div class="xlarge-2 large-2 medium-5 small-3 tiny-3">
							<div class="box">
								<p>Mix 1</p>
							</div>
						</div>
						<div class="xlarge-1 large-3 medium-2 small-3 tiny-3">
							<div class="box">
								<p>Mix 2</p>
							</div>
						</div>
						<div class="xlarge-2 large-4 medium-3 small-2 tiny-3">
							<div class="box">
								<p>Mix 3</p>
							</div>
						</div>
						<div class="xlarge-7 large-3 medium-2 small-4 tiny-3">
							<div class="box">
								<p>Mix 4</p>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="row">
						<div class="xlarge-3 large-2 medium-5 small-4 tiny-3">
							<div class="box">
								<p>Mix 1</p>
							</div>
						</div>
						<div class="xlarge-5 large-6 medium-2 small-2 tiny-5">
							<div class="box">
								<p>Mix 2</p>
							</div>
						</div>
						<div class="xlarge-4 large-4 medium-5 small-6 tiny-4">
							<div class="box">
								<p>Mix 3</p>
							</div>
						</div>
					</div>
				</div>
				<div class="html">
					<div class="highlight">
						<pre class="prettyprint">
&lt;div class="row"&gt;
   &lt;div class="xlarge-2 large-2 medium-5 small-3 tiny-3"&gt;...&lt;/div&gt;
   &lt;div class="xlarge-1 large-3 medium-2 small-3 tiny-3"&gt;...&lt;/div&gt;
   &lt;div class="xlarge-2 large-4 medium-3 small-2 tiny-3"&gt;...&lt;/div&gt;
   &lt;div class="xlarge-7 large-3 medium-2 small-4 tiny-3"&gt;...&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
   &lt;div class="xlarge-3 large-2 medium-5 small-4 tiny-3"&gt;...&lt;/div&gt;
   &lt;div class="xlarge-5 large-6 medium-2 small-2 tiny-5"&gt;...&lt;/div&gt;
   &lt;div class="xlarge-4 large-4 medium-5 small-6 tiny-4"&gt;...&lt;/div&gt;
&lt;/div&gt;
						</pre>
					</div>
				</div>
				<hr>
				<h4 class="sub-title">Infinitely Nested the Grid</h4>
				<p>
					The grid allows for nesting down as far as you'd like, though at a certain point it will get absurd. You can use this nesting to create quite complex layouts, as well as some other tricks like form layouts or visual elements.
				</p>
				<h5 class="showto">Show to All Screen</h5>
				<div class="mix-screen">
					<div class="row">
						<div class="xlarge-8 large-9 medium-9 small-10 tiny-10">
							<div class="box">
								<p>1</p>
							</div>
							<div class="row">
								<div class="xlarge-8 large-9 medium-8 small-10 tiny-10">
									<div class="box">
										<p>1.1</p>
										<div class="row">
											<div class="xlarge-3 large-3 medium-4 small-5 tiny-4">
												<div class="box">
													<p>1.1.1</p>
												</div>
											</div>
											<div class="xlarge-4 large-4 medium-2 small-3 tiny-4">
												<div class="box">
													<p>1.1.2</p>
												</div>
											</div>
											<div class="xlarge-5 large-5 medium-6 small-4 tiny-4">
												<div class="box">
													<p>1.1.3</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="xlarge-4 large-3 medium-4 small-2 tiny-2">
									<div class="box">
										<p>1.2</p>
									</div>
								</div>
							</div>
						</div>
						<div class="xlarge-4 large-3 medium-3 small-2 tiny-2">
							<div class="box">
								<p>2</p>
							</div>
						</div>
					</div>
				</div>
				<div class="html">
					<div class="highlight">
						<pre class="prettyprint">
&lt;div class="row"&gt;
   &lt;div class="xlarge-8 large-9 medium-9 small-10 tiny-10"&gt;
      &lt;p&gt;1&lt;/p&gt;
      &lt;div class="row"&gt;
         &lt;div class="xlarge-8 large-9 medium-8 small-10 tiny-10"&gt;
            &lt;p&gt;1.1&lt;/p&gt;
            &lt;div class="row"&gt;
               &lt;div class="xlarge-3 large-3 medium-4 small-5 tiny-4"&gt;
                  &lt;p&gt;1.1.1&lt;/p&gt;
               &lt;/div&gt;
               &lt;div class="xlarge-4 large-4 medium-2 small-3 tiny-4"&gt;
                  &lt;p&gt;1.1.2&lt;/p&gt;
               &lt;/div&gt;
               &lt;div class="xlarge-5 large-5 medium-6 small-4 tiny-4"&gt;
                  &lt;p&gt;1.1.3&lt;/p&gt;
               &lt;/div&gt;
            &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="xlarge-4 large-3 medium-4 small-2 tiny-2"&gt;
            &lt;p&gt;1.2&lt;/p&gt;
         &lt;/div&gt;
      &lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="xlarge-4 large-3 medium-3 small-2 tiny-2"&gt;
      &lt;p&gt;2&lt;/p&gt;
   &lt;/div&gt;
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