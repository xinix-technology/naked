<!doctype html>
<html lang="en">

	<?php include ('part-head.php') ?>

	<body>

		<?php include ('part-header.php') ?>
		
		<div class="container">
			<div class="wrapper">

				<h1 class="title">Navbar Menu</h1>
				<p>
					There are two ways to build pagination in Foundation 4: with our predefined HTML or with our mixin. Building pagination using our predefined classes isn't hard at all. You'll start with an unordered list and add a class of <code>.pagination</code> to it. From there, you just need to add list items with links in them. Those list items have a few options you can use:
				</p>
				<div class="ex-navbar-menu">
					<div class="row">
						<div class="span-12">
							<nav class="navbar-menu">
								<div class="wrapper">
									<h2><a href="#">Naked</a></h2>
									<section class="topbar pull-right">
										<ul class="menu">
											<li class="active"><a href="#">Menu 1</a></li>
											<li class="divide"></li>
											<li><a href="#">Menu 2</a></li>
											<li class="divide"></li>
											<li class="collapsible">
												<a href="#">Menu 3</a>
												<ul>
													<li><a href="#">Web Design</a></li>
													<li><a href="#">Web Development</a></li>
													<li class="divider"></li>
													<li><a href="#">Illustrations</a></li>
												</ul>
											</li>
										</ul>
									</section>
								</div>
							</nav>
						</div>
					</div>
				</div>
				<div class="html">
					<div class="highlight">
						<pre class="prettyprint">
&lt;nav class="navbar-menu"&gt;
   &lt;div class="wrapper"&gt;
      &lt;h2&gt;&lt;a href="#"&gt;Naked&lt;/a&gt;&lt;/h2&gt;
      &lt;section class="topbar pull-right"&gt;
         &lt;ul class="menu"&gt;
            &lt;li class="active"&gt;&lt;a href="#"&gt;Menu 1&lt;/a&gt;&lt;/li&gt;
            &lt;li class="divide"&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#"&gt;Menu 2&lt;/a&gt;&lt;/li&gt;
            &lt;li class="divide"&gt;&lt;/li&gt;
            &lt;li class="collapsible"&gt;
               &lt;a href="#"&gt;Menu 3&lt;/a&gt;
               &lt;ul&gt;
                  &lt;li&gt;&lt;a href="#"&gt;Web Design&lt;/a&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;a href="#"&gt;Web Development&lt;/a&gt;&lt;/li&gt;
                  &lt;li class="divider"&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;a href="#"&gt;Illustrations&lt;/a&gt;&lt;/li&gt;
               &lt;/ul&gt;
            &lt;/li&gt;
         &lt;/ul&gt;
      &lt;/section&gt;
   &lt;/div&gt;
&lt;/nav&gt;
						</pre>
					</div>
				</div>
				<hr>

				<h1 class="title">Navbar</h1>
				<hr>
				<p>
					There are two ways to build pagination in Foundation 4: with our predefined HTML or with our mixin. Building pagination using our predefined classes isn't hard at all. You'll start with an unordered list and add a class of <code>.pagination</code> to it. From there, you just need to add list items with links in them. Those list items have a few options you can use:
				</p>
				<div class="ex-navbar-content">
					<nav class="navbar">
						<div class="row">
							<div class="span-2">
								<a class="back-button" href="#">Back</a>
							</div>
							<div class="span-8">
								<ul class="button-group centered">
									<li><a href="#" class="button">Menu 1</a></li>
									<li><a href="#" class="button">Menu 2</a></li>
								</ul>
							</div>
							<div class="span-2">
								<a href="#" class="icon-menu"></a>
							</div>
						</div>
					</nav>
				</div>
				<div class="html">
					<div class="highlight">
						<pre class="prettyprint">
