<?php
namespace App\Model;

class Product
{
    private $id;
    private $name;
    private $trademark;
    private $price;
    private $amount;
    private $status;
    private $img;
    private $color;

    /**
     * Product constructor.
     * @param $img
     * @param $name
     * @param $trademark
     * @param $price
     * @param $amount
     * @param $status
     * @param $color
     */
    public function __construct( $name, $trademark, $price, $amount, $status, $color,$img)
    {

        $this->name = $name;
        $this->trademark = $trademark;
        $this->price = $price;
        $this->amount = $amount;
        $this->status = $status;
        $this->color = $color;
        $this->img = $img;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * @param mixed $img
     */
    public function setImg($img)
    {
        $this->img = $img;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getTrademark()
    {
        return $this->trademark;
    }

    /**
     * @param mixed $trademark
     */
    public function setTrademark($trademark)
    {
        $this->trademark = $trademark;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }



}