<?php
include 'db.php';
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
        echo '</div>';
    }      
}