<!doctype html>
<html lang="en">

	<?php include ('part-head.php') ?>

	<body>

		<?php include ('part-header.php') ?>
		
		<div class="container">
			<div class="wrapper">

				<h1 class="title">List View</h1>
				<hr>
				<p>
					There are two ways to build pagination in Foundation 4: with our predefined HTML or with our mixin. Building pagination using our predefined classes isn't hard at all. You'll start with an unordered list and add a class of <code>.pagination</code> to it. From there, you just need to add list items with links in them. Those list items have a few options you can use:
				</p>
				<div class="ex-list-view-content">
					<div class="wrapper">
						<ul class="listview">
							<li class="list-group-container">
								<h5>Group Title</h5>
								<ul class="list-group">
									<li class="plain">
										<a href="#">
											Menu 1
										</a>
									</li>
									<li class="plain">
										<a href="#">
											Menu 2
										</a>
									</li>
									<li>
										<a href="#">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et tellus vel lacus ullamcorper elementum.
										</a>
									</li>
									<li>
										<a href="#">
											Duis mollis, urna bibendum tincidunt blandit
										</a>
									</li>
									<li>
										<a href="#">
											Sed tristique arcu vitae arcu blandit, nec vulputate dui sagittis. Etiam tincidunt turpis ullamcorper
										</a>
									</li>
									<li>
										<a href="#">
											Proin ut nulla placerat, gravida nunc id, suscipit arcu. Morbi sit amet enim eu sapien feugiat malesuada id sit amet lacus.
										</a>
									</li>
								</ul>
							</li>
							<li class="list-group-container">
								<h5>Group Title</h5>
								<ul class="list-group">
									<li>
										<a class="swipe-toggle">
											Network
											<input class="swipe" type="checkbox" checked />
										</a>
									</li>
									<li>
										<a href="#">
											Line
										</a>
									</li>
									<li>
										<a href="#">
											Song
										</a>
									</li>
									<li>
										<a href="#">
											Videos
										</a>
									</li>
									<li>
										<a href="#">
											Photos
										</a>
									</li>
									<li>
										<a href="#">
											Applications
										</a>
									</li>
									<li>
										<a href="#">
											Capacity
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<div class="html">
					<div class="highlight">
						<pre class="prettyprint">
&lt;ul class="listview"&gt;
   &lt;li class="list-group-container"&gt;
      &lt;h5&gt;Group Title&lt;/h5&gt;
      &lt;ul class="list-group"&gt;
         &lt;li class="plain"&gt;
            &lt;a href="#"&gt;
               Menu 1
            &lt;/a&gt;
         &lt;/li&gt;
         &lt;li class="plain"&gt;
            &lt;a href="#"&gt;
               Menu 2
            &lt;/a&gt;
         &lt;/li&gt;
         &lt;li&gt;
            &lt;a href="#"&gt;
               &hellip;
            &lt;/a&gt;
         &lt;/li&gt;
         &lt;li&gt;
            &lt;a href="#"&gt;
               &hellip;
            &lt;/a&gt;
         &lt;/li&gt;
         &lt;li&gt;
            &lt;a href="#"&gt;
               &hellip;
            &lt;/a&gt;
         &lt;/li&gt;
      &lt;/ul&gt;
   &lt;/li&gt;


   &lt;li class="list-group-container"&gt;
      &lt;h5&gt;Group Title&lt;/h5&gt;
      &lt;ul class="list-group"&gt;
         &lt;li&gt;
            &lt;a class="swipe-toggle"&gt;
               Network
               &lt;input class="swipe" type="checkbox" checked /&gt;
            &lt;/a&gt;
         &lt;/li&gt;
         &lt;li&gt;
            &lt;a href="#"&gt;
               &hellip;
            &lt;/a&gt;
         &lt;/li&gt;
         &lt;li&gt;
            &lt;a href="#"&gt;
               &hellip;
            &lt;/a&gt;
         &lt;/li&gt;
         &lt;li&gt;
            &lt;a href="#"&gt;
               &hellip;
            &lt;/a&gt;
         &lt;/li&gt;
      &lt;/ul&gt;
   &lt;/li&gt;
