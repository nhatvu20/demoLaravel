<?php

namespace App\Services;

use App\Models\Cars;
use App\Repositories\CarRespository;
use Illuminate\Http\Client\Request;

class CarService
{
    protected $carRespository;

    public function __construct(CarRespository $carRespository)
    {
        $this->carRespository = $carRespository;
    }
    public function createCar(array $carData)
    {
        // Gọi phương thức createUser của repository để tạo người dùng mới
        $this->carRespository->create($carData);
    }

    // Các phương thức khác trong service...
    public function getAllCar()
    {
        return $this->carRespository->getAll();
    }
    public function getOneCar(String $id)
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
