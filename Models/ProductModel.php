<?php

require_once "BaseModel.php";

class ProductModel extends BaseModel
{
    const TABLE = "products";
    const TABLE_COMMENT = "comments";

    public function index()
    {
        return $this->getAll(self::TABLE);
    }

    public function store($data, $nameImages)
    {
        $result = $this->insert(self::TABLE, $data);
        if ($result) {
            $lastInsertId = mysqli_insert_id(parent::getConn());
            $table2 = "product_image_detail";
            $insertOneToMany = $this->insertOneToMany($table2, $nameImages);
            if ($insertOneToMany) {
                return $insertOneToMany;
            } else {
                echo "Insert to products_image_detail errors!";
                return false;
            }

        } else {
            echo "Insert to products errors!";
            return false;
        }

    }
    //demo
    public function show()
    {
        $id = 1;
        return $this->find(self::TABLE, $id);
    }
    public function getAllComments()
    {
        return $this->getAll(self::TABLE_COMMENT);
    }
    public function addComment($data)
    {
       return $this->insert(self::TABLE_COMMENT, $data);
    }

}
