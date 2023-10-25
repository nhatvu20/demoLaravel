<?php

namespace App\Interfaces;

use App\Models\Todos;

interface TodosRepositoryInterface
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
    public function create(Todos $todo);

    /**
     * Update
     * @param $id
     * @param array $attributes
     * @return mixed
     */
    public function update(Todos $todo, $id);

    /**
     * Delete
     * @param $id
     * @return mixed
     */
    public function delete($id);
}
