<?php

namespace App\Contracts\Services\UnitOfMeasurementService;

use App\Models\UnitOfMeasurement;
use Illuminate\Database\Eloquent\Collection;

interface UnitOfMeasurementServiceInterface
{
    public function getList(?array $categoryIds): Collection;

    public function get(int $id): UnitOfMeasurement;
}
