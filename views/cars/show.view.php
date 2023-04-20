<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<main>
    <!-- <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p class="mb-6">
            <a href="/cars" class="text-blue-500 underline">go back...</a>
        </p>


        <p><?= htmlspecialchars($car['name']) ?></p>
    </div> -->

    <!-- <div class="bg-white"> -->
        <div class="mx-auto grid max-w-2xl grid-cols-1 items-center gap-x-8 gap-y-16 px-4 py-24 sm:px-6 sm:py-32 lg:max-w-7xl lg:grid-cols-2 lg:px-8">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"><?= htmlspecialchars($car['name']) ?></h2>
                <p class="mt-4 text-gray-500"><?=$car['description'] ?></p>

                <dl class="mt-16 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8">
                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">Price</dt>
                        <dd class="mt-2 text-sm text-gray-500"><?=$car['price'] ?></dd>
                    </div>

                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">VIN</dt>
                        <dd class="mt-2 text-sm text-gray-500"><?=$car['vin'] ?></dd>
                    </div>

                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">Milage</dt>
                        <dd class="mt-2 text-sm text-gray-500"><?=$car['milage'] ?></dd>
                    </div>

                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">features</dt>
                        <dd class="mt-2 text-sm text-gray-500">Hand polished and finished with natural oil</dd>
                    </div>

                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">Includes</dt>
                        <dd class="mt-2 text-sm text-gray-500">2 year warranty</dd>
                    </div>

                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">Considerations</dt>
                        <dd class="mt-2 text-sm text-gray-500">Long Chevrolet Buick GMC of Athens, would like to be a place where both co-workers and customers feel like they belong. We realize that there are many long-term dealership customers who would like to work with us and we are honored for that 
                         and will do all that we can to earn and retain their trust.</dd>
                    </div>
                </dl>
            </div>
            <div class="grid grid-cols-2 grid-rows-2 gap-4 sm:gap-6 lg:gap-8">
                <img src="<?=$car['image'] ?>" class="rounded-lg bg-gray-100">
                <img src="<?=$car['image'] ?>" class="rounded-lg bg-gray-100">
                <img src="<?=$car['image'] ?>" class="rounded-lg bg-gray-100">
                <img src="<?=$car['image'] ?>" alt="Walnut card tray filled with cards and card angled in dedicated groove." class="rounded-lg bg-gray-100">
            </div>
        </div>
    <!-- </div> -->


</main>

<?php require base_path('views/partials/footer.php') ?>