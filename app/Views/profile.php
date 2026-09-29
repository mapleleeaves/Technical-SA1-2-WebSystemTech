<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
</head>
<body>
    <?= view('partials/nav') ?>

    <h1>Demo User Profile</h1>

    <?php if ($user): ?>
        <p>Username: <?= esc($user['username']) ?></p>
        <p>Full name: <?= esc($user['full_name']) ?></p>
        <p>Email: <?= esc($user['email']) ?></p>
    <?php else: ?>
        <p>No demo user found.</p>
    <?php endif; ?>
</body>
</html>