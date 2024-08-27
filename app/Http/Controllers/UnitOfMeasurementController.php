<?php

namespace App\Http\Controllers;

use App\Contracts\Services\UnitOfMeasurementService\UnitOfMeasurementServiceInterface;
use App\Http\Requests\UOMRequest;

class UnitOfMeasurementController extends Controller
{
    public function __construct(
        private readonly UnitOfMeasurementServiceInterface $unitOfMeasurementService
    ) {}

    public function list(UOMRequest $uomRequest)
    {
        $categoryIds = $uomRequest->input('categoryIds') ? explode(',', $uomRequest->input('categoryIds')) : null;
        return $this->unitOfMeasurementService->getList($categoryIds);
    }
}
