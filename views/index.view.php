<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        header {
            background-color: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="/views/about.view.php">About Page</a></li>
            <li><a href="/views/contact.view.php">Contact Page</a></li>
        </ul>
    </nav>

    <h1>My Tasks</h1>
    <ul>
        <?php foreach ($tasks as $task) : ?>

            <li>
                <?php if ($task->completed) : ?>
                    <strike><?= $task->description ?></strike>
                <?php else : ?>
                    <?= $task->description ?>
                <?php endif; ?>
            </li>

        <?php endforeach; ?>
    </ul>
</body>
</html>