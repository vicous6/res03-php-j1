<?php

$number1 = rand(0,9);
$number2 = rand(0,9);
$number3 = rand(0,9);
$number4 = rand(0,9);

$alphabet = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
$index = rand(0,25);
$index2 = rand(0,25);


 echo "Salut, humain. Je suis  $alphabet[$index]$alphabet[$index2] - $number1$number2$number3$number4";
 
//  
date_default_timezone_set('UTC');
echo "<br>";
$day = date("j F , Y");
$hour= date("H:i:s");

echo "Nous sommes le $day , il est $hour" ;

echo "<br>";
$random = rand (1,10);
if($random %2 === 0){
   echo "J'ai choisi le nombre $random. C'est un nombre pair. ";
}else{
    
     echo "J'ai choisi le nombre $random. C'est un nombre impair. ";
    
}
echo "<br>";

echo "Mon nom à l'envers s'écrit $number4$number3$number2$number1 - $alphabet[$index2]$alphabet[$index]. Ah. Ah. Ah.";


$randomm = rand(0,2);
echo "<br>";
if($randomm === 0 ){
    echo "Extermination ! Extermination !";
    
}else{
    echo "Vous voulez un café ?";
}
echo "<br>";
$rand = rand(1,1000);

for($i=0;$i< 1000;$i++){
    
    if($rand=== $i){
        echo "crie: $i";
    };
}
echo "<br>";
echo $rand;
?>