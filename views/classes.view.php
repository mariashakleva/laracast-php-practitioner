<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main View</title>
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Female Bottcamp 101</h1>
    <header>
        <div>
            <h2>Classes</h2>
            <ul>
                <?php foreach($tasks as $task) : ?>
                <li>
                    <?php if($task->completed) : ?>
                        <strike><?= $task->description ?></strike>
                    <?php else: ?>
                        <?= $task->description ?>
                    <?php endif; ?>
                </li>
                 <?php endforeach; ?>
            </ul>
        </div>
    </header>
</body>
</html>