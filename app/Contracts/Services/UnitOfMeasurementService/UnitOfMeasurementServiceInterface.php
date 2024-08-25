<?php

namespace App\Contracts\Services\UnitOfMeasurementService;

use Illuminate\Database\Eloquent\Collection;

interface UnitOfMeasurementServiceInterface
{
    public function getList(): Collection;
}
