$(document).ready(function(){
    
    $('body').on('click', '.new',function(){
        var id = $(this).attr("value")
        console.log(id)
        $('.full').css('display','block')
        $('.nav_bar').css('z-index','0')
        var xhr = new XMLHttpRequest();
        xhr.open('POST','vivod.php',true);
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhr.send('id='+id);
        //console.log(xhr);
        
        xhr.onreadystatechange = function(){
            if(xhr.readyState !=4){
                return;
            }
            if(xhr.status == 200){
                $('.full').html(xhr.response);
            }
        }
        
 })
 $('.content').on('click', '.close_full',function(){
     $('.full').css('display','none')
     $('.nav_bar').css('z-index','5')
 })  
 })     