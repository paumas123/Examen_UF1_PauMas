<?php
include_once 'Product.php';
class LineCart{
    private $quantity;
    private $product;

    /**
     * @param $quantity
     * @param $product
     */
    public function __construct($quantity, $product)
    {
        $this->quantity = $quantity;
        $this->product = $product;
    }

    /**
     * @param $quantity
     * @param $product
     */

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @return mixed
     */
    public function getProduct()
    {
        return $this->product;
    }



    /**
     * @param mixed $product
     */
    public function setProduct($product): void
    {
        $this->product = $product;
    }



}

?>