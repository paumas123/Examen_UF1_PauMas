<?php

class Product{
    private $idProduct;
    private $description;
    private $priceKg;
    private $fileName;

    /**
     * @param $idProduct
     * @param $description
     * @param $priceKg
     * @param $fileName
     */
    public function __construct($idProduct, $description, $priceKg, $fileName)
    {
        $this->idProduct = $idProduct;
        $this->description = $description;
        $this->priceKg = $priceKg;
        $this->fileName = $fileName;
    }

    /**
     * @return mixed
     */
    public function getIdProduct()
    {
        return $this->idProduct;
    }

    /**
     * @param mixed $idProduct
     */
    public function setIdProduct($idProduct): void
    {
        $this->idProduct = $idProduct;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getPriceKg()
    {
        return $this->priceKg;
    }

    /**
     * @param mixed $priceKg
     */
    public function setPriceKg($priceKg): void
    {
        $this->priceKg = $priceKg;
    }

    /**
     * @return mixed
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @param mixed $fileName
     */
    public function setFileName($fileName): void
    {
        $this->fileName = $fileName;
    }




}

?>