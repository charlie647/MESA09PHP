<?php

//擲dice100次，每個點數出現的次數

    $p = array(1=> 0,0,0,0,0,0);

     for ($i=1; $i<=100; $i++) {

         $dice = rand(1, 9);
         $p[$dice>=7?$dice-3:$dice]++;         //比大的機率高
//         $p[$dice>=7?$dice-3:$dice]++;       //比小的機率高

     }

     for ($i=1; $i<=6; $i++){
         echo "{$i}點出現{$p[$i]}次<br>";


     }


     echo '<hr>';
     for ($i =1; $i<=count($p);$i++){
         echo "{$i}點出現{$p[$i]}次<br>";

     }

     echo'<hr>';

     foreach ($p as $key => $value){          //每個值都詢訪出來
         echo "{$key}:{$value}<br>";
     }