$('.btn_about_us').mouseenter(  function(){
    $('.about_us').css('display','block')
})
$('.about_us').mouseleave(  function(){
    $('.about_us').css('display','none')
})
$('.student_btn').on('click',function(){
    location.replace("index3.php");
    $('.info_student').css('display','block')
    $('.info_parent').css('display','none')
    $('.info_teacher').css('display','none')
})
$('.parent_btn').click(function(){
    $('.info_student').css('display','none')
    $('.info_parent').css('display','block')
    $('.info_teacher').css('display','none')
})
$('.teacher_btn').click(function(){
    $('.info_student').css('display','none')
    $('.info_parent').css('display','none')
    $('.info_teacher').css('display','block')
})