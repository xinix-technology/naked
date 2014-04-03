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
            <h1 class="title">Context Menu</h1>
            <hr>
            <ul class="context-menu">
               <li>
                  <a href="#">Design</a>
               </li>
               <li>
                  <a href="#">Web Design</a>
               </li>
               <li>
                  <a href="#">Web Development</a>
               </li>
               <li class="divider"></li>
               <li>
                  <a href="#">Illustrations</a>
               </li>
               <li>
                  <a href="#">Designer</a>
               </li>
            </ul>
            <div class="html">
               <div class="highlight">
               <pre class="prettyprint">
&lt;ul class="context-menu"&gt;
   &lt;li&gt;
      &lt;a href="#"&gt;Web Design&lt;/a&gt;
   &lt;/li&gt;
   &lt;li&gt;
      &lt;a href="#"&gt;Web Development&lt;/a&gt;
   &lt;/li&gt;
   &lt;li class="divider"&gt;&lt;/li&gt;
   &lt;li&gt;
      &lt;a href="#"&gt;Illustrations&lt;/a&gt;
   &lt;/li&gt;
   &lt;li&gt;
      &lt;a href="#"&gt;Designer&lt;/a&gt;
   &lt;/li&gt;
&lt;/ul&gt;
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