<?php

use App\Enums\UOMEnum;
use App\Exceptions\ResourceNotFoundException;
use App\Services\UnitOfMeasurementService\UnitOfMeasurementService;
use Illuminate\Database\Eloquent\Collection;
use Spatie\QueryBuilder\QueryBuilder;
use Tests\TestCase;

class UnitOfMeasurementServiceTest extends TestCase
{
    private $mockedUnitOfMeasurementService;

    private $model;

    protected function setUp(): void
    {
        parent::setUp();
        $this->mockedUnitOfMeasurementService = new UnitOfMeasurementService;
        $this->model = Mockery::mock('overload:App\Models\UnitOfMeasurement');
    }

    public function test_get_should_return_unit_of_measurement_when_id_does_exists()
    {
        $id = 1;

        $this->model->shouldReceive('with')->andReturnSelf();
        $this->model->shouldReceive('find')->with($id)->andReturnSelf();

        $this->assertNotNull($this->mockedUnitOfMeasurementService->get($id));
    }

    public function test_get_should_throw_resource_not_found_exception_when_id_does_not_exists()
    {
        $this->model->shouldReceive('with')->andReturnSelf();
        $this->model->shouldReceive('find')->andReturn(null);

        $this->assertThrows(function () {
            $id = 1;
            $this->mockedUnitOfMeasurementService->get($id);
        }, ResourceNotFoundException::class);
    }
}
