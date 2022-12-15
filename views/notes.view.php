<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <?php foreach ($notes as $note) : ?>
            <li>
                <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
                    <?= $note['body'] ?>
                </a>
            </li>
        <?php endforeach; ?>
        <div class="mt-8 flex gap-x-4 ">
            <a href="/note/create" class="inline-block rounded-lg bg-indigo-600 px-4 py-1.5 text-base font-semibold leading-7 text-white shadow-sm ring-1 ring-indigo-600 hover:bg-indigo-700 hover:ring-indigo-700">
                Add New Note
                <span class="text-indigo-200" aria-hidden="true">&rarr;</span>
            </a>

        </div>
    </div>

</main>

<?php require('partials/footer.php') ?>
