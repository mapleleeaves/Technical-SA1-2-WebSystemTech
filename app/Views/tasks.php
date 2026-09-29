<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Tasks</title>
</head>
<body>
    <?= view('partials/nav') ?>

    <h1>All Tasks</h1>

    <table border="1" cellpadding="8">
        <tr>
            <th>Date</th>
            <th>Task</th>
            <th>Status</th>
        </tr>
        <?php foreach ($tasks as $task): ?>
            <tr>
                <td><?= esc($task['task_date']) ?></td>
                <td><?= esc($task['title']) ?></td>
                <td><?= esc($task['status']) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>