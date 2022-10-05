<?php
require_once 'UserShop.php';
require_once 'Cart.php';
require_once 'LineCart.php';

class Order
{
    private $user;
    private $dataOrder;
    private $cart;
    private $total;

    /**
     * @param $user
     * @param $dataOrder
     * @param $cart
     * @param $total
     */
    public function __construct($user, $total)
    {
        $this->user = $user;
        $this->dataOrder = new DateTime('now', new DateTimeZone('Europe/Madrid'));
        $this->cart = $user->getCart();
        $this->total = $total;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @return DateTime
     */
    public function getDataOrder(): DateTime
    {
        return $this->dataOrder;
    }

    /**
     * @return mixed
     */
    public function getCart()
    {
        return $this->cart;
    }

    /**
     * @return mixed
     */
    public function getTotal()
    {
        return $this->total;
    }


}

?>