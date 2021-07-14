<?php


namespace App\Controller;


use App\Model\Product;
use App\Model\ProductModel;
use JetBrains\PhpStorm\Pure;

class Controller
{
    public ProductModel $productModel;

    #[Pure] public function __construct()
    {
        $this->productModel = new  ProductModel();
    }

    public function ShowAll()
    {
        $result = $this->productModel->getAll();
        include "view/list.php";
    }


    public  function Add()
    {
        if ($_SERVER['REQUEST_METHOD']=='GET'){
            include "view/add.php";
        }else{
            if (empty($errors)){
                $name =$_POST['name'];
                $trademark=$_POST['trademark'];
                $price=$_POST['price'];
                $amount = $_POST['amount'];
                $status=$_POST['status'];
                $color = $_POST['color'];
                $starget_dir = "view/uploads/";
                $starget_file = $starget_dir . basename($_FILES['fileUpload']['name']);
                move_uploaded_file($_FILES['fileUpload']['tmp_name'],$starget_file);
                $img = $_FILES['fileUpload']['name'];
                $product = new Product($name,$trademark,$price,$amount,$status,$color,$img);
                $this->productModel->Add($product);

                header('Location: home.php');
            }else{
                include "view/add.php";
            }
        }

    }
    public function Delete()
    {
        $id = $_REQUEST['id'];
        $this->productModel->Delete($id);
        header('location: home.php');
    }
    public function Update()
    {
        $id = $_REQUEST['id'];
        $products = $this->productModel->getById($id);
        if ($_SERVER['REQUEST_METHOD']=='GET'){
            include "view/update.php";
        }else{
            if (empty($errors)){
                $name =$_POST['name'];
                $trademark=$_POST['trademark'];
                $price=$_POST['price'];
                $amount = $_POST['amount'];
                $status=$_POST['status'];
                $color = $_POST['color'];
                $starget_dir = "view/uploads/";
                $starget_file = $starget_dir . basename($_FILES['fileUpload']['name']);
                move_uploaded_file($_FILES['fileUpload']['tmp_name'],$starget_file);
                $img = $_FILES['fileUpload']['name'];
                $product = new Product($name,$trademark,$price,$amount,$status,$color,$img);
                $img2 = $this->productModel->GetImg($id);
                unlink($starget_dir.$img2);
                $this->productModel->Update($id,$product);
                header('Location: home.php');
        }else{
                include "view/update.php";
            }
        }
    }
    public function Search($name)
    {
        if (empty($name)){
            $result = $this->productModel->getAll();
            include "view/search.php";
        }else{
            $result = $this->productModel->Search($name);
            include "view/search.php";
        }
    }





}