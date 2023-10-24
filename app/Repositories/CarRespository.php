<?php

namespace App\Repositories;

use App\Models\Cars;
use App\Interfaces\CarsRepositoryInterface;

class CarRespository implements CarsRepositoryInterface
{
    protected $carModel;

    public function __construct(Cars $carModel)
    {
        $this->carModel = $carModel;
    }
    public function create($carData)
    {
        // Xử lý logic để tạo người dùng mới
        // $car = new $this->carModel;
        // $car->name = $carData['name'];
        // $car->brand = $carData['brand'];
        // // Lưu đối tượng car vào cơ sở dữ liệu
        // $car->save();
        // return $car;
        $car = Cars::create($carData);
        return $car;
    }
    public function getAll()
    {
        $car = Cars::all();
        return $car;
    }
    public function getOne($id)
    {
        $car = Cars::findOrFail($id);
        return $car;
    }
    public function delete($id)
    {
        $car = Cars::findOrFail($id);
        $car->delete();
        return $car;
    }
    public function update($carData, $id)
    {
        $car = Cars::findOrFail($id);
        $car->update($carData);
        return $car;
    }
}
