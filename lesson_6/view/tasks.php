<head>
    <meta charset="UTF-8">
    <title>Tasks</title>
    <style>
        .flex_cont {
            display: flex;
        }
        .task_btn {
            margin: 17px;
        }
    </style>
</head>

<body>
    <a href="/?controller=security&action=logout">Logout</a> <br>
    <a href="/">General</a>
    <br><br>
    <form method="post" action="/?controller=tasks&action=add">
        <input type="text" name="task" placeholder="Add your task">
        <input type="submit" value="Add+">
    </form>
    <h3><?=$username?>, ваши приоритетные задачи на сегодня: </h3>
    <ol>
    <?php foreach ($tasks as $task): ?>
        <li>
            <form class="flex_cont">
                <p><?= $task->getDescription() ?></p>
                <input class="task_btn" type="radio">
            </form>

        </li>
    <?php endforeach;?>
    </ol>
</body>




