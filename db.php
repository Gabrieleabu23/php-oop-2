<?php

    // REQUIRE
    require_once(__DIR__ . "/partials/category.php");
    require_once(__DIR__ . "/partials/product.php");
    require_once(__DIR__ . "/partials/food.php");
    require_once(__DIR__ . "/partials/animalHouse.php");
    
    // CATEGORIES
    $cat_dog = new Category(1, "Cane", "https://cdn4.iconfinder.com/data/icons/eldorado-medicine/40/dog-512.png");
    $cat_cat = new Category(2, "Cat", "https://cdn3.iconfinder.com/data/icons/animal-and-tool/283/animal_and_tool-02-512.png");

    // PRODUCTS
    $prod_croccantini = new Food(
        1, "Croccantini", "https://shop-cdn-m.mediazs.com/bilder/9/400/26635_pla_meradog_puppyknochen_10kg_9.jpg", 35,
        $cat_cat, "10/05/2024"
    );
    $prod_croccantini_dog = new Food(
        2, "Croccantini per Cani", "https://shop-cdn-m.mediazs.com/bilder/9/400/26635_pla_meradog_puppyknochen_10kg_9.jpg", 17,
        $cat_dog, "10/08/2025"
    );
    $prod_cuccia = new AnimalHouse(
        3, "Cuccia per gatti incredibile", "https://www.original-legno.com/wp-content/uploads/2022/02/Cucce_in_legno_italy_con_veranda_per_cani_Barboncino.webp", 100,
        $cat_cat, "100x45x40"
    );
    $prod_cuccia_dog = new AnimalHouse(
        4, "Cuccia per cani", "https://www.original-legno.com/wp-content/uploads/2022/02/Cucce_in_legno_italy_con_veranda_per_cani_Barboncino.webp", 65,
        $cat_dog, "100x45x40"
    );

    $prods = [ $prod_croccantini, $prod_cuccia,$prod_croccantini_dog,$prod_cuccia_dog ];