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
    <title>Media|Robin Gan--甘翔羽 &raquo; Robingan.org</title>
    <meta charset="UTF-8"/>
    <meta property="og:title" content="Media|Robin Gan--甘翔羽 &raquo; Robingan.org" />
    <meta name="description" content="Robin Gan's media --甘翔羽 I'm a web developer, a robotics software director, a YouTuber, a guitar player, a singer, a cool rapper, and love to freestyle in different languages."/>
    <meta property="og:description" content="Robin Gan's media --甘翔羽 I'm a web developer, a robotics software director, a YouTuber, a guitar player, a singer, a cool rapper, and love to freestyle in different languages."/>
    <?php include( $_SERVER['DOCUMENT_ROOT'] . '/component/headerInfo.php' ); ?>
    <link rel="stylesheet" href="/styles/main.css"/>
    <link rel="stylesheet" href="/styles/descPage.css?<?php echo time(); ?>"/>
    <link rel="stylesheet" href="/styles/media.css"/>
    <link rel="stylesheet" href="/styles/newsAndCookie.css"/>
    <link rel="stylesheet" href="/styles/menu.css"/>
    <link rel="stylesheet" href="/styles/titleFoldedAnimation.css"/>
    <script src='/javascript/thanksForReading.js'></script>
    <script src='/javascript/js.cookie.js'></script>
    <script src="/javascript/indexToggle.js" defer></script>
    <script src="/javascript/newsAndCookieToggle.js" defer></script>
    <script src="/javascript/titleFolded.js" defer></script>
    <script src="/javascript/media.js?<?php echo time(); ?>" defer></script>
  </head>

<body>
  
<?php include( $_SERVER['DOCUMENT_ROOT'] . '/component/menu.php' ); ?>

<div id="content">

  <div class="content-blog">
    <a href="#">
    <i class="fas fa-blog"></i>
    <h2>Data Loading</h2>
    <p>2019.9</p>
    </a>
  </div>  
</div>
<!--project des page
class="projectPageAppear"-->
<div id="projectDesPage" class="desContentFormat projectPageAppear">
    <a onclick="closeDes()" id="close_cross_new" class="btn">
        <span>&#10005;</span>
    </a>
    <h2 id="projectDesPage-title">Data Loading</h2>
    <div id="projectDesPage-content">
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

<?php include( $_SERVER['DOCUMENT_ROOT'] . '/component/newsAndCookie.php' ); ?>

<!--modal_cover-->
<div id="modal_cover" style="display:none;"></div>
</body>   
</html>