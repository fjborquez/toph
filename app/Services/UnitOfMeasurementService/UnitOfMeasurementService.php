<?php

namespace App\Services\UnitOfMeasurementService;

use App\Contracts\Services\UnitOfMeasurementService\UnitOfMeasurementServiceInterface;
use App\Exceptions\ResourceNotFoundException;
use App\Models\UnitOfMeasurement;
use Illuminate\Database\Eloquent\Collection;
use Spatie\QueryBuilder\QueryBuilder;

class UnitOfMeasurementService implements UnitOfMeasurementServiceInterface
{
    public function getList(): Collection
    {
        return QueryBuilder::for(UnitOfMeasurement::class)
            ->allowedFilters('category.name')
            ->get();
    }

    public function get(int $id): UnitOfMeasurement
    {
        $unitOfMeasurement = UnitOfMeasurement::with('fromConversions')->with('toConversions')->find($id);

        if ($unitOfMeasurement == null) {
            throw new ResourceNotFoundException('Unit of measurement not found');
        }

        return $unitOfMeasurement;
    }
}
