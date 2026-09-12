<!DOCTYPE html>
<html>
<head>
    <title>Users - POS System</title>
</head>
<body>

    <h1>User Accounts</h1>

    <nav>
        <a href="<?= base_url('/') ?>">Home</a> 
        <a href="<?= base_url('/about') ?>">About</a> 
        <a href="<?= base_url('/customers') ?>">Customers</a> 
        <a href="<?= base_url('/users') ?>">Users</a>
    </nav>

    <h2>User List</h2>

    <?php foreach ($users as $user): ?>

        <div>
            <p>
                <strong>Username:</strong>
                <?= esc($user['username']) ?>
            </p>

            <p>
                <strong>Full Name:</strong>
                <?= esc($user['fullname']) ?>
            </p>

            <p>
                <strong>Role:</strong>
                <?= esc($user['role']) ?>
            </p>

            <hr>
        </div>

    <?php endforeach; ?>

</body>
</html>