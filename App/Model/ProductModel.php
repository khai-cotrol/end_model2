<?php


namespace App\Model;


use JetBrains\PhpStorm\Pure;
use PDO;

class ProductModel
{
    public DBconnect $DBconnect;

    #[Pure] public function __construct()
    {
        $this->DBconnect = new DBconnect();
    }

    public function getAll(): array
    {
        $sql = "SELECT * FROM `Products` ORDER BY `name` ASC ";
        $stml = $this->DBconnect->connection()->query($sql);
        $stml->execute();
        $stml->setFetchMode(PDO::FETCH_OBJ);
        $result = $stml->fetchAll();
        return $result;
    }

    public function Add(object $product)
    {
        $sql = "INSERT INTO `Products`(`name`,`trademark` ,`price`,`amount`,`status`,`color`,`img`)VALUES (?,?,?,?,?,?,?)";
        $stml = $this->DBconnect->connection()->prepare($sql);
        $stml->bindParam(1, $product->getName());
        $stml->bindParam(2, $product->getTrademark());
        $stml->bindParam(3, $product->getPrice());
        $stml->bindParam(4, $product->getAmount());
        $stml->bindParam(5, $product->getStatus());
        $stml->bindParam(6, $product->getColor());
        $stml->bindParam(7, $product->getImg());
        $stml->execute();
    }

    public function Delete($id)
    {
        $sql = "DELETE FROM `Products` WHERE `id` =" . $id;
        $stml = $this->DBconnect->connection()->query($sql);
        $stml->execute();
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM `Products` WHERE `id`=" . $id;
        $stml = $this->DBconnect->connection()->prepare($sql);
        $stml->execute();
        $result = $stml->fetchAll();
        foreach ($result as $row) {
            $product = new Product($row['name'],
                $row['trademark'],
                $row['price'],
                $row['amount'],
                $row['status'],
                $row['color'],
                $row['img']);
            $product->setId($row['id']);
            $products[] = $product;
        }
        return $products;
    }

    public function Update($id, $product): bool
    {
        if ($product->getImg() == '') {
            $sql = "UPDATE `Products` SET `name`= ?,`trademark`=? ,`price`=?,`amount`=?,`status`=?,`color`=? WHERE `id`=?";
            $stml = $this->DBconnect->connection()->prepare($sql);
            $stml->bindParam(1, $product->getName());
            $stml->bindParam(2, $product->getTrademark());
            $stml->bindParam(3, $product->getPrice());
            $stml->bindParam(4, $product->getAmount());
            $stml->bindParam(5, $product->getStatus());
            $stml->bindParam(6, $product->getColor());
            $stml->bindParam(7, $id);
            return $stml->execute();
        } else {
            $sql = "UPDATE `Products` SET `name`= ?,`trademark`=? ,`price`=?,`amount`=?,`status`=?,`color`=?,`img`=? WHERE `id`=?";
            $stml = $this->DBconnect->connection()->prepare($sql);
            $stml->bindParam(1, $product->getName());
            $stml->bindParam(2, $product->getTrademark());
            $stml->bindParam(3, $product->getPrice());
            $stml->bindParam(4, $product->getAmount());
            $stml->bindParam(5, $product->getStatus());
            $stml->bindParam(6, $product->getColor());
            $stml->bindParam(7, $product->getImg());
            $stml->bindParam(8, $id);
            return $stml->execute();
        }
    }

    public function GetImg($id)
    {
        $sql = "SELECT `img` FROM `Products` where `id`=" . $id;
        $stml = $this->DBconnect->connection()->query($sql);
        $stml->execute();
        $img = $stml->fetchAll();
        return $img[0]['img'];
    }

    public function Search($name): array
    {
        $products = [];
        $sql = "SELECT * FROM `Products` WHERE `name` LIKE :text";
        $stml = $this->DBconnect->connection()->prepare($sql);
        $txt = '%' . $name . '%';
        $stml->bindParam(":text", $txt);
        $stml->execute();
        $result = $stml->fetchAll();
        foreach ($result as $row) {
            $product = new Product($row['name'],
                $row['trademark'],
                $row['price'],
                $row['amount'],
                $row['status'],
                $row['color'],
                $row['img']);
            $product->setName($row['name']);
            $product->setId($row['id']);
            $products[] = $product;
        }
        return $products;
    }

}