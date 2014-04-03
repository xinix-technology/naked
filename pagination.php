<!doctype html>
<html lang="en">

	<?php include ('part-head.php') ?>

	<body>

		<?php include ('part-header.php') ?>
		
		<div class="container">
			<div class="wrapper">

				<h1 class="title">Pagination</h1>
				<hr>
				<p>
					There are two ways to build pagination in Foundation 4: with our predefined HTML or with our mixin. Building pagination using our predefined classes isn't hard at all. You'll start with an unordered list and add a class of <code>.pagination</code> to it. From there, you just need to add list items with links in them. Those list items have a few options you can use:
				</p>
				<ul>
					<li>Add a class of <code>.unavailable</code> to a list item to make it not clickable, like for the ellipsis in the middle.</li>
					<li>The page numbers and symbols are always inside of an anchor that you'll link to the page.</li>
				</ul>
				<ul class="pagination">
					<li class="arrow-first"><a href="#">|&lt;</a></li>
					<li class="prev"><a href="#">&lt;</a></li>
					<li class="active"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li class="unavailable"><a href="#">&hellip;</a></li>
					<li><a href="#">9</a></li>
					<li><a href="#">10</a></li>
					<li><a href="#">11</a></li>
					<li class="next"><a href="#">&gt;</a></li>
					<li class="arrow-last"><a href="#">&gt;|</a></li>
				</ul>
				<div class="html">
					<div class="highlight">
						<pre class="prettyprint">
&lt;ul class="pagination"&gt;
   &lt;li class="arrow-first"&gt;&lt;a href="#"&gt; |&lt; &lt;/a&gt;&lt;/li&gt;
   &lt;li class="prev"&gt;&lt;a href="#"&gt; &lt; &lt;/a&gt;&lt;/li&gt;
   &lt;li class="active"&gt;&lt;a href="#"&gt;1&lt;/a&gt;&lt;/li&gt;
   &lt;li&gt;&lt;a href="#"&gt;2&lt;/a&gt;&lt;/li&gt;
   &lt;li&gt;&lt;a href="#"&gt;3&lt;/a&gt;&lt;/li&gt;
   &lt;li class="unavailable"&gt;&lt;a href="#"&gt;&hellip;&lt;/a&gt;&lt;/li&gt;
   &lt;li&gt;&lt;a href="#"&gt;9&lt;/a&gt;&lt;/li&gt;
   &lt;li&gt;&lt;a href="#"&gt;10&lt;/a&gt;&lt;/li&gt;
   &lt;li&gt;&lt;a href="#"&gt;11&lt;/a&gt;&lt;/li&gt;
   &lt;li class="next"&gt;&lt;a href="#"&gt; &gt; &lt;/a&gt;&lt;/li&gt;
   &lt;li class="arrow-last"&gt;&lt;a href="#"&gt; &gt;| &lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
						</pre>
					</div>
				</div>
				<hr>
				<h4 class="sub-title">Centered Pagination</h4>
				<p>
					In some instances, you'll want you pagination to be centered within a container. We've got you covered! Just wrap your unordered list in something that has a defined width and add the class, <code>.centered</code>.
				</p>
				<ul class="pagination centered">
					<li class="arrow-first"><a href="#">|&lt;</a></li>
					<li class="prev"><a href="#">&lt;</a></li>
					<li class="active"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li class="unavailable"><a href="">&hellip;</a></li>
					<li><a href="#">8</a></li>
					<li><a href="#">9</a></li>
					<li><a href="#">10</a></li>
					<li class="next"><a href="#">&gt;</a></li>
					<li class="arrow-last"><a href="#">&gt;|</a></li>
				</ul>
				<div class="html">
					<div class="highlight">
						<pre class="prettyprint">
