<?php 
include 'db.php';
//var_dump ($link);

if(isset($_REQUEST['id'])){
    $id =(int)$_REQUEST['id'];
    $query8= "SELECT * FROM `information` WHERE `id` = $id;";
    $rezult8 = mysqli_query($link,$query8);
if($rezult8){
    $v8 = [];
while ($viv8 = mysqli_fetch_assoc($rezult8)){
    $v8[] = $viv8;
}
foreach($v8 as $viv8){
        echo '<img src='.$viv8['img'].' alt="">';
        echo '<div class="full_info">';
        echo '<p class="close_full">Закрыть</p>';
        echo '<h1>'.$viv8['name'].'</h1>';
        echo '<p>'.$viv8['info_full'].'</p>';
        echo '<p> здесь будет ссылка</p>';
        echo '</div>';
}
}
}else{
    if(isset($_REQUEST['search'])){
        $search =$_REQUEST['search'];
        $query="SELECT * FROM `information` WHERE (`name` LIKE '%$search%' OR `info_low` LIKE '%$search%' OR `info_full` LIKE '%$search%') AND `categories_id` = 1;";
        $query2="SELECT * FROM `information` WHERE (`name` LIKE '%$search%' OR `info_low` LIKE '%$search%' OR `info_full` LIKE '%$search%') AND `categories_id` = 2;";
        $query3="SELECT * FROM `information` WHERE (`name` LIKE '%$search%' OR `info_low` LIKE '%$search%' OR `info_full` LIKE '%$search%') AND `categories_id` = 3;";
        $query4="SELECT * FROM `information` WHERE (`name` LIKE '%$search%' OR `info_low` LIKE '%$search%' OR `info_full` LIKE '%$search%') AND `categories_id` = 4;";
        $query5="SELECT * FROM `information` WHERE (`name` LIKE '%$search%' OR `info_low` LIKE '%$search%' OR `info_full` LIKE '%$search%') AND `categories_id` = 5;";
        $query6="SELECT * FROM `information` WHERE (`name` LIKE '%$search%' OR `info_low` LIKE '%$search%' OR `info_full` LIKE '%$search%') AND `categories_id` = 6;";
        $query7="SELECT * FROM `information` WHERE (`name` LIKE '%$search%' OR `info_low` LIKE '%$search%' OR `info_full` LIKE '%$search%') AND `categories_id` = 7;";
    }else{
        
        $query2= "SELECT t. * FROM (SELECT * from `information` WHERE `categories_id` = 2 ORDER BY `date_add` desc LIMIT 6) t ORDER BY t.`date_add` desc;;";
        $query3= "SELECT t. * FROM (SELECT * from `information` WHERE `categories_id` = 3 ORDER BY `date_add` desc LIMIT 6) t ORDER BY t.`date_add` desc;;";
        $query4= "SELECT t. * FROM (SELECT * from `information` WHERE `categories_id` = 4 ORDER BY `date_add` desc LIMIT 6) t ORDER BY t.`date_add` desc;;";
        $query5= "SELECT t. * FROM (SELECT * from `information` WHERE `categories_id` = 5 ORDER BY `date_add` desc LIMIT 6) t ORDER BY t.`date_add` desc;;";
        $query6= "SELECT t. * FROM (SELECT * from `information` WHERE `categories_id` = 6 ORDER BY `date_add` desc LIMIT 6) t ORDER BY t.`date_add` desc;;";
        $query7= "SELECT t. * FROM (SELECT * from `information` WHERE `categories_id` = 7 ORDER BY `date_add` desc LIMIT 6) t ORDER BY t.`date_add` desc;;";
    }

    

$rezult2 = mysqli_query($link,$query2);
//var_dump($rezult);
if($rezult2->num_rows){
    $v2 = [];
while ($viv2 = mysqli_fetch_assoc($rezult2)){
    $v2[] = $viv2;
}

    echo '<div id="study">';
    echo '<h1 id="u">УЧЕБА</h1>';
    echo '<div class="study">';
    foreach($v2 as $viv2){
        echo '<div class="new" value="'.$viv2['id'].'">';
        echo '<figure>';
        echo '<img src='.$viv2['img'].' alt="">';
        echo '<figcaption>';
        echo '<h3>'.$viv2['name'].'</h3>';
        echo '<p>'.$viv2['info_low'].'</p>';
        echo '</figcaption>';
        echo '</figure>';
        echo '</div>';
    }
    echo '</div>';  
    echo '</div>';     
}

$rezult3 = mysqli_query($link,$query3);
//var_dump($rezult);
if($rezult3->num_rows){
    $v3 = [];
while ($viv3 = mysqli_fetch_assoc($rezult3)){
    $v3[] = $viv3;
}
    echo '<div id="pract">';
    echo '<h1 id="p">ПРАКТИКА</h1>';
    echo '<div class="pract">';
    foreach($v3 as $viv3){
        echo '<div class="new" value="'.$viv3['id'].'">';
        echo '<figure>';
        echo '<img src='.$viv3['img'].' alt="">';
        echo '<figcaption>';
        echo '<h3>'.$viv3['name'].'</h3>';
        echo '<p>'.$viv3['info_low'].'</p>';
        echo '</figcaption>';
        echo '</figure>';
        echo '</div>';
    }
    echo '</div>';  
    echo '</div>';    
}

$rezult4 = mysqli_query($link,$query4);
//var_dump($rezult);
if($rezult4->num_rows){
    $v4 = [];
while ($viv4 = mysqli_fetch_assoc($rezult4)){
    $v4[] = $viv4;
}
echo '<div id="sport">';
    echo '<h1 id="s">СПОРТ</h1>';
    echo '<div class="sport">';
    foreach($v4 as $viv4){
        echo '<div class="new " value="'.$viv4['id'].'">';
        echo '<figure>';
        echo '<img src='.$viv4['img'].' alt="">';
        echo '<figcaption>';
        echo '<h3>'.$viv4['name'].'</h3>';
        echo '<p>'.$viv4['info_low'].'</p>';
        echo '</figcaption>';
        echo '</figure>';
        echo '</div>';
    }
    echo '</div>';
    echo '</div>';       
}

$rezult5 = mysqli_query($link,$query5);
//var_dump($rezult);
if($rezult5->num_rows){
    $v5 = [];
while ($viv5 = mysqli_fetch_assoc($rezult5)){
    $v5[] = $viv5;
}
    echo '<div id="olymp">';
    echo '<h1 id="o">ОЛИМПИАДЫ</h1>';
    echo '<div class="olymp">';
    foreach($v5 as $viv5){
        echo '<div class="new "  value="'.$viv5['id'].'">';
        echo '<figure>';
        echo '<img src='.$viv5['img'].' alt="">';
        echo '<figcaption>';
        echo '<h3>'.$viv5['name'].'</h3>';
        echo '<p>'.$viv5['info_low'].'</p>';
        echo '</figcaption>';
        echo '</figure>';
        echo '</div>';
    }
    echo '</div>';   
    echo '</div>';     

}

$rezult6 = mysqli_query($link,$query6);
//var_dump($rezult);
if($rezult6->num_rows){
    $v6 = [];
while ($viv6 = mysqli_fetch_assoc($rezult6)){
    $v6[] = $viv6;
}
    echo '<div id="konk">';
    echo '<h1 id="k">КОНКУРСЫ</h1>';
    echo '<div class="konk">';
    foreach($v6 as $viv6){
        echo '<div class="new " value="'.$viv6['id'].'">';
        echo '<figure>';
        echo '<img src='.$viv6['img'].' alt="">';
        echo '<figcaption>';
        echo '<h3>'.$viv6['name'].'</h3>';
        echo '<p>'.$viv6['info_low'].'</p>';
        echo '</figcaption>';
        echo '</figure>';
        echo '</div>';
    }
    echo '</div>'; 
    echo '</div>';       
}

}

