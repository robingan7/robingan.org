### Intro

Strongly recommend reading this
[blog](/media/#Why_do_scouting_apps_matter?), where I talk about how
scouting works in [FRC(First Robotics
Competition)](https://www.firstinspires.org/robotics/frc) events and the
significance of a working scouting website or app for a team.

It's the mother of [Scope](/project/#Scope). It has scouting
forms that are specific for FRC competition **2019**. It is easy to use
and can analyze data, rank teams, make charts from data user scout. It
saved lots of time from putting data in excel then sorting data. It
worked very well in 2019 season in my [team](https://smblyrequired.com).

#### How did I start

There was one night, my robotics mentors were talking about how nice it
will be if we had a scouting app last year. I heard their talking so I
jumped in and said I will make one. So that became my new project. I
made it from scratch using multiple languages. It took me 4 months to
finish it since I was the only web developer on the team.

The domain **frcscouting.ga** was expired December 8, 2019. So the
website is on its original domain -
**[https://frcscouting.000webhostapp.com](https://frcscouting.000webhostapp.com)**.

### Frontend

#### Toggle pages website

I was planning to do a [single page
website](https://en.wikipedia.org/wiki/Single-page_application).
However, **I think I comprehended the concept wrong.** The website
turned out to be an interface with some toggle div, which worked fine
but you can't call it a single-page website. The code looks like this,

    function toggleEdit(cls) {
        let ele = document.getElementById(cls);
        ele.classList.toggle('active');
    }

    function toggleChoose(cls) {
        let ele = document.getElementById(cls);
        ele.classList.toggle('active');
    }

    function toggleChart(cls) {
        let ele = document.getElementById(cls);
        ele.classList.toggle('active');
    }

                

#### The 4 sections

There are 4 parts in frontend design,

-   **Teams:** compare teams data in tables and graphs. For genrating
    graphs out of the data, I tried [chart.js](https://www.chartjs.org/)
    API which worked very well. **All the tables in this projects is
    coded from scratch**, I wish I used more API that would save me tons
    of time of binding data into compatible HTML.

    ![compare](https://robingan.org/images/project/frcscouting.ga/chart.gif)
    ![chart](https://robingan.org/images/project/frcscouting.ga/compare.gif)

-   **Explore:** this page is where scouts view ranking and most of the
    data from scouting in events. The users are able to switch between
    by Matchs and by Teams by clicking the buttons. It also got tables
    with fixed Team Number column. Although the color is a little bit
    odd, it is easy to read. The embed [Blue
    Alliance](https://www.thebluealliance.com/) page saved scouts time
    from switching between tabs.

    ![explore](https://robingan.org/images/project/frcscouting.ga/explore.gif)

-   **Update info:**

    When you click on Update Info, a small window asking for `Edit Code`
    should pop up. The password is `3`, and the verifying is done by
    javascript so you can find out the password if you inspect the web
    page. I made it this way because I really didn't know that users can
    view all the HTML, CSS and JS code. 😅

    ![password](https://robingan.org/images/project/frcscouting.ga/password.png)

    Once you submit the correct password, it should take you to this
    page below. The two blue buttons are used for adding data. And all
    the green buttons are data added and can be edited by scouts.

    ![update\_info](https://robingan.org/images/project/frcscouting.ga/update_info.png)

    `Add New Match` & `Add Team` contains two forms I designed for pit
    scouting & match scouting. They're the most important part of this
    website becasue they're where scouts entered all the data.

    ![teamForm](https://robingan.org/images/project/frcscouting.ga/teamForm.gif)
    ![matchForm](https://robingan.org/images/project/frcscouting.ga/matchForm.gif)

    Scouts from my team really like the rocket and cargoship in the
    match form because they were very easy to use and recognize.

-   **About us:** just a link to our team
    [website](https://smblyrequired.com/).

### Backend

It is the second website I made that requires backend. Like the frontend
in [robingan.ga](/project/#robingan.ga), I wasted lots of time writing
inefficient and messy code. Luckily, they worked but it is impossible
for other people to maintain the website. But I learned from my
mistakes, and all the problems are fixed in the new version --
[frc-scope.com](/project/#Scope)

#### Highlight

Second time worked with MYSQL database & PHP. This website contains a
lot of regular inserting, adding and editing data. I won't talk about
these parts, instead, I will focus on **chart.js** API and
**mulit-columns sorting**, which are two interesting topics for this
project.

#### Chart.js API

As you see in fronend part of this article, the website can graphing the
data(such as total cargo point) of a specific ability of a specific
data(such as total cargo point) in a a specific event. This neat graph
API is called [chart.js](https://www.chartjs.org/).

**First,** I put `event listener` on each select bar to send value to
`load_graph(teamNumber, region, data)` method,

    //team number 
    $('#chteamnumber').change(function () {
        var con1 = $('#chteamnumber').val();
        var con2 = $('#chregion').val();
        var con3 = $('#chfeature').val();
        load_graph(con1, con2, con3);
    });

    //region
    $('#chregion').change(function () {
        var con1 = $('#chteamnumber').val();
        var con2 = $('#chregion').val();
        var con3 = $('#chfeature').val();
        load_graph(con1, con2, con3);
    });

    //data type such as total cargo point
    $('#chfeature').change(function () {
        var con1 = $('#chteamnumber').val();
        var con2 = $('#chregion').val();
        var con3 = $('#chfeature').val();
        load_graph(con1, con2, con3);
    });

                

**Second**, `load_graph(teamNumber, region, data)` method sends data to
`graph.php`, which queries data from mysql database, with
[ajax](https://en.wikipedia.org/wiki/Ajax_%28programming%29). After it
gets responses from database, it displays the graphs on the screen.

    function load_graph(teamNumber, region, data) {
        $.ajax({
            url: "graph.php",
            method: "POST",
            data: {
                teamNumber: teamNumber,
                region: region,
                data: data
            },
            success: function (data) {
                $('#graphresult').html(data);
            }
        });
    }

                

**Finally**, `graph.php` queries from databae and converts the data into
JSON that [chart.js](https://www.chartjs.org/) can read. It responses to
`load_graph(teamNumber, region, data)` method as soon as it gets the
result.

    //query data from database
    $query = /* sql query statement */;
    $result = mysqli_query($conn, $query);
    $result2 = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_array($result)) {
        $data1 = $data1 . '"'. $row[$con3].'",';
    }

    while ($row2 = mysqli_fetch_array($result2)) {
        $data2 = $data2 . '"Match '. 
                 $row2["matchnumber"].'",';
    }

    //convert data in chart.js format
    $data1 = trim($data1, ",");   
    $data2 = trim($data2, ",");
     
    $output='
    <div class="chart-container" style="">    
    <canvas id="myChart"></canvas>
    </div>
    <script src="Chart.min.js"></script>
    <script>

    //myChart is a DOM element
    var ctx = myChart.getContext("2d");
    var myChart = new Chart(ctx, {
        type: "line",
        data: {
            labels: ['.$data2.'],
            datasets: [{
                label: "'.$con1." ".$con2." "
                        .$con3.'",
                data: ['.$data1.'],
                backgroundColor:  "black",
                borderColor:"black",
                borderWidth: 2,
                pointBackgroundColor:"yellow"
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
    </script>';
    }

    //response to load_graph method
    echo $output;
    }

                

#### Mulit-columns Sorting

In explore page, you might notice there're three selects bars on top.
They're for mulitple sorting, which gives more options on ranking and
evaluating team data.

Here is how it works. The first select bar on the left is first priority
data(I called it conditon1), the rest of two become second proioity and
third proioity data. When you select the first bar, the data you want
will move to the first column. In this pattern, second data will move
the second column, and third data will move to the thrid column. Like
this,

![mutliple\_column](https://robingan.org/images/project/frcscouting.ga/mutliple_column.gif)

The way of sending requests to database is same as chart.js
implementation, which includes using `load_rank(con1,con2,con3)`. So I
will only explain the PHP part -- `loadrank.php`.

This is query command to the database,

    //SQL query command
    $query = "SELECT * FROM teams ORDER BY `teams`.`$condition1` DESC, `$condition2` DESC, `$condition3` DESC;";

                

But of the the speical cases is that the user might not choose three
data, sometimes they only choose the first two or the last two. So the
code need to be able to handle this case. I was kind of smart that I
created a `nothing` column in my database table. Every row has the same
value in that column so that it doesn't do anything in ranking. The code
becomes this,

    //SQL query command
    if($con1 == ""){
        $con1 = "nothing";
    }
    if($con2 == ""){
        $con2 = "nothing";
    }
    if($con3 == ""){
        $con3 = "nothing";
    }
    $query = /* sql query statement */;

                

After that, I used a `for loop` to generate HTML with data, which is
also the result to `load_rank(con1,con2,con3)`.

    $output .= '</tr>';
    $fetchArray = mysqli_fetch_array($result);
    while($rows = $fetchArray){
        $output .= '<tr>';
        foreach ($final as $col_name){
            if($col_name == "teamnumber"){
                $output .= '<th class="lock">'.
                            $rows[$col_name].
                            '</th>';
                $tnum = $rows[$col_name];
                $sq = /* sql query statement */;
                $qry = mysqli_query($conn, $sq);
                $ros = mysqli_num_rows($qry);
            }else{
                $totalNum = $rows[$col_name];
                $in = $totalNum / $ros;
                $output .= '<th class="normal">'.
                            $in.'</th>';
            }
        }
    $output .= '</tr>';
    }
    echo $output;

                

### Things I will(have to) improve next time

-   This project contains too much **duplicated code**, even after I
    cleaned up the code twice last year.
-   The coding style is super messy.
-   There is no directory in this project(all the files are in the same
    folder as `index.php`.), which gives me a hard time every time I
    want to find a file.
-   Overused `echo` in PHP, data binding should be neater.

### Further Work

#### Tutorial Videos

-   Team Page
-   Explore Page
-   Update Info Page

#### Xcode Version(Apple APP)

Here is the [code](https://github.com/robingan7/frcscouting.ga-Xcode).
Xcode version of frcscouting.ga, basically displaying sub page of the
website version in each tab. I didn't publish it because I didn't want
to pay \$100 developer fee.

![mobile version](https://robingan.org/images/project/frcscouting.ga/mobile%20version.png)

#### [frc-scope.com](/project/#Scope)

Second verison of this project, it will be a professional website for
all FRC teams. Be ready.....