&lt;ul class="pagination centered"&gt;
   &lt;li class="arrow-first"&gt;&lt;a href="#"&gt; |&lt; &lt;/a&gt;&lt;/li&gt;
   &lt;li class="prev"&gt;&lt;a href="#"&gt; &lt; &lt;/a&gt;&lt;/li&gt;
   &lt;li class="active"&gt;&lt;a href="#"&gt;1&lt;/a&gt;&lt;/li&gt;
   &lt;li&gt;&lt;a href="#"&gt;2&lt;/a&gt;&lt;/li&gt;
   &lt;li&gt;&lt;a href="#"&gt;3&lt;/a&gt;&lt;/li&gt;
   &lt;li class="unavailable"&gt;&lt;a href="#"&gt;&hellip;&lt;/a&gt;&lt;/li&gt;
   &lt;li&gt;&lt;a href="#"&gt;8&lt;/a&gt;&lt;/li&gt;
   &lt;li&gt;&lt;a href="#"&gt;9&lt;/a&gt;&lt;/li&gt;
   &lt;li&gt;&lt;a href="#"&gt;10&lt;/a&gt;&lt;/li&gt;
   &lt;li class="next"&gt;&lt;a href="#"&gt; &gt; &lt;/a&gt;&lt;/li&gt;
   &lt;li class="arrow-last"&gt;&lt;a href="#"&gt; &gt;| &lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
						</pre>
					</div>
				</div>
				<hr>
				<h4 class="sub-title">Mix Pagination</h4>
				<p>
					In some instances, you'll want you pagination to be centered within a container. We've got you covered! Just wrap your unordered list in something that has a defined width and add the class, <code>.pagination-mix</code>.
				</p>
				<div class="pagination-mix">
					<ul class="pagination left">
						<li class="arrow-first"><a href="#">|&lt;</a></li>
						<li class="prev"><a href="#">&lt;</a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">6</a></li>
						<li class="next"><a href="#">&gt;</a></li>
						<li class="arrow-last"><a href="#">&gt;|</a></li>
					</ul>
					<ul class="pagination centered">
						<li class="arrow-first"><a href="#">|&lt;</a></li>
						<li class="prev"><a href="#">&lt;</a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">6</a></li>
						<li class="next"><a href="#">&gt;</a></li>
						<li class="arrow-last"><a href="#">&gt;|</a></li>
					</ul>
					<ul class="pagination right">
						<li class="arrow-first"><a href="#">|&lt;</a></li>
						<li class="prev"><a href="#">&lt;</a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">6</a></li>
						<li class="next"><a href="#">&gt;</a></li>
						<li class="arrow-last"><a href="#">&gt;|</a></li>
					</ul>
				</div>
				<div class="html">
					<div class="highlight">
						<pre class="prettyprint">
&lt;div class="row pagination-mix"&gt;
    &lt;ul class="pagination left"&gt;
      &lt;li class="arrow-first"&gt;&lt;a href="#"&gt; |&lt; &lt;/a&gt;&lt;/li&gt;
      &lt;li class="prev"&gt;&lt;a href="#"&gt; &lt; &lt;/a&gt;&lt;/li&gt;
      &lt;li class="active"&gt;&lt;a href="#"&gt;1&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;2&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;3&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;4&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;5&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;6&lt;/a&gt;&lt;/li&gt;
      &lt;li class="next"&gt;&lt;a href="#"&gt; &gt; &lt;/a&gt;&lt;/li&gt;
      &lt;li class="arrow-last"&gt;&lt;a href="#"&gt; &gt;| &lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;ul class="pagination centered"&gt;
      &lt;li class="arrow-first"&gt;&lt;a href="#"&gt; |&lt; &lt;/a&gt;&lt;/li&gt;
      &lt;li class="prev"&gt;&lt;a href="#"&gt; &lt; &lt;/a&gt;&lt;/li&gt;
      &lt;li class="active"&gt;&lt;a href="#"&gt;1&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;2&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;3&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;4&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;5&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;6&lt;/a&gt;&lt;/li&gt;
      &lt;li class="next"&gt;&lt;a href="#"&gt; &gt; &lt;/a&gt;&lt;/li&gt;
      &lt;li class="arrow-last"&gt;&lt;a href="#"&gt; &gt;| &lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;ul class="pagination right"&gt;
      &lt;li class="arrow-first"&gt;&lt;a href="#"&gt; |&lt; &lt;/a&gt;&lt;/li&gt;
      &lt;li class="prev"&gt;&lt;a href="#"&gt; &lt; &lt;/a&gt;&lt;/li&gt;
      &lt;li class="active"&gt;&lt;a href="#"&gt;1&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;2&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;3&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;4&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;5&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;6&lt;/a&gt;&lt;/li&gt;
      &lt;li class="next"&gt;&lt;a href="#"&gt; &gt; &lt;/a&gt;&lt;/li&gt;
      &lt;li class="arrow-last"&gt;&lt;a href="#"&gt; &gt;| &lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
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