&lt;/ul&gt;
						</pre>
					</div>
				</div>
				<hr>


				<div class="ex-list-view-content">
					<div class="wrapper">
						<ul class="listview">
							<li class="list-group-container">
								<h5>Group Title</h5>
								<ul class="list-group">
									<li>
										<a href="#">
											Mail
											<span class="sub-title">Mail, Contact Calendars, Notes, Remainders, Documents and 6 more</span>
										</a>
									</li>
									<li>
										<a href="#">
											Line
										</a>
									</li>
									<li>
										<a href="#">
											Song
											<span class="sub-title">22 Hour 45 Minutes 21 Second </span>
										</a>
									</li>
									<li>
										<a href="#">
											Videos
										</a>
									</li>
									<li>
										<a href="#">
											Photos
										</a>
									</li>
									<li>
										<a href="#">
											Applications
										</a>
									</li>
									<li>
										<a href="#">
											Capacity
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<div class="html">
					<div class="highlight">
						<pre class="prettyprint">
&lt;ul class="listview"&gt;
   &lt;li class="list-group-container"&gt;
      &lt;h5&gt;Group Title&lt;/h5&gt;
      &lt;ul class="list-group"&gt;
         &lt;li&gt;
            &lt;a href="#"&gt;
               &hellip;
               &lt;span class="sub-title"&gt;&hellip;&lt;/span&gt;
            &lt;/a&gt;
         &lt;/li&gt;
         &lt;li&gt;
            &lt;a href="#"&gt;
               &hellip;
            &lt;/a&gt;
         &lt;/li&gt;
         &lt;li&gt;
            &lt;a href="#"&gt;
               &hellip;
               &lt;span class="sub-title"&gt;&hellip;&lt;/span&gt;
            &lt;/a&gt;
         &lt;/li&gt;
         &lt;li&gt;
            &lt;a href="#"&gt;
               &hellip;
            &lt;/a&gt;
         &lt;/li&gt;
         &lt;li&gt;
            &lt;a href="#"&gt;
               &hellip;
            &lt;/a&gt;
         &lt;/li&gt;
         &lt;li&gt;
            &lt;a href="#"&gt;
               &hellip;
            &lt;/a&gt;
         &lt;/li&gt;
         &lt;li&gt;
            &lt;a href="#"&gt;
               &hellip;
            &lt;/a&gt;
         &lt;/li&gt;
      &lt;/ul&gt;
   &lt;/li&gt;
&lt;/ul&gt;
						</pre>
					</div>
				</div>
				<hr>



				<h4 class="sub-title">List View Nested</h4>
				<div class="ex-list-view-content">
					<div class="wrapper">
						<ul class="listview nest">
							<li class="list-group-container">
								<h5>Group Title</h5>
								<ul class="list-group">
									<li>
										<a href="#">
											Network
										</a>
										<ul class="nested">
											<li>
												<a href="#">
													Line
												</a>
											</li>
											<li>
												<a href="#">
													Song
												</a>
											</li>
											<li>
												<a href="#">
													Videos
												</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="#">
											Photos
										</a>
									</li>
									<li>
										<a href="#">
											Applications
										</a>
									</li>
									<li>
										<a href="#">
											Capacity
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<div class="html">
					<div class="highlight">
						<pre class="prettyprint">
&lt;ul class="listview nest"&gt;
   &lt;li class="list-group-container"&gt;
      &lt;h5&gt;Group Title&lt;/h5&gt;
      &lt;ul class="list-group"&gt;
         &lt;li&gt;
            &lt;a href="#"&gt;
               Network
            &lt;/a&gt;
            &lt;ul class="nested"&gt;
               &lt;li&gt;
                  &lt;a href="#"&gt;
                     &hellip;
                  &lt;/a&gt;
               &lt;/li&gt;
               &lt;li&gt;
                  &lt;a href="#"&gt;
                     &hellip;
                  &lt;/a&gt;
               &lt;/li&gt;
               &lt;li&gt;
                  &lt;a href="#"&gt;
                     &hellip;
                  &lt;/a&gt;
               &lt;/li&gt;
            &lt;/ul&gt;
         &lt;/li&gt;
         &lt;li&gt;
            &lt;a href="#"&gt;
               Photos
            &lt;/a&gt;
         &lt;/li&gt;
         &lt;li&gt;
            &lt;a href="#"&gt;
               Applications
            &lt;/a&gt;
         &lt;/li&gt;
         &lt;li&gt;
            &lt;a href="#"&gt;
               Capacity
            &lt;/a&gt;
         &lt;/li&gt;
      &lt;/ul&gt;
   &lt;/li&gt;
