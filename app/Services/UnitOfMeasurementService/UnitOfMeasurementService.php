<?php

namespace App\Services\UnitOfMeasurementService;

use App\Contracts\Services\UnitOfMeasurementService\UnitOfMeasurementServiceInterface;
use App\Models\UnitOfMeasurement;
use Illuminate\Database\Eloquent\Collection;
use Spatie\QueryBuilder\QueryBuilder;

class UnitOfMeasurementService implements UnitOfMeasurementServiceInterface
{
    public function getList(?array $categoryIds): Collection
    {
        $queryBuilder = QueryBuilder::for(UnitOfMeasurement::class)->allowedFilters('category_id');

        if (! empty($categoryIds)) {
            $queryBuilder->whereIn('category_id', $categoryIds);
        }

        return $queryBuilder->get();
    }
}
