<?php

    include 'includes/header.php';

	$toy_id = $_GET['toynum'];

    function get_toyinfo(PDO $pdo, string $toynum) {
        $sql = "SELECT toy.*, manuf.*, toy.name AS toy_name, manuf.name AS manuf_name 
                FROM toy
                JOIN manuf ON toy.manID = manuf.manID
                WHERE toy.toyID = :toynum";

        $toy = pdo($pdo, $sql, ['toynum' => $toynum])->fetch();
        return $toy;
    }

$toy = get_toyinfo($pdo, $toy_id);

?>

<section class="toy-details-page container">
    <div class="toy-details-container">
        <div class="toy-image">
            <img src="<?= $toy['img_src'] ?>" alt="<?= $toy['name'] ?>">
        </div>

        <div class="toy-details">
            <h1><?= $toy['toy_name'] ?></h1>

            <h3>Toy Information</h3>
            <p><strong>Description:</strong> <?= $toy['description'] ?></p>
            <p><strong>Price:</strong> $ <?= $toy['price'] ?></p>
            <p><strong>Age Range:</strong> <?= $toy['age_range'] ?></p>
            <p><strong>Number In Stock:</strong> <?= $toy['in_stock'] ?></p>
            <br />

            <h3>Manufacturer Information</h3>

            <p><strong>Name:</strong> <?= $toy['manuf_name'] ?> </p>
            <p><strong>Address:</strong> <?= $toy['street'] ?>, <?= $toy['city'] ?>, <?= $toy['state'] ?> <?= $toy['zip'] ?></p>
            <p><strong>Phone:</strong> <?= $toy['phone'] ?></p>
            <p><strong>Contact:</strong> <?= $toy['contact'] ?></p>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