&lt;/ul&gt;
						</pre>
					</div>
				</div>
				<hr>
				<h4 class="sub-title">List View Icon</h4>
				<div class="ex-list-view-content">
					<div class="wrapper">
						<ul class="listview text">
							<li class="list-group-container">
								<h5>Group Title</h5>
								<ul class="list-group">
									<li>
										<a href="#">
											<img class="icon" src="images/airplane-icon.png" alt="">
											Airplane Mode
										</a>
									</li>
									<li>
										<a href="#">
											<img class="icon" src="images/wifi-icon.png" alt="">
											Wifi
										</a>
									</li>
									<li>
										<a href="#">
											<img class="icon" src="images/bluetooth-icon.png" alt="">
											Bluetooth
										</a>
									</li>
									<li>
										<a href="#">
											<img class="icon" src="images/cellular-icon.png" alt="">
											Cellular
										</a>
									</li>
									<li>
										<a href="#">
											<img class="icon" src="images/hotspot-icon.png" alt="">
											Personal Hotspot
										</a>
									</li>
									<li>
										<a href="#">
											<img class="icon" src="images/phone-icon.png" alt="">
											Carrier
										</a>
									</li>
								</ul>
							</li>
							<li class="list-group-container">
								<h5>Group Title</h5>
								<ul class="list-group">
									<li>
										<a href="#">
											<img class="icon" src="images/notif-icon.png" alt="">
											Notification Center
										</a>
									</li>
									<li>
										<a href="#">
											<img class="icon" src="images/cellular-icon.png" alt="">
											Cellular
										</a>
									</li>
									<li>
										<a href="#">
											<img class="icon" src="images/wifi-icon.png" alt="">
											Wifi
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<div class="html">
					<div class="highlight">
						<pre class="prettyprint">
&lt;ul class="listview text"&gt;
   &lt;li class="list-group-container"&gt;
      &lt;h5&gt;Group Title&lt;/h5&gt;
      &lt;ul class="list-group"&gt;
         &lt;li&gt;
            &lt;a href="#"&gt;
               &lt;img class="icon" src="images/&hellip;"&gt;
               &hellip;
            &lt;/a&gt;
         &lt;/li&gt;
         &lt;li&gt;
            &lt;a href="#"&gt;
               &lt;img class="icon" src="images/&hellip;"&gt;
               &hellip;
            &lt;/a&gt;
         &lt;/li&gt;
         &lt;li&gt;
            &lt;a href="#"&gt;
               &lt;img class="icon" src="images/&hellip;"&gt;
               &hellip;
            &lt;/a&gt;
         &lt;/li&gt;
         &lt;li&gt;
            &lt;a href="#"&gt;
               &lt;img class="icon" src="images/&hellip;"&gt;
               &hellip;
            &lt;/a&gt;
         &lt;/li&gt;
      &lt;/ul&gt;
   &lt;/li&gt;
