<?php

include "parts/header.php";

?>
    <div class="row">
        <div class="col-12 mt-5 mb-2">
            <h2>Shopping cart</h2>
        </div>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">Image</th>
                <th scope="col">Product</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            <?php $cart = getCurrentCart(); ?>
            <?php foreach ($cart->getCartItems() as $cartItem): ?>
                <tr>
                    <th scope="row">
                        <img height="50" src="images/<?php echo $cartItem->getProduct()->getFirstImage()->file; ?>">
                    </th>
                    <td><?php echo $cartItem->getProduct()->getName(); ?></td>
                    <td><?php echo formatPrice($cartItem->getProduct()->getFinalPrice()); ?> RON</td>
                    <td>
                        <form action="updateCartItem.php?id=<?php echo $cartItem->getId(); ?>" method="post">
                            <input min="1" type="number" name="quantity" value="<?php echo $cartItem->quantity; ?>">
                            <button class="btn btn-primary" type="submit">Update</button>
                        </form>
                    </td>
                    <td><?php echo formatPrice($cartItem->getTotal()); ?>  RON</td>
                    <td><a href="deleteCartItem.php?id=<?php echo $cartItem->getId(); ?>" class="btn btn-danger">X</a></td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <th scope="row"></th>
                <td colspan="4" class="text-right">Total weight</td>
                <td>
                    <?php echo $cart->getWeight(); ?> Kg
                </td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td colspan="4" class="text-right">Total</td>
                <td>
                    <?php if ($cart->getTotal()!=$cart->getFinalTotal()): ?>
                        <s><?php echo formatPrice($cart->getTotal()); ?> RON</s><br />
                    <?php endif; ?>
                    <?php echo formatPrice($cart->getFinalTotal()); ?> RON
                </td>

            </tr>
            </tbody>
        </table>
            <div class="col-12">
                <div class="text-right">
                    <?php if (count($cart->getCartItems())>0):?>
                        <a href="checkout.php" class="btn btn-primary">Finalize order</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php include "parts/footer.php"; ?>