&lt;nav class="navbar"&gt;
   &lt;div class="row"&gt;
      &lt;div class="span-2"&gt;
         &lt;a class="back-button" href="#"&gt;Back&lt;/a&gt;
      &lt;/div&gt;
      &lt;div class="span-8"&gt;
         &lt;ul class="button-group centered"&gt;
            &lt;li&gt;&lt;a href="#" class="button"&gt;Menu 1&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#" class="button"&gt;Menu 2&lt;/a&gt;&lt;/li&gt;
         &lt;/ul&gt;
      &lt;/div&gt;
      &lt;div class="span-2"&gt;
         &lt;a href="#" class="icon-menu"&gt;&lt;/a&gt;
      &lt;/div&gt;
   &lt;/div&gt;
&lt;/nav&gt;
						</pre>
					</div>
				</div>
			  	<hr>
			  	<h4 class="sub-title">Navbar Label</h4>
				<p>
					Naked CSS forms support prefix and postfix labels, through a versatile approach using special grid properties. You use the Naked CSS columns to define the size of the pre/postfix <code>&lt;span class="postfix"&gt;</code> or <code>&lt;span class="prefix"&gt;</code>. Here are a few examples:
				</p>
				<div class="ex-navbar-content">
					<nav class="navbar">
						<div class="row">
							<div class="span-2">
								<a class="back-button" href="#">Back</a>
							</div>
							<div class="span-8">
								<h6 class="label">Application</h6>
							</div>
							<div class="span-2">
								<a href="#" class="icon-menu"></a>
							</div>
						</div>
					</nav>
				</div>
				<div class="html">
					<div class="highlight">
						<pre class="prettyprint">
&lt;nav class="navbar"&gt;
   &lt;div class="row"&gt;
      &lt;div class="span-2"&gt;
         &lt;a class="back-button" href="#"&gt;Back&lt;/a&gt;
      &lt;/div&gt;
      &lt;div class="span-8"&gt;
         &lt;h6 class="label"&gt;Application&lt;/h6&gt;
      &lt;/div&gt;
      &lt;div class="span-2"&gt;
         &lt;a href="#" class="icon-menu"&gt;&lt;/a&gt;
      &lt;/div&gt;
   &lt;/div&gt;
&lt;/nav&gt;
						</pre>
					</div>
				</div>
			  	<hr>

			  	<h4 class="sub-title">Navbar Label</h4>
				<p>
					Naked CSS forms support prefix and postfix labels, through a versatile approach using special grid properties. You use the Naked CSS columns to define the size of the pre/postfix <code>&lt;span class="postfix"&gt;</code> or <code>&lt;span class="prefix"&gt;</code>. Here are a few examples:
				</p>
				<div class="ex-navbar-content">
					<nav class="navbar">
						<div class="row">
							<div class="span-3">
								<a class="back-button" href="#">Back</a>
							</div>
							<div class="span-6">
								<h6 class="label title">Application</h6>
								<p>Example Application</p>
							</div>
							<div class="span-3">
								<a href="#" class="icon-menu"></a>
							</div>
						</div>
					</nav>
				</div>
				<div class="html">
					<div class="highlight">
						<pre class="prettyprint">
&lt;nav class="navbar"&gt;
   &lt;div class="row"&gt;
      &lt;div class="span-2"&gt;
         &lt;a class="back-button" href="#"&gt;Back&lt;/a&gt;
      &lt;/div&gt;
      &lt;div class="span-8"&gt;
         &lt;h6 class="label title"&gt;Application&lt;/h6&gt;
         &lt;p&gt;Example Application&lt;/p&gt;
      &lt;/div&gt;
      &lt;div class="span-2"&gt;
         &lt;a href="#" class="icon-menu"&gt;&lt;/a&gt;
      &lt;/div&gt;
   &lt;/div&gt;
