<?php 
    include 'includes/header.php';

function get_toys(PDO $pdo) {
    $sql = "SELECT * FROM toy;";
    $toys = pdo($pdo, $sql)->fetchAll();
    return $toys;
}

$toys = get_toys($pdo);
?>
<section class="toy-catalog">
    <?php foreach ($toys as $toy): ?>
    <div class="toy-card">
        <a href="toy.php?toynum=<?= $toy['toyID'] ?>">
            <img src="<?= $toy['img_src'] ?>" alt="<?= $toy['name'] ?>">
        </a>
        <h2><?= $toy['name'] ?></h2>
        <p>$<?= $toy['price'] ?></p>
    </div>
    <?php endforeach; ?>
</section>
<?php include 'includes/footer.php'; ?>