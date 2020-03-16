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
    <title>Story|Robin Gan--甘翔羽 &raquo; Robingan.org</title>
    <meta charset="UTF-8"/>
    <meta property="og:title" content="Story|Robin Gan--甘翔羽 &raquo; Robingan.org" />
    <meta name="description" content="Robin Gan's story --甘翔羽 I'm a web developer, a robotics software director, a YouTuber, a guitar player, a singer, a cool rap author, and love to freestyle in different languages."/>
    <meta property="og:description" content="Robin Gan's story --甘翔羽 I'm a web developer, a robotics software director, a YouTuber, a guitar player, a singer, a cool rap author, and love to freestyle in different languages."/>
    <?php include( $_SERVER['DOCUMENT_ROOT'] . '/component/headerInfo.php' ); ?>
    <link rel="stylesheet" href="/styles/main.css"/>
    <link rel="stylesheet" href="/styles/story.css?<?php echo time(); ?>"/>
    <link rel="stylesheet" href="/styles/newsAndCookie.css"/>
    <link rel="stylesheet" href="/styles/menu.css"/>
    <link rel="stylesheet" href="/styles/titleFoldedAnimation.css"/>
    <script src='/javascript/js.cookie.js'></script>
    <script src="/javascript/indexToggle.js" defer></script>
    <script src="/javascript/newsAndCookieToggle.js" defer></script>
    <script src="/javascript/titleFolded.js" defer></script>
    <script src="/javascript/story.js?<?php echo time(); ?>" defer></script>
  </head>

<body>
  
<?php include( $_SERVER['DOCUMENT_ROOT'] . '/component/menu.php' ); ?>
<a href="/data/storyData.xml" id="xmlLink"><i class="fas fa-rss" id="xml"></i></a>

<div class="container">
	<div class="timeline-item" date-is='2003'>
		<h2>Data is still loading</h2>
		<p>
			Ready for my story
    </p>
  </div>
</div>

<div class="timeline-item active" id="mock" style="display:none" date-is='2003'>
	<h2>mock</h2>
		<p>
			mock
  </p>
</div>

<?php include( $_SERVER['DOCUMENT_ROOT'] . '/component/newsAndCookie.php' ); ?>

<!--modal_cover-->
<div id="modal_cover" style="display:none;"></div>
</body>   
</html>