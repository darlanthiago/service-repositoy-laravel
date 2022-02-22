<?php

namespace App\Services;

use App\Repositories\ProductRepository;

/**
 * Class ProductService
 * @package App\Services
 */
class ProductService
{

    public function __construct(protected ProductRepository $repository)
    {
    }

    public function all(): \Illuminate\Database\Eloquent\Collection|array
    {
        return $this->repository->all();
    }


    public function create(array $data): \Illuminate\Database\Eloquent\Model
    {
        return $this->repository->create($data);
    }

}
