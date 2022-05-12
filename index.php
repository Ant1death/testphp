<?php
    require_once 'config/connect.php';
    $phones = mysqli_query($connect, "SELECT * FROM `tel`");
    $phones = mysqli_fetch_all($phones);
    $tel = $_POST['tel'];
    $name = $_POST['name'];
    $date = $_POST['date'];
    mysqli_query($connect, "INSERT INTO `tel` (`id`, `tel`, `name`, `date`) VALUES (NULL, '$tel', '$name', '$date')");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Телефон</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <table class = 'table'>
        <tr>
            <th>id</th>
            <th>Телефон</th>
            <th>Имя</th>
            <th>Дата</th>
        </tr>
        <?php 
        foreach($phones as $item) {
            ?>
            <tr>
                <th><?= $item[0] ?></th>
                <th><?= $item[1] ?></th>
                <th><?= $item[2] ?></th>
                <th><?= $item[3] ?></th>
            </tr>
        <?php
        }
        ?>
    </table>
    <div class='title'>
        <h2>Добавить номер телефона</h2>
    </div>
    <form id ='add' action="vendor/create.php" method="post">
        <p>Номер</p>
        <input type="tel" name='tel'>
        <p>Имя</p>
        <input type="text" name='name'>
        <p>Дата</p>
        <input type="date" name ='date'>
        <button  id = 'ad'type ='submit'>Добавить</button>
    </form>
    <script src ='index.js'></script>
</body>
</html>