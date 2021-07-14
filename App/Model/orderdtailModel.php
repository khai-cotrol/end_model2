<?php


namespace App\Model;

use PDO;
class orderdtailModel
{
    private $DBconnect;

    public function __construct()
    {
        $this->DBconnect = new DBconnect();
    }

    public function getDetail()
    {
        $sql = "SELECT orders.id, customers.customerName,customers.phone,customers.address, 
                orderDetails.product_name,orderDetails.color,
                orderDetails.quantityOrder,orderDetails.priceEach,
                orders.shippedDate,orderDetails.note
                FROM orders
                INNER JOIN customers ON customers.id = orders.customer_id
                INNER JOIN orderDetails ON orders.id = orderDetails.order_id  ";
        $stml = $this->DBconnect->connection()->query($sql);
        $stml->execute();
        $stml->setFetchMode(PDO::FETCH_OBJ);
        $result =$stml->fetchAll();
        return $result;
    }

}