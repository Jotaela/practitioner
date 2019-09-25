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
    <h1><?=$person->fullname?></h1>
    <ul>
        <li>nom: <?= $person->name?></li>
        <li>cognoms: <?= $person->surname?></li>
        <li>correu electronic: <?= $person->email?></li>
    </ul>
</body>
</html>