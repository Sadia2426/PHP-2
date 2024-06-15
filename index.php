<?php
 $marks = 90;
 if ($marks >= 80 ){
    echo 'A+ <br>' ;
 }
 elseif($marks >= 70){
    echo 'A' ;
 }
 else{
    echo 'Fail';
 }
 

 $colour = 'Green';
 switch ($colour) {
    case 'Green';
    echo 'success <br>';
    break;


    case 'Yellow';
    echo 'warning';
    break;


    case 'Red';
    echo 'Danger';
    break;

 }


 $array = [10,20,30,40];

 echo $array [3]. '<br>'; 

for($i=0; $i<=3; $i++){
    echo $array[ $i] . ' <br> ' ;
}  

foreach($array as $element){
    echo $element. '  ';
}

echo '<br>';

$i=0;
while($i<3){
    echo $array [$i] . '<br>';
    $i++;
}
echo '<br>';

do{
    echo $array[$i]. ' <br> ';
    $i++;
}
while($i<=3);
?>