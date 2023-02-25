<?php require 'partials/head.php' ?>
<?php require 'partials/nav.php' ?>
<?php require 'partials/header.php' ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p> <?= $note['body'] ?></p>
    
        <br><hr><br>

    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        <a href="/notes">Back To Notes</a>
    </button>
    </div>
</main>

<?php require 'partials/footer.php' ?>