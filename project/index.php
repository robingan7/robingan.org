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
    <title>Project|Robin Gan--甘翔羽 &raquo; Robingan.org</title>
    <meta charset="UTF-8"/>
    <meta property="og:title" content="Project|Robin Gan--甘翔羽 &raquo; Robingan.org" />
    <meta name="description" content="Robin Gan's project --甘翔羽 I'm a web developer, a robotics software director, a YouTuber, a guitar player, a singer, a cool rapper, and love to freestyle in different languages."/>
    <meta property="og:description" content="Robin Gan's project --甘翔羽 I'm a web developer, a robotics software director, a YouTuber, a guitar player, a singer, a cool rapper, and love to freestyle in different languages."/>
    <?php include '../component/headerInfo.php'?>
    <link rel="stylesheet" href="../styles/main.css"/>
    <link rel="stylesheet" href="../styles/project.css"/>
    <link rel="stylesheet" href="../styles/newsAndCookie.css"/>
    <link rel="stylesheet" href="../styles/menu.css"/>
    <link rel="stylesheet" href="../devicons/css/devicons.min.css"/>
    <link rel="stylesheet" href="../styles/titleFoldedAnimation.css"/>
    <link rel="stylesheet" href="/styles/descPage.css?<?php echo time(); ?>"/>
    <script src='../javascript/thanksForReading.js'></script>
    <script src='../javascript/js.cookie.js'></script>
    <script src="../javascript/indexToggle.js" defer></script>
    <script src="../javascript/newsAndCookieToggle.js" defer></script>
    <script src="../javascript/titleFolded.js" defer></script>
    <script src="../javascript/project.js?<?php echo time(); ?>" defer></script>
  </head>

<body>
    <!--menu and cookie-->    
    <?php 
    include '../component/menu.php';
    include '../component/newsAndCookie.php';
    ?>

    <!--project display page-->
    <div id="content">
        <div class="card-container">
            <div class="card" project="data_loading">
                <div class="firstinfo"><img src="../images/logo.png"/>
                    <div class="profileinfo">
                        <h2>Data Loading</h2>
                        <h3>2019.9.12</h3>
                        <p class="bio">Ready for my project</p>
                    </div>
                </div>
            </div>
            <div class="badgescard"> 
                <span class="devicons devicons-django"></span>
                <span class="devicons devicons-python"> </span>
                <span class="devicons devicons-codepen"></span>
                <span class="devicons devicons-javascript_badge"></span>
                <span class="devicons devicons-gulp"></span>
                <span class="devicons devicons-angular"></span>
                <span class="devicons devicons-sass"> </span>
            </div>
        </div>
    </div>

    <!--project des page
    class="projectPageAppear"-->
    <div id="projectDesPage" class="desContentFormat projectPageAppear">
        <a onclick="closeDes()" id="close_cross_new" class="btn">
            <span>&#10005;</span>
        </a>

        <h2 id="projectDesPage-title" class="">Data Loading</h2>
        
        <div id="projectDesPage-content" style="margin-top: 10px;">
            <h3>Loading</h3>
            <div class="loading">
                <div></div>
                <div></div>
                <div></div>
            </div>
        <p>Sorry for having you waiting..</p>
        <p>Go back to <a href="/">home page</a> if this page doesn't show up in 30 seconds. </p>
        </div>
    </div>
    <!--modal_cover-->
    <div id="modal_cover" style="display:none;"></div>
</body>
</html>