<?php
include 'db.php';
if(isset($_REQUEST['id3'])){
    $id2 =(int)$_REQUEST['id3'];
    $query8 ="SELECT * FROM `teacher` WHERE `teacher_id` = $id2;";
    $rezult8 = mysqli_query($link,$query8);
    if($rezult8){
        $v8 = [];
    while ($viv8 = mysqli_fetch_assoc($rezult8)){
        $v8[] = $viv8;
    }
    foreach($v8 as $viv8){
            echo '<h2>Редактировать новость </h2>';
            echo '<form id="update_form" >';
            echo '<p class="close_red2">Закрыть</p>';
            echo '<input type="text" name="FIO_red" class="FIO_red" placeholder="ФИО" value="'.$viv8['FIO'].'">';
            echo '<textarea name="info_teach_red" class="info_teach_red" placeholder="Информация">'.$viv8['info_teach'].'</textarea>';
            echo '<input type="text" name="work_red" class="work_red" placeholder="Специальность" value="'.$viv8['work'].'">';
            echo '<button class="update3" value="'.$viv8['teacher_id'].'">Редактировать</button>';
            echo '</form>';     
    }
}
}else{
$query= "SELECT * FROM `teacher` ;";
$rezult = mysqli_query($link,$query);
//var_dump($rezult);
if($rezult){
    $v = [];
while ($viv = mysqli_fetch_assoc($rezult)){
    $v[] = $viv;
}          
    
    foreach($v as $viv){
        echo '<div class="card">';
        echo '<figure class="snip1218">';
        echo '<div class="image">';
        echo '<img src='.$viv['img'].' alt="sample70"/>';
        echo '<p>'.$viv['info_teach'].'</p>';
        echo '</div>';
        echo '<figcaption>';
        echo '<h3><span>'.$viv['FIO'].' </span></h3>';
        echo '<h5>'.$viv['work'].'</h5>';
        echo '</figcaption>';
        echo '</figure>';
        echo '<button class="update_news1" value="'.$viv['teacher_id'].'">Редактировать</button>';
        echo '<button class="delete_news1" value="'.$viv['teacher_id'].'">Удалить</button>'; 
        echo '</div>';
    }      
}
}