<?php


class CartItem extends Base
{
    public $cartId;

    public $productId;

    public $parentId;

    public $quantity;

    public function getCart(){
        return new Cart($this->cartId);
    }

    public function getProduct(){
        $product = new Product($this->productId);
        if ($product->type=='service'){
            $productEW =new ProductEW($this->productId);
            $productEW->parentProduct = $this->getParentProduct();
            return $productEW;
        }

        if ($product->type=='delivery'){
            $productDelivery = new ProductDelivery($this->productId);
            $productDelivery->cart = $this->getCart();
            return $productDelivery;
        }

        return $product;

    }

    public function getParentProduct(){
        return new Product($this->parentId);
    }

    public function getTotal(){

        $total = $this->quantity * $this->getProduct()->getFinalPrice();

        if ($this->quantity >= 10){
            return $total * 0.95;
        } else {
            return $total;
        }
    }
    public static function getTableName()
    {
        return 'cart_items';
    }
}