<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnimalCommerce</title>

    <?php require_once(__DIR__ . "/db.php"); ?>
</head>

<body>

    <ul>
        <?php
        $productsByTypology = [];

        foreach ($prods as $prod) {
            $typology = $prod->getTypology();
            $productsByTypology[$typology][] = $prod;
        }
        ?>

        <?php foreach ($productsByTypology as $typology => $products) { ?>
            <li>
                <h3>
                    <?= $typology ?>
                </h3>

                <?php foreach ($products as $prod) { ?>
                <li><?php
                    try {
                    

                    $prod->setDiscountPercentage(0);

                    $discountedPrice = $prod->applyDiscount($prod->getOriginalPrice());

                    echo "Prezzo originale: {$prod->getOriginalPrice()} Euro<br>";
                    echo "Prezzo scontato: {$discountedPrice} Euro";
                    } catch (Exception $e) {
                    echo  $e->getMessage();
                    }
                    ?>
                    <img src="<?= htmlspecialchars($prod->getImage()) ?>" width="100" /><br>
                    Category: <img src="<?= htmlspecialchars($prod->getCategory()->getIcon()) ?>" width="30" />
                    <?= htmlspecialchars($prod->getCategory()->getName()) ?>
                </li>
            <?php } ?>

            </li>
        <?php } ?>
    </ul>
</body>

</html>