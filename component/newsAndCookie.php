<?php
?>
    <!--loading bar-->
    <div id="progressBar" class="progress-bar">
        <span class="bar">
            <span class="progress"></span>
        </span>
    </div>

    <!--cookie asked-->
    <div id="cookie_asked" style="display:none;">
        <a onclick="replyCookie(false)" id="close_cross" class="btn checkCookie">
            <span>&#10005;</span>
        </a>

        <a onclick="replyCookie(true)" id="check_cross" class="btn checkCookie">
            <span>&#10003;</span>
        </a>

        <h3>This website uses cookies to ensure you get the best experience. Allow?</h3>
    </div>

    <!--lastest News -->
    <div id="lastest_news" class="modalNews">
        <a onclick="closeNews()" id="close_cross_new" class="btn">
            <span>&#10005;</span>
        </a>

        <div class="news_title">
            <i class="fas fa-rss-square"></i>
            <b id="news_title-title">New layout of robingan.ga</b>
            <br/>
            <span id="news_date">2019.8.30</span>
        </div>

        <div class="news_content">
            <div id="news_content_image">
                <a id="imageCon" href="#">
                    <img src="/images/coo.png" alt="title" style="width:160px;"/>
                </a>  
                
                <section class="centered-container">
                    <a onclick="closeNews()" id="lastestNewsLink" class="link link--arrowed" style="color: black;" href="/">View Blog
                        <svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                        <g fill="none" stroke="#caac3d" stroke-width="2.5" stroke-linejoin="round" stroke-miterlimit="10">
                            <circle class="arrow-icon--circle" cx="16" cy="16" r="15.12"></circle>
                            <path class="arrow-icon--arrow" d="M16.14 9.93L22.21 16l-6.07 6.07M8.23 16h13.98"></path>
                        </g>
                        </svg>
                    </a>
                </section>
            </div>

            <div id="news_content_text">
                <p id="news_content_text-content" style="font-size:16px;">
                </p>

                <p class="commonContent" style="margin-bottom:0; font-size:16px;">
                    I'm a programmer and rapper,
                </p>
                <ul>
                    <li style="font-size:16px;">I make creative CS <a href="/project">projects</a>.</li>
                    <li style="font-size:16px;">I write interesting <a href="/media">blogs</a></li>
                    <li style="font-size:16px;">I make fire <a href="/music">raps</a></li>
                    <li style="font-size:16px;">I record cool <a href="/story">stories</a></li>
                </ul>
            </div>
        </div>   
        
        <div id="news_subscribe">
            <input type="email" placeholder="your email" id="news_subscribe_button_email" class="subEmail"/>
            <a onclick="trySub(this)" id="news_subscribe_button" class="btn subBtn">
                <span>Subscribe</span>
            </a>
        </div>
    </div>

    <!--browser does not support-->

    <div id="doesNotSupport" class="modalNews">
        <div class="news_title">
            <!--h1 because of .wrapper h1-->
            <h2>Browser Issue</h2>
        </div>

        <div class="news_content">
            <div id="news_content_image">
                <a id="imageCon" href="#">
                    <img src="/images/coo.png" alt="title" style="width:160px;"/>
                </a>  
                
                <section class="centered-container" onclick="viewAnyWay()">
                    <a class="link link--arrowed" style="color: black;">View Anyway
                        <svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                        <g fill="none" stroke="#caac3d" stroke-width="2.5" stroke-linejoin="round" stroke-miterlimit="10">
                            <circle class="arrow-icon--circle" cx="16" cy="16" r="15.12"></circle>
                            <path class="arrow-icon--arrow" d="M16.14 9.93L22.21 16l-6.07 6.07M8.23 16h13.98"></path>
                        </g>
                        </svg>
                    </a>
                </section>
            </div>

            <div id="news_content_text">
                <p>
                    Your browser can't display this website perfectly... Here are some recommended browsers.
                </p>
                <ul>
                    <li><a href="https://www.google.com/chrome/">Chrome</a></li>
                    <li><a href="https://www.mozilla.org/en-US/firefox/new/">Firefox</a></li>
                    <li><a href="https://www.opera.com/">Opera</a></li>
                    <li><a href="https://www.apple.com/safari/">Safari</a></li>
                    <li><a href="https://blisk.io/">Blisk</a></li>
                </ul>
            </div>
        </div>   
    </div>