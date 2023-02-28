<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/header.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">
            <a href="/notes">Back To Notes</a>
        </button>

        <p class="mt-6"> <?= htmlspecialchars($note['body']) ?></p>

        <hr class="mt-6">

        <footer class="mt-6">
        <!-- edit button in grey -->
            <button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-1 px-2 rounded">
                <a href="/note/edit?id=<?= $note['id'] ?>">Edit Note</a>
            </button>
        </footer>

    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>