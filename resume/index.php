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
    <title>Resume|Robin Gan--甘翔羽 &raquo; Robingan.org</title>
    <meta charset="UTF-8"/>
    <meta property="og:title" content="Resume|Robin Gan--甘翔羽 &raquo; Robingan.org" />
    <meta name="description" content="Robin Gan's resume --甘翔羽 I'm a web developer, a robotics software director, a YouTuber, a guitar player, a singer, a cool rapper, and love to freestyle in different languages."/>
    <meta property="og:description" content="Robin Gan's resume --甘翔羽 I'm a web developer, a robotics software director, a YouTuber, a guitar player, a singer, a cool rapper, and love to freestyle in different languages."/>
    <?php include( $_SERVER['DOCUMENT_ROOT'] . '/component/headerInfo.php' ); ?>
    <link rel="stylesheet" href="/styles/main.css"/>
    <link rel="stylesheet" href="/styles/newsAndCookie.css"/>
    <link rel="stylesheet" href="/styles/menu.css"/>
    <link rel="stylesheet" href="/styles/descPage.css?<?php echo time(); ?>"/>
    <link rel="stylesheet" href="/styles/resume.css"/>
    <script src='/javascript/js.cookie.js'></script>
    <script src="/javascript/indexToggle.js" defer></script>
    <script src="/javascript/newsAndCookieToggle.js" defer></script>
    <script src="/javascript/titleFolded.js" defer></script>
    <script src="/javascript/resume.js" defer></script>
  </head>
<body>
  
<?php include( $_SERVER['DOCUMENT_ROOT'] . '/component/menu.php' ); ?>