&lt;/ul&gt;
						</pre>
					</div>
				</div>
				<hr>


				<h4 class="sub-title">List View Icon 2</h4>
				<div class="ex-list-view-content">
					<div class="wrapper">
						<ul class="listview text">
							<li class="list-group-container">
								<h5>Group Title</h5>
								<ul class="list-group">
									<li>
										<a href="#">
											<img class="icon" src="images/airplane-icon.png" alt="">
											<span>Airplane Mode</span>
										</a>
									</li>
									<li>
										<a href="#">
											<img class="icon" src="images/wifi-icon.png" alt="">
											<span>Wifi</span>
											<span class="side">Xinix 3</span>
										</a>
									</li>
									<li>
										<a href="#">
											<img class="icon" src="images/bluetooth-icon.png" alt="">
											<span>Bluetooth</span>
											<span class="side">Off</span>
										</a>
									</li>
									<li>
										<a href="#">
											<img class="icon" src="images/cellular-icon.png" alt="">
											Cellular
										</a>
									</li>
									<li>
										<a href="#">
											<img class="icon" src="images/hotspot-icon.png" alt="">
											<span>Personal Hotspot</span>
											<span class="side">Off</span>
										</a>
									</li>
									<li>
										<a href="#">
											<img class="icon" src="images/phone-icon.png" alt="">
											<span>Carrier</span>
											<span class="side">IND INDOSAT</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="list-group-container">
								<h5>Group Title</h5>
								<ul class="list-group">
									<li>
										<a href="#">
											<img class="icon" src="images/notif-icon.png" alt="">
											Notification Center
										</a>
									</li>
									<li>
										<a href="#">
											<img class="icon" src="images/cellular-icon.png" alt="">
											Cellular
										</a>
									</li>
									<li>
										<a href="#">
											<img class="icon" src="images/wifi-icon.png" alt="">
											Wifi
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<div class="html">
					<div class="highlight">
						<pre class="prettyprint">
&lt;ul class="listview text"&gt;
   &lt;li class="list-group-container"&gt;
      &lt;h5&gt;Group Title&lt;/h5&gt;
      &lt;ul class="list-group"&gt;
         &lt;li&gt;
            &lt;a href="#"&gt;
               &lt;img class="icon" src="images/&hellip;"&gt;
               &lt;span&gt;&hellip;&lt;/span&gt;
               &lt;span class="side"&gt;&hellip;&lt;/span&gt;
            &lt;/a&gt;
         &lt;/li&gt;
         &lt;li&gt;
            &lt;a href="#"&gt;
               &lt;img class="icon" src="images/&hellip;"&gt;
               &lt;span&gt;&hellip;&lt;/span&gt;
               &lt;span class="side"&gt;&hellip;&lt;/span&gt;
            &lt;/a&gt;
         &lt;/li&gt;
         &lt;li&gt;
            &lt;a href="#"&gt;
               &lt;img class="icon" src="images/&hellip;"&gt;
               &lt;span&gt;&hellip;&lt;/span&gt;
               &lt;span class="side"&gt;&hellip;&lt;/span&gt;
            &lt;/a&gt;
         &lt;/li&gt;
         &lt;li&gt;
            &lt;a href="#"&gt;
               &lt;img class="icon" src="images/&hellip;"&gt;
               &lt;span&gt;&hellip;&lt;/span&gt;
               &lt;span class="side"&gt;&hellip;&lt;/span&gt;
            &lt;/a&gt;
         &lt;/li&gt;
      &lt;/ul&gt;
   &lt;/li&gt;
