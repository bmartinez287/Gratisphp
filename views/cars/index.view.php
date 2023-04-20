<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <div class="grid grid-cols-4 gap-4">
      <?php foreach ($cars as $car) : ?>
        <a href="/car?id=<?= $car['id'] ?>">
          <div class="max-w-sm rounded overflow-hidden shadow-lg">
            <img class="w-full" src="<?= $car['image'] ?>" alt="Sunset in the mountains">
            <div class="px-6 py-4">
              <div class="font-bold text-xl mb-2"> <?= htmlspecialchars($car['name']) ?></div>
              <p class="text-gray-700 text-base">
                <?= $car['description'] ?>
              </p>
            </div>
            <div class="px-6 pt-4 pb-2">
              <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Price: $<?= $car['price'] ?></span>
              <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Miles: <?= $car['milage'] ?></span>
              <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Vin: <?= $car['vin'] ?></span>
            </div>
          </div>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</main>

<?php require base_path('views/partials/footer.php') ?>