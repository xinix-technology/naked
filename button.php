<!doctype html>
<html lang="en">

	<?php include ('part-head.php') ?>

	<body>

		<?php include ('part-header.php') ?>
		
		<div class="container">
			<div class="wrapper">				
				<h1 class="title">Button</h1>
				<p>Button in Naked Css look like this :</p>
				<hr>
				<h4 class="sub-title">Button</h4>
				<div class="row">
					<div class="span-3">
						<p><b>Button</b></p>
						<a href="#" class="button">Button</a>
					</div>
					<div class="span-3">
						<p><b>Button Alert</b></p>
						<a href="#" class="button alert">Alert</a>
					</div>
					<div class="span-3">
						<p><b>Button Success</b></p>
						<a href="#" class="button success">Success</a>
					</div>
					<div class="span-3">
						<p><b>Button Warning</b></p>
						<a href="#" class="button warning">Warning</a>
					</div>
				</div>
				<div class="html">
					<div class="highlight">
						<pre class="prettyprint">
&lt;a href="#" class="button"&gt;Button&lt;/a&gt;

&lt;a href="#" class="button alert"&gt;Alert&lt;/a&gt;

&lt;a href="#" class="button success"&gt;Success&lt;/a&gt;

&lt;a href="#" class="button warning"&gt;Warning&lt;/a&gt;
						</pre>
					</div>
				</div>
				<hr>
				<h4 class="sub-title">Button Round</h4>
				<div class="row">
					<div class="span-3">
						<p><b>Button</b></p>
						<a href="#" class="button round">Button</a>
					</div>
					<div class="span-3">
						<p><b>Button Alert</b></p>
						<a href="#" class="button round alert">Alert</a>
					</div>
					<div class="span-3">
						<p><b>Button Success</b></p>
						<a href="#" class="button round success">Success</a>
					</div>
					<div class="span-3">
						<p><b>Button Warning</b></p>
						<a href="#" class="button round warning">Warning</a>
					</div>
				</div>
				<div class="html">
					<div class="highlight">
						<pre class="prettyprint">
&lt;a href="#" class="button round"&gt;Button&lt;/a&gt;

&lt;a href="#" class="button round alert"&gt;Alert&lt;/a&gt;

&lt;a href="#" class="button round success"&gt;Success&lt;/a&gt;

&lt;a href="#" class="button round warning"&gt;Warning&lt;/a&gt;
						</pre>
					</div>
				</div>
				<hr>
				<h4 class="sub-title">Button Group</h4>
				<p>
					Button groups are great when you need to display a group of actions in a bar. These build off the button styles and work perfectly with the grid.
					There are two ways to build button groups in Naked CSS: with our predefined HTML classes or with our structure and mixins. Building button groups using our predefined classes is a breeze, you'll just wrap a button inside an <code>&lt;ul&gt;</code>. <br><br>

					The button styles will work the same as they do when building a single button, but they'll float next to each other to create a group. You also have access to the same radius classes as buttons, only they'll go on the unordered list instead of the button. You can even make sure the buttons take up even space within the container you put them in.
				</p>
				<ul class="button-group">
					<li><a href="#" class="button">Button 1</a></li>
					<li><a href="#" class="button">Button 2</a></li>
					<li><a href="#" class="button">Button 3</a></li>
				</ul>
				<div class="html">
					<div class="highlight">
						<pre class="prettyprint">
&lt;ul class="button-group"&gt;
   &lt;li&gt;&lt;a href="#" class="button"&gt;Button 1&lt;/a&gt;&lt;/li&gt;
   &lt;li&gt;&lt;a href="#" class="button"&gt;Button 2&lt;/a&gt;&lt;/li&gt;
   &lt;li&gt;&lt;a href="#" class="button"&gt;Button 3&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
						</pre>
					</div>
				</div>
				<hr>
				<h4 class="sub-title">Button Group Round</h4>
				<div class="row">
					<div class="span-6">
						<ul class="button-group round">
							<li><a href="#" class="button">Button 1</a></li>
							<li><a href="#" class="button alert">Button 2</a></li>
						</ul>
					</div>
					<div class="span-6">
						<ul class="button-group round">
							<li><a href="#" class="button">Button 1</a></li>
							<li><a href="#" class="button warning">Button 2</a></li>
						</ul>
					</div>
				</div>
				<div class="html">
					<div class="highlight">
						<pre class="prettyprint">
&lt;ul class="button-group round"&gt;
   &lt;li&gt;&lt;a href="#" class="button"&gt;Button 1&lt;/a&gt;&lt;/li&gt;
   &lt;li&gt;&lt;a href="#" class="button alert"&gt;Button 2&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;

&lt;ul class="button-group round"&gt;
   &lt;li&gt;&lt;a href="#" class="button"&gt;Button 1&lt;/a&gt;&lt;/li&gt;
   &lt;li&gt;&lt;a href="#" class="button warning"&gt;Button 2&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
						</pre>
					</div>
				</div>
				<hr>
				<h4 class="sub-title">Button Bar</h4>
				<p>
					A button bar is a group of button groups (I N C E P T I O N), perfect for situations where you want groups of actions that are all related to a similar element or page. Simply wrap two or more button groups in a <code>.button-bar</code>.
				</p>
				<div class="button-bar">
					<ul class="button-group left">
						<li><a href="#" class="button">Cancel</a></li>
						<li><a href="#" class="button">Submit</a></li>
					</ul>
					<ul class="button-group centered">
						<li><a href="#" class="button">Cancel</a></li>
						<li><a href="#" class="button">Submit</a></li>
					</ul>
					<ul class="button-group right">
						<li><a href="#" class="button">Cancel</a></li>
						<li><a href="#" class="button">Submit</a></li>
					</ul>
					<div style="clear: both;"></div>
				</div>
				<div class="html">
					<div class="highlight">
						<pre class="prettyprint">
&lt;div class="button-bar"&gt;
   &lt;ul class="button-group left"&gt;
      &lt;li&gt;&lt;a href="#" class="button"&gt;Cancel&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#" class="button"&gt;Submit&lt;/a&gt;&lt;/li&gt;
   &lt;/ul&gt;
   &lt;ul class="button-group centered"&gt;
      &lt;li&gt;&lt;a href="#" class="button"&gt;Cancel&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#" class="button"&gt;Submit&lt;/a&gt;&lt;/li&gt;
   &lt;/ul&gt;
   &lt;ul class="button-group right"&gt;
      &lt;li&gt;&lt;a href="#" class="button"&gt;Cancel&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#" class="button"&gt;Submit&lt;/a&gt;&lt;/li&gt;
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