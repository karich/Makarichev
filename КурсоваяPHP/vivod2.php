<?php
include 'db.php';
$query= "SELECT * FROM `information` WHERE categories_id = 1 ORDER BY `information`.`date_add` DESC LIMIT 10;";
$rezult = mysqli_query($link,$query);
//var_dump($rezult);
if($rezult){
    $v = [];
while ($viv = mysqli_fetch_assoc($rezult)){
    $v[] = $viv;
}          
    echo '<div class="last_content_title">';
    echo '<h2>ПОСЛЕДНИЕ НОВОСИ</h2>';
    echo '</div>';
    foreach($v as $viv){
        echo '<div class="last_news open_full" value="'.$viv['id'].'">';
        echo '<img src='.$viv['img'].' class=""  alt="">';
        echo '<div class="text_last">';
        echo '<h4>'.$viv['name'].'</h4>';
        echo '<p>'.$viv['info_low'].'</p>';
        echo '</div>';
        echo '</div>';
    }
    
}