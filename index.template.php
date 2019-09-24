<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>
    <h1><?=$task['nom']?></h1>
    <ul>
        <li>desctipcio: <?= $task['descripcio']?></li>
        <li>estat:
            <?php if($task['estat']):$task['estat']?>
            complet
            <?php else:?>   
            pendent
            <?php endif;?>
        </li>
    </ul>
</body>
</html>