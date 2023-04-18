<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <ul>
            <?php foreach ($cars as $car) : ?>
                <li>
                    <a href="/car?id=<?= $car['id'] ?>" class="text-blue-500 hover:underline">
                        <?= htmlspecialchars($car['name']) ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>
