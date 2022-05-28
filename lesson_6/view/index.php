<head>
    <meta charset="UTF-8">
    <title>General</title>
</head>

<body>
    <h1><?= $pageHeader ?></h1>

    <?php if ($username === null): ?>
        <a href="/?controller=security">Join</a>
    <?php else: ?>
       <h3>Wellcome <?=$username?> : </h3> <br>
        <a href="/?controller=tasks">Tasks</a> <br>
        <a href="/?controller=security&action=logout">Logout</a>
    <?php endif; ?>
</body>
