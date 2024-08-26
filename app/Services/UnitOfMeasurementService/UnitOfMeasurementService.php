<?php

namespace App\Services\UnitOfMeasurementService;

use App\Contracts\Services\UnitOfMeasurementService\UnitOfMeasurementServiceInterface;
use App\Models\UnitOfMeasurement;
use Illuminate\Database\Eloquent\Collection;

class UnitOfMeasurementService implements UnitOfMeasurementServiceInterface
{
    public function getList(): Collection
    {
        return UnitOfMeasurement::all();
    }
}
