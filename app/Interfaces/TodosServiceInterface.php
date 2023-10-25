<?php

namespace App\Interfaces;

use App\Models\Todos;

interface TodosServiceInterface
{
    public function create(array $todoData);
    public function getAll();
    public function getOne(String $id);
    public function delete($id);
    public function update($tododata, String $id);
}
