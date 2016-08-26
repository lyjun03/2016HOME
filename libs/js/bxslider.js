$(function(){

    var imgidx = 0;

    $('.profile .bx-slider .bx-button .nextbtn').click(function(){
        $('.profile .bx-slider .bx-view ul li').eq(imgidx).removeClass('on').children('span').animate({
            'left': - 100 + '%'
        }).parent().next().addClass('on').children('span').css({
            'display':'block',
            'left': 100 + '%'
        }).animate({
            'left':'0'
        })

        imgidx++

        if(imgidx == $('.profile .bx-slider .bx-view ul li').length){
            imgidx = 0;
            $('.profile .bx-slider .bx-view ul li').eq(imgidx).children('span').css({
                left:100 + '%'
            }).stop().animate({
                left:'0'
            }).parent().addClass('on').siblings().removeClass('on')
        }

    })


    $('.profile .bx-slider .bx-button .prevbtn').click(function(){
        $('.profile .bx-slider .bx-view ul li').eq(imgidx).removeClass('on').children('span').animate({
            left:100 + '%'
        }).parent().prev().addClass('on').children('span').css({
            display:'block',
            left:-100 + '%'
        }).animate({
            left:'0'
        })

        imgidx--
        if(imgidx < 0){
           imgidx = $('.profile .bx-slider .bx-view ul li').length -1;
           $('.profile .bx-slider .bx-view ul li').eq(imgidx).children('span').css({
               left:-100 + '%',
               display:'block'
           }).stop().animate({
               left:'0'
           }).parent().addClass('on').siblings().removeClass('on')
       }
    })

    $('.profile .bx-slider .bx-view ul li a').click(function(){
        imgidx = $(this).parent().index();
        console.log(imgidx)
        var onidx = $('.profile .bx-slider .bx-view ul li.on').index();

        if(imgidx > onidx ){
            $('.bx-slider .bx-view ul li').eq(imgidx).addClass('on').children('span').css({
                display:'block',
                left: 100 + '%'
            }).animate({
                left:'0'
            })
             $('.bx-slider .bx-view ul li').eq(onidx).removeClass('on').children('span').animate({
                 left:- 100 + '%'
             })
       }else if(onidx > imgidx){
            $('.bx-slider .bx-view ul li').eq(imgidx).addClass('on').children('span').css({
                display:'block',
                left:- 100+'%'
            }).animate({
                left:'0'
            })

            $('.bx-slider .bx-view ul li').eq(onidx).removeClass('on').children('span').animate({
                  left:100+'%'
            })
        }

        return false;
    })

    var play = setInterval(function(){
       $('.bx-slider .bx-button .nextbtn').click()
    },2000)

   $('#container .profile .pr-top .closebtn').click(function(){
       clearInterval(play)
       return false;
   })

    $('.bx-slider').mouseenter(function(){
        clearInterval(play)
    })

    $('.bx-slider').mouseleave(function(){
        play = setInterval(function(){
            $('.bx-slider .bx-button .nextbtn').click()
        },2000)
    })



})
