<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/header.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <h1>Hello, <?= $_SESSION['user']['email'] ?? 'Guest!' ?></h1>
    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>