&lt;/ul&gt;
						</pre>
					</div>
				</div>
				<hr>


				<h4 class="sub-title">List View Icon + Mix Text</h4>
				<div class="ex-list-view-content">
					<div class="wrapper">
						<ul class="listview mix">
							<li class="list-group-container">
								<h5>Group Title</h5>
								<ul class="list-group">
									<li>
										<a href="#">
											<img class="icon" src="images/airplane-icon.png" alt="">
											<span class="title-list">Title 1</span>
											<span>
												Proin ut nulla placerat, gravida nunc id, suscipit arcu. Morbi sit amet enim eu sapien feugiat malesuada id sit amet lacus.
											</span>
										</a>
									</li>
									<li>
										<a href="#">
											<img class="icon" src="images/cellular-icon.png" alt="">
											<span class="title-list">Title 2</span>
											<span>
												Pellentesque neque augue, dictum quis nisl id, ultrices rhoncus lectus.
											</span>
										</a>
									</li>
									<li>
										<a href="#">
											<img class="icon" src="images/hotspot-icon.png" alt="">
											<span class="title-list">Title 3</span>
											<span>
												Ut eu erat eros. Suspendisse potenti. Suspendisse vel blandit tortor, at imperdiet augue. Nunc luctus lectus id enim imperdiet accumsan.
											</span>
										</a>
									</li>
									<li>
										<a href="#">
											<img class="icon" src="images/phone-icon.png" alt="">
											<span class="title-list">Title 4</span>
											<span>
												In quis enim eu mauris dapibus dapibus. Maecenas id metus mattis, pulvinar eros id, aliquam dolor. Suspendisse scelerisque tempor tortor non pharetra.
											</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="list-group-container">
								<h5>Group Title</h5>
								<ul class="list-group">
									<li>
										<a href="#">
											<img class="icon" src="images/notif-icon.png" alt="">
											<span class="title-list">Title 5</span>
											<span>
												Duis cursus, est et commodo imperdiet, orci nulla accumsan quam, non congue libero dolor vehicula urna.
											</span>
										</a>
									</li>
									<li>
										<a href="#">
											<img class="icon" src="images/cellular-icon.png" alt="">
											<span class="title-list">Title 6</span>
											<span>
												Donec eget aliquet dolor. Aliquam sollicitudin sapien orci, sit amet aliquam massa malesuada feugiat.
											</span>
										</a>
									</li>
									<li>
										<a href="#">
											<img class="icon" src="images/wifi-icon.png" alt="">
											<span class="title-list">Title 7</span>
											<span>
												Duis porta consectetur tellus, ac cursus leo egestas a. Fusce faucibus lacus eu ante posuere pulvinar.
											</span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<div class="html">
					<div class="highlight">
						<pre class="prettyprint">
&lt;ul class="listview mix"&gt;
   &lt;li class="list-group-container"&gt;
      &lt;h5&gt;Group Title&lt;/h5&gt;
      &lt;ul class="list-group"&gt;
         &lt;li&gt;
            &lt;a href="#"&gt;
               &lt;img class="icon" src="images/&hellip;"&gt;
               &lt;span class="title-list"&gt;Title 1&lt;/span&gt;
               &lt;span&gt;
                  &hellip;
               &lt;/span&gt;
            &lt;/a&gt;
         &lt;/li&gt;
         &lt;li&gt;
            &lt;a href="#"&gt;
               &lt;img class="icon" src="images/&hellip;"&gt;
               &lt;span class="title-list"&gt;Title 2&lt;/span&gt;
               &lt;span&gt;
                  &hellip;
               &lt;/span&gt;
            &lt;/a&gt;
         &lt;/li&gt;
         &lt;li&gt;
            &lt;a href="#"&gt;
               &lt;img class="icon" src="images/&hellip;"&gt;
               &lt;span class="title-list"&gt;Title 3&lt;/span&gt;
               &lt;span&gt;
                  &hellip;
               &lt;/span&gt;
            &lt;/a&gt;
         &lt;/li&gt;
         &lt;li&gt;
            &lt;a href="#"&gt;
               &lt;img class="icon" src="images/&hellip;"&gt;
               &lt;span class="title-list"&gt;Title 4&lt;/span&gt;
               &lt;span&gt;
                  &hellip;
               &lt;/span&gt;
            &lt;/a&gt;
         &lt;/li&gt;
      &lt;/ul&gt;
   &lt;/li&gt;
   &lt;li class="list-group-container"&gt;
      &lt;h5&gt;Group Title&lt;/h5&gt;
      &lt;ul class="list-group"&gt;
         &lt;li&gt;
            &lt;a href="#"&gt;
               &lt;img class="icon" src="images/&hellip;"&gt;
               &lt;span class="title-list"&gt;Title 5&lt;/span&gt;
               &lt;span&gt;
                  &hellip;
               &lt;/span&gt;
            &lt;/a&gt;
         &lt;/li&gt;
         &lt;li&gt;
            &lt;a href="#"&gt;
               &lt;img class="icon" src="images/&hellip;"&gt;
               &lt;span class="title-list"&gt;Title 6&lt;/span&gt;
               &lt;span&gt;
                  &hellip;
               &lt;/span&gt;
            &lt;/a&gt;
         &lt;/li&gt;
         &lt;li&gt;
            &lt;a href="#"&gt;
               &lt;img class="icon" src="images/&hellip;"&gt;
               &lt;span class="title-list"&gt;Title 7&lt;/span&gt;
               &lt;span&gt;
                  &hellip;
               &lt;/span&gt;
            &lt;/a&gt;
         &lt;/li&gt;
      &lt;/ul&gt;
   &lt;/li&gt;
