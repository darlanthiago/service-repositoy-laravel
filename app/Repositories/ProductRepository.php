<?php

namespace App\Repositories;

use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
use App\Models\Products;

/**
 * Class ProductRepository.
 */
class ProductRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model(): string
    {
        return Products::class;
    }


    public function store(array $data): \Illuminate\Database\Eloquent\Model
    {
       return $this->create($data);
    }
}
