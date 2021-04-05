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
    <link rel="stylesheet" href="/styles/newsAndCookie.css?version=123"/>
    <link rel="stylesheet" href="/styles/menu.css"/>
    <link rel="stylesheet" href="/styles/descPage.css?<?php echo time(); ?>"/>
    <link rel="stylesheet" href="/styles/resume.css?version=123"/>
    <script src='/javascript/js.cookie.js'></script>
    <script src="/javascript/indexToggle.js" defer></script>
    <script src="/javascript/titleFolded.js" defer></script>
    <script src="/javascript/resume.js" defer></script>

    <style>
      #progressBar {
        display:none;
      }
    </style>
  </head>
<body>
  
<?php include( $_SERVER['DOCUMENT_ROOT'] . '/component/menu.php' ); ?>

<div id="content" class="desContentFormat">
  <!--H2 is absent due to the project title in project page-->
	<section id="left">
        <h3>Education</h3>
      
        <h4><a href="https://www.smhs.org/">Santa Margarita Catholic HS</a><span>2018 - present</span></h4>
        <ul>
          <li>10th - 12th grade</li>
          <li>GPA: 3.84</li>
        </ul>

        <h4><a href="https://summer.stanford.edu/">UCSD MicroMasters Degree in Data Science</a><span>2020(still in progress)</span></h4>
        <ul>
          <li>DSE200x: Python for Data Science</li>
          <li>DSE210x: Probability and Statistics in Data Science using Python</li>
          <li>DSE220x: Machine Learning Fundamentals</li>
          <li>DSE230x: Big Data Analytics Using Spark</li>
        </ul>

         <h4><a href="https://summer.stanford.edu/">Stanford Summer Session</a><span>2019</span></h4>
        <ul>
          <li>Intensive Studies in CS</li>
          <li>193C: Client-Side Internet Technology</li>
          <li>106B: Programming Abstraction</li>
          <li>Silicon Valley Innovation Academy</li>
        </ul>

        <h4><a href="https://www.rcs.edu/">Redwood Christian HS</a><span>2017 - 2018</span></h4>
        <ul>
          <li>9th grade</li>
        </ul>
        
        <h3 class="sectionBreaker">Current Projects</h3>
        <p>I like to work on different kinds of projects. Code's available on <a href="https://github.com/robingan7">Github</a>.</p>

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
          <li>Display personal schedule for each student for the entire school year.</li>
        </ul>

        <h4><a href="https://docs.google.com/presentation/d/1CmEmyTTcQWOoKHe__kMMSP7wuoT-d7OXuVr9XzpFcHw/edit?usp=sharing">Analysis on predicting COVID-19 cases</a> &mdash; Author & Maintainer<span>2020 - present</span><span><a href="https://github.com/robingan7/Analysis-on-predicting-COVID-19-cases">code</a></span></h4>
        <ul>
          <li>Used Sklearn to model regression model. </li>
          <li>COVID-19 datasets from CSSE by John Hopkins University.</li>
          <li>Used pandas to organize data. </li>
        </ul>

        <h4><a href="https://courseplanner-com.herokuapp.com/">Course Planner</a> &mdash; Author<span>2019 - present</span><span><a href="https://github.com/robingan7/course-planner.com">code</a></span></h4>
        <ul>
          <li>Helps teachers plan their teaching schedule faster and better.</li>
          <li>Used Google API to enable more features.</li>
          <li>Node.js + React.js web application.</li>
        </ul>

        <h3 class="sectionBreaker">Finished Projects</h3>
        <h4><a href="http://team5805.robingan.org">FRC5805 Team Website</a> &mdash; Author & Maintainer<span>2019 - present</span><span><a href="https://github.com/robingan7/team5805.com">code</a></span></h4>
        <ul>
            <li>My <a href="http://team5805.robingan.org">robotics team</a>'s team website.</li>
        </ul>
        <h4><a href="http://u880691907-robingan-org.hostingerapp.com/">Scope</a> &mdash; Author & Maintainer<span>2019 - present</span><span><a href="https://github.com/robingan7/Scope">code</a></span></h4>
        <ul>
            <li>This is the project that makes me realize that I can't do all the work by myself. After hours and hours of effort, I finally could not handle all the code and everything became messy, so I had to stop the project.</li>
            <li>First <abbr>FRC</abbr> online scouting app for all teams.</li>
            <li>Contains customizable features for each team.</li>
        </ul>
        <h4><a href="https://github.com/robingan7/frc5805_2020CodeDemo">Pure Pursuit Robotics Autonomous</a> &mdash; Author<span>2019 - present</span><span><a href="https://github.com/robingan7/frc5805_2020CodeDemo">code</a></span></h4>
        <ul>
          <li>Leading programming topics in <abbr>FRC</abbr> contest.</li>
          <li>Aiming for autonomous awards in 2020.</li>
          <li>Using <abbr>pathfinder</abbr> and <abbr>pure pursuit</abbr> algorithms to build efficient robot auton motion.</li>
        </ul>
        <h4><a href="/project/#Google_Science_Fair_2018">AI Trash Sorter</a> &mdash; Author<span>2018</span><span><a href="https://github.com/robingan7/TrashSort">code</a></span></h4>
        <ul>
          <li>using CNN to recognize recyclable and unrecyclable trash from images.</li>
          <li>Has an <abbr>98%</abbr> validation accuracy after trainig with <abbr>60,000</abbr> images from google.</li>
        </ul>
        
        <h4><a href="/project/#FRC_2019_Public">FRC-2019 Public</a> &mdash; Author<span>2019</span><span><a href="https://github.com/robingan7/FRC-2019-Public">code</a></span></h4>
        <ul>
          <li>Code for 2019 robot <a href="http://team5805.robingan.org/robots">Big Yoshi</a>.</li>
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

        <h4><a href="">CNK Hiphop Club</a> &mdash; Rapper & Beat Maker & Producer<span>2019 - 2021</span></h4>
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

    <h3>Skills</h3>
    <ul>
      <li>Angular.js, React.js, PHP, Node.js</li>
      <li>HTML, JavaScript, CSS</li>
      <li>MongoDB, SQL</li>
      <li>Python, Java</li>
      <li>I'm a quicker learner. I taught myself the skills by using online resources. </li>
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

    <h3>Tiktok & YT</h3>
    <h4><a href="https://www.youtube.com/watch?v=RZJNbo-2GM4">MIT Maker Portfolio</a><span>Jan 2021</span></h4>
    <p><iframe width="350" height="180" src="https://www.youtube.com/embed/Sx0j0_zTTow" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>
    <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@robingan_frc5805/video/6944099767672753414" data-video-id="6944099767672753414" style="max-width: 605px;min-width: 325px;" > <section> <a target="_blank" title="@robingan_frc5805" href="https://www.tiktok.com/@robingan_frc5805">@robingan_frc5805</a> <p>Part2 <a title="coding" target="_blank" href="https://www.tiktok.com/tag/coding">##coding</a>  <a title="codinglife" target="_blank" href="https://www.tiktok.com/tag/codinglife">##codinglife</a> <a title="programmer" target="_blank" href="https://www.tiktok.com/tag/programmer">##programmer</a> <a title="softwareengineer" target="_blank" href="https://www.tiktok.com/tag/softwareengineer">##softwareengineer</a> <a title="fyp" target="_blank" href="https://www.tiktok.com/tag/fyp">##fyp</a> <a title="remix" target="_blank" href="https://www.tiktok.com/tag/remix">##remix</a> <a title="sugarcrash" target="_blank" href="https://www.tiktok.com/tag/sugarcrash">##sugarcrash</a></p> <a target="_blank" title="♬ original sound - Robin Gan" href="https://www.tiktok.com/music/original-sound-6944099586084457222">♬ original sound - Robin Gan</a> </section> </blockquote> <script async src="https://www.tiktok.com/embed.js"></script>
    <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@robingan_frc5805/video/6947051179004153094" data-video-id="6947051179004153094" style="max-width: 605px;min-width: 325px;" > <section> <a target="_blank" title="@robingan_frc5805" href="https://www.tiktok.com/@robingan_frc5805">@robingan_frc5805</a> <p>Applying colleges 1960 vs 2021 <a title="collegeadmissions" target="_blank" href="https://www.tiktok.com/tag/collegeadmissions">##collegeadmissions</a> <a title="collegeapplications" target="_blank" href="https://www.tiktok.com/tag/collegeapplications">##collegeapplications</a> <a title="comdy" target="_blank" href="https://www.tiktok.com/tag/comdy">##comdy</a> <a title="rap" target="_blank" href="https://www.tiktok.com/tag/rap">##rap</a>  <a title="fyp" target="_blank" href="https://www.tiktok.com/tag/fyp">##fyp</a> <a title="foryoupage" target="_blank" href="https://www.tiktok.com/tag/foryoupage">##foryoupage</a></p> <a target="_blank" title="♬ original sound - Robin Gan" href="https://www.tiktok.com/music/original-sound-6947051072280087301">♬ original sound - Robin Gan</a> </section> </blockquote> <script async src="https://www.tiktok.com/embed.js"></script>
   
    <h3 class="sectionBreaker">Other Things I built<br/><small>(for fun and practice)</small></h3>
    <h4><a href="">Arduino LED Control</a><span>2019</span><span><a href="https://www.youtube.com/watch?v=kvAwRCbZrN4">video</a></span></h4>
    <ul>
      <li>Make connection between <abbr>Roborio</abbr> and <abbr>Arduino</abbr>.</li>
      <li>Give driver signal during FRC match.</li>
    </ul>
    
    <h4><a href="/project/#Python_Space_Invader">Python Space Invader</a><span>2018</span><span><a href="https://github.com/robingan7/AP-CS/blob/master/pythongame.py">code</a></span></h4>
    <ul>
      <li>a fun local game can be played simply by copying and running the code in <a href="https://jupyter.org/">jupyter notebook</a>.</li>
      <li>I wrote this game in one day just for fun and practicing with python graphics and UI.</li>
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