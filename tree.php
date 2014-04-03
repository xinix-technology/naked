<!doctype html>
<html lang="en">

    <?php include ('part-head.php') ?>

    <body>

        <?php include ('part-header.php') ?>

        <div class="container">
            <div class="wrapper">

                <h1 class="title">Tree</h1>
                <hr>
                <p>
                    Pure CSS3 Tree
                </p>
                <ul class="tree">
                    <li>
                        <input type="checkbox" id="node-1" checked="checked">
                        <label for="node-1">
                            <a href="#">Tree node #1</a>
                        </label>
                        <ul>
                            <li>
                                <a href="#">Tree subnode #1.1</a>
                            </li>
                            <li>
                                <a href="#">Tree subnode #1.2</a>
                            </li>
                            <li>
                                <a href="#">Tree subnode #1.3</a>
                            </li>
                            <li>
                                <input type="checkbox" id="node-inner-1" checked="checked">
                                <label for="node-inner-1">
                                    <a href="#">Tree node inner #1</a>
                                </label>
                                <ul>
                                    <li>
                                        <a href="#">Tree subnode inner #1.1</a>
                                    </li>
                                    <li>
                                        <a href="#">Tree subnode inner #1.2</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Tree subnode #1.4</a>
                            </li>
                            <li>
                                <a href="#">Tree subnode #1.5</a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <div class="html">
                    <div class="highlight">
                        <pre class="prettyprint">
&lt;ul class="tree"&gt;
   &lt;li&gt;
      &lt;input type="checkbox" id="node-1" checked="checked"&gt;
      &lt;label for="node-1"&gt;
         &lt;a href="#"&gt;Tree node #1&lt;/a&gt;
      &lt;/label&gt;
      &lt;ul&gt;
         &lt;li&gt;
            &lt;a href="#"&gt;Tree subnode #1.1&lt;/a&gt;
         &lt;/li&gt;
         &lt;li&gt;
            &lt;a href="#"&gt;Tree subnode #1.2&lt;/a&gt;
         &lt;/li&gt;
         &lt;li&gt;
            &lt;a href="#"&gt;Tree subnode #1.3&lt;/a&gt;
         &lt;/li&gt;
         &lt;li&gt;
            &lt;input type="checkbox" id="node-inner-1" checked="checked"&gt;
            &lt;label for="node-inner-1"&gt;
               &lt;a href="#"&gt;Tree node inner #1&lt;/a&gt;
            &lt;/label&gt;
            &lt;ul&gt;
               &lt;li&gt;
                  &lt;a href="#"&gt;Tree subnode inner #1.1&lt;/a&gt;
               &lt;/li&gt;
               &lt;li&gt;
                  &lt;a href="#"&gt;Tree subnode inner #1.2&lt;/a&gt;
               &lt;/li&gt;
            &lt;/ul&gt;
         &lt;/li&gt;
         &lt;li&gt;
            &lt;a href="#"&gt;Tree subnode #1.4&lt;/a&gt;
         &lt;/li&gt;
         &lt;li&gt;
            &lt;a href="#"&gt;Tree subnode #1.5&lt;/a&gt;
         &lt;/li&gt;
      &lt;/ul&gt;
   &lt;/li&gt;
&lt;/ul&gt;
                        </pre>
                    </div>
                </div>
            </div>
        </div>

        <?php include ('part-footer.php') ?>

        <?php include ('part-script.php') ?>

    </body>
</html>