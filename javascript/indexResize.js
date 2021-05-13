var firstEnter = true;
function upTheBlog(){
    let height = parseInt(window.getComputedStyle(document.getElementById('container-blog-bio')).height) / 2;
    let heightImg = parseInt(window.getComputedStyle(document.getElementById("imageCon-image")).height);
    //document.getElementById('blog-icon').style.marginTop = heightImg - height + 45 + "px";
}
function resizeBlog(){
    let mobile_scale = 439;
    var blog_ = document.getElementById('blog');
    if(window.innerWidth > 666){
        var windowWidth_ = window.innerWidth;
        var windowInnerHeight = window.innerHeight;
        var top_ = parseInt(blog_.style.top);
        var left_ = parseInt(blog_.style.left);

        var container_ = parseInt(document.getElementById('navvv').style.width);
        var container_left = parseInt(document.getElementById('navvv').style.right) * windowWidth_ / 100;

        /*
        if (windowWidth_ > 966 && windowInnerHeight > 800) {
            windowInnerHeight = 1000;
        }*/

        if (windowWidth_ > 1500) {
            windowWidth_ = 1500;
            blog_.style.top = "310px";
            blog_.style.width = "1000px";
        } else {
            blog_.style.width = windowWidth_ - left_ - windowWidth_ * 0.1 - container_ - container_left + 40 + "px";
            blog_.style.top = "20vw";
        }
        blog_.style.height = windowInnerHeight - windowWidth_ * top_ / 100 - 20 + "px";
    } else{
        var top_ = 31;
        var left_ = parseInt(blog_.style.left);

        var container_ = parseInt(document.getElementById('navvv').style.width);
        var container_left = parseInt(document.getElementById('navvv').style.right) * window.innerWidth / 100;

        blog_.style.width = "100%";
        blog_.style.height = window.innerHeight - window.innerWidth * top_ / 100 -20 + "px";
    }

    blog_ = document.getElementById('blog');

    if (window.innerWidth <= mobile_scale || screen.width <= mobile_scale){
        document.getElementById('container-blog-bio').style.height = "100%";


        document.getElementById('container-blog-project').style.marginTop = "-90px";
        document.getElementById('container-blog-blog').style.marginTop = "-30px";

        document.getElementById('container-blog-project').style.height = "300px";
        document.getElementById('container-blog-blog').style.height = "300px";

    } else if (window.innerWidth < 966 && window.innerWidth > mobile_scale) {
        document.getElementById('container-blog-bio').style.height = "100%";
        document.getElementById('container-blog-project').style.marginTop = "15px";
        document.getElementById('container-blog-blog').style.marginTop = "15px";

        let val = (parseInt(blog_.style.height) / 2 - 232.95);
        var heee = parseInt(document.getElementById('blog').style.height);
        let useHeight = heee / 2 + val;

        if (window.innerWidth <= 666){
            document.getElementById('container-blog-project').style.height = useHeight + "px";
            document.getElementById('container-blog-blog').style.height = useHeight + "px";
        } else {
            if(val < 0){
                val = 0;
            }

            document.getElementById('container-blog-project').style.marginTop = -val + 15 + "px";
            document.getElementById('container-blog-blog').style.marginTop = -val + 15 + "px";
            //document.getElementById('container-blog-project').style.height = "calc(100% + 10vh)";
            //document.getElementById('container-blog-blog').style.height = "calc(100% + 10vh)";
            document.getElementById('container-blog-project').style.height = useHeight  + "px";
            document.getElementById('container-blog-blog').style.height = useHeight  + "px";
        }
    }else{//biggest width state
        let heightBlog = parseInt(blog_.style.height);

        document.getElementById('container-blog-bio').style.height = heightBlog + "px";
        document.getElementById('container-blog-project').style.marginTop = "0";
        document.getElementById('container-blog-blog').style.marginTop = "0";

        document.getElementById('container-blog-project').style.height = heightBlog + 90 + "px";
        document.getElementById('container-blog-blog').style.height = heightBlog + 30 + "px";

        if(window.innerHeight > 665){
            if(firstEnter){
                firstEnter = false;
                setTimeout(()=>{
                    upTheBlog();
                },100);
            }else{
                upTheBlog();
            }
        }

        //document.getElementById('blog-icon').style.marginTop = -(parseInt(blog_.style.height) / 2 - 252.95) + "px";
    }
   //document.getElementById('modal_cover').style.width = window.innerWidth + "px";
   //document.getElementById('modal_cover').style.height = window.innerHeight +"px";
}

resizeBlog();
window.addEventListener('resize', resizeBlog, false);