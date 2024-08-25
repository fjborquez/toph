<?php

use App\Services\UnitOfMeasurementService\UnitOfMeasurementService;
use function PHPUnit\Framework\assertEquals;

use GuzzleHttp\Exception\ConnectException;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\QueryException;
use Tests\TestCase;

class UnitOfMeasurementServiceTest extends TestCase
{
    private $mockedUnitOfMeasurementService;

    private $model;

    public function setUp(): void
    {
        parent::setUp();
        $this->mockedUnitOfMeasurementService = new UnitOfMeasurementService();
        $this->model = Mockery::mock('overload:App\Models\UnitOfMeasurement');

    }

    public function test_should_call_to_model_when_consult_for_all()
    {
        $unitOfMeasurement = new Collection([
            "id" => 1,
            "description" => "Milligrams",
            "abbreviation" => "mg",
            "category_id" => 1,
            "created_at" => null,
            "updated_at" => null
        ]);
        $this->model->shouldReceive('all')->once()->andReturn($unitOfMeasurement);
        assertEquals(count($unitOfMeasurement), count($this->mockedUnitOfMeasurementService->getList()));
    }
}
