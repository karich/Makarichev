$(document).ready(function(){
    $('.form_search').change(function(){
        var search = $('#search').val()
        console.log(search)
        var xhr = new XMLHttpRequest();
        xhr.open('POST','vivod1.php',true);
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
 })