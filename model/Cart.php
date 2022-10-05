<?php
require_once 'Product.php';
require_once 'LineCart.php';
class Cart
{
    private $linies = array();

    /**
     * @param $linies
     */
    public function __construct()
    {
    }

    /**
     * @return array
     */
    public function getLinies(): array
    {
        return $this->linies;
    }

    /**
     * @param array $linies
     */
    public function setLinies(array $linies): void
    {
        $this->linies = $linies;
    }

    public function addLinia($linia)
    {
        $this->linies[] = $linia;
    }


}

?>