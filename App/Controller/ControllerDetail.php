<?php


namespace App\Controller;


use App\Model\orderdtailModel;

class ControllerDetail
{
    private $orderDetailModel;
    public function __construct()
    {
        $this->orderDetailModel =new orderdtailModel();
    }
    public function GetDetail()
    {
        $result = $this->orderDetailModel->getDetail();
        include "view/listDetail.php";
    }


}