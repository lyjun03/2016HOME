 $(function(){
            
            $('.sliderimg').mouseenter(function(){
                $('.button').css({
                    display:'block',
                })
                $('.linkbutton ul li a').css({
                    display:'block',
                })
            })
            
            $('.sliderimg').mouseleave(function(){
                $('.button').css({
                    display:'none' 
                })
                $('.linkbutton ul li a').css({
                     display:'none'
                })
            })
            
            var idx= 0;
            var imgWidth = $('.sliderimg').width();
                
            
            $('.sliderimg .button .next').click(function(){
                
                     
                $('.linkbutton ul li').eq(idx).removeClass('on').children('span').animate({
                    left: - imgWidth
                }).parent().next().addClass('on').children('span').css({
                    display:'block',
                    left: imgWidth
                }).animate({
                    left:'0'
                })
                
                idx++
                
                if(idx == $('.linkbutton ul li').length){
                    idx = 0;
                    $('.linkbutton ul li').eq(idx).children('span').css({
                        left:imgWidth
                    }).stop().animate({
                        left:'0'
                    }).parent().addClass('on').siblings().removeClass('on')
                }
                
            })//next end
            
            $('.sliderimg .button .prev').click(function(){
                $('.linkbutton ul li').eq(idx).removeClass('on').children('span').animate({
                    left:imgWidth
                }).parent().prev().addClass('on').children('span').css({
                    display:'block',
                    left:-imgWidth
                }).animate({
                    left:'0'
                })
                
            idx--
                
                if(idx < 0){
                    idx = $('.linkbutton ul li').length -1;
                    $('.linkbutton ul li').eq(idx).children('span').css({
                        left:- imgWidth,
                        display:'block'
                    }).stop().animate({
                        left:'0'
                    }).parent().addClass('on').siblings().removeClass('on')
                }
            
            })//prev end
            // console.log($('.linkbutton ul li').length)
            
            $('.linkbutton ul li a').click(function(){
                idx = $(this).parent().index();
                var onidx = $('.linkbutton ul li.on').index();
                
                if(idx > onidx ){
                     $('.linkbutton ul li').eq(idx).addClass('on').children('span').css({
                         display:'block',
                         left: imgWidth
                     }).animate({
                         left:'0'
                     })
                      $('.linkbutton ul li').eq(onidx).removeClass('on').children('span').animate({
                          left:-imgWidth
                      })
                }else if(onidx > idx){
                    $('.linkbutton ul li').eq(idx).addClass('on').children('span').css({
                        display:'block',
                        left:-imgWidth
                    }).animate({
                        left:'0'
                    })
                    
                    $('.linkbutton ul li').eq(onidx).removeClass('on').children('span').animate({
                          left:imgWidth
                    })
                }
                
                // console.log(idx)
                // console.log(onidx)
                
                return false;
            })
            
        })