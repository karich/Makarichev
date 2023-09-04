$(document).ready(function(){
    $('#btn_search').click(function(){
        var search = $('#search').val()
        console.log(search)
        var xhr = new XMLHttpRequest();
        xhr.open('POST','vivod.php',true);
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhr.send('search='+search);
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
 $('#btn_clear').click(function(){
    $('#search').val("")
    var xhr = new XMLHttpRequest();
    xhr.open('POST','vivod.php',true);
    xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xhr.send('search='+"");
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
 })