&lt;/ul&gt;
						</pre>
					</div>
				</div>
				<hr>
				<h4 class="sub-title">List View Thumb</h4>
				<div class="ex-list-view-content">
					<div class="wrapper">
						<ul class="listview mix thumb">
							<li class="list-group-container">
								<h5>Group Title</h5>
								<ul class="list-group">
									<li>
										<a href="#">
											<img class="picture" src="images/airplane-icon.png" alt="">
											<span class="title-list">Title 1</span>
											<span>
												Proin ut nulla placerat, gravida nunc id, suscipit arcu. Morbi sit amet enim eu sapien feugiat malesuada id sit amet lacus.
											</span>
										</a>
									</li>
									<li>
										<a href="#">
											<img class="picture" src="images/cellular-icon.png" alt="">
											<span class="title-list">Title 2</span>
											<span>
												Pellentesque neque augue, dictum quis nisl id, ultrices rhoncus lectus.
											</span>
										</a>
									</li>
									<li>
										<a href="#">
											<img class="picture" src="images/hotspot-icon.png" alt="">
											<span class="title-list">Title 3</span>
											<span>
												Ut eu erat eros. Suspendisse potenti. Suspendisse vel blandit tortor, at imperdiet augue. Nunc luctus lectus id enim imperdiet accumsan.
											</span>
										</a>
									</li>
									<li>
										<a href="#">
											<img class="picture" src="images/phone-icon.png" alt="">
											<span class="title-list">Title 4</span>
											<span>
												In quis enim eu mauris dapibus dapibus. Maecenas id metus mattis, pulvinar eros id, aliquam dolor. Suspendisse scelerisque tempor tortor non pharetra.
											</span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<div class="html">
					<div class="highlight">
						<pre class="prettyprint">
&lt;ul class="listview mix thumb"&gt;
   &lt;li class="list-group-container"&gt;
      &lt;h5&gt;Group Title&lt;/h5&gt;
      &lt;ul class="list-group"&gt;
         &lt;li&gt;
            &lt;a href="#"&gt;
               &lt;img class="thumb" src="images/&hellip;"&gt;
               &lt;span class="title-list"&gt;Title 1&lt;/span&gt;
               &lt;span&gt;
                  &hellip;
               &lt;/span&gt;
            &lt;/a&gt;
         &lt;/li&gt;
         &lt;li&gt;
            &lt;a href="#"&gt;
               &lt;img class="thumb" src="images/&hellip;"&gt;
               &lt;span class="title-list"&gt;Title 2&lt;/span&gt;
               &lt;span&gt;
                  &hellip;
               &lt;/span&gt;
            &lt;/a&gt;
         &lt;/li&gt;
         &lt;li&gt;
            &lt;a href="#"&gt;
               &lt;img class="thumb" src="images/&hellip;"&gt;
               &lt;span class="title-list"&gt;Title 3&lt;/span&gt;
               &lt;span&gt;
                  &hellip;
               &lt;/span&gt;
            &lt;/a&gt;
         &lt;/li&gt;
         &lt;li&gt;
            &lt;a href="#"&gt;
               &lt;img class="thumb" src="images/&hellip;"&gt;
               &lt;span class="title-list"&gt;Title 4&lt;/span&gt;
               &lt;span&gt;
                  &hellip;
               &lt;/span&gt;
            &lt;/a&gt;
         &lt;/li&gt;
      &lt;/ul&gt;
   &lt;/li&gt;
