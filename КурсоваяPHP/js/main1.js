$(document).ready(function(){
    $(function(){
        $(window).scroll(function(){
            if($(this).scrollTop() != 0){
                $('#topNubex').fadeIn();
            }else{
                $('#topNubex').fadeOut();
            }
        })
        $('#topNubex').click(function(){
            $('body,html').animate({scrollTop: 0},1000)
        })
    });
    $('.news_red').click(function(){
        $('.teacher_admin').css('display','none')
        $('.news_admin').css('display','block')
    })
    $('.teach_red').click(function(){
        $('.teacher_admin').css('display','block')
        $('.news_admin').css('display','none')
    })
  })
   