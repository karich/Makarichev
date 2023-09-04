$(document).ready(function(){
    
    $('.content').on('click', '.update_news',function(){
        $('.update').css('display','block')
        var id2 = $(this).attr("value")
        var xhr = new XMLHttpRequest();
        xhr.open('POST','vivod1.php',true);
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhr.send('id2='+id2);
        //console.log(xhr);
        xhr.onreadystatechange = function(){
            if(xhr.readyState !=4){
                return;
            }
            if(xhr.status == 200){
                $('.update').html(xhr.response);
            }
        }
    }) 
 $('.content').on('click', '.update2',function(){
    var id = $(this).attr("value")
    var name = $('.name2').val()
    var link = $('.link2').val()
    var info_low = $('.info_low2').val()
    var info_full = $('.info_full2').val()
    console.log(id)
    console.log(name)
    console.log(link)
    console.log(info_full)
    console.log(info_low)

    var xhr = new XMLHttpRequest();
        xhr.open('POST','update.php',true);
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhr.send('id='+id+'&name='+name+'&info_low='+info_low+'&info_full='+info_full+'&link='+link);
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
$('.cards').on('click', '.update_news1',function(){
    $('.update_teach').css('display','block')
    var id3 = $(this).attr("value")
    var xhr = new XMLHttpRequest();
    xhr.open('POST','vivod4.php',true);
    xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xhr.send('id3='+id3);
    //console.log(xhr);
    xhr.onreadystatechange = function(){
        if(xhr.readyState !=4){
            return;
        }
        if(xhr.status == 200){
            $('.update_teach').html(xhr.response);
        }
    }
}) 
$('.teacher_admin').on('click', '.update3',function(){
var id4 = $(this).attr("value")
var FIO_red = $('.FIO_red').val()
var info_teach_red = $('.info_teach_red').val()
var work_red = $('.work_red').val()
console.log(id4)
console.log(FIO_red)
console.log(info_teach_red)
console.log(work_red)

var xhr = new XMLHttpRequest();
    xhr.open('POST','update2.php',true);
    xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xhr.send('id4='+id4+'&FIO_red='+FIO_red+'&info_teach_red='+info_teach_red+'&work_red='+work_red);
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