&lt;/ul&gt;
						</pre>
					</div>
				</div>
				<hr>
				<h4 class="sub-title">List View Detail</h4>
				<div class="ex-list-view-content">
					<div class="wrapper">
						<ul class="listview mix thumb">
							<li class="list-group-container">
								<h5>Group Title</h5>
								<img class="image" src="images/doraemon.jpg" alt="">
								<ul class="list-group">
									<li>
										<a href="#">
											<img class="picture" src="images/airplane-icon.png" alt="">
											<span class="title-list">Title 1</span>
											<span>
												Proin ut nulla placerat, gravida nunc id, suscipit arcu. Morbi sit amet enim eu sapien feugiat malesuada id sit amet lacus.
											</span>
										</a>
									</li>
									<li>
										<a href="#">
											<img class="picture" src="images/cellular-icon.png" alt="">
											<span class="title-list">Title 2</span>
											<span>
												Pellentesque neque augue, dictum quis nisl id, ultrices rhoncus lectus.
											</span>
										</a>
									</li>
									<li>
										<a href="#">
											<img class="picture" src="images/hotspot-icon.png" alt="">
											<span class="title-list">Title 3</span>
											<span>
												Ut eu erat eros. Suspendisse potenti. Suspendisse vel blandit tortor, at imperdiet augue. Nunc luctus lectus id enim imperdiet accumsan.
											</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="list-group-container">
								<h5>Group Title</h5>
								<img class="image" src="images/cat.jpg" alt="">
								<ul class="list-group">
									<li>
										<a href="#">
											<img class="picture" src="images/airplane-icon.png" alt="">
											<span class="title-list">Title 1</span>
											<span>
												Proin ut nulla placerat, gravida nunc id, suscipit arcu. Morbi sit amet enim eu sapien feugiat malesuada id sit amet lacus.
											</span>
										</a>
									</li>
									<li>
										<a href="#">
											<img class="picture" src="images/cellular-icon.png" alt="">
											<span class="title-list">Title 2</span>
											<span>
												Pellentesque neque augue, dictum quis nisl id, ultrices rhoncus lectus.
											</span>
										</a>
									</li>
									<li>
										<a href="#">
											<img class="picture" src="images/hotspot-icon.png" alt="">
											<span class="title-list">Title 3</span>
											<span>
												Ut eu erat eros. Suspendisse potenti. Suspendisse vel blandit tortor, at imperdiet augue. Nunc luctus lectus id enim imperdiet accumsan.
											</span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<div class="html">
					<div class="highlight">
						<pre class="prettyprint">
&lt;ul class="listview mix thumb"&gt;
   &lt;li class="list-group-container"&gt;
      &lt;h5&gt;Group Title&lt;/h5&gt;
      &lt;img class="image" src="images/&hellip;"&gt;
      &lt;ul class="list-group"&gt;
         &lt;li&gt;
            &lt;a href="#"&gt;
               &lt;img class="thumb" src="images/&hellip;"&gt;
               &lt;span class="title-list"&gt;Title 1&lt;/span&gt;
               &lt;span&gt;
                  &hellip;
               &lt;/span&gt;
            &lt;/a&gt;
         &lt;/li&gt;
         &lt;li&gt;
            &lt;a href="#"&gt;
               &lt;img class="thumb" src="images/&hellip;"&gt;
               &lt;span class="title-list"&gt;Title 2&lt;/span&gt;
               &lt;span&gt;
                  &hellip;
               &lt;/span&gt;
            &lt;/a&gt;
         &lt;/li&gt;
         &lt;li&gt;
            &lt;a href="#"&gt;
               &lt;img class="thumb" src="images/&hellip;"&gt;
               &lt;span class="title-list"&gt;Title 3&lt;/span&gt;
               &lt;span&gt;
                  &hellip;
               &lt;/span&gt;
            &lt;/a&gt;
         &lt;/li&gt;
      &lt;/ul&gt;
   &lt;/li&gt;
   &lt;li class="list-group-container"&gt;
      &lt;h5&gt;Group Title&lt;/h5&gt;
      &lt;img class="image" src="images/&hellip;"&gt;
      &lt;ul class="list-group"&gt;
         &lt;li&gt;
            &lt;a href="#"&gt;
               &lt;img class="thumb" src="images/&hellip;"&gt;
               &lt;span class="title-list"&gt;Title 1&lt;/span&gt;
               &lt;span&gt;
                  &hellip;
               &lt;/span&gt;
            &lt;/a&gt;
         &lt;/li&gt;
         &lt;li&gt;
            &lt;a href="#"&gt;
               &lt;img class="thumb" src="images/&hellip;"&gt;
               &lt;span class="title-list"&gt;Title 2&lt;/span&gt;
               &lt;span&gt;
                  &hellip;
               &lt;/span&gt;
            &lt;/a&gt;
         &lt;/li&gt;
         &lt;li&gt;
            &lt;a href="#"&gt;
               &lt;img class="thumb" src="images/&hellip;"&gt;
               &lt;span class="title-list"&gt;Title 3&lt;/span&gt;
               &lt;span&gt;
                  &hellip;
               &lt;/span&gt;
            &lt;/a&gt;
         &lt;/li&gt;
      &lt;/ul&gt;
   &lt;/li&gt;
