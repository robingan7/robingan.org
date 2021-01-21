<?php
?>
<!Doctype html>
<!--
    ____        __    _          ______          
   / __ \____  / /_  (_)___     / ____/___ _____ 
  / /_/ / __ \/ __ \/ / __ \   / / __/ __ `/ __ \
 / _, _/ /_/ / /_/ / / / / /  / /_/ / /_/ / / / /
/_/ |_|\____/_.___/_/_/ /_/   \____/\__,_/_/ /_/ 
                                                 
Thanks for inspecting.|Github @robingan7|Youtube @robin gan                                                                  
-->
<html>
  <head>
    <title>HOME|Robin Gan--甘翔羽 &raquo; Robingan.org</title>
    <meta charset="UTF-8"/>
    <meta property="og:title" content="HOME|Robin Gan--甘翔羽 &raquo; Robingan.org" />
    <meta name="description" content="Robin Gan's home--甘翔羽 I'm a web developer, a robotics software director, a YouTuber, a guitar player, a singer, a cool rapper, and love to freestyle in different languages."/>
    <meta property="og:description" content="Robin Gan's home--甘翔羽 I'm a web developer, a robotics software director, a YouTuber, a guitar player, a singer, a cool rapper, and love to freestyle in different languages." />
    <?php include 'component/headerInfo.php'?>
    <link rel="stylesheet" href="styles/main.css"/>
    <link rel="stylesheet" href="styles/index.css"/>
    <link rel="stylesheet" href="styles/newsAndCookie.css"/>
    <link rel="stylesheet" href="styles/titleFoldedAnimation.css"/>
    <script src='javascript/js.cookie.js'></script>
    <script src="javascript/newsAndCookieToggle.js" defer></script>
    <script src="javascript/index.js" defer></script>
    <script src="javascript/indexToggle.js" defer></script>
    <script src="javascript/indexResize.js" defer></script>
    <!--<script data-ad-client="ca-pub-8604882353540201" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>-->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-162844023-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-162844023-1');
    </script>

  </head>
<body>
    <div id="chassis">
        <div class="icons">
            <a href="mailto:robinganmusic@gmail.com?Subject=Hello%20Robin">
                <i class="fas fa-envelope-open"></i>
            </a>   
            <a href="https://www.tiktok.com/@robingan_frc5805">
                <i class="fab fa-tiktok"></i>
            </a>

            <a href="https://github.com/robingan7">
                <i class="fab fa-github" aria-hidden="true"></i>
            </a>
        
            <a href="https://www.youtube.com/channel/UCjCP4U38X4g9HG1onRKJxlA">
                <i class="fab fa-youtube" aria-hidden="true"></i>
            </a>
        </div>    

        <div class="wrapper">
            <a href="/"><h1 data-heading="Robin Gan">Robin Gan</h1></a>
        </div>
        
        <div id="large-id">
            <div class="container" id="navvv" style="width: 150px; right: 10%;">
                <a href="story">
                    <div class="items">
                        <div class="icon-wrapper">
                        <i class="fas fa-book-open"></i>
                        </div>
                        <div class="project-name">
                        <p>Story</p>
                        </div>
                    </div>
                </a>
                <a href="project">
                    <div class="items">
                        <div class="icon-wrapper">
                        <i class="fas fa-project-diagram"></i>
                        </div>
                        <div class="project-name">
                        <p>Project</p>
                        </div>
                    </div>
                </a>

                <a href="music">
                    <div class="items">
                        <div class="icon-wrapper">
                        <i class="fas fa-compact-disc"></i>
                        </div>
                        <div class="project-name">
                        <p>Music</p>
                        </div>
                    </div> 
                </a>
                
                <a href="media">
                    <div class="items">
                        <div class="icon-wrapper">
                        <i class="fas fa-blog"></i>
                        </div>
                        <div class="project-name">
                        <p>Media</p>
                        </div>
                    </div> 
                </a>
            </div>
        </div>

        <div id="blog" style="top: 20vw; left: 13%;">
            <!--Bio-->
            <div id="container-blog-bio">
                <ul id="blog-image">
                    <li>
                        <a id="imageCon" href="https://www.youtube.com/channel/UCjCP4U38X4g9HG1onRKJxlA">
                            <img id="imageCon-image" src="images/coo.png" alt="title" style="width:160px;"/>
                        </a>
                    </li>
                </ul>    
                <ul id="blog-icon">
                    <li>
                        <a href="bio">
                        <i class="fas fa-user-alt"></i>
                        <h2 class="disappreadWhenHeightIsLow">Bio</h2>
                        <span class="blog-icon-title">Bio</span>
                        </a>
                    </li>
                    <li>
                        <a href="resume">
                        <i class="fas fa-sticky-note"></i>
                        <h2 class="disappreadWhenHeightIsLow">Résumé</h2>
                        <span class="blog-icon-title">Ré-sumé</span>
                        </a>
                    </li>
                    <li id="blog-bio">
                        <a href="https://github.com/robingan7/robingan.org">
                        <i class="fas fa-code disappreadWhenHeightIsLowForWeb"></i>
                        <h2 class="disappreadWhenHeightIsLow" >Web Code</h2>
                        <span class="blog-icon-title">Code</span>
                        </a>
                    </li>
                </ul>    
            </div>
            <!--the blog blog section-->
            <div id="container-blog-blog" style="margin-top:0px;">
                <ul id="blog-blog">
                    <li>
                        <a href="#">
                        <i class="fas fa-blog" aria-hidden="true"></i>
                        <h2>Data Loading</h2>
                        <p>2019.9.9</p>
                        </a>
                    </li>
                </ul>
            </div>

            <!--the blog project section-->
            <div id="container-blog-project" style="margin-top:0px;">
                <ul id="blog-project">
                    <li>
                        <a href="#">
                        <i class="fas fa-project-diagram"></i>
                        <h2>Data Loading</h2>
                        <p>2019.9</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>    

        <!--menu-->
        <div id="webapp_cover">
            <div id="menu_button">
                <input type="checkbox" id="menu_checkbox">
                <label for="menu_checkbox" id="menu_label">
                <div id="menu_text_bar"></div>
                </label>
            </div>
        </div>

        <!--menu nav bar-->
        <div id="large-id-2" style="display:none;">
            <div class="barNav">
                <a href="story">
                    <div class="items">
                        <div class="icon-wrapper">
                        <i class="fas fa-book-open"></i>
                        </div>
                        <div class="project-name">
                        <p>Story</p>
                        </div>
                    </div>
                </a>
                <a href="project">
                    <div class="items">
                        <div class="icon-wrapper">
                        <i class="fas fa-project-diagram"></i>
                        </div>
                        <div class="project-name">
                        <p>Project</p>
                        </div>
                    </div>
                </a>

                <a href="music">
                    <div class="items">
                        <div class="icon-wrapper">
                        <i class="fas fa-compact-disc"></i>
                        </div>
                        <div class="project-name">
                        <p>Music</p>
                        </div>
                    </div> 
                </a>
                
                <a href="media">
                    <div class="items">
                        <div class="icon-wrapper">
                        <i class="fas fa-blog"></i>
                        </div>
                        <div class="project-name">
                        <p>Media</p>
                        </div>
                    </div> 
                </a>
            </div>
        </div>

        <?php include 'component/newsAndCookie.php' ?>
    </div>
    <!--modal_cover-->
    <div id="modal_cover" style="display:none;"></div>
</body>
</html>