<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
  <?php foreach ($_SESSION['car'] as $car) : ?>
      <h1>The last car seen was <?= $car ?> </h1>
  <?php endforeach; ?>
    <div class="grid grid-cols-4 gap-4">
      <?php foreach ($cars as $car) : ?>
        <a href="/car?id=<?= $car['id'] ?>">
          <div class="max-w-sm rounded overflow-hidden shadow-lg">
            <img class="w-full" src="https://vehicle-photos-published.vauto.com/e6/0f/1d/b4-e40e-445f-8e91-cd06c686a183/image-1.jpg" alt="Sunset in the mountains">
            <div class="px-6 py-4">
              <div class="font-bold text-xl mb-2"> <?= htmlspecialchars($car['name']) ?></div>
              <p class="text-gray-700 text-base">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
              </p>
            </div>
            <div class="px-6 pt-4 pb-2">
              <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
              <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
              <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
            </div>
          </div>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</main>

<?php require base_path('views/partials/footer.php') ?>