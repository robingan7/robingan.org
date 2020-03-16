### Intro

This is the first version of the lunch website. In my [high
school](https://www.smhs.org/), the lunch schedule is confused
especially for freshmen. So I created this website to help new students
to learn my school's block schedule.

#### Scenario: my school schedule\
how complex it is

-   **15 different [bell
    schdules](https://smhsorg.finalsite.com/uploaded/2019-2020_Calendar/2019-2020_SMCHS_Bell_Schedule.pdf?1560464424884)**
    including special schedules.
-   **Rotating class periods:** We take 7 classes, but one day only has
    time for 6 or 5 classes. So the next day starts with the class that
    is after the last class of the previous day.
-   **First & Second Lunch:** My school divides students into 2 lunches
    based on thier buildings of the third class of the day. Since our
    rotating schedule, the third class is changing.

According to my teacher, they always have students going to the wrong
lunch which causes an after school detention to the student. To solve
this problem is my goal for this website.

### Frontend

By watching lots of videos and login templates, I coded this login page,
which is not very bad :) The user page, update page and sign up page
follow this design style. Here are some images of those pages.

![signup\_page](https://robingan.org/images/project/testsmlunch.cf/signup_page.png)
![update\_page](https://robingan.org/images/project/testsmlunch.cf/update_page.png)
![user\_page](https://robingan.org/images/project/testsmlunch.cf/user_page.png)
![update\_page](https://robingan.org/images/project/testsmlunch.cf/update_page.png)

### Backend {.sectionBreaker}

It was a chanllenging part because it's my first time doing backend. In
another word, I learned php and mysql by doing this project. I was very
excited when the data got put into the mysql database by my php code. I
was also luckily that [000webhost](https://www.000webhost.com/) provides
free mysql database service so I was able to host the webiste with no
cost.

#### Algorithm

This algorithm explains how the lunch's determined by code. This task is
done by `checklunch($room)` method,

    function checklunch($room){
        if($room=='B'||$room=='b'||$room=='C'||$room=='c'||$room=='S'||$room=='s'){
          return 'First Lunch';
        } else if($room=='A'||$room=='a'||$room=='T'||$room=='t'||$room=='R'||$room=='r'||$room=='G'||$room=='g'){
          return 'Second Lunch';
        } else{
          return 'Building does not exist';
        }
    }

                

The third period classes of the week is put in manually by me. This is a
huge inconvenience of this website, and you will see how I fixed this in
the [second version](/project/#smlunch.com). Here is code that I need to
change every week.

    $lunches = array('one','two','three','four','five');
    $one_or_tow = array();
    for($y = 0; $y <=4 ; $y++){
      $num = $lunches[$y];
      $one_or_tow[]= checklunch($periods[0][$num]);
    }

                

After these process, the code will `echo` the HTML elements with either
first or second lunch for each day of the week.

    echo 'Hello '.$row['name'].' from ';

    echo ' your friend Robin Gan';

    echo '<p class="lunch">Monday</p>'.$one_or_tow[0];
    echo '<p class="lunch">Tuesday</p>'.$one_or_tow[1];
    echo '<p class="lunch">Wednesday</p>'.$one_or_tow[2];
    echo '<p class="lunch">Thursday</p>'.$one_or_tow[3];

                

### Summary

#### Did it solve the problem?

No, the login and sign up process was confusing to use because I didn't
know much about the backend. Also, the update(third period classes)
process is inefficient and can easily forget by the person who's doing
this task. And the result could be serious, so I didn't introduce this
to the school. Instead, I asked my classmates to test the website, and I
got 60+ users and some good comments. ;)

#### Positive impact on me

All in all, I did make a good start on my backend journey. This skill
leads to some successful websites like
[frcscouting.ga](/project/#frcscouting.ga) and
[scope.com](/project/#scope.com)
