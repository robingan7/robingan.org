### Overview

This is my first time to participate in [Google
Code-in](https://codein.withgoogle.com/) Contest. It was pretty good but
also challenging since I only learned programming robingan@rcs.edufor
five-month. Although I enter a week late because I didn't get the info,
I still finished with 15 completed tasks. Most of my tasks are from
[Wikimedia](https://www.wikimedia.org/). I tried
[Lua](https://www.lua.org/) and [LilyPond](http://lilypond.org/). And I
coded some piano pieces with LilyPond, and the piano pieces I made are
posted on Wikipedia pages. There are more details below.

#### Achievement

-   15 completed tasks
-   a google code-in t-shirt
-   top 15 in [Wikimedia
    section](https://codein.withgoogle.com/organizations/wikimedia)

### Tasks Completed

#### Lua 1-6

Lua task one through six are easy beginner tasks which required to write
simple algorithms to complete the tasks. Thus, I will only explain a
little bit of the algorithms.

-   **lua1:**a function to print out 'hello world'. However, it did take
    me a while to set up a wikimedia account to run the program. You
    need a wiki page to write the functions and a module sandbox to
    activiate the function

-   **lua2:**Create HI function for printing out a name passing to the
    function.

-   **lua3:**Create temperature function to convert Celsius to
    Fahrenheit.

-   **lua4:**Starting from task4, the tasks begins to require the
    control structures like `if, while, repeat, for`, but task 4 itself
    was simply amending their code.

-   **lua5:**Introduce to lua library and pattern matching, amend code
    with `string.sub(str, index)` & `string.match(str, pattern)`
    methods.

-   **lua6:**Experience with the lua language library, which involves
    function of getting `langnames(language names)` and
    `langcode(language code)`. For exmaple, Chinese's language code is
    `ch`, and the library provides callback function to get language
    name from langauge code.

#### Lua 7

Problem
[Description](https://en.wikipedia.org/wiki/User:RexxS/GCI-Task07)

> This task requires you to create your own function which can take text
> such as may be found in the first column and an optional format
> parameter. It will output a date either in the requested format or in
> a format matching that of the text supplied -
> [Rexxs](https://en.wikipedia.org/wiki/User:RexxS/GCI-Task07)

According to the table below, the input of the function will the `Text`
column, the `Format` column is a possible input, and finally the `Date`
is the output.

![GSC\_2018](https://robingan.org/images/project/GCI_2018/table.png)

You might wonder what the letters in `Format` column stand for. Here is
a quote about it.

> On the English Wikipedia, we find 5 types of allowed date formats:
>
> -   "dmy" – e.g. 31 August 2013
> -   "mdy" – e.g. August 31, 2013
> -   "iso"-style – e.g. 2013-08-27
> -   year – e.g. 2013
> -   month and year – e.g. August 2013
>
> - [Rexxs](https://en.wikipedia.org/wiki/User:RexxS/GCI-Task07)

**Data Structure:**I used table(vector) to store the months names
,months abbreviation and total days in each month. You might notice that
I put 0 for February,that's because leap year effect the total days in
that month.

    local months = { "jan", "feb", "mar", "apr", "may", "jun","jul", "aug", "sep", "oct", "nov", "dec" }
    local days_in_month = { 31, 0, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31 }
    local months2={ "Jan", "Feb", "Mar", "Apr", "May", "Jun","Jul", "Aug", "Sep", "Oct", "Nov", "Dec" }
    local months4={ "january", "february", "march", "april", "may", "june","july", "august", "september", "october", "november", "december" }
                

After that, I just wrote lots of if else statements to handle different
date format here is an example code for mdy format,

    if(formatdate == "mdy") then 
        if month_idx[month_edit(month)] == 2 then 
            if day_try(day, month_idx[month_edit(month)], year) == "Invalid" then 
                return "invalid entry" 
            else 
                return  appro..month_edit(month).." "..day..","..year..special 
            end
        else 
            return appro..month_edit(month).." "..day..","..year..special   
        end 
    end
                

Entire
[code](https://github.com/robingan7/google-code-in_2018/blob/master/lua7.lua)

#### Lua 8

Problem
[Description](https://en.wikipedia.org/wiki/User:RexxS/GCI-Task08)

In this problem, the input are names from different counties, and my
code should extract the first name and last name of the name. Sounds
simple, however, different countries has different ways of placing first
name and last name Here are some interesting ones with **partial** code
solution,

-   In a Chinese name, the last name is placed before first name. So
    it's inverse of English name.
-   Dutch and Spanish names have last names that contain multiple words,
    such as `van den Broek` which is a Dutch last name. Moreover,
    Spanish usually have two family names, see Spanish naming customs.
    However, it is also common to only see one family name such as
    `Penélope Cruz` `Penélope Cruz Sánchez`
    `Federico del Sagrado Corazón de Jesús García Lorca`. The hardest
    part is that sometimes I don't type of name it is thus my algrithm
    needs to be able to figure the name type.
-   English names sometimes has suffix.

I was the first one to complete this task. I was pushing the mentor
making new tasks by finishing this one in two days. And here is the
entire
[code](https://github.com/robingan7/google-code-in_2018/blob/master/lua8.lua).

#### Lua 9

it is using the Wikidata library to create info tables of people who
have Wikipedia pages. The input will be an id the of person, and the
output should be a table like this,

![wikidata](https://robingan.org/images/project/GCI_2018/wikidata.png)

Using wikimedia getter method is key of this task as well as using the
correct property number for label like `Place of birth` `Occupation`
`Spouse`.

    --get the site links and labels

    sitelink = mw.wikibase.getSitelink(input_id)
    label = mw.wikibase.getLabel(input_id)
            
                

Sometimes a person will have mulitple side links for one label. For
example, a artist might have mutliple jobs involving art. In this case,
I used `string.gmatch(str, pattern)` and a for loop to iterate all
maches string.

    strings = {}
    for stringss in string.gmatch(sitelink, "%a+") do
        strings[#strings + 1] = stringss
    end

    links[i] = "[["..sitelink.."|"..strings[1].."]]"
            
                

It's a simpler task compare to 7 and 8. here is the entire
[code](https://github.com/robingan7/google-code-in_2018/blob/master/lua9.lua).

#### LilyPond

LilyPond is the language that Wikipedia uses to create piano
sheets(visual and audio) so that users can see the nodes and listen to
the piece. I had a hard time do it due to the lack of music theory.
However, I still completed nine of them and they are one Wikipedia pages
for users to see and listen:

-   [Seventeen Come
    Sunday](https://en.wikipedia.org/wiki/English_Folk_Song_Suite#March:%20Seventeen%20Come%20Sunday)
-   [Pretty
    Caroline](https://en.wikipedia.org/wiki/English_Folk_Song_Suite#March:%20Seventeen%20Come%20Sunday)
-   [Gnomus](https://en.wikipedia.org/wiki/User:Robingan7/Sandbox/Music1#Gnomus)
-   [Il Vecchio
    Castello](https://en.wikipedia.org/wiki/User:Robingan7/Sandbox/Music2)
-   [Bydlo](https://en.wikipedia.org/wiki/User:Robingan7/Sandbox/Music2#Bydlo)
-   [Green
    Bushes](https://en.wikipedia.org/wiki/User:Robingan7/Sandbox/Music2#Green%20Bushes)
-   [My Bonny
    Boy](https://en.wikipedia.org/wiki/English_Folk_Song_Suite#My%20Bonny%20Boy)
-   [Blow Away Morning
    Dew](https://en.wikipedia.org/wiki/English_Folk_Song_Suite#March:%20Folk%20Songs%20from%20Somerset)
-   [High
    Germany](https://en.wikipedia.org/wiki/English_Folk_Song_Suite#Instrumentation)