&lt;/nav&gt;
						</pre>
					</div>
				</div>
			  	<hr>

			  	<h4 class="sub-title">Navbar Search</h4>
				<p>
					Naked CSS forms support prefix and postfix labels, through a versatile approach using special grid properties. You use the Naked CSS columns to define the size of the pre/postfix <code>&lt;span class="postfix"&gt;</code> or <code>&lt;span class="prefix"&gt;</code>. Here are a few examples:
				</p>
				<div class="ex-navbar-content">
					<nav class="navbar">
						<div class="row">
							<div class="span-3">
								<a class="back-button" href="#">Back</a>
							</div>
							<div class="span-6">
								<input type="text" placeholder="Search...">
							</div>
							<div class="span-3">
								<a href="#" class="icon-menu"></a>
							</div>
						</div>
					</nav>
				</div>
				<div class="html">
					<div class="highlight">
						<pre class="prettyprint">
&lt;nav class="navbar"&gt;
   &lt;div class="row"&gt;
      &lt;div class="span-2"&gt;
         &lt;a class="back-button" href="#"&gt;Back&lt;/a&gt;
      &lt;/div&gt;
      &lt;div class="span-8"&gt;
         &lt;input type="text" placeholder="Search..."&gt;
      &lt;/div&gt;
      &lt;div class="span-2"&gt;
         &lt;a href="#" class="icon-menu"&gt;&lt;/a&gt;
      &lt;/div&gt;
   &lt;/div&gt;
&lt;/nav&gt;
						</pre>
					</div>
				</div>
			  	<hr>

			  	<h1 class="title">Tab Strip</h1>
				<hr>
				<p>
					There are two ways to build pagination in Foundation 4: with our predefined HTML or with our mixin. Building pagination using our predefined classes isn't hard at all. You'll start with an unordered list and add a class of <code>.pagination</code> to it. From there, you just need to add list items with links in them. Those list items have a few options you can use:
				</p>
				<div class="ex-tabstrip-content">
					<div class="tabstrip">
						<div class="row">
							<a class="tabspan-2 tabs" href="#">
								<span class="icon star"></span>
								<span>Featured</span>
							</a>
							<a class="tabspan-2 tabs" href="#">
								<span class="icon profile"></span>
								<span>Profile</span>
							</a>
							<a class="tabspan-2 tabs" href="#">
								<span class="icon search"></span>
								<span>Search</span>
							</a>
							<a class="tabspan-2 tabs" href="#">
								<span class="icon more"></span>
								<span>More</span>
							</a>
							<a class="tabspan-2 tabs" href="#">
								<span class="icon more"></span>
								<span>More</span>
							</a>
						</div>
					</div>
				</div>
				<div class="html">
					<div class="highlight">
						<pre class="prettyprint">
&lt;div class="tabstrip"&gt;
   &lt;div class="row"&gt;
      &lt;a class="tabspan-2 tabs" href="#"&gt;
         &lt;span class="icon star"&gt;&lt;/span&gt;
         &lt;span&gt;Featured&lt;/span&gt;
      &lt;/a&gt;
      &lt;a class="tabspan-2 tabs" href="#"&gt;
         &lt;span class="icon profile"&gt;&lt;/span&gt;
         &lt;span&gt;Profile&lt;/span&gt;
      &lt;/a&gt;
      &lt;a class="tabspan-2 tabs" href="#"&gt;
         &lt;span class="icon search"&gt;&lt;/span&gt;
         &lt;span&gt;Search&lt;/span&gt;
      &lt;/a&gt;
      &lt;a class="tabspan-2 tabs" href="#"&gt;
         &lt;span class="icon more"&gt;&lt;/span&gt;
         &lt;span&gt;More&lt;/span&gt;
      &lt;/a&gt;
      &lt;a class="tabspan-2 tabs" href="#"&gt;
         &lt;span class="icon more"&gt;&lt;/span&gt;
         &lt;span&gt;More&lt;/span&gt;
      &lt;/a&gt;
   &lt;/div&gt;
&lt;/div&gt;
						</pre>
					</div>
				</div>

			</div>
		</div>
		
		<?php include ('part-footer.php') ?>

		<?php include ('part-script.php') ?>

	</body>
</html>