<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tasks for Today</title>
</head>
<body>
    <?= view('partials/nav') ?>

    <h1>Tasks for Today</h1>
    <p>Date: <?= esc($today) ?></p>

    <?php if (empty($tasks)): ?>
        <p>No tasks scheduled for today.</p>
    <?php else: ?>
        <ul>
            <?php foreach ($tasks as $task): ?>
                <li>
                    <?= esc($task['title']) ?>
                    — <?= esc($task['status']) ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</body>
</html>