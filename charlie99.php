




<table border="1" width="100%">
            <?php
                for ($k=0; $k<3; $k++){   // 2列 2-9 ; 3列 2-13
                echo '<tr>';
                for ($j=2; $j<=5; $j++){  // 1列4個 K*4; 1列5個 K*5
                    $newj = $j + $k * 4;   //會先乘除後加減

      //              if (($newj +$k)%2 ==0){
      //                  echo '<td bgcolor="yellow">';
      //              }else {
      //                  echo '<td bgcolor="pink">';
      //       }
                    echo '<td bgcolor="' . ((($newj +$k)%2 ==0)?'yellow':'pink').'">';

                    for ($i = 1; $i<=9; $i++){
                        $r = $newj * $i;
                        echo "{$newj}x{$i}={$r}<br>";
                    }
                echo '</td>';

                }

                echo '</tr>';
            }

            ?>

</table>