<?php


namespace App\Model;


class orderdetail
{
    private  $id;
    private $customerName;
    private $phone;
    private $address;
    private $product_name;
    private $color;
    private $quantityOrder;
    private $priceEach;
    private $shippedDate;
    private $note;

    /**
     * orderdetail constructor.
     * @param $customername
     * @param $phone
     * @param $address
     * @param $name
     * @param $trademark
     * @param $color
     * @param $quantityOrder
     * @param $priceEach
     * @param $shippedDate
     */
    public function __construct($customerName, $phone, $address, $product_name,  $color, $quantityOrder, $priceEach, $shippedDate,$note)
    {
        $this->customerName = $customerName;
        $this->phone = $phone;
        $this->address = $address;
        $this->product_name = $product_name;
        $this->color = $color;
        $this->quantityOrder = $quantityOrder;
        $this->priceEach = $priceEach;
        $this->shippedDate = $shippedDate;
        $this->note = $note;
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
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * @param mixed $customerName
     */
    public function setCustomerName($customerName): void
    {
        $this->customerName = $customerName;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getProductName()
    {
        return $this->product_name;
    }

    /**
     * @param mixed $product_name
     */
    public function setProductName($product_name): void
    {
        $this->product_name = $product_name;
    }

    /**
     * @return mixed
     */
    public function getNote()
    {
        return $this->note;
    }


    public function setTrademark($note): void
    {
        $this->note = $note;
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
    public function setColor($color): void
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getQuantityOrder()
    {
        return $this->quantityOrder;
    }

    /**
     * @param mixed $quantityOrder
     */
    public function setQuantityOrder($quantityOrder): void
    {
        $this->quantityOrder = $quantityOrder;
    }

    /**
     * @return mixed
     */
    public function getPriceEach()
    {
        return $this->priceEach;
    }

    /**
     * @param mixed $priceEach
     */
    public function setPriceEach($priceEach): void
    {
        $this->priceEach = $priceEach;
    }

    /**
     * @return mixed
     */
    public function getShippedDate()
    {
        return $this->shippedDate;
    }

    /**
     * @param mixed $shippedDate
     */
    public function setShippedDate($shippedDate): void
    {
        $this->shippedDate = $shippedDate;
    }



}