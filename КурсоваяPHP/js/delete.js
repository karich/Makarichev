$(document).ready(function(){
    
    $('.content').on('click', '.delete_news',function(){
        var id2 = $(this).attr("value")
        console.log(id2)
        var xhr = new XMLHttpRequest();
        xhr.open('POST','delet.php',true);
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhr.send('id2='+id2);
        //console.log(xhr);
        
        xhr.onreadystatechange = function(){
            if(xhr.readyState !=4){
                return;
            }
            if(xhr.status == 200){
                $('.content').html(xhr.response);
            }
        }
        
 }) 
 $('.cards').on('click', '.delete_news1',function(){
    var id3 = $(this).attr("value")
    console.log(id3)
    var xhr = new XMLHttpRequest();
    xhr.open('POST','delet.php',true);
    xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xhr.send('id3='+id3);
    //console.log(xhr);
    
    xhr.onreadystatechange = function(){
        if(xhr.readyState !=4){
            return;
        }
        if(xhr.status == 200){
            $('.cards').html(xhr.response);
        }
    }
    
}) 
 })