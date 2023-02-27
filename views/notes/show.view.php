<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/header.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p> <?= htmlspecialchars($note['body']) ?></p>

        <br>
        <hr><br>

        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            <a href="/notes">Back To Notes</a>
        </button>
    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>