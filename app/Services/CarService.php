<?php

namespace App\Services;

use App\Models\Cars;
use App\Repositories\CarRespository;
use Illuminate\Http\Client\Request;
use App\Interfaces\CarsServiceInterface;

class CarService implements CarsServiceInterface
{
    protected $carRespository;

    public function __construct(CarRespository $carRespository)
    {
        $this->carRespository = $carRespository;
    }
    public function create(array $carData)
    {
        // Gọi phương thức createUser của repository để tạo người dùng mới
        $this->carRespository->create($carData);
    }

    // Các phương thức khác trong service...
    public function getAll()
    {
        return $this->carRespository->getAll();
    }
    public function getOne(String $id)
    {
        return $this->carRespository->getOne($id);
    }
    public function delete($id)
    {
        $this->carRespository->delete($id);
    }
    public function update($cardata, String $id)
    {
        return $this->carRespository->update($cardata, $id);
    }
}
