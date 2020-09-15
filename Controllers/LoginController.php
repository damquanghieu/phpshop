<?php

require "BaseController.php";

class ProductController extends BaseController
{
    private $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }
    //////////////////
    public function login()
    {
        return $this->view('ui.login');
    }
    public function checkLogin()
    {
        var_dump($_POST);
    }

    public function index()
    {
        $products = $this->productModel->index();
        return $this->view('admin.pages.product.index', ['products' => $products]);
    }

    public function create()
    {
        return $this->view('admin.pages.product.index');
    }

    public function store()
    {
        if ($_FILES['image_details']['name'][0]) {
            $data = $_FILES['image_details'];
            $nameImages = $this->traitCheckMoveMultipleFile($data);
        }

        $_FILE = $_FILES;
        $pathImage = $this->checkMoveFile($_FILE);

        if ($pathImage != null && $nameImages != null) {
            $data = $_POST;
            $data['image'] = $pathImage;
            $result = $this->productModel->store($data, $nameImages);
            if ($result) {
                echo "Add products success";
            } else {
                echo "Add product fail!";
            }
        } else {
            echo "No files!";
        }

    }

}
