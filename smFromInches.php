/*скрипт, получить см из дюймов
*/
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php">
        <input type="text" name="inch" placeholder="Введите значение в дюймах">
        <button>Посчитать</button>
    </form>
    <?php
    $arr[] = $_GET['inch'];
    if ($_GET['inch']) {
        for($i = 0; $i < count($arr); $i++) {
            ?>
            <p><?php echo $arr[$i] ?> дюймов = <?php echo round($arr[$i] * 2.54) ?> сантиметров.</p>
        <?php } 
    }
    ?>
</body>
</html>