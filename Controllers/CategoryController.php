<?php
require "BaseController.php";

class CategoryController extends BaseController
{
    private $categoryModel;

    public function __construct()
    {
        $this->categoryModel = new CategoryModel();
    }

    public function index()
    {
        $categories = $this->categoryModel->index();
        // var_dump($_GET);
        // die();
        return $this->view('admin.pages.category.index', ['categories' => $categories]);
    }
    public function create()
    {
        //return $this->categoryModel->store();
        return $this->view('admin.pages.category.index');
    }
    public function store()
    {
        $data = $_POST;
        $result = $this->categoryModel->store($data);
        if ($result) {
           echo "Add success!";
        }
    }

    public function edit()
    {
        $id = $_GET['id'];
        $category = $this->categoryModel->edit($id);
        return view('admin.pages.category.index',['category' => $category]);
    }
    public function update()
    {
        $id = array_shift($_POST);
        $data = $_POST;
        $result = $this->categoryModel->update($data, $id);
        if ($result) {
           echo "Update success!";
        }
    }
}
// $categoryController = new CategoryController();
// echo "<pre>";
// print_r($categoryController->index());
