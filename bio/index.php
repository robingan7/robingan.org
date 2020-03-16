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
    <title>Bio|Robin Gan--甘翔羽 &raquo; Robingan.org</title>
    <meta charset="UTF-8"/>
    <meta property="og:title" content="Bio|Robin Gan--甘翔羽 &raquo; Robingan.org" />
    <meta name="description" content="Robin Gan's Bio --甘翔羽 I'm a web developer, a robotics software director, a YouTuber, a guitar player, a singer, a cool rap author, and love to freestyle in different languages."/>
    <meta property="og:description" content="Robin Gan's Bio --甘翔羽 I'm a web developer, a robotics software director, a YouTuber, a guitar player, a singer, a cool rap author, and love to freestyle in different languages."/>
    <?php include( $_SERVER['DOCUMENT_ROOT'] . '/component/headerInfo.php' ); ?>
    <link rel="stylesheet" href="/styles/main.css"/>
    <link rel="stylesheet" href="/styles/titleFoldedAnimation.css"/>
    <link rel="stylesheet" href="/styles/newsAndCookie.css"/>
    <link rel="stylesheet" href="/styles/menu.css"/>
    <link rel="stylesheet" href="/styles/descPage.css"?<?php echo time(); ?>/>
    <link rel="stylesheet" href="/styles/bio.css"/>
    <script src='/javascript/js.cookie.js'></script>
    <script src='/javascript/thanksForReading.js'></script>
    <script src="/javascript/indexToggle.js" defer></script>
    <script src="/javascript/newsAndCookieToggle.js" defer></script>
    <script src="/javascript/titleFolded.js" defer></script>
    <script src="/javascript/bio.js?<?php echo time(); ?>" defer></script>
  </head>
<body>
  
<?php include( $_SERVER['DOCUMENT_ROOT'] . '/component/menu.php' ); ?>

