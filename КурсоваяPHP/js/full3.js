$(document).ready(function(){
    
    $('body').on('click', '.open_full',function(){
        var id = $(this).attr("value")
        console.log(id)
        $('.full').css('display','block')
        var xhr = new XMLHttpRequest();
        xhr.open('POST','vivod1.php',true);
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
 $('body').on('click', '.close_full',function(){
     $('.full').css('display','none')
 })  
 })     