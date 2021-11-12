<?php

include "parts/header.php";

?>
    <div class="row">
        <div class="col-12 mt-5 mb-2">
            <h2>Cele mai noi produse</h2>
        </div>
        <?php
            $newProductIds = query('SELECT id FROM products WHERE type!=\'service\' ORDER BY id DESC LIMIT 4;');
            foreach ($newProductIds as $newProductId){
                $product = new Product($newProductId['id']);
                $product->card();
        }
        ?>
    </div>

    <div class="row">
        <div class="col-12 mt-5 mb-2">
            <h2>Cele mai vandute produse</h2>
        </div>
        <?php
        $product = new Product(1);
        $product->card();
        $product = new Product(5);
        $product->card();
        $product = new Product(10);
        $product->card();
        $product = new Product(16);
        $product->card();
        ?>
    </div>
    </div>

<?php include "parts/footer.php"; ?>