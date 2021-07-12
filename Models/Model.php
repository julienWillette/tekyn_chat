<?php

namespace App\Models;

use App\Core\Db;


class Model extends Db
{
    protected $table;

    private $db;

    public function findAll()
    {
        $query = $this->request('SELECT * FROM '. $this->table);
        return $query->fetchAll();
    }


    public function findOneById(int $id): array
    {
        return $this->request("SELECT * FROM $this->table WHERE id = $id")->fetch();
    }

    public function create(model $model)
    {
        $fields = [];
        $values = [];
        $allFields = [];

        foreach($model as $field => $value){
            if ($value != null && $field != 'db' && $field != 'table'){
                $fields[] = $field;
                $allFields[] = "?";
                $values[] = $value;
            }
        }

        $field_list = implode(',', $fields);
        $allFields_list = implode(', ', $allFields);

        return $this->request('INSERT INTO '. $this->table.' ('. $field_list. ') VALUES(' .$allFields_list. ')', $values);
    }

    public function hydrate(array $data)
    {
        foreach($data as $key => $values){
            $set = 'set'.ucfirst($key);

            if(method_exists($this, $set)){
                $this->$set($values);
            }
        }
        return $this;
    }

    public function delete(int $id)
    {
        return $this->request("DELETE FROM {$this->table} WHERE id = ?", [$id]);
    }


    public function update(int $id, model $model)
    {
        $fields = [];
        $values = [];

        foreach($model as $field => $value){
            if ($value !== null && $field != 'db' && $field != 'table'){
                $fields[] = "$field = ?";
                $values[] = $value;
            }
        }

        $values[] = $id;
        $field_list = implode(', ', $fields);

        return $this->request('UPDATE '.$this->table.' SET '. $field_list. ' WHERE id = ?', $values);
    }





    public function request(string $sql, array $attributs = null)
    {
        $this->db = Db::getInstance();

        if($attributs !== null){
            $query = $this->db->prepare($sql);
            $query->execute($attributs);
            return $query;
        }else{
            return $this->db->query($sql);
        }
    }
}