<?php

namespace App\Interfaces;

use App\Models\Cars;

interface CarsServiceInterface
{
    public function create(array $carData);
    public function getAll();
    public function getOne(String $id);
    public function delete($id);
    public function update($cardata, String $id);
}
