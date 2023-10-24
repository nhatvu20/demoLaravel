<?php

namespace App\Interfaces;

use App\Models\Cars;

interface CarsRepositoryInterface
{
    /**
     * Get all
     * @return mixed
     */
    public function getAll();

    /**
     * Get one
     * @param $id
     * @return mixed
     */
    public function getOne($id);

    /**
     * Create
     * @param array $attributes
     * @return mixed
     */
    public function create(Cars $car);

    /**
     * Update
     * @param $id
     * @param array $attributes
     * @return mixed
     */
    public function update(Cars $car, $id);

    /**
     * Delete
     * @param $id
     * @return mixed
     */
    public function delete($id);
}
