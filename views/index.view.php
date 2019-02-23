<?php require './views/partials/head.php'; ?>

    <?php if (count($users)) : ?>
        <ul>
            <?php foreach ($users as $user) : ?>
                <li><?= $user->name ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <h1>Submit Your Name</h1>
    
    <form action="/names" method="post">
        <input type="text" name="name">
        <button type="submit">Submit</button>
    </form>

<?php require './views/partials/footer.php'; ?>