### Intro

When I taught myself HTML and CSS, I can't wait to create my personal
web page. I made this website from scratch in November 2018, and it's
been updated for 1 year. Now it's replaced by [robingan.org](/)

### Project Highlights

#### The hobbies roller

![hobby\_roller](https://robingan.org/images/project/robingan.ga/hobby_roller.gif)

You might notice that the words are changing after "I love". It's done
by putting different delays of the same animation on the six hobbies.
The code below show this method,

    .chword span {
        animation: words 18s 0s linear infinite;
    }  

    .chword span:nth-child(1) {
        animation-delay: 0s;
    }

    .chword span:nth-child(2) {
        animation-delay: 3s;
    }

    .chword span:nth-child(3) {
        animation-delay: 6s;
    }

    .chword span:nth-child(4) {
        animation-delay: 9s;
    }

    .chword span:nth-child(5) {
        animation-delay: 12s;
    }

                

#### PHP Data Binding

Although it is not a smart choice using PHP for data binding(should be
javascript or xml). But I still want to mention this because it was the
first time I realize the website needs to have the ability to iterate
the projects and stories grids by itself. **Before I learned this, the
all the grids of projects and story were in absolute position.** I
wasted lots of time tuning all the values. Sounds silly, but **I did
learn from my mistakes**, so [robingan.org](/) has a very neat data
storage. Here is a partial code of this from
[robingan.ga/project.php](https://robinwebsite7.000webhostapp.com/project.php),

    include 'php/database.php';

    $sql="SELECT * FROM `project` ORDER BY `project`.`id` DESC";
    $result = mysqli_query($conn,$sql);
    $output = "";

    while($rows = mysqli_fetch_array($result)){
        $output .= $rows['website_content'];
    }

                

However, PHP is still not the best for storing static data like project
and story info because requests to database will reduce the website
loading speed, and this effects the next feature.

#### Searching & Sorting Project Grids

After adding the previous feature, I decided to add a searching ans
sorting functions on [project](https://robinwebsite7.000webhostapp.com/project.php) page in
case that there will be more projects adding later (but that didn't
happen).

It is done by
[ajax](https://en.wikipedia.org/wiki/Ajax_%28programming%29) which I
leanrned while working on [frcscouting.ga](/project/#frcscouting.ga).
The greatest advantage is that it allows the website to update values
with responses from database without refreshing the page. Moreover, I
added type and other property in the database in order to sort projects.
Example code,

    function sort_project(con1,con2) {
        $.ajax({
            url: "php/sort.php",
            method: "POST",
            data: { 
              con1: con1,
              con2: con2
            },
            success: function (data) {
                $('#projects').html(data);
            }
        });
    }

                

As I mentioned, PHP is not a smart choice. As a result, the sorting and
searching hardly worked on mobile devices, where I took almost 20
seconds to load. The cheap & free
[000webhost](https://www.000webhost.com/) server I used is also a factor
causing slow speed.

### Summary

It was a good for me start making websites. I did spend some time that
it was kind of wasted and unnecessary. However, I began to learn to
think more before starting coding websites such as what kind of data
structure to choose and what to use for storing data. Also, I understood
more about HTML structure and CSS styling through this project. And I'm
still updating this website until August 2019 when I gave up and wanted
to start a completed new one(robingan.org).

View the entire website [code](https://github.com/robingan7/robingan.ga)

.

#### Compare [robingan.org(new version)](/) with [robingan.ga(old version)](https://robinwebsite7.000webhostapp.com/)

-   Much more complicated css and js styling, I explained more on this
    in this [project](/project/#robingan.org)
-   I used xml to store story, blog and project instead of sending
    requests to mysql database.
-   Mysql database now is for couning views for each project, blogs and
    user entries.
-   I added resume, bio, media and music pages which were not on the old
    version
-   Self-coded mp3 player in [music page](/music), I explained more on
    this in this [project](/project/#robingan.org).

#### Some silly things I found on the old version, please don't laugh :) {.sectionBreaker}

-   In the old version, all the div(elements containers) were set
    absolute in display including the grids in
    [story](https://robinwebsite7.000webhostapp.com/story) and [project
    page](https://robinwebsite7.000webhostapp.com/project). So it took me a long time to tune
    the top and left value. This was fixed in 2019.5
-   I used mysql database to store story and project data, which I
    should use JSON or XML.
-   There was **NO** folders in the whole project. I put all files in
    the same directory as index.php. This was not fixed until 2019.8, I
    started to realize that it became hard to find my stylesheets and
    javascript files. This mistake actually happen in all my website in
    2018 like [frcscouting.ga](/project/#frcscouting.ga).

