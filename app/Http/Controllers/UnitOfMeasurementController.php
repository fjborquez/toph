<?php

namespace App\Http\Controllers;

use App\Contracts\Services\UnitOfMeasurementService\UnitOfMeasurementServiceInterface;
use App\Exceptions\ResourceNotFoundException;
use Symfony\Component\HttpFoundation\Response;

class UnitOfMeasurementController extends Controller
{
    public function __construct(
        private readonly UnitOfMeasurementServiceInterface $unitOfMeasurementService
    ) {}

    public function list()
    {
        return $this->unitOfMeasurementService->getList();
    }

    public function get(int $id)
    {
        try {
            return response()->json($this->unitOfMeasurementService->get($id), Response::HTTP_OK);
        } catch (ResourceNotFoundException $exception) {
            return response()->noContent(Response::HTTP_NOT_FOUND);
        }
    }
}
