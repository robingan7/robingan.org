### Overview

I, Robin, was born in China, where issues with trash classification are
evident and became more apparent when I moved to America last year. My
passion for computer science led me to solve this problem by using AI
[tensorflow](https://www.tensorflow.org/) convolutional neural network
(written in Python) graph by
[TensorBoard](https://www.tensorflow.org/guide/summaries_and_tensorboard)
which is perfect for image recognition. My friend
[Alex](http://alexlynd.com/) used electronics (node MUC, lamp, raspberry
pi) to capture images of trash to be executed in the program for sorting
types of trash. Carina helped revise the report.

### About the problem

This problem is very conspicuous in our society because people are not
aware of proper trash sorting. For example, I surveyed my classmates and
sorted through the trash cans at my school and home. Here are some
pictures As you can see, many recyclables were placed in the trash bin
designated for landfill.If the majority of the population’s trashcans
resemble this, the problem is sure to multiply. In fact, about 28
billion recyclable bottles and jars end up in American landfills every
year. This research shocked and encouraged me to solve this problem as
it showed how prevalent and serious this is. My hypothesis is that my
solution will classify 95% of the refuse and recyclables.

> Bangalore’s garbage troubles stem directly from its booming high-tech
> economy. The city’s population of 10 million has grown by 50 percent
> since 2001, and at least 3 million more Indians are expected to
> migrate to Bangalore in the next decade. - [NOAH M.
> SACHS](https://www.theatlantic.com/international/archive/2014/06/confessions-of-a-trash-tourist-india/373118/)

![plastic\_in\_trash](https://robinwebsite7.000webhostapp.com/images/project/Google_Science_Fair_2018/plastic_in_trash.jpeg)

### Research

#### Trash / Sorting

We decided to look at how our local community and school tends to trash
sorting for our research. First, we conducted this survey which clearly
indicated that people are not taking the responsibility of trash sorting
upon themselves, and it is evident of a problem in our community.
Additionally, video below shows Robin Gan sorting some trash cans from
our school, which expresses that students are not recycling, even with
two adjacent distinguishable bins in plain sight. The data we collected
from our survey and the trash dive concludes that the task of sorting
refuse is not prioritized.

#### AI / Project Technology

This system needs a platform that can support heavy proccessing, web
hosting, image capturing, and digital IO. The [Raspberry Pi 0W
(computer)](https://www.raspberrypi.org/magpi/pi-zero-w/) can handle all
of this at the cost of \$10. Additionally, we will use Python language
for coding since it has the most support and a lot of
libraries/documentation. We then delved into further research on the
operation of Al and implementation.

### Code & Algorithm Explanation

#### Code Structure

-   Load Images(pickle)
-   Add Layers
-   Process through activiation & regulation functions
-   Compile & Save trained model

**First layer**, using a 64-neurons convolutional layer with ReLU
activation function.

    model = Sequential()
    model.add(Conv2D(64,(3,3), input_shape = X.shape[1:]))
    model.add(Activation("relu"))
    model.add(MaxPooling2D(pool_size=(2,2)))
                

* * * * *

**Second layer**, implemented the same layers structure.

    model.add(Conv2D(64,(3,3)))
    model.add(Activation("relu"))
    model.add(MaxPooling2D(pool_size=(2,2)))
                

* * * * *

**Thrid layer** , flattenng to a 256-neurons dense layer, also activated
with relu function. Moreover, the layer has a dropout of 0.2 to avoid
overfitting

    model.add(Flatten())
    model.add(Dense(256,activation='relu',kernel_regularizer=regularizers.l2(0.001)))
    model.add(Dropout(0.2))
                

* * * * *

#### Blogs

I tested 23 combinations of dropout, neurons per layers and number of
input images in order to get a higher validation accuracy. Here are some
notes I took when I expereinced different combinations.

-   **Model 1:** This is the first experiment. It is with 0.3 dropout,
    64 neurons per layer, no regularization and 7000 input images.

    ![plastic\_in\_trash](https://robinwebsite7.000webhostapp.com/images/project/Google_Science_Fair_2018/11.png)
    ![plastic\_in\_trash](https://robinwebsite7.000webhostapp.com/images/project/Google_Science_Fair_2018/12.png)

    From the graph, the testing accuracy(batch\_acc) ended up with 98%
    and continued growing during the training. However, the validation
    accuracy(epoch\_val\_acc) floats between 83% and 85%. When I tested
    this program with images from real life, it made lots of mistakes
    due to its low validation accuracy.

-   **Model 8:** This program is with 0.4 dropout, 64 neurons per layer,
    7000 input images, and 0.0001 regularization.

    ![plastic\_in\_trash](https://robinwebsite7.000webhostapp.com/images/project/Google_Science_Fair_2018/81.png)
    ![plastic\_in\_trash](https://robinwebsite7.000webhostapp.com/images/project/Google_Science_Fair_2018/82.png)

    Although the accuracies are both lower than the first. But we can
    see the greater dropout and regularization. The validation accuracy
    is raising while testing accuracy is floating near 90%. From the
    behavior of testing accuracy, I conclude that the program has the
    underfitting problem. To solve this I lowered the dropout
    regularization and increased the number of neurons to balance the
    loss. I did not, however, change all these in one step.

-   **Model 12:** This program is with 0.3 dropout, 0.001
    regularization, 7000 input images and 128 neurons per layer.

    ![plastic\_in\_trash](https://robinwebsite7.000webhostapp.com/images/project/Google_Science_Fair_2018/121.png)
    ![plastic\_in\_trash](https://robinwebsite7.000webhostapp.com/images/project/Google_Science_Fair_2018/122.png)

    During this time I really struggled. Both testing accuracy and
    validation accuracy stayed the same. I actually stopped in the
    middle of the training because the values were almost the same.
    After some other research, I realize the high dropout might be the
    reason it can not be accurate. So in the next experiments, I lowered
    the dropout and the neurons per layer.

-   **Model 21:** This is the first experiment. It is with 0.3 dropout,
    64 neurons per layer, no regularization and 7000 input images.

    ![plastic\_in\_trash](https://robinwebsite7.000webhostapp.com/images/project/Google_Science_Fair_2018/192.png)
    ![plastic\_in\_trash](https://robinwebsite7.000webhostapp.com/images/project/Google_Science_Fair_2018/221.png)

    From the graph, the testing accuracy(batch\_acc) ended up with 98%
    and continued growing during the training. However, the validation
    accuracy(epoch\_val\_acc) floats between 83% and 85%. When I tested
    this program with images from real life, it made lots of mistakes
    due to its low validation accuracy.

-   **Model 23:** This one is the exact the same one as last program,
    except that there are 30,000 input images.

    ![plastic\_in\_trash](https://robinwebsite7.000webhostapp.com/images/project/Google_Science_Fair_2018/231.png)
    ![plastic\_in\_trash](https://robinwebsite7.000webhostapp.com/images/project/Google_Science_Fair_2018/232.png)

    This one is perfect and ready to go. Both accuracies are above 96%.
    Then, I try another one with 20 epoch. It has impressive 98%
    accuracies. Here is the application of this model.

### Conclusion

I have a very successful training model with 98% accuracy as shown in
the youtube video. It can distinguish most of the trash in our life.
When I went to a dining hall, canteen or restaurant, I always take some
pictures of the trash. And I will upload to program, it got them correct
every time. Here is the video of testing the program.

You might think about how this can be used in our real life. Alex uses
image capturing, digital IO, and Raspberry Pi 0W (computer) to implement
the AI program as an actual product. Here are a video and a sketch about
the electronics design.

![plastic\_in\_trash](https://robinwebsite7.000webhostapp.com/images/project/Google_Science_Fair_2018/electronics.jpg)
