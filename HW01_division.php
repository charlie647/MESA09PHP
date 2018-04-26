<?php
    $result_reminder = $result_number = $result_div = $x =$y = "";

    if (isset($_GET['x'])){

        $x = $_GET['x'];
        $y = $_GET['y'];
    }

        if ($x > 1 && $y > 1){
            $result_div = (int)($x / $y);
            $result_reminder = $x % $y;

        }
   //     else {
    //        echo '請輸入整數值';
    //    }



echo "請輸入被除數、除數，得出商與餘數<br><br>";




?>

<form>
    <input type = "text" name = "x" placeholder="請輸入被除數" value="<?php echo $x; ?>">
    除以
    <input type = "text" name = "y" placeholder="請輸入除數" value="<?php echo $y; ?>">
    <input type="submit" value="=" />
    <?php echo $result_div; ?>
    餘
    <?php echo $result_reminder; ?>

</form>
