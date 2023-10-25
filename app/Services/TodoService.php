<?php

namespace App\Services;

use App\Interfaces\TodosServiceInterface;
use App\Models\Todos;
use Illuminate\Http\Client\Request;
use App\Repositories\TodosRespository;

class TodoService implements TodosServiceInterface
{
    protected $todosRespository;

    public function __construct(TodosRespository $todosRespository)
    {
        $this->todosRespository = $todosRespository;
    }
    public function create(array $todoData)
    {
        // Gọi phương thức createUser của repository để tạo người dùng mới
        $this->todosRespository->create($todoData);
    }

    // Các phương thức khác trong service...
    public function getAll()
    {
        return $this->todosRespository->getAll();
    }
    public function getOne(String $id)
    {
        return $this->todosRespository->getOne($id);
    }
    public function delete($id)
    {
        $this->todosRespository->delete($id);
    }
    public function update($tododata, String $id)
    {
        return $this->todosRespository->update($tododata, $id);
    }
}
