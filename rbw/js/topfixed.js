 $(function(){
            
    $(window).scroll(function(){
        
        var scrolltop = $(this).scrollTop();
        var toolbarHeight =$('.toolbar').height();
        console.log(scrolltop)
        if(scrolltop >= toolbarHeight){
            $('.header').css({
                'position':'fixed',
                'z-index':'3',
                'top':-'40px',
                'box-shadow':'1px 1px 3px #363636'
            })
            $('.toolbar').css({
                'top':'-40px'
            })
        }else if(scrolltop <= toolbarHeight){
            $('.header').css({
                'position':'relative',
                'z-index':'3',
                'top':'0',
                'box-shadow':'none'
            })
            
            $('.toolbar').css({
                'top':'0'
            })
            
        }
        
    })
    
})