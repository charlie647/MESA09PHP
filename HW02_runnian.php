<?php

    $x = "";

    if (isset($_GET['x'])) {

        $x = $_GET['x'];

    }



echo "輸入年份可以判別是不是閏年<br><br>"
?>

<form>
    <input type = "text" name = "x" placeholder="請輸入西元年份" value="<?php echo $x; ?>">
    <input type="submit" value="送出檢查" />


</form>
<?php


if ($x%4 ==0 && $x%100 !=0 || $x%400 ==0) {

    echo "{$x}年是閏年";
}

else {

    echo "{$x}年....不是閏年唷";

}

?>