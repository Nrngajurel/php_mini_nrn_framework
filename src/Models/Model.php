<?php

namespace Nrngajurel\Sl\Models;

abstract class Model
{
    protected $table;
    protected $db;

    public function __construct()
    {
        $this->db = app()->db;
        app()->db->connect();
        if (!$this->table){
            $arr = explode('\\', get_class($this));
            $this->table = array_pop($arr);
        }
    }

    public function all(array $columns = ['*'])
    {
        $sql = "SELECT " . implode(', ', $columns) . " FROM {$this->table}";
        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);

    }
    public function find($id, array $columns = ['*'])
    {
        $sql = "SELECT " . implode(', ', $columns) . " FROM {$this->table} WHERE id = {$id}";
        $result = $this->db->query($sql);
        return $result->fetch_assoc();
    }
    public function create(array $data){
        $column_arr = array_keys($data);
        $columns = implode(', ', $column_arr);
        $values = "'".implode("','", array_values($data)). "'";
        $sql = "INSERT INTO {$this->table}({$columns}) VALUES ({$values})";
        $this->db->query($sql);
        return $this->find($this->db->conn->insert_id);
    }
    public function update($id, array $data){
        $column_arr = array_keys($data);
        $columns = implode(', ', $column_arr);
        $values = "'".implode("','", array_values($data)). "'";
        $sql = "UPDATE {$this->table} SET {$columns} WHERE id = {$id}";
        dd($sql);
    }
    public function delete($id){
        $sql = "DELETE FROM {$this->table} WHERE id = {$id}";
        $this->db->query($sql);
        return $this->db->conn->affected_rows == 1;

    }
}