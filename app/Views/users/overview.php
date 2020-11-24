<h2><?= esc($title); ?></h2>

<?php if (!empty($users) && is_array($users)) : ?>

    <?php foreach ($users as $user) : ?>

        <h3><?= esc($user['title']); ?></h3>

        <div class="main">
            <?= esc($user['Pesel']); ?>
        </div>
        <p><a href="/users/<?= esc($user['slug'], 'url'); ?>">View user</a></p>

    <?php endforeach; ?>

<?php else : ?>

    <h3>No users</h3>

    <p>Unable to find any users.</p>

<?php endif ?>