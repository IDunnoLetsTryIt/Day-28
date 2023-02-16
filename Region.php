<?php

// require_once 'DB.php';

class Region 
{
    public ?int $id = null;
    public ?string $name = null;
    public ?string $slug = null;

    public function save() :void
    {
        if (isset($this->id)){
            $this ->update();
        } else {
            $this->insert();
        }
    }
    public function delete(): void 
    {
        $query = "DELETE FROM `regions` WHERE `id` = ?";
        DB::delete($query, [$this->id]);
    }

    private function insert(): void
    {
        $query = "INSERT INTO `regions` (`name`, `slug`) values (?,?)";
        DB::insert($query, [$this->name, $this-> slug]);

        $this->id = DB::lastInsertId();
    }

    private function update(): void
    {
        if (is_null($this->id)){
        echo 'cannot update';
        exit();
        }
        $query = "UPDATE `regions` SET `name` = ?, `slug` = ? WHERE `id` = ?";
        DB::update($query, [$this->name, $this->name, $this->id]);
    }
}