&lt;/ul&gt;
						</pre>
					</div>
				</div>
				<hr>
				<h4 class="sub-title">List View Detail Nested</h4>
				<div class="ex-list-view-content">
					<div class="wrapper">
						<ul class="listview mix thumb detail">
							<li class="list-group-container">
								<h5>Group Title</h5>
								<ul class="list-group detail-group">
									<li class="detail-content">
										<img class="image" src="images/doraemon.jpg" alt="">
										<ul class="detail-list">
											<li>
												<a href="#">
													<img class="picture" src="images/airplane-icon.png" alt="">
													<span class="title-list">Title 1</span>
													<span>
														Proin ut nulla placerat, gravida nunc id, suscipit arcu. Morbi sit amet enim eu sapien feugiat malesuada id sit amet lacus.
													</span>
												</a>
											</li>
											<li>
												<a href="#">
													<img class="picture" src="images/airplane-icon.png" alt="">
													<span class="title-list">Title 1</span>
													<span>
														Proin ut nulla placerat, gravida nunc id, suscipit arcu. Morbi sit amet enim eu sapien feugiat malesuada id sit amet lacus.
													</span>
												</a>
											</li>
											<li>
												<a href="#">
													<img class="picture" src="images/airplane-icon.png" alt="">
													<span class="title-list">Title 1</span>
													<span>
														Proin ut nulla placerat, gravida nunc id, suscipit arcu. Morbi sit amet enim eu sapien feugiat malesuada id sit amet lacus.
													</span>
												</a>
											</li>
										</ul>
									</li>
									<li class="detail-content">
										<img class="image" src="images/doraemon.jpg" alt="">
										<ul class="detail-list">
											<li>
												<a href="#">
													<img class="picture" src="images/airplane-icon.png" alt="">
													<span class="title-list">Title 1</span>
													<span>
														Proin ut nulla placerat, gravida nunc id, suscipit arcu. Morbi sit amet enim eu sapien feugiat malesuada id sit amet lacus.
													</span>
												</a>
											</li>
											<li>
												<a href="#">
													<img class="picture" src="images/airplane-icon.png" alt="">
													<span class="title-list">Title 1</span>
													<span>
														Proin ut nulla placerat, gravida nunc id, suscipit arcu. Morbi sit amet enim eu sapien feugiat malesuada id sit amet lacus.
													</span>
												</a>
											</li>
											<li>
												<a href="#">
													<img class="picture" src="images/airplane-icon.png" alt="">
													<span class="title-list">Title 1</span>
													<span>
														Proin ut nulla placerat, gravida nunc id, suscipit arcu. Morbi sit amet enim eu sapien feugiat malesuada id sit amet lacus.
													</span>
												</a>
											</li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<hr>

			</div>
		</div>
		
		<?php include ('part-footer.php') ?>

		<?php include ('part-script.php') ?>

	</body>
</html>