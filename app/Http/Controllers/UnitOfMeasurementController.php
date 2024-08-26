<?php

namespace App\Http\Controllers;

use App\Contracts\Services\UnitOfMeasurementService\UnitOfMeasurementServiceInterface;

class UnitOfMeasurementController extends Controller
{
    public function __construct(
        private readonly UnitOfMeasurementServiceInterface $unitOfMeasurementService
    ) {}

    public function list()
    {
        return $this->unitOfMeasurementService->getList();
    }
}
