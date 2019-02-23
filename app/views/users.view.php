<?php require './app/views/partials/head.php'; ?>

    <h1>All Users</h1>
    <?php if (count($users)) : ?>
        <ul>
            <?php foreach ($users as $user) : ?>
                <li><?= $user->name ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <h1>Submit Your Name</h1>
    
    <form action="/users" method="post">
        <input type="text" name="name">
        <button type="submit">Submit</button>
    </form>

<?php require './app/views/partials/footer.php'; ?>