<div id="content" class="desContentFormat thanksForReadingFormat">
  <h2>&#127908; Hello, I'm Robin Gan &#128516; &#128516;</h2>

  <!--little bit-->
  <h3>A little bit of myself...</h3>

  <p>
    <a class="thanksForReadingFormat-img" href="https://twitter.com/XiangyuGan">
      <img src="/images/bio/selfe_with_LouDog.jpg" alt="avator" width="250px"/>
    </a>
  </p>

  <p>I'm <a href="/">Xiangyu (Robin) Gan</a>, a high school junior in California, US, a programmer, a robotics library author, and a cool rap author.
  </p>

  <p>I've learned programming for 1 year. I coded websites, contest algorithms, FRC robot and AI. All my code is freely accessible on <a href="https://github.com/robingan7">GitHub</a>. Please let <a href="mailto:xiangyu.gan@robingan.org">me</a> know if there's anything I can improve.
  </p>

  <p>I made school-related app like <a href="https://seeyourschedule.com">See Your Schedule</a>, a online <a href="https://frc-scope.com">scouting app</a> for all FRC teams,  a robotics beginner library <a href="http://cybersmbly.robingan.org">cybersmbly</a>
  ,a cycle-based robotics autonomous project and a <a href="http://5805docs.robingan.org/#programming">reference site</a> for 5805.
  </p>

  <p>
    <a class="thanksForReadingFormat-img" href="https://twitter.com/XiangyuGan">
      <img src="/images/coo.png" alt="avator" width="250px"/>
    </a>
  </p>

  <p>
    Here are other sites and write algorithms I built, a <a href="/project/#Google_Science_Fair_2018">AI Trash Sorter</a> using CNN to sort by scanning images, <a href="http://dailypython.ml/">daily python</a> that taught basic python concepts, <a href="http://5805docs.robingan.org">FRC reference site</a> that helps robotics programmers to find documentations and resources.  
  </p>

  <p>I also have a <a href="https://www.youtube.com/channel/UCjCP4U38X4g9HG1onRKJxlA">youtube channel</a>, where I post robotics and rap videos.
  You can listen to my rap on my <a href="/music">music page</a>. I can freestyle in different languages, which I'm proud of myself ;). I love to perform my music for my teams, family and friends.  
  </p>

  <p>
    I grew up in <a href="https://en.wikipedia.org/wiki/Mianyang">Mianyang</a>, <a href="https://en.wikipedia.org/wiki/Sichuan">Sichuan</a>, China. I was a kid who was curious about everything and always tried to be different, and this is what exactly I am now. I left my hometown for HS in California by myself when I was 14. I‘ve been teaching myself a lot about computer science, and I'm always excited to help my community with my <a href="/project">websites and projects</a>. 
  </p>

  <p>If you enjoyed this post, you can sign up to get an email whenever I write a post:)
    <div id="news_subscribe">
      <input type="email" placeholder="your email" id="news_subscribe_button_thanks_email" class="subEmail"/>
      <a onclick="trySub(this)" id="news_subscribe_button_thanks" class="btn subBtn">
        <p>Subscribe</p>
      </a>
    </div>
  </p>
  
  <!--current blog and project-->
  <h3>My 3 most recent projects </h3>
  <!--the blog project section-->
        <div class="current" style="margin-top:0px;">
            <ul id="current-project">
                <li>
                    <a href="#">
                    <i class="fas fa-project-diagram"></i>
                    <h2>Data Loading</h2>
                    <p>2019.9</p>
                    </a>
                </li>
            </ul>
        </div> 

  <h3>My 3 most recent blogs</h3>
  <!--the blog project section-->
        <div class="current" style="margin-top:0px;">
            <ul id="current-blog">
                <li>
                    <a href="#">
                    <i class="fas fa-blog"></i>
                    <h2>Data Loading</h2>
                    <p>2019.9</p>
                    </a>
                </li>
            </ul>
        </div>         

  <!--interesting facts-->
  <h3>Interesting facts of me...</h3>
  <ul>
    <li>I won a &#127942;from a Chinese national singing contest in <abbr>Beijing</abbr> when I was around <abbr>9</abbr>. Now I can't stand my own voice(it just bad &#128517;).</li>

    <li>I can't pronunce clearly Chinese words end with <abbr>"ao"</abbr> and <abbr>"ti"</abbr> sound such as 
      <a href="https://translate.google.com/#view=home&op=translate&sl=zh-CN&tl=en&text=%E7%94%B5">电</a>, 

      <a href="https://translate.google.com/#view=home&op=translate&sl=zh-CN&tl=en&text=%E6%A2%AF">梯</a>,

      <a href="https://translate.google.com/#view=home&op=translate&sl=zh-CN&tl=en&text=%E5%90%8A">吊</a>,

      <a href="https://translate.google.com/#view=home&op=translate&sl=zh-CN&tl=en&text=%E6%8C%91">挑</a>.
    </li>

    <li>
      I usually practice my rap songs&#127908;in either the choir room or the music classroom when nobody's in there. However, I always scare people who randomly come in <code>because I look and sound very hyped when I rap.</code> &#128526;.
    </li>

    <li>
      I switch from classic music<abbr>&#127929;player</abbr> to a country music <abbr>guitar player</abbr>, and from a guitar player to a <abbr>rapper&#127908;</abbr>. Not a talent person, I'm just trying music that I think it's <abbr>cool</abbr> and <abbr>happy</abbr> when I'm doing it. skr... &#128526;&#128526;&#128526;
    </li>

    <li>
      The first comment I got on my first <a href="https://www.youtube.com/watch?v=o02zidJa01o">rap on youtube</a> is
      <blockquote class="smallBlockQuote">
        <img src="/images/bio/firstComment.png" alt="first cooment"/>
      </blockquote>
    </li>

    <li style="display:none;">I sometimes hide my macbook behind my school tablet during class to write code. My macbook - <abbr>model A1708</abbr> is hided perfectly behind my school tablet - <abbr> Lenovo Thinkpad Yoga</abbr>
    </li>
  </ul>
</div>

<?php include( $_SERVER['DOCUMENT_ROOT'] . '/component/newsAndCookie.php' ); ?>

<!--modal_cover-->
<div id="modal_cover" style="display:none;"></div>
</body>
</html>