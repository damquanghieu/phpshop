<?php

require_once "BaseModel.php";

class CategoryModel extends BaseModel
{
    const TABLE = "categories";
    
    public function index()
    {
        //$cateogries = $this->getAll(self::TABLE);
        return $this->getAll(self::TABLE);
    }

    public function store($data)
    {
      return $this->insert(self::TABLE, $data);
    }

    public function edit($id)
    {
       return $this->find(self::TABLE, $id);
    }
    
    public function update($data, $id)
    {
        return $this->updates($data, $id);
    }
}

?>