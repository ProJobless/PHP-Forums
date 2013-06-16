</div>

<div class="sidebar-s sidebar-right forums-sidebar">

    <?php

    /*
     * NEW category, POST, THREAD  BUTTON
     */
    $url = $_SERVER['REQUEST_URI'];
    $_url = rtrim($url, '/');
    $_url = filter_var($_url, FILTER_SANITIZE_URL);
    $_url = explode('/', $_url);
    $category_id = isset($_url[3]) ? $_url[3] : false;

    if ($this->session->userdata('loggedIn')) {
        if (isset($_url[1]) && $_url[1] == "threads") {
            echo "<form action='/threads/create_thread/$category_id' method=post>
       <input type='submit' value='New thread'>
        </form>";
        } else if (isset($_url[1]) && $_url[1] == "posts") {
            echo "";
        } else {
            echo "  <form action='/site/create_category' method=post>
        <input type='submit' value='New category'  style='width: 100%'>
    </form>";
        }
    }
    ?>

    <!--    <h2 class="box-heading">Mekl?t</h2>

       <div class="content-box">
           <form accept-charset="UTF-8" action="/old_search" class="sidebar-search" method="get">
               <div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;"/>
               </div>
               <input id="term" name="term" placeholder="Search forums" type="text" value=""/>
               <input name="type" type="hidden" value="forums"/>
               <input name="type_id" type="hidden"/>
               <button type="submit" class="image-button search no-margin">Search</button>
           </form>
       </div>-->

    <h2 class="box-heading">Last activity</h2>

    <div class="content-box">
        <div class="sidebar-thread">
            <?php //getLatestPosts(5,$conn);?>
        </div>
    </div>


    <h2 class="box-heading">Registered users</h2>

    <div class="content-box">
        <?php //getRegisteredUsers($conn);?>
    </div>
</div>


</div>
</div>
<div id="copyright">
    <div class="container">
        <!--<a class="logo" href="">logo</a>-->

        <div class="copyright">
            <p>
                <span>COPYRIGHT &copy; 2011 <a href="">CODE - AIVARS</a></span> |
                <span><a href="">DESIGN - THEMEFOREST</a></span>| <!--
                <!--   <span><a href="">SUPPORT/HELP</a></span>|-->
            </p>

            <!-- <p class="trademarks"> PANELIS_9  </p>-->
        </div>
    </div>
</div>
</body>
</html>