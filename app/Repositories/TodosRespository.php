<?php

namespace App\Repositories;

use App\Models\Todos;
use App\Interfaces\TodosRepositoryInterface;

class TodosRespository implements TodosRepositoryInterface
{
    protected $todosModel;

    public function __construct(Todos $todos)
    {
        $this->todosModel = $todos;
    }
    public function create($todoData)
    {
        // Xử lý logic để tạo người dùng mới
        // $todo = new $this->todosModel;
        // $todo->name = $todoData['name'];
        // $todo->brand = $todoData['brand'];
        // // Lưu đối tượng todo vào cơ sở dữ liệu
        // $todo->save();
        // return $todo;
        $todo = Todos::create($todoData);
        return $todo;
    }
    public function getAll()
    {
        $todo = Todos::all();
        return $todo;
    }
    public function getOne($id)
    {
        $todo = Todos::findOrFail($id);
        return $todo;
    }
    public function delete($id)
    {
        $todo = Todos::findOrFail($id);
        $todo->delete();
        return $todo;
    }
    public function update($todoData, $id)
    {
        $todo = Todos::findOrFail($id);
        $todo->update($todoData);
        return $todo;
    }
}
