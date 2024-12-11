<?php

use App\Exceptions\ResourceNotFoundException;
use App\Services\UnitOfMeasurementService\UnitOfMeasurementService;
use Tests\TestCase;

class UnitOfMeasurementServiceTest extends TestCase
{
    private $mockedUnitOfMeasurementService;

    private $model;

    public function setUp(): void
    {
        parent::setUp();
        $this->mockedUnitOfMeasurementService = new UnitOfMeasurementService;
        $this->model = Mockery::mock('overload:App\Models\UnitOfMeasurement');
    }

    public function test_should_retrieve_filtered_unit_of_measurement_list()
    {
        $mockQueryBuilder = Mockery::mock('overload:'.QueryBuilder::class);

        $mockQueryBuilder->shouldReceive('for')
            ->andReturnSelf();
        $mockQueryBuilder->shouldReceive('allowedFilters')
            ->andReturnSelf();
        $mockQueryBuilder->shouldReceive('get')
            ->once()
            ->andReturn(new Collection([
                [
                    'id' => 13,
                    'description' => 'Unit',
                    'abbreviation' => 'ud',
                    'category_id' => 4,
                    'created_at' => null,
                    'updated_at' => null,
                ],
            ]));

        $result = $this->mockedUnitOfMeasurementService->getList();
        $this->assertEquals(1, $result->count());
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