<div id="content" class="desContentFormat">
  <!--H2 is absent due to the project title in project page-->
	<section id="left">
        <h3>Education</h3>
        <h4><a href="https://www.rcs.edu/">Redwood Christian HS</a><span>2017 - 2018</span></h4>
        <ul>
          <li>9th grade</li>
        </ul>
       
        <h4><a href="https://www.smhs.org/">Santa Margarita Catholic HS</a><span>2018 - present</span></h4>
        <ul>
          <li>10th - 12th grade</li>
        </ul>

         <h4><a href="https://summer.stanford.edu/">Stanford Summer Session</a><span>2019</span></h4>
        <ul>
          <li>Intensive Studies in CS</li> 
          <li>Silicon Valley Innovation Academy</li> 
        </ul>
        
        <h3 class="sectionBreaker">Current Projects</h3>
        <p>I love to make software. Code is available on <a href="https://github.com/robingan7">Github</a></p>

        <h4><a href="https://coronaware.net/old">Coronaware + AI</a> &mdash; Author & Maintainer<span>2020 - present</span><span><a href="https://github.com/robingan7/coronaware.net">code</a></span></h4>
        <ul>
          <li>A website for viewing cases and trends of coronavirus in <abbr>Orange County</abbr> with graphs, table and AI Prediction.</li>
          <li>Built by me and my friend <a href="http://alexlynd.com">Alex Lynd</a> in one week.</li>
          <li>We will be gathering more data and adding more AI features after the epidemic for preparing for the next epidemic.</li>
          <li>Reached 200+ users in one month.</li>
        </ul>

        <h4><a href="https://seeyourschedule.com">See Your Schedule</a> &mdash; Author & Maintainer<span>2019 - present</span><span><a href="https://github.com/robingan7/seeyourschedule.com">code</a></span></h4>
        <ul>
          <li>Help new students to learn our complicated block schedule.</li>
          <li>On my school webisite as an official tool for students.</li>
          <li>Display personal schedule for each student for the entire school year</li>
        </ul>

        <h4><a href="https://github.com/robingan7/frc5805_2020CodeDemo">Pure Pursuit Robotics Autonomous</a> &mdash; Author<span>2019 - present</span><span><a href="https://github.com/robingan7/frc5805_2020CodeDemo">code</a></span></h4>
        <ul>
          <li>Leading programming topics in <abbr>FRC</abbr> contest.</li>
          <li>Aiming for autonomous awards in 2020.</li>
          <li>Using <abbr>pathfinder</abbr> and <abbr>pure pursuit</abbr> algorithms to build efficient robot auton motion.</li>
        </ul>

        <h4><a href="https://github.com/robingan7/cybersmbly">Cybersmbly</a> &mdash; Author<span>2019 - present</span><span><a href="https://github.com/robingan7/frc5805_2020CodeDemo">code</a></span></h4>
        <ul>
          <li>Simplify version of <a href="https://github.com/wpilibsuite/allwpilib">wpilibsuite</a> for beginner and quick part testing when building the robot</li>
          <li>Shorten the code by 90%, user only needs one java file to program the entire robot.</li>
          <li>Help 60 users so far.</li>
        </ul>

        <h3 class="sectionBreaker">Discontinued Projects</h3>
        <h4><a href="http://u880691907-robingan-org.hostingerapp.com/">Scope</a> &mdash; Author & Maintainer<span>2019 - present</span><span><a href="https://github.com/robingan7/Scope">code</a></span></h4>
        <ul>
            <li>This is the project that makes me realize that I can't do all the work by myself. After hours and hours of effort, I finally could not handle all the code and everything became messy, so I had to stop the project.</li>
            <li>First <abbr>FRC</abbr> online scouting app for all teams.</li>
            <li>Contains customizable features for each team.</li>
        </ul>
        <h4><a href="/project/#Google_Science_Fair_2018">AI Trash Sorter</a> &mdash; Author<span>2018</span><span><a href="https://github.com/robingan7/TrashSort">code</a></span></h4>
        <ul>
          <li>using CNN to recognize recyclable and unrecyclable trash from images.</li>
          <li>Has an <abbr>98%</abbr> validation accuracy after trainig with <abbr>60,000</abbr> images from google.</li>
        </ul>

        <h4><a href="/project/#Python_Space_Invader">Python Space Invader</a> &mdash; Author<span>2018</span><span><a href="https://github.com/robingan7/AP-CS/blob/master/pythongame.py">code</a></span></h4>
        <ul>
          <li>a fun local game can be played simply by copying and running the code in <a href="https://jupyter.org/">jupyter notebook</a>.</li>
          <li>I wrote this game in one day just for fun and practicing with python graphics and UI.</li>
        </ul>

        <h4><a href="/project/#FRC_2019_Public">FRC-2019 Public</a> &mdash; Author<span>2019</span><span><a href="https://github.com/robingan7/FRC-2019-Public">code</a></span></h4>
        <ul>
          <li>Code for 2019 robot <a href="https://smblyrequired.com/">Big Yoshi</a>.</li>
          <li>Using <abbr>PID control</abbr> for smooth arm motion and <abbr>limelight</abbr> library to line up with the feeder and rocket.</li>
        </ul>

        <h3 class="sectionBreaker">Organization</h3>
        <h4><a href="https://www.smhs.org/academics/departments-and-courses/science/robotics">SMbly Required 5805</a> &mdash; Software Director<span>2018 - 2021</span></h4>
        <ul>
          <li>Software Director for 3 years, innovate cycle-base code structure to the team.</li>
          <li>Build <a href="http://team5805.robingan.org/">team website</a> & <a href="http://u880691907-robingan-org.hostingerapp.com/">socuting system</a> & <a href="http://5805docs.robingan.org/">reference site</a>.</li>
          <li>Host <a href="http://5805docs.robingan.org/#workshops">workshops</a> on robtoics programming.</li>
        </ul>

        <h4><a href="http://smtec.000webhostapp.com/">Technology Empowerment Club</a> &mdash; President<span>2018 - 2021</span></h4>
        <ul>
          <li>Lead Programmer & President for 3 years</li>
          <li>Workshops on website programming and basic CS concepts for beginners</li>
        </ul>

        <h4><a href="">CNK Hiphop Club</a> &mdash; Lead MC<span>2019 - 2021</span></h4>
        <ul>
          <li>Vice President for 2 years, build <a href="">club website</a> & my own <a href="https://robingan.org/music">music page</a>.</li>
          <li>Made a diss track to a Chinese TV show in 1 day, and got <abbr>1000+</abbr> views totally in <abbr>3</abbr> days.</li>
        </ul>

        <h4><a href="https://summer.stanford.edu/program/silicon-valley-innovation-academy">SVIA</a> &mdash; Moonshot Designer<span>Summer 2019</span></h4>
        <ul>
            <li>Future waste management.</li>
        </ul>
    </section>

	<section id="right">
    <h3>Contact Info</h3>
    <ul>
      <li>Website: <a href="https://robingan.org/">https://robingan.org</a></li>
      <li>Email: <a href="mailto:">robinganmusic@gmail.com</a></li>
      <li>Social media: <a href="https://www.youtube.com/channel/UCjCP4U38X4g9HG1onRKJxlA">Youtube</a> &middot; <a href="https://www.instagram.com/robingan7">IG</a></li>
    </ul>

    <h3 class="sectionBreaker">Awards</h3>
    <h4><a href="http://www.acsl.org/">American Computer Science League</a><span>2019 - 2021</span><span><a href="https://github.com/robingan7/EvalAI-ngx">code</a></span></h4>
    <ul>
      <li>2nd place in CA<span>2019</span></li>
      <li>28th place in US<span>2019</span></li>
      <li>3rd place in CA<span>2020</span></li>
      <li>15th place in US<span>2020</span></li>
    </ul>

    <h4><a href="https://codein.withgoogle.com/">Google Code-in</a><span>2018 - 2019</span></h4>
    <ul>
      <li>top 15 in <a href="https://codein.withgoogle.com/archive/2018/organization/6209824106741760/">wikimedia section</a><span>2018</span><span><a href="https://github.com/robingan7/ACSL">code</a></span></li>
      <li>made contribution to <a href="https://cloudcv.org/">CloudCV</a>'s <a href="https://evalai.cloudcv.org/">EvalAI project</a><span>2019</span><span><a href="https://github.com/robingan7/ACSL">code</a></span></li>
      <li>the contest was not hosted for 2020<span>2020</span></li>
    </ul>

    <h4><a href="https://www.firstinspires.org/robotics/frc">First Robotics Competition</a><span>2019 - 2021</span></h4>
    <ul>
      <li>Finalist in <a href="https://www.thebluealliance.com/event/2019caoc">OC Regional</a><span>2019</span></li>
      <li>Quarter-Finalist in <a href="https://www.thebluealliance.com/event/2019caln">Los Angeles North Regional</a><span>2019</span></li>
      <li>Quarter-Finalist in <a href="https://www.thebluealliance.com/event/2020cadm">Del Mar Regional</a><span>2020</span></li>
    </ul>

    <h4><a href="https://codingcompetitions.withgoogle.com/codejam">Google Code Jam</a><span>2019 - 2021</span></h4>
    <ul>
      <li>6097th/35600 place in <a href="https://codingcompetitions.withgoogle.com/codejam/round/0000000000051705">Qualification Round</a><span>2019</span></li>
      <li>7350th/44500 place in <a href="https://codingcompetitions.withgoogle.com/codejam/round/000000000019fd27">Qualification Round</a><span>2020</span></li>
      <li>5171th/10300 place in <a href="https://codingcompetitions.withgoogle.com/codejam/round/000000000019fef2">Round 1B</a><span>2020</span></li>
    </ul>

    <h3>Videos & Talks</h3>
    <h4><a href="https://www.youtube.com/watch?v=RZJNbo-2GM4">Scouting APP Description</a><span>Mar 2019</span></h4>
    <p><iframe width="350" height="180" src="https://www.youtube.com/embed/RZJNbo-2GM4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>

    <h4><a href="https://www.youtube.com/watch?v=7J08mPJNM-M">Testing AI Model</a><span>Nov 2018</span></h4>
    <h4><a href="https://www.youtube.com/watch?v=qL1M6FNSRWc">5805 Progress Report</a><span>Feb 2019</span></h4>
    <iframe width="360" height="255" src="https://www.youtube.com/embed/qL1M6FNSRWc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    <h4><a href=" https://youtu.be/5xxgIjL0A8s">Python Game Explanation</a><span>Nov 2018</span></h4>
   
    <h3 class="sectionBreaker">Other Things I built<br/><small>(for fun and practice)</small></h3>
    <h4><a href="">Arduino LED Control</a><span>2019</span><span><a href="https://www.youtube.com/watch?v=kvAwRCbZrN4">video</a></span></h4>
    <ul>
      <li>Make connection between <abbr>Roborio</abbr> and <abbr>Arduino</abbr>.</li>
      <li>Give driver signal during FRC match.</li>
    </ul>    

    <h4><a href="http://dailypython.ml/">Daily Python<small>(DEPRECATED)</small></a><span>2018</span><span><a href="https://github.com/robingan7/dailypython.ml">code</a></span></h4>
    <ul>
      <li>Teach students basic concepts in <abbr>python</abbr></li>
      <li>Stopped because concepts overlapped with many other videos</li>
    </ul>  

    <h3>Languages</h3>
    <h4>Chinese</h4>
    <p>Proficient, my first language</p>

    <h3>I'm also a ...</h3>
    <ul>
      <li>rapper</li>
      <li>guitar player</li>
      <li>singer</li>
      <li>basketball player</li>
      <li>youtuber</li>
      <li>comedy fan</li>
    </ul>

  </section>
</div>

<?php include( $_SERVER['DOCUMENT_ROOT'] . '/component/newsAndCookie.php' ); ?>

<!--modal_cover-->
<div id="modal_cover" style="display:none;"></div>
</body>   
</html>