$(function(){

    $(document).ready(function(){
        $(window).resize();
    })

    $(window).resize(function(){

        var winHeight = $(window).height();
        var textHeight = $('#container .section1').outerHeight();
        var winWidth = $(window).width();
        var textWidth = $('#container .section1').width();

        $('#container .section1').css({
            'display':'block',
            'top': ( winHeight - textHeight)/2,
            'left':(winWidth - textWidth)/2
        })

        if(winWidth > 1024){
            $('#container .profile').css({
                'width':100+'%',
                'padding-left': 247 + 'px',
                'padding-top': 0,
            })
            $('#container .portfolio').css({
                'width':100+'%',
                'padding-left': 247 + 'px',
                'padding-top': 0,
            })
            $('#container .design').css({
                'width':100+'%',
                'padding-left': 247 + 'px',
                'padding-top': 0,
            })
            $('#container .section2').css({
              'padding-left': 247 + 'px'
            })
            $('#container .section2 .section2_1').css({
              'position':'relative',
              'top':25 + '%',
            })
        }else if(winWidth <= 1024){
            $('#container .section2').css({
                'paddingLeft':0,
            })
            $('#container .profile').css({
                'width':100+'%',
                'paddingLeft':0,
                'padding-top': 50 + 'px'
            })
            $('#container .portfolio').css({
                'width':100+'%',
                'paddingLeft':0,
                'padding-top': 50 + 'px'
            })
            $('#container .design').css({
                'width':100+'%',
                'paddingLeft':0,
                'padding-top': 50 + 'px'
            })
        }else if(winWidth < 768){
            $('#container .section2').css({
                'paddingLeft':0,
            })
            $('#container .profile').css({
                'width':100+'%',
                'paddingLeft':0,
            })
            $('#container .portfolio').css({
                'width':100+'%',
                'paddingLeft':0,
            })
            $('#container .design').css({
                'width':100+'%',
                'paddingLeft':0,
            })
        }
    })
    //브라우저의 가로값을 뽑음
    var marginWidth = $('#wrapper #header .menuUp').width();
    // MENU BTN START
    $('#header .menu button').click(function(){

      winWidth = $(window).width();

      if(winWidth > 1024){
          $(this).parents('#header').animate({
              'top':-100+'px'
          }) //.menu의 값이 위로 사라진다

          $(this).parent().next().css({
              'display':'block',
              'position':'fixed',
              'left':-100 + "%"
          }).animate({
              'left':0
          }) ///menuUp이 왼쪼쪽에서 나타난다.

          $('#container .section1').fadeOut();
          $('#container .section2').fadeIn().css({
              'display':'block',
              'paddingLeft':marginWidth,
              'box-sizing':'border-box'
          })
        }else if(winWidth <= 1024){

          $(this).parents('#header').animate({
              'top':-100+'px'
          }) //.menu의 값이 위로 사라진다
          $(this).parent().next().css({
              'display':'block',
              'position':'fixed',
              'top':-100 + "%"
          }).animate({
              'top':0
          }) ///menuUp이 왼쪼쪽에서 나타난다.


          $('#container .section1').fadeOut();
          $('#container .section2').fadeIn().css({
              'display':'block',
          })
      }
    })
    // MENU BTN END

    // MORE BTN START
    $('#container .morebtn button').click(function(){
        winWidth = $(window).width();
        if(winWidth > 1024){
          $('#header').animate({
              'top':-100+'px'
          }) //.menu의 값이 위로 사라진다

          $('#header').children('.menuUp').css({
              'display':'block',
              'position':'fixed',
              'left':-100 + "%"
          }).animate({
              'left':0
          }) ///menuUp이 왼쪼쪽에서 나타난다.

          $(this).parent().parent().fadeOut();
          $('#container .section2').fadeIn().css({
              'display':'block',
              'paddingLeft':marginWidth,
              'box-sizing':'border-box'
          })
        }else if(winWidth <= 1024){
          $('#header').animate({
              'top':-100+'px'
          }) //.menu의 값이 위로 사라진다

          $('#header').children('.menuUp').css({
              'display':'block',
              'position':'fixed',
              'top':-100 + "%"
          }).animate({
              'top':0
          }) ///menuUp이 왼쪼쪽에서 나타난다.

          $(this).parent().parent().fadeOut();
          $('#container .section2').fadeIn().css({
              'display':'block',
          })
      }else if(winWidth < 768){
            $('#header').animate({
                'top':-100+'px'
            }) //.menu의 값이 위로 사라진다

            $('#header').children('.menuUp').css({
                'display':'block',
                'position':'fixed',
                'top':-100 + "%"
            }).animate({
                'top':0
            }) ///menuUp이 왼쪼쪽에서 나타난다.

            $(this).parent().parent().fadeOut();
            $('#container .section2').fadeIn().css({
                'display':'block',
            })
        }
    })

    // MORE BTN END

    $('#header .menuUp .closebtn').click(function(){

        winWidth = $(window).width();

        if(winWidth > 1024){
          $(this).parents('#header').animate({
              'top':0
          }) //.menu의 값이 아래로 내옴
          $(this).parents('#header').children('.menuUp').css({
              'left':0
          }).animate({
              'left':-100 + "%",
              'display':'none'
          }) ///menuUp이 왼쪼쪽으로 사라지면서 디스플레이 논
          $('#container .section1').fadeIn();
          $('#container .closediv').fadeOut();
          $(this).next().next().find('ul li').removeClass('on')
        }else if(winWidth <= 1024){
          $(this).parents('#header').animate({
              'top':0
          }) //.menu의 값이 아래로 내옴
          $(this).parents('#header').children('.menuUp').css({
              'top':0
          }).animate({
              'top':-100 + "%",
              'display':'none'
          }) ///menuUp이 왼쪼쪽으로 사라지면서 디스플레이 논
          $('#container .section1').fadeIn();
          $('#container .closediv').fadeOut();
          $(this).next().next().find('ul li').removeClass('on')
      }else if(winWidth < 768){
          $(this).parents('#header').animate({
              'top':0
          }) //.menu의 값이 아래로 내옴
          $(this).parents('#header').children('.menuUp').css({
              'top':0
          }).animate({
              'top':-100 + "%",
              'display':'none'
          }) ///menuUp이 왼쪼쪽으로 사라지면서 디스플레이 논
          $('#container .section1').fadeIn();
          $('#container .closediv').fadeOut();
          $(this).next().next().find('ul li').removeClass('on')
        }

    })





})
