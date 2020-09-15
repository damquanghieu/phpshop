<?php

require "BaseController.php";
require_once "Core/Traits/TraitUploadSingleFile.php";
require_once "Core/Traits/TraitUploadMultipleFile.php";

class ProductController extends BaseController
{
    use TraitUploadSingleFile;
    use TraitUploadMultipleFile;

    private $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }
    /*  demo */
    public function login()
    {
        return $this->view('ui.login');
    }
    public function demo()
    {
        $porduct = $this->productModel->show();
        $comments = $this->productModel->getAllComments();
        return $this->view('admin.pages.demo', ['porduct' => $porduct, 'comments' => $comments]);
    }
    public function demoadd()
    {
        
        $comments = strip_tags($_POST['comment']);
        $newArr = [
            'name'=> $_POST['name'],
            'comment' => $comments,
        ];
      
        // $userName = strip_tags($userName);
        // $userName = addslashes($userName);

        // $passWord = strip_tags($passWord);
        // $passWord = addslashes($passWord);
        
        //$data = $_POST;
        // var_dump($newArr);
        // die;
        $result = $this->productModel->addComment($newArr);
        if ($result) {
            return $this->demo();
        }
    }
    public function getdemo2()
    {
        return $this->view('admin.pages.demo_reflected');
    }
    public function dombase()
    {
        return view('admin.pages.demo_dombase');
    }
    // end demo
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
