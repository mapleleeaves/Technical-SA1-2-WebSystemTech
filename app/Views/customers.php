<!DOCTYPE html>
<html>
<head>
    <title>Customers - POS System</title>
</head>
<body>

    <h1>Customer Accounts</h1>

    <nav>
        <a href="<?= base_url('/') ?>">Home</a> 
        <a href="<?= base_url('/about') ?>">About</a> 
        <a href="<?= base_url('/customers') ?>">Customers</a> 
        <a href="<?= base_url('/users') ?>">Users</a>
    </nav>

    <h2>Customer List</h2>

    <?php foreach ($customers as $customer): ?>

        <div>
            <p>
                <strong>Name:</strong>
                <?= esc($customer['full_name']) ?>
            </p>

            <p>
                <strong>Email:</strong>
                <?= esc($customer['email']) ?>
            </p>

            <p>
                <strong>Phone:</strong>
                <?= esc($customer['phone']) ?>
            </p>

            <hr>
        </div>

    <?php endforeach; ?>

</body>
</html>