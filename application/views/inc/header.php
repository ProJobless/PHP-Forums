<html>
<head>
    <title>Forum made by Aivars</title>

    <script type="text/javascript" src="<?php echo base_url(); ?>js/loginBox.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>js/textLengthCounter.js"></script>
    <link href="<?php echo base_url() ?>css/style.css" rel="stylesheet" type="text/css"/>
    <body>
</head>

<header>
    <div class="container">

        <!--<a href="/" class="marketplace"><img alt="ThemeForest"
                                              src="http://2.envato-static.com/assets/themeforest/logo-dark-8e9f520f0a87ee3b0d94dd0fdd289e59.png"
                                              title="ThemeForest"/></a>-->

        <?php
        /*
         * Variables(names) that must be used: username(text), password(text), login(submit button)
         * Action path: /content/user/index.php
         * Logout path: /content/user/logout.php
         */

        if (!$this->session->userdata('loggedIn')) {
            echo '
              <div class="account-wrapper">
            <ul id="user-account-nav">
                <li class="create-account">
                    <a href="/user/register"><span>Create an account</span></a>
                </li>
                <li>
                    <a class="signin" href="javascript:void(0);">Sign in</a>
                    <div class="login-box">
                        <form method="post" action="/user/login">
                            Username <br />
                            <input onclick="this.value=\'\'" type="text" name="username" /><br />
                            Password <br />
                            <input onclick="this.value=\'\'" type="password" name="password" /><br />
                            <br />
                           <input type=submit name=login value="Login">
                        </form>
                    </div>

                </li>
            </ul>
        </div>
           ';
        } else {
            echo '
              <div class="account-wrapper">
            <ul id="user-account-nav">
                <li class="create-account">
                    <a href=""><span>View profile</span></a>
                </li>
                <li>
                    <a href="/user/logout">Logout</a>
                </li>
            </ul>
        </div>
           ';
        }

        ?>



        <!--   <ul class="info-nav">
              <li><a href="">asdasd</a>

                  <div class="dropdown">
                      <ul>
                          <li><a href="">asd</a></li>
                      </ul>
                  </div>
              </li>
          </ul>-->


    </div>
</header>
<nav role="navigation" class="clearfix">
    <ul class="main-nav">
        <li>
            <a href="/">FORUMS</a>

            <div class="dropdown">
                <ul>
                    <li><a href="/">FORUMS</a></li>
                </ul>
            </div>
        </li>
        <!-- <li class="search-container">
            <form accept-charset="UTF-8" action="/search" id="search" method="get">
                <div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;"/></div>
                <input autocomplete="off" id="term" name="term" placeholder="Start Searching �" type="text" value=""/>
                <button type="submit" class="image-button search no-margin">Search</button>
            </form>
        </li>-->
    </ul>
</nav>

<div class="page-info">
    <div class="container">
        <div id="breadcrumbs">

            <?php $this->functions->displayBreadCrumbs(); ?>

        </div>


    </div>


    <div id="page-tabs">
        <ul>
            <li class="selected" id="all-topics-tab">
                <div></div>
                <a href="">Visas kategorijas</a></li>
            <li class="" id="themeforest-tab">
                <div></div>
                <a href="">Citas kategorijas</a></li>
            <li class="last">
                <div></div>
                <a href="">Citas kategorijas</a>

                <div class="last"></div>
            </li>
        </ul>

    </div>
</div>

<div id="content">
    <div class="container">

        <div class="content-l">


