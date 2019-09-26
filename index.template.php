<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        foreach ($results as $task){
            echo "<h1>" . $task['name'] . "</h1>"
                . "<ul>
                    <li>" . $task['description'] . "</li>
                    <li>" . $task['completed'] . "</li>
                </ul>";
        };
    ?>
</